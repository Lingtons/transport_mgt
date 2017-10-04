@extends('layouts.app')

@section('content')
<div class="container">
    
    <h2 class="text-info text-center">Thank you {{Auth::user()->name}} for traveling with Us</h2>
    <h3 class="text-info text-center">Please Print this ticket and come along with it on your departure day</h3>
    <div class="row">
    	<div class="col-xs-12"></div>
         <table class="table table-striped table-bordered">
			<thead>
				<tr>
				  <td>Booking Code</td>
				  <td>Transit Code</td>
				  <td>Passenger Name</td>
				  <td>Number Of Seats</td>
				  <td>Status</td>
				  <td>Departure Date</td> 
				  <td>Departure Time</td>
				  <td>Arrival Time</td>
				  <td>Payment Amount</td>     
				</tr>
			</thead>
			<tfoot>
				<tr>
				  <td>Booking Code</td>
				  <td>Transit Code</td>
				  <td>Passenger Name</td>
				  <td>Number Of Seats</td>
				  <td>Status</td>
				  <td>Departure Date</td> 
				  <td>Departure Time</td>
				  <td>Arrival Time</td>
				  <td>Payment Amount</td>     
				</tr>
			</tfoot>
			<tbody>
			  @if (count($booking))
			  <tr>
			      <td>{{$booking->unique_code}}</td>
				  <td>{{$booking->transit->transit_code}}</td>
				  <td>{{Auth::user()->name}}</td>
				  <td>{{$booking->number_of_seats}}</td>
				  <td>{{$booking->status}}</td>
				  <td>{{$booking->transit->travel_date}}</td> 
				  <td>{{$booking->transit->departure_time}}</td>
				  <td>{{$booking->transit->arrival_time}}</td>
				  <td>NGN {{$booking->total_amount}}</td>
			  </tr>
			  @endif
			</tbody>
        </table>
    </div>
    </div>
</div>
@stop
