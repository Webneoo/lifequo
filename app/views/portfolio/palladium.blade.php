@extends('layouts.default')

@section('title', 'LifeQuo - The Palladium')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/palladium/palladium1.jpg" alt="The Palladium">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/palladium/palladium2.jpg" alt="The Palladium">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/palladium/palladium3.jpg" alt="The Palladium">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/palladium/palladium4.jpg" alt="The Palladium">
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
		<h1>The Palladium</h1>
		<p>The retail space is laid out on the first two levels, with 4 levels of office space on the main roads and, on one level, with 6 levels of residential floors on the secondary roads. Each residential floor is composed of 3 apartments, 2 apartments of 230 m² and 250 m² surface each and one apartment of 180m². Office floors range between 600 m² and 1,300 m² of open space. The retail space is totaling +/- 5,500 m². The overall area of the project is +/- 16,000 m² and the four basements with 14,400 m² are large enough to cover all the needs of the project in terms of parking and technical areas.</p>
	</div>
</div>

<!--     WORK WITH US     -->
<div id="work-with-us" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -370px; background-color:#fff"></span><h1>Want to work with us ?</h1><span class="line hidden-xs" style="margin:-63px auto auto 220px; background-color:#fff"></span>
		<a class="green-btn" href="{{ route('contact_path') }}">Get in touch <i class="fa fa-arrow-right"></i></a>
	</div>
</div>

@stop