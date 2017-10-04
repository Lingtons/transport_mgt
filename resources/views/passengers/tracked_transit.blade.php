@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row table-responsive">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th>From</th>
                    <th>To</th>
                    <th>Current Location</th>
                    <th>Travel Date</th>
                    <th>Travel Time</th>
                    <th>Arrival Time</th>
                    <th>Transit Code</th>
                </tr>
            </thead>

            <tfoot>
              <tr>
                    <th>From</th>
                    <th>To</th>
                    <th>Current Location</th>
                    <th>Travel Date</th>
                    <th>Travel Time</th>
                    <th>Arrival Time</th>
                    <th>Transit Code</th>
                </tr>
            </tfoot>
            <tbody>
                @if (count($transits))
                @foreach($transits as $transit)
                <tr>
                    <td>{{$transit->sourceLocation->name}}</td>
                    <td>{{$transit->destinationLocation->name}}</td>
                    <td>{{$transit->currentLocation->name}}</td>
                    <td>{{$transit->travel_date}}</td>
                    <td>{{$transit->departure_time}}</td>
                    <td>{{$transit->arrival_time}}</td>
                    <td>{{$transit->transit_code}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>  
	        @else
	        	<h1>No transit Available</h1>   
	        @endif      
    </div>
</div>
@stop

