<?php

namespace App;

class Type extends Model
{
	public function entry(){
		return $this->hasMany(Entry::class);
	}
	
	public function getRouteKeyName(){
		return 'name';
	}
}
