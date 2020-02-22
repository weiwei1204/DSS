<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class upperlimit extends Model
{
    protected  $fillable= [
     'manufacture', 'marketing','development','finance'
	];
}
