<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

	public function weapons()
	{
		return $this->hasMany('App\Weapon');
	}

}
