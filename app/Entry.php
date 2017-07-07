<?php

namespace App;

class Entry extends Model
{
	public function genre(){
		return $this->belongsTo(Genre::class);
	}
}
