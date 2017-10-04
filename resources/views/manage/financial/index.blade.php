@extends('layouts.manage')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-8">
			<div class="well">
				{!! Form::open(['route'=>'financial_searchs', 'class'=>'form-inline form-label-left']) !!}
					<div class="form-group{{ $errors->has('from') ? ' has-error' : '' }}">

						{!! Form::label('from', 'From Date: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

						<div class="col-md-6 col-sm-6 col-xs-12">

							{!! Form::date('from', old('from'), ['class'=>'form-control']) !!}

							@if ($errors->has('from'))
						    	<span class="help-block">{{ $errors->first('from') }}</span>
						    @endif

						</div>

					</div>

					<div class="form-group{{ $errors->has('to') ? ' has-error' : '' }}">

						{!! Form::label('to', 'To Date: ', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

						<div class="col-md-6 col-sm-6 col-xs-12">

							{!! Form::date('to', old('to'), ['class'=>'form-control']) !!}

							@if ($errors->has('to'))
						    	<span class="help-block">{{ $errors->first('to') }}</span>
						    @endif

						</div>

					</div>


					<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

						{!! Form::submit("Search", ['class'=>'btn btn-success'])!!}

					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop



