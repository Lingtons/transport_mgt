<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    
    protected $fillable = [
    	'name',
    ];

    public function sources(){

    	return $this->belongsTo('App\Transit', 'source_id');
    }

    public function destinations(){

    	return $this->hasMany('App\Transit', 'destination_id');
    
    }

    public function currents(){

    	return $this->hasMany('App\Transit', 'current_location');
    
    }
}
