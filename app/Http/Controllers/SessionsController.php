<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
	
	public function __construct(){
		$this->middleware('guest', ['except' => 'destroy']);
	}
	
	public function create(){
		return redirect('/');
	}
	
	public function store(){
		
		if(! auth()->attempt(request(['username', 'password']))){

			return back()->withErrors([
				'message' => 'Please check your credentials and try again.'
				]);
		} 
		
			return redirect('/profile');
	}
	
	public function destroy(){
		auth()->logout();
		
		return redirect()->home();
	}
}
