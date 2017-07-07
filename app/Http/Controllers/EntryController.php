<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Genre;

class EntryController extends Controller
{
    
	public function index(){
		$entries = Entry::all();	
	
		return view('entry/welcome', compact('entries'));
	}
	
	public function show(Entry $entry){
		return view('entry/show', compact('entry'));
	}
	
	public function showType($id){
		$entries = Entry::where('entry_type_id_id', $id)->get();
	
		return view('movies/show', compact('entries'));
	}

	public function store(){
		
		$this->validate(request(), [
			'title' => 'required',
			'synopsis' => 'required',
			'release_year' => 'required',
			'rating' => 'required',
			'genre' => 'required',
			'actors' => 'required',
			 
		]);
		
		
		Entry::create([
			'title' => request('title'),
			'synopsis' => request('synopsis'),
			'release_year' => request('release_year'),
			'rating' => request('rating'),
			'image_url' => request('pic'),
			'genre_id' => request('genre'),
			'user_id' => 1,
			'entry_type_id_id' => request('type')
		]);
		
		
				
		return redirect('/profile');
		
		
	}
}
