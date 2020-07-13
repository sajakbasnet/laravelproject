<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //
	protected $guarded = [
			
	];
	public function cars(){
		return $this->hasMany(Cars::class);
	}

}
