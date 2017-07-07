<?php

namespace App;

class Genre extends Model
{
    public function entry(){
    	return $this->hasMany(Entry::class);
    }
} 
