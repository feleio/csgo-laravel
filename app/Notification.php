<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

	public function weapon()
	{
		return $this->belongsTo('App\Weapon');
	}

}
