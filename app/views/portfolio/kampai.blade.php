@extends('layouts.default')

@section('title', 'LifeQuo - Kampai')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<div id="projectcarousel" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="img-responsive" src="../images/projects/kampai/kampai1.jpg" alt="Kampai">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/kampai/kampai2.jpg" alt="Kampai">
				</div>
				<div class="item">
					<img class="img-responsive" src="../images/projects/kampai/kampai3.jpg" alt="Kampai">
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
		<h1>Kampai Catering</h1>
		<p>Kampaï is an experience that says cheers to refined cuisine and urban chic décor. It toasts the wonderful flavors of Japan and Asia while giving each dish contemporary seasoning and unique identity. Capturing the essence of traditional Japanese food, Kampaï celebrates fish and seafood and the art of presentation. And yet Kampaï goes beyond the traditional to create something new. Kampaï is a feast for the senses. It invites your eyes, awakens your appetite and tempts you to come back for more.It's a celebration of wholesome pleasure.</p>
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