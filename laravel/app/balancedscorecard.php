<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class balancedscorecard extends Model
{

	protected  $fillable= [
     'id', 'bsc_name'
	];


    public function performance_1st()
    {
        return $this->belongsToMany(performance_1st::class);
    }
    public function performance_2nd()
    {
        return $this->belongsToMany(performance_2nd::class);
    }
    public function performance_3rd()
    {
        return $this->belongsToMany(performance_3rd::class);
    }
    public function bsc_1st()
    {
        return $this->belongsToMany(bsc_1st::class);
    }
    public function bsc_2nd()
    {
        return $this->belongsToMany(bsc_2nd::class);
    }
    public function bsc_3rd()
    {
        return $this->belongsToMany(bsc_3rd::class);
    }

}
