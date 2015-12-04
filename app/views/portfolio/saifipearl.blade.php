@extends('layouts.default')

@section('title', 'LifeQuo - Saifi Pearl')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="project" class="container">
	<div class="col-md-6">
		<img class="img-responsive" src="../images/projects/saifi-pearl.jpg" alt="Saifi Pearl">
	</div>
	<div class="col-md-6">
		<h1>Saifi Pearl</h1>
		<p>Saifi Pearl offers the functionality of a modern architecture, the approval of materials and quality in services are guaranteed by one of the leaders name in the construction Mouawad Investment Group. The project is being developed on 1,620 m² of land for a total build-up area of 12,000 m² to include apartments with private gardens and terraces on the ground floor with areas that vary between 170 m² and 330 m², typical apartments of various dimensions on the 10 upper floors with sizes that vary from 140 m² to 600 m², and a penthouse on the 12th floor of 1340 m².</p>
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