@extends('layouts.default')

@section('title', 'LifeQuo - Oakridge')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge1.jpg" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge2.jpg" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge3.jpg" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge4.jpg" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge5.jpg" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge6.png" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge7.png" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge8.png" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge9.png" alt="Oakridge">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/oakridge/oakridge10.png" alt="Oakridge">
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
		<h1>Oakridge</h1>
		<p>The Residences consist of one level of garden simplexes and two levels of terrace residences. The areas of these attractive residences ensure residents have ample space to relax and entertain. The Residences are further accentuated by a stylish common swimming pool.</p>
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