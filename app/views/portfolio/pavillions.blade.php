@extends('layouts.default')

@section('title', 'LifeQuo - The Pavillions')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<img class="img-responsive" src="../images/projects/the-pavillions.jpg" alt="The Pavillions">
	</div>
	<div class="col-md-6">
		<h1>The Pavillions</h1>
		<p>Close to the Grand Serail, the Mouawad Museum and the Serail Hill, The Pavilions, a luxurious and traditional residential building in a 1950's design, in a preserved neighborhood privileged with a brand new infrastructure. Its planning is entirely dedicated to its residents. All equipped with pleasant spacious privative gardens and terraces, they offer the originality of beautiful volumes lit well by beautiful by openings, The Pavilions benefit from a specific entry, with calm streets on the charming rue de France.</p>
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