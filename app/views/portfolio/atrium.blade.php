@extends('layouts.default')

@section('title', 'LifeQuo - Atrium')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/atrium/atrium1.jpg" alt="Atrium">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/atrium/atrium2.jpg" alt="Atrium">
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
		<h1>Atrium</h1>
		<p>A first-rate business facility. The Atrium situated among the very first developed properties, of the renovated Beirut Central District, was designed by international architects specifically to be a superior quality downtown business and shopping center. Occupying 1,566 square meters of land and located on the most strategic intersection where Maarad Street meets Weygand Street, the building allows for four open sides, each of which is facing a main street. The Atrium is a five – story building that offers some 3,000 square meters of retail space, more than 6,000 square meters of office space and over 100 private car parks.</p>
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