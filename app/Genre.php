<?php

namespace App;

class Genre extends Model
{
    public function entry(){
    	return $this->belongsToMany(Entry::class, 'entry_genre');
    }
    
    public function getRouteKeyName(){
    	return 'name';
    }
} 
