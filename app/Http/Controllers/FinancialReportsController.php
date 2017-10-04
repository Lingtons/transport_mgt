<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class FinancialReportsController extends Controller
{
    //
    public function index(){

    	return view('manage.financial.index');
    }

    public function search(Request $request){

    	$this->validate($request, [
    			'from' => 'required',
    			'to'   => 'required',
    		]);
    	$from = $request->input('from');
    	$to = $request->input('to');

    	$reports = Booking::where('status', 'paid')
    			->whereBetween('travel_date', [$from,$to])
    			->paginate(10);
    	$total = Booking::where('status', 'paid')
    			->whereBetween('travel_date', [$from,$to])
    			->sum('total_amount');
    	return view('manage.financial.search', compact('reports','total'));
    }
}
