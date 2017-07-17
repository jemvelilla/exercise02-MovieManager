<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Actor;
use App\Genre;
use App\User;
use App\Type;

class SearchController extends Controller
{
	public function __construct(){
	
		$this->middleware('auth')->except(['index', 'actor', 'find']);
	
	}
	
	public function index(){
		if(request('searchBy') != null && request('search_param') != null):
			$category = request('searchBy');
	    	$parameter = request('search_param');
			
	    	session(['column' => $category]);
	    	session(['value' => $parameter]); 
	    endif;
		
    	$column = session('column');
    	$value = session('value');
    	 
    	if($column == 'title'){
    		
    		$entries = Entry::where($column, 'like', $value.'%')->paginate(8);
    
    	} elseif ( $column == 'release_year' || $column == 'rating'){
    		
    		$entries = Entry::where($column, $value)->paginate(8);
    		
    	} else if($column == 'actor'){
    		
    		$actors = Actor::where('name', 'like', '%'.$value.'%')->get();
    		
    		if($actors->isEmpty()):
    			$entries = $actors;
    			return view('search/show', compact('entries', 'value'));
    		endif;
    		
    		foreach ($actors as $actor):
    			return redirect('/search/' . $actor->name);	 
    		endforeach;
    	
    	}  else if($column == 'user'){
    		
    		$users = User::where('username', $value)->get();
  
    		foreach ($users as $user):
    			$entries = Entry::where('user_id', $user->id)->paginate(8);
    		endforeach;
    		
    		if($users->isEmpty()):
    			$entries = $users;
    		endif;
    	} else if($column == 'all'){
    		return redirect('/search/all');
    	}
    	
     	return view('search/show', compact('entries', 'value'));
	}
	
	public function actor(Actor $actor){
		$entries = $actor->entry()->paginate(8);
		$value = session('value');
		return view('search/show', compact('entries', 'value'));
	}
	
	public function find(){
		if(request('search_param') != null):
			$parameter = request('search_param');
			session(['value' => $parameter]);
		endif;
	
		$value = session('value');
	
		$entries = Entry::where('title', 'like', '%'.$value.'%')
					->orWhere('synopsis', 'like', '%'.$value.'%')
					->orWhere('rating', 'like', '%'.$value.'%')
					->orWhere('release_year', 'like', '%'.$value.'%')
					->paginate(8);
	
		if($entries->isEmpty()):
			
			$actors = Actor::where('name', 'like', '%'.$value.'%')->get();
			
			if($actors->isEmpty()):
	
				$users = User::where('username', $value)
						->orWhere('firstname', $value)
						->orWhere('lastname', $value)
						->get();
			
				foreach ($users as $user):
					$entries = Entry::where('user_id', $user->id)->paginate(8);
				endforeach;
			
				if($users->isEmpty()):
	
					$types = Type::where('name', 'like', '%'.$value.'%')->get();
	
					foreach ($types as $type):
						$entries =  $type->entry()->paginate(8);
					endforeach;
			
					if($types->isEmpty()):
						$entries = $types;
					endif;
	
				endif;
			
			endif;
			
			foreach ($actors as $actor):
			return redirect('/search/' . $actor->name);
			endforeach;
	
		endif;
	
		return view('search/show', compact('entries', 'value'));
	}
	
	
	public function login(){
		
	}
}
