@extends('layouts.manage')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit Booking</div>
		                <div class="panel-body">

							{!! Form::model($booking, ['method'=> 'PATCH', 'class'=>'form-horizontal form-label-left','route' => ['bookings.update', $booking->id]]) !!}

								<fieldset class="form-group">
								    <legend class="col-md-2 col-md-offset-1">Status</legend>
								    <div class="form-check">
								      <label class="form-check-label col-md-3 col-sm-3 col-xs-12">
								        <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="paid" checked>
								        Paid
								      </label>
								    </div>
								    <div class="form-check">
								    <label class="form-check-label col-md-3 col-sm-3 col-xs-12">
								        <input type="radio" class="form-check-input" name="status" id="optionsRadios2" value="unpaid">
								        Not Paid
								      </label>
								    </div>
								 </fieldset>

								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

									{!! Form::submit("Edit", ['class'=>'btn btn-success'])!!}

								</div>

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop



