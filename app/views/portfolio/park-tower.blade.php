@extends('layouts.default')

@section('title', 'LifeQuo - Park Tower')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/parktower/parktower1.jpg" alt="Park Tower">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/parktower/parktower2.jpg" alt="Park Tower">
				</div>
			</div>

			<!-- Controls -->
			  <a class="left carousel-control" href="#projectcarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#projectcarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
	</div>
	<div class="col-md-6">
		<h1>Park Tower</h1>
		<p>"As comfortable as your home, as practical as a hotel" Only a 10 minutes drive (7 km) from the airport, ParkTower Suites is conveniently located at the heart of Ashrafieh and minutes away from the center of Beirut, the city that never sleeps, where the most popular restaurants, shops, nightlife and entertainment venues are. Recently renovated, ParkTower Suites is the ideal four stars hotel for business executives and leisure travelers alike. Our spacious and luxurious suites are fully equipped and stylishly decorated to ensure maximum comfort in a modern and sophisticated environment. In addition to our deluxe accommodations, we also offer numerous facilities and amenities, a welcoming reception, and an excellent service. Whatever your needs, ParkTower Suites will exceed your expectations and make your stay in Lebanon one to remember!</p>
	</div>
</div>

<!--     WORK WITH US     -->
<div id="work-with-us" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -370px; background-color:#fff"></span><h1>Want to work with us ?</h1><span class="line hidden-xs" style="margin:-63px auto auto 220px; background-color:#fff"></span>
		<a class="green-btn" href="{{ route('contact_path') }}">Get in touch <i class="fa fa-arrow-right"></i></a></p>
	</div>
</div>

@stop