<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class capability extends Model
{
	// protected $table = 'capabilities';

	// protected $primarykey = 'id';

    protected  $fillable= [
     'manufacture', 'marketing','development','finance'
	];
}
