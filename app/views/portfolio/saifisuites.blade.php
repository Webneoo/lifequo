@extends('layouts.default')

@section('title', 'LifeQuo - Saifi Suites')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/saifisuites/saifisuites1.jpg" alt="Saifi Suites">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/saifisuites/saifisuites2.jpg" alt="Saifi Suites">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/saifisuites/saifisuites3.jpg" alt="Saifi Suites">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/saifisuites/saifisuites4.jpg" alt="Saifi Suites">
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
		<h1>Saifi Suites</h1>
		<p>Saifi Suites is a 4 star Boutique hotel that offers you an exceptional and trendy lifestyle. Only 10 minutes away from Beirut International Airport (around 7 km), Saifi Suites is a distinctive hotel in the heart of posh Downtown Beirut. From this prestigious location in the center of the city, Saifi Suites the ideal place to explore all that Beirut has to offer from cafes, restaurants and high-end shopping in downtown to the vibrant nightlife in Gemmayze and the capital's major commercial centers. Its location is also a convenient starting point to discover the rest of Lebanon. Saifi Suites's comfort and luxury make it superb for business and leisure regardless of whether it's a short stay or a long stay. The hotel's ambiance is one of elegance and trend-setting style. Saifi Suites is a unique experience that bridges different worlds and embodies a luxurious lifestyle, which is modern, inspiring and innovative. Here the art of living is felt in every detail, from the signature character right down to the lobby, gym, bistro, wine lounge, great facilities, trendy design and 73 spacious rooms and suites. See, feel and live the Saifi Suites experience. It's your destination in the region's most enchanting city. Saifi Suites, A stay worth remembering...</p>
	</div>
</div>

<!--     WORK WITH US     -->
<div id="work-with-us" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -370px; background-color:#fff"></span><h1>Want to work with us ?</h1><span class="line hidden-xs" style="margin:-63px auto auto 320px; background-color:#fff"></span>
		<a class="green-btn" href="{{ route('contact_path') }}">Get in touch <i class="fa fa-arrow-right"></i></a>
	</div>
</div>

@stop