<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	public $timestamps = false;
	protected $table = 'service';

	public function Cartridge()
	{
		return $this->belongsTo('App\Cartridge');
	}
}
