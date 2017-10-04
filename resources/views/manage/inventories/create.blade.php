@extends('layouts.manage')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Create new Inventory</div>
		                <div class="panel-body">

											<hr>

										{!! Form::open(['route'=>'inventories.store', 'class'=>'form-horizontal form-label-left']) !!}

											@include('manage.inventories.partials.forms', ['submit'=>'Create Inventory'])

										{!! Form::close() !!}
									</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop
