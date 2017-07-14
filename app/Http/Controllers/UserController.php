<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class UserController extends Controller
{
	
	public function __construct(){
	
		$this->middleware('auth');
	
	}
	
    public function index(){
    	
    	$entries = Entry::where('user_id', auth()->id())->get();
    	
    	return view('user/home', compact('entries'));
	}


}
