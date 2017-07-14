<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
	public function show(Genre $genre){
		$entries = $genre->entry()->paginate(8);
		$genre_name = $genre->name;
	
		return view('genre/show', compact('entries', 'genre_name'));
	}
}
