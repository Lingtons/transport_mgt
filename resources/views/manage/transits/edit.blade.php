@extends('layouts.manage')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit Transit</div>
		                <div class="panel-body">

							{!! Form::model($transit, ['method'=> 'PATCH', 'class'=>'form-horizontal form-label-left','route' => ['transits.update', $transit->id]]) !!}

								@include('manage.transits.partials.forms', ['submit'=>'Update'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop
