<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transit;
use App\State;

class TransitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transits = Transit::orderBy('id', 'desc')->paginate(10);
        return view('manage.transits.list', ['transits' => $transits]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //
         $states  = State::pluck('name', 'id');
         return view('manage.transits.create', compact('states'));
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
         $this->validate($request, [

             'arrival_time' => 'required',
             'departure_time' => 'required',
             'travel_date' => 'required|date',
             'amount' => 'required|numeric',
             'number_of_seats' => 'required|numeric',
             'available_seats' => 'required|numeric',
             'source_id' => 'required|numeric',
             'destination_id' => 'required|numeric',
             'current_location' => 'required|numeric',
             'status' => 'required',
         ]);

          $length = 10;
          $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
          $str = '';
          $max = mb_strlen($keyspace, '8bit') - 1;
          for ($i = 0; $i < $length; ++$i) {
              $str .= $keyspace[random_int(0, $max)];
          }
          $transit_code = $str;

          $transit = Transit::create([
             'arrival_time' => $request->input('arrival_time'),
             'departure_time' => $request->input('departure_time'),
             'travel_date' => $request->input('travel_date'),
             'amount' => $request->input('amount'),
             'number_of_seats' => $request->input('number_of_seats'),
             'available_seats' => $request->input('available_seats'),
             'source_id' => $request->input('source_id'),
             'destination_id' => $request->input('destination_id'),
             'current_location' => $request->input('current_location'),
             'status' => $request->input('status'),
            'transit_code'=>$transit_code,
         ]);

         return redirect()->route('transits.index')->with('success', "The Transit has successfully been created.");
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
         $transit = Transit::findOrFail($id);
         $states  = State::pluck('name', 'id');
         return view('manage.transits.edit', compact('states', 'transit'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         //
        $this->validate($request, [

             'arrival_time' => 'required',
             'departure_time' => 'required',
             'travel_date' => 'required|date',
             'amount' => 'required|numeric',
             'number_of_seats' => 'required|numeric',
             'available_seats' => 'required|numeric',
             'source_id' => 'required|numeric',
             'destination_id' => 'required|numeric',
             'travel_location' => 'required|numeric',
             'status' => 'required',
         ]);

        $transit = Transit::findOrFail($id);
        $transit->update($request->all());
        return redirect()->route('transits.index')->with('success', "The Transit has successfully been updated.");;
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
