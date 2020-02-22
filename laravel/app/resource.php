<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resource extends Model
{

	 protected  $fillable= [
     'id', 'resource_name'
	];



    public function strategy()
    {
        return $this->belongsToMany(strategy::class);
    }
}
