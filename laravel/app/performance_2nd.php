<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class performance_2nd extends Model
{
    protected  $fillable= [
     'bsc_id', 'manufacture1','manufacture2','manufacture3','manufacture4', 
     'marketing1','marketing2','marketing3','marketing4',
     'development1','development2','development3','development4',
     'finance1','finance2','finance3','finance4'
	];

	public function balancedscorecard(){
        return $this->belongsTo(balancedscorecard::class);
    }
}
