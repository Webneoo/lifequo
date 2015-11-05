@extends('layouts.default')

@section('title', 'LifeQuo - Monot')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/monot/monot1.jpg" alt="Monot 38">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/monot/monot2.jpg" alt="Monot 38">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/monot/monot3.jpg" alt="Monot 38">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/monot/monot4.jpg" alt="Monot 38">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/monot/monot5.jpg" alt="Monot 38">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/monot/monot6.jpg" alt="Monot 38">
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
		<h1>Monot 38</h1>
		<p>Monot 38's tower is based on a grid that runs from the basement floors to the very top. This grid paves the path for superior parking in the five basement levels and draws the guidelines for interior partitions. And so, flexibility is at the heart of the interior spaces, as are excellent finishing and high-quality materials. The interiors strike a fascinating union of materials inspired from world travels and custom-designed features, giving an overall impression of exotic worldliness with a chic modern twist. The tower is home to a wide selection of apartments that are ideal and yet can be combined, thus transforming their areas according to your needs. One, two and three bedroom apartments are available in 100m², 150m², 180m², 215m² and 300m². Every apartment is the result of meticulous layout design, maximizing the use of space while blending indoor areas with large terraces that feel like natural extensions. Here you can choose your lifestyle and shape it as you see fit.</p>
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