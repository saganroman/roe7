<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	public $timestamps = false;
	protected $table = 'state';

	public function Cartridge()
	{
		//return $this->belongsTo('App\Cartridge');
		return $this->hasMany('App\Cartridge');
	}
}
