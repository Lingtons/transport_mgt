@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="carousel slide" id="myCarousel" data-interval="5000" data-ride="carousel">
				
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
				<li data-slide-to="1" data-target="#myCarousel"></li>
				<li data-slide-to="2" data-target="#myCarousel"></li>
			</ol>
		
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active" id="slide1">
					<img src="{{asset('img/1.jpg')}}" alt="Chicago">
					<div class="carousel-caption">
						<h4>Travel With Us</h4>
						<p>We provide you comfort</p>
					</div><!-- end carousel-caption-->
				</div><!-- end item -->
				
				<div class="item" id="slide2">
					<img src="{{asset('img/2.jpg')}} " alt="Chicago">
					<div class="carousel-caption">
						<h4>Travel With Us</h4>
						<p>We provide you comfort</p>
					</div><!-- end carousel-caption-->
				</div><!-- end item -->
				
				<div class="item" id="slide3">
					<img src="{{asset('img/3.jpg')}}" alt="Chicago">
					<div class="carousel-caption">
						<h4>Travel With Us</h4>
						<p>We provide you comfort</p>
					</div><!-- end carousel-caption-->
				</div><!-- end item -->
			</div><!-- carousel-inner -->
			
			<!-- Controls -->
			<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
			<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
		
		</div><!-- end myCarousel -->

		<div class="row m-t-40">
			<div class="col-xs-8">
				<div class="well">
					{!! Form::open(['route'=>'search_transit', 'class'=>'form-inline form-label-left']) !!}

						@include('_includes.forms.search_transit', ['submit'=>'Search Transit'])

					{!! Form::close() !!}
				</div>
			</div>
			<div class="col-xs-4" id="track">
				<div class="well">
					{!! Form::open(['route'=>'track_transit', 'class'=>'form-inline form-label-left']) !!}

						@include('_includes.forms.track_transit', ['submit'=>'Track Transit'])

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection
