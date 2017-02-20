@extends('layouts.default')

@section('title', 'LifeQuo - Harbor 1504')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/harbor/harbor1.jpg" alt="Saifi Suites">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/harbor/harbor2.jpg" alt="Saifi Suites">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/harbor/harbor3.jpg" alt="Saifi Suites">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/harbor/harbor4.jpg" alt="Saifi Suites">
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
		<h1>Harbor 1504</h1>
		<p>HARBOR 1504 is a luxurious commercial and residential building located in Beirut, al Marfaa.  This modern administrative building was designed by an international contracting company and has become one among the finest addresses in downtown Beirut. The building consists of 5 underground basements, a ground floor, and 5 over ground floors and a Penthouse.  Harbor 1504 covers an area of 10000m2 consisting of office spaces, Restaurants and shops.</p>
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