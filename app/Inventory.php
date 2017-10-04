<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $fillable = [
    	'status',
    	'quantity',
    	'description',
    	'item_id',
    ];

    public function item(){

    	return $this->belongsTo('App\Item', 'item_id');
    }
}
