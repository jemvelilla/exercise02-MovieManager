<?php

namespace App;

class Entry extends Model
{
	public function genre(){
		return $this->belongsToMany(Genre::class, 'entry_genre', 'entry_id','genre_id');
	}
	
	public function user(){
		return $this->belongsTo(User::class);
	}
	
	public function actor(){
		return $this->belongsToMany(Actor::class, 'entry_actor','entry_id','actor_id');
	}
	
	public function type(){
		return $this->belongsTo(Type::class);
	}
	
	public function getRouteKeyName(){
		return 'title';
	}
}
