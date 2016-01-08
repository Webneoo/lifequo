@extends('layouts.default')

@section('title', 'LifeQuo - Saifi Pearl')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<img class="img-responsive" src="../images/projects/nahar.jpg" alt="Nahar">
	</div>
	<div class="col-md-6">
		<h1>Nahar</h1>
		<p>The Iconic Al-Borj Building in downtown Beirut is the headquarters of one of the leading newspapers in the country and hosts several other establishment within its premises including restaurants, stores and a Lounge. Located in the heart of Beirut’s downtown directly across the famous Martyrs’ Square, Al-Borj Building stands as an architectural masterpiece and offers a real challenge in terms of maintenance. A challenge that only LifeQuo is fit to handle.</p>
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