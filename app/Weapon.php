<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model {

	public function group()
	{
		return $this->belongsTo('App\Group');
	}

	public function notifications()
	{
		return $this->hasMany('App\Notification');
	}

}
