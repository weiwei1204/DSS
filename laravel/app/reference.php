<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reference extends Model
{
    protected  $fillable= [
     'finance', 'customer','inprocess','learn_growth'
	];
}
