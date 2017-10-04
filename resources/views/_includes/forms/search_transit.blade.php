
	<div class="form-group{{ $errors->has('source_id') ? ' has-error' : '' }}">
			@if ($errors->has('source_id'))
		    	<span class="help-block">{{ $errors->first('source_id') }}</span>
		    @endif
			{!! Form::select('source_id', $states, old('source_id'), ['class'=>'form-control m-r-5','placeholder'=>'Enter Current Location', 'required']) !!}

	</div>


	<div class="form-group{{ $errors->has('destination_id') ? ' has-error' : '' }}">

		@if ($errors->has('destination_id'))
	    	<span class="help-block">{{ $errors->first('destination_id') }}</span>
	    @endif

		{!! Form::select('destination_id', $states, old('destination_id'), ['class'=>'form-control m-r-5','placeholder'=>'Enter Destination', 'required']) !!}

	</div>

	<div class="form-group{{ $errors->has('travel_date') ? ' has-error' : '' }}">

		@if ($errors->has('travel_date'))
	    	<span class="help-block">{{ $errors->first('travel_date') }}</span>
	    @endif
	    
		{!! Form::date('travel_date', old('travel_date'), ['class'=>'form-control m-r-5', 'placeholder'=>'Enter Travel Date', 'required']) !!}

	</div>

{!! Form::submit($submit, ['class'=>'btn btn-success'])!!}



