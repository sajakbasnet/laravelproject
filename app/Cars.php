<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    //
    protected $guarded = [
			
	];
	public function cars(){
		return $this->hasMany(Cars::class);
	}
	public function owner(){
		return $this->belongsTo(User::class);
	}
}


                                                                                   