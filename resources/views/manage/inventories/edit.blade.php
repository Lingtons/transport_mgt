@extends('layouts.manage')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Edit Item</div>
		                <div class="panel-body">

							{!! Form::model($inventory, ['method'=> 'PATCH', 'class'=>'form-horizontal form-label-left','route' => ['inventories.update', $inventory->id]]) !!}

								@include('manage.inventories.partials.forms', ['submit'=>'Update'])

							{!! Form::close() !!}
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@stop
