<?php

namespace App;

class Actor extends Model
{
    public function entry(){
    	return $this->belongsToMany(Entry::class, 'entry_actor');
    }
    
    public function getRouteKeyName(){
    	return 'name';
    }
}
