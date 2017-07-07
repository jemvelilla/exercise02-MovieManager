<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class UserController extends Controller
{
    public function index(){
    	$entries = Entry::all();
    	
    	return view('user/home', compact('entries'));
	}
	
	public function add(){
		 
		return view('entry/add');
	}	
}
