
<div class="form-group{{ $errors->has('transit_code') ? 'has-error' : '' }}" >



	{!! Form::text('transit_code', old('transit_code'), ['class'=>'form-control m-r-10', 'placeholder'=>'enter transit code', 'required']) !!}

	@if ($errors->has('transit_code'))
   		<span class="help-block"> {{ $errors->first('transit_code') }}</span>
    @endif

</div>

{!! Form::submit("Track", ['class'=>'btn btn-success'])!!}


