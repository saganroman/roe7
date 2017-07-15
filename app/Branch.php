<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
	public $timestamps = false;
	protected $table = 'branch';

	public function Change()
	{
		return $this->hasMany('App\Change');
	}
}
