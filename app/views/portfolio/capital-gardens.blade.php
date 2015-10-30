@extends('layouts.default')

@section('title', 'LifeQuo - Capital Gardens')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<img class="img-responsive" src="../images/projects/capital-gardens.jpg" alt="Capital Garden" >
	</div>
	<div class="col-md-6">
		<h1>Capital Garden</h1>
		<p>The Capital Gardens, in the trendy Mina El Hosn area, is a luxurious residential project in one of the finest areas of Beirut central District. It is surrounded by the most renowned touristic attractions of Beirut’s golden age, surrounded by the most distinguished Hotels in town like the Phoenicia, the St. Georges, the Grand Hyatt, the Four Seasons and the Hilton. The seven story deluxe building also belongs to the Mina el Hosn New residential pole. The Capital Gardens building embraces two blocks A & B with 5 typical floors, 23 apartments that can be merged, with a surface area ranging between 175 m² and 300 m².</p>
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