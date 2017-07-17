<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Genre;
use App\Actor;
use Image;

class EntryController extends Controller
{
    
	public function __construct(){
		
		$this->middleware('auth')->except(['index', 'show', 'view']);
	
	}
	
	public function index(){
		$entries_byYear = Entry::where('release_year', '2017')->paginate(4);
		$entries_byCreation = Entry::orderBy('created_at', 'desc')->paginate(4);	
	
		return view('entry/welcome', compact('entries_byYear', 'entries_byCreation'));
	}
	
	public function show(Entry $entry){
		
		$entries = Entry::orderByRaw("RAND()")->paginate(4);
		return view('entry/show', compact('entries', 'entry'));
	}
	
	public function view($entry){
		
		if($entry == 'release_year'){
			$entries = Entry::where($entry, '2017')->paginate(8);
			$value = "Latest Movies/TV Shows";
		} else if($entry == 'rating'){
			$entries = Entry::where($entry, '10')->paginate(8);
			$value = "Top Rated Movies/TV Shows";
		} else if($entry == 'created_at'){
			$entries = Entry::orderBy($entry, 'dec')->paginate(8);
			$value = "Recently Added Movies/TV Shows";
		}
		return view('entry/view', compact('entries', 'value'));
	}
	
	public function create(){
			
		return view('entry/add');
	}
	
	public function store(Request $request){
		
		$this->validate(request(), [
			'title' => 'required',
			'synopsis' => 'required',
			'release_year' => 'required',
			'rating' => 'required',
			'genre' => 'required',
			'image' => 'required',
		]);
		
		//save image
		if($request->hasFile('image')){
			$image = $request->file('image');
			$filename = $image->getClientOriginalName();
			Image::make($image)->resize(280,350)->save(public_path('/uploads/movies/' . $filename));
				
			$entry = Entry::create([
					'title' => request('title'),
					'synopsis' => request('synopsis'),
					'release_year' => request('release_year'),
					'rating' => request('rating'),
					'image_url' => $filename,
					'user_id' => auth()->id(),
					'type_id' => request('type')
					]);
		}
		
		//add entry actor	
		$actors = request('actor');
		foreach ($actors as $actor){
			
			Actor::firstOrCreate([
					'name' => $actor	
				]);
			
			$actor = Actor::where('name', $actor)->get();
			$entry->actor()->attach($actor);
		}
			
		//add to entry_genre
		$genres = request('genre');
		foreach ($genres as $genre){
			$genre = Genre::where('name', $genre)->get();
			$entry->genre()->attach($genre);
		}
		
		return redirect('/profile');
	}
	
}
