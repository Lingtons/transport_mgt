@extends('layouts.manage')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Create Transit</div>
		                <div class="panel-body">

							<hr>

						{!! Form::open(['route'=>'transits.store', 'class'=>'form-horizontal form-label-left']) !!}

							@include('manage.transits.partials.forms', ['submit'=>'Create Transit'])

						{!! Form::close() !!}
					</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop
