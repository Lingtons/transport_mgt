<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transit extends Model
{
    //
    protected $date = ['travel_date'];
    protected $fillable = [

   		'transit_code',
      'arrival_time',
      'departure_time',
      'travel_date',
      'status',
      'amount',
      'number_of_seats',
      'available_seats',
      'source_id',
      'destination_id',
      'current_location',

    ];

    public function sourceLocation(){

    	return $this->belongsTo('App\State', 'source_id');

    }

    public function destinationLocation(){

    	return $this->belongsTo('App\State', 'destination_id');

    }

    public function currentLocation(){

    	return $this->belongsTo('App\State', 'current_location');

    }

    public function bookings(){

        return $this->hasMany('App\Booking');

    }

}
