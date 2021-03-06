<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartridge extends Model
{
	public $timestamps = false;
	protected $table = 'cartridge';

	public function State()
	{
		return $this->belongsTo('App\State');
		//return $this->hasMany('App\State');
	}

	public function Service()
	{
		return $this->hasMany('App\Service');
		//return $this->belongsTo('App\State');
	}
}
