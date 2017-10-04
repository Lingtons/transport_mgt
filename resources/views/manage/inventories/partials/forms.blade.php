<div class="form-group{{ $errors->has('item') ? ' has-error' : '' }}">

	{!! Form::label('item', 'Item: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::select('item', $items, null, ['class'=>'form-control']) !!}

		@if ($errors->has('item'))
	    	<span class="help-block">{{ $errors->first('item') }}</span>
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

<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">

	{!! Form::label('status', 'status: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::select('status', ['in' => 'in', 'out' => 'out'], null, ['class'=>'form-control']) !!}

		@if ($errors->has('status'))
	    	<span class="help-block">{{ $errors->first('status') }}</span>
	    @endif

	</div>

</div>

<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}" >

	{!! Form::label('description', 'Description: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

	<div class="col-md-6 col-sm-6 col-xs-12">

		{!! Form::textArea('description', old('description'), ['class'=>'form-control col-md-7 col-xs-12"']) !!}

		@if ($errors->has('description'))
	   		<span class="help-block"> {{ $errors->first('description') }}</span>
	    @endif

	</div>

</div>

<div class="form-group">

	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

		{!! Form::submit($submit, ['class'=>'btn btn-success'])!!}

    </div>

</div>
