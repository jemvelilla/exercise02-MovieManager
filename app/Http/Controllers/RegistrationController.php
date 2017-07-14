<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
	
	public function store(){
	
		$this->validate(request(), [
			'firstname' => 'required',
			'lastname' => 'required',
			'username' => 'required|unique:users',
			'password' => 'required|confirmed'
		]);	

		$user =  User::create([
				'username' => request('username'),
				'firstname' => request('firstname'),
				'lastname' => request('lastname'),
				'password' => bcrypt(request('password')),
				]);
		
		auth()->login($user);
		
		return redirect('/profile');
	}
	
	
}