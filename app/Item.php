<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
    	'name',
    	'quantity'
    ];

    public function iventories(){

    	return $this->hasMany('App\Inventory');
    	
    }
}
