
<div class="form-group{{ $errors->has('source_id') ? ' has-error' : '' }}">

	{!! Form::label('source_id', 'Source Location: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::select('source_id', $states, old('source_id'), ['class'=>'form-control']) !!}

		@if ($errors->has('source_id'))
	    	<span class="help-block">{{ $errors->first('source_id') }}</span>
	    @endif
	</div>
</div>

<div class="form-group{{ $errors->has('destination_id') ? ' has-error' : '' }}">

	{!! Form::label('destination_id', 'Destination Location: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::select('destination_id', $states, old('destination_id'), ['class'=>'form-control']) !!}

		@if ($errors->has('destination_id'))
	    	<span class="help-block">{{ $errors->first('destination_id') }}</span>
	    @endif

	</div>
</div>

<div class="form-group{{ $errors->has('current_location') ? ' has-error' : '' }}">

	{!! Form::label('current_location', 'Current Location: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::select('current_location', $states, old('current_location'), ['class'=>'form-control']) !!}

		@if ($errors->has('current_location'))
	    	<span class="help-block">{{ $errors->first('current_location') }}</span>
	    @endif

	</div>
</div>

<div class="form-group">
<div class="form-group{{ $errors->has('arrival_time') ? ' has-error' : '' }}">

	{!! Form::label('arrival_time', 'Arrival Time: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::input('time', 'arrival_time', null, ['class'=>'form-control']) !!}

		@if ($errors->has('arrival_time'))
	    	<span class="help-block">{{ $errors->first('arrival_time') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('departure_time') ? ' has-error' : '' }}">

	{!! Form::label('departure_time', 'Departure Time: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::input('time', 'departure_time', null, ['class'=>'form-control']) !!}

		@if ($errors->has('departure_time'))
	    	<span class="help-block">{{ $errors->first('departure_time') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('travel') ? ' has-error' : '' }}">

	{!! Form::label('travel', 'Travel Date: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::date('travel_date', old('travel_date'), ['class'=>'form-control']) !!}
			
			set to this date : {{ \Carbon\Carbon::parse($transit->travel_date)->format('d/m/Y')}} or a new date before updating

		@if ($errors->has('travel_date'))
	    	<span class="help-block">{{ $errors->first('travel_date') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">

	{!! Form::label('amount', 'Amount: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::number('amount', old('amount'), ['class'=>'form-control']) !!}

		@if ($errors->has('amount'))
	    	<span class="help-block">{{ $errors->first('amount') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('number_of_seats') ? ' has-error' : '' }}">

	{!! Form::label('number_of_seats', 'Number of Seats: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::number('number_of_seats', old('number_of_seats'), ['class'=>'form-control']) !!}

		@if ($errors->has('number_of_seats'))
	    	<span class="help-block">{{ $errors->first('number_of_seats') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('available_seats') ? ' has-error' : '' }}">

	{!! Form::label('available_seats', 'Available Seats: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::number('available_seats', old('available_seats'), ['class'=>'form-control']) !!}

		@if ($errors->has('available_seats'))
	    	<span class="help-block">{{ $errors->first('available_seats') }}</span>
	    @endif

	</div>
</div>

<fieldset class="form-group">
    <legend class="col-md-2 col-md-offset-1">Status</legend>
    <div class="form-check">
      <label class="form-check-label col-md-3 col-sm-3 col-xs-12">
        <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="transit" checked>
        Transit
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label col-md-3 col-sm-3 col-xs-12">
        <input type="radio" class="form-check-input" name="status" id="optionsRadios2" value="complete">
        Complete
      </label>
    </div>
    <div class="form-check ">
    <label class="form-check-label col-md-3 col-sm-3 col-xs-12">
        <input type="radio" class="form-check-input" name="status" id="optionsRadios3" value="accident" >
        Accident
      </label>
    </div>
 </fieldset>

<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

	{!! Form::submit($submit, ['class'=>'btn btn-success'])!!}

</div>


