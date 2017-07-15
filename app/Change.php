<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
	public $timestamps = false;
	protected $table = 'cart_change';

	public function Branch()
	{
		return $this->belongsTo('App\Branch');
	}
}
