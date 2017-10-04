

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >

	{!! Form::label('name', 'Name: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::text('name', old('name'), ['class'=>'form-control col-md-7 col-xs-12"']) !!}

		@if ($errors->has('name'))
	   		<span class="help-block"> {{ $errors->first('name') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">

	{!! Form::label('quantity', 'Quantity: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::number('quantity', old('quantity'), ['class'=>'form-control col-md-7 col-xs-12"']) !!}

		@if ($errors->has('quantity'))
	   		<span class="help-block"> {{ $errors->first('quantity') }}</span>
	    @endif

	</div>

</div>

<div class="form-group">

	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

		{!! Form::submit($submit, ['class'=>'btn btn-success'])!!}

    </div>

</div>
