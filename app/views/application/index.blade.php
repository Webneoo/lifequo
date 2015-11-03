@extends('layouts.default')

@section('title', 'LifeQuo - Mobile Application')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="mobile-app" class="container">
	<div class="row">
		<div class="col-md-4 col-xs-12 features">
			<div class="row">
				<i class="fa fa-user fa-4x"></i>
				<div>
					<strong>Quick contact</strong>
					<p>Get in touch with us at the click of a button</p>
				</div>
			</div>
			<div class="row">
				<i class="fa fa-users fa-4x"></i>
				<div>
					<strong>Join the community</strong>
					<p>Join our in-app community and share your experience with your neighbours</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 hidden-xs ">
			<img class="img-responsive" src="../images/phone.png" alt="Phone Application">
		</div>
		<div class="col-md-4 col-xs-12 features">
			<div class="row">
				<i class="fa fa-lightbulb-o fa-4x"></i>
				<div>
					<strong>Browse services</strong>
					<p>Browse our extensive range of services</p>
				</div>
			</div>
			<div class="row">
				<i class="fa fa-rocket fa-4x"></i>
				<div>
					<strong>Quick location</strong>
					<p>Find us quickly and easily with our handy map</p>
				</div>
			</div>
		</div>
		<div class="hidden-lg hidden-md hidden-sm">
			<img class="img-responsive" src="../images/phone.png" alt="Phone Application">
		</div>
	</div>
	<div class="row">
		<p>LifeQuo has conceived a state of the art application that combines utility and convenience. We took our commitment to the next level and put ourselves in direct and continuous contact with our clients for faster, better and more responsive services anytime. Our application will allow you to request information, request a service or interventions with a couple of clicks on your screen.</p>
		<p>Our app is user friendly and adaptable to all lpatforms and devices. You can find it on both Apple Store and Google Play. We invite you to download it and explore the features and possibilities available. </p>
	</div>
</div>

@stop