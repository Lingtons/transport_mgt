@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-info text-center">Please Enter the number of sits you want to book:</h1>
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3 m-t-50" >
			<div class="well">
				{!! Form::open(['route'=>'booking', 'class'=>'form-inline form-label-left']) !!}
					<div class="form-group{{ $errors->has('number_of_seats') ? 'has-error' : '' }}" >
					{!! Form::label('number_of_seats', 'Number of Seats: ', ['class'=>'control-label']) !!}
						{!! Form::number('number_of_seats', old('number_of_seats'), ['class'=>'form-control m-r-10', 'placeholder'=>'enter number of seats']) !!}

						@if ($errors->has('number_of_seats'))
					   		<span class="help-block"> {{ $errors->first('number_of_seats') }}</span>
					    @endif

					</div>
					{!! Form::hidden('transit_id', $id) !!}
					{!! Form::hidden('user_id', $user_id) !!}
					{!! Form::submit("Proceed", ['class'=>'btn btn-success p-l-40 p-r-40'])!!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop