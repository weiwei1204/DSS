<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class strategy extends Model
{
    protected  $fillable= [
     'resource_id', 'innovation','m_development','p_development','backward','forkward','diversification'
	];

	public function resource(){
        return $this->belongsTo(resource::class);
    }
}
