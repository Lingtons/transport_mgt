<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $date = ['travel_date'];
    
    protected $fillable = [
    	'status',
    	'unique_code',
    	'number_of_seats',
    	'user_id',
    	'transit_id',
        'total_amount',
        'travel_date',
    ];

    public function user(){

    	return $this->belongsTo('App\User', 'user_id');
    }

    public function transit(){

    	return $this->belongsTo('App\Transit', 'transit_id');
    }
    
}
