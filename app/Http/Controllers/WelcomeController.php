<?php

namespace App\Http\Controllers;
use  App\States;
use App\Transit;
use App\Booking;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){

    	$states = States::pluck('name', 'id');
    	return view('welcome', compact('states'));
    }

    public function search(Request $request){

    	$this->validate($request, [
            'source_id' => 'required|numeric',
            'destination_id' => 'required|numeric',
            'travel_date' => 'required|date',
        ]);

        $transits = Transit::where('source_id', $request->input('source_id'))
        			->where('destination_id', $request->input('destination_id'))
        			->where('travel_date', '>=' ,$request->input('travel_date'))
        			->orderBy('travel_date')->paginate(10);

        return view('passengers.searched_transit', compact('transits'));

    }

    public function track(Request $request){
    	
    	$this->validate($request, [
            'transit_code' => 'required',
        ]);

        $transits = Transit::where('transit_code', $request->input('transit_code'))
        			->orderBy('travel_date')->paginate(10);
        return view('passengers.tracked_transit', compact('transits'));

    }

    public function about(){

    	return view('passengers.about');
    }

    public function contact(){

    	return view('passengers.contact');
    }

    public function book($id){

        if(Auth::user()){
            $user_id = Auth::id();
        }
        return view('passengers.book', compact('id','user_id'));

    }

    public function book_transit(Request $request){
        
        $this->validate($request, [
            'transit_id' => 'required',
            'user_id' => 'required',
            'number_of_seats' => 'required',
        ]);


        $unique_code = str_random(10);
        $id = $request->input('transit_id');
        $transit = Transit::findOrFail($id);
        $amount = $transit->amount;
        $travel_date = $transit->travel_date;
        $number = $request->input('number_of_seats');
        $total_amount = $amount * $number;

        if($transit->available_seats < $number){
            return redirect()->back();
        }

        $booking = Booking::create([
            'transit_id' => $request->input('transit_id'),
            'user_id' => $request->input('user_id'),
            'number_of_seats' => $request->input('number_of_seats'),
            'unique_code' => $unique_code,
            'total_amount' => $total_amount,
            'travel_date' => $travel_date,
        ]);

        $transit->decrement('available_seats', $number);

        $booking = Booking::findOrFail($booking->id);
        return view('passengers.booked', compact('booking'));

    }
}
