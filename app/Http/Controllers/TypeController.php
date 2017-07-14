<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Type;

class TypeController extends Controller
{
	public function show(Type $type){
		$entries = $type->entry()->paginate(8);
	
		return view('entry_type/show', compact('entries'));
	}
}
