@extends('layouts.default')

@section('title', 'LifeQuo - Portfolio')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="portfolio" class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/oakridge.jpg" alt="Oakridge Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('oakridge_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Oakridge</h1>
	        	<span class="line"></span>
	        	<p>The Residences consist of one level of garden simplexes and two levels of terrace residences. The areas of these attractive residences ensure residents have ample space to relax and entertain.</p>
	        </div>
		</div>
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/the-palladium.jpg" alt="The Palladium Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('palladium_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>The Palladium</h1>
	        	<span class="line"></span>
	        	<p>The retail space is laid out on the first two levels, with 4 levels of office space on the main roads and, on one level, with 6 levels of residential floors on the secondary roads.</p>
	        </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/saifi-pearl.jpg" alt="Saifi Pearl Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('saifipearl_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Saifi Pearl</h1>
	        	<span class="line"></span>
	        	<p>Saifi Pearl offers the functionality of a modern architecture, the approval of materials and quality in services are guaranteed by one of the leaders name in the construction Mouawad Investment Group.</p>
	        </div>
		</div>
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/park-tower.jpg" alt="Park Tower Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('parktower_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Park Tower</h1>
	        	<span class="line"></span>
	        	<p>"As comfortable as your home, as practical as a hotel" Only a 10 minutes drive (7 km) from the airport, ParkTower Suites is conveniently located at the heart of Ashrafieh and minutes away from the center of Beirut </p>
	        </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/the-pavillions.jpg" alt="The Pavillions Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('pavillions_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>The Pavillions</h1>
	        	<span class="line"></span>
	        	<p>Close to the Grand Serail, the Mouawad Museum and the Serail Hill, The Pavilions, a luxurious and traditional residential building in a 1950's design, in a preserved neighborhood </p>
	        </div>
		</div>
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/capital-gardens.jpg" alt="Capital Gardens Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('capitalgardens_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Capital Gardens</h1>
	        	<span class="line"></span>
	        	<p>The Capital Gardens, in the trendy Mina El Hosn area, is a luxurious residential project in one of the finest areas of Beirut central District. It is surrounded by the most renowned touristic attractions </p>
	        </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/atrium/atrium1.jpg" alt="Atrium Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('atrium_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Atrium</h1>
	        	<span class="line"></span>
	        	<p>A first-rate business facility. The Atrium situated among the very first developed properties, of the renovated Beirut Central District, was designed by international architects specifically to be a superior quality downtown business and shopping center.</p>
	        </div>
		</div>
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/monot/monot1.jpg" alt="Monot 38 Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('monot_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Monot 38</h1>
	        	<span class="line"></span>
	        	<p>Monot 38's tower is based on a grid that runs from the basement floors to the very top. This grid paves the path for superior parking in the five basement levels and draws the guidelines for interior partitions.</p>
	        </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/kampai.jpg" alt="Kampai Catering Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('kampai_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Kampai Catering</h1>
	        	<span class="line"></span>
	        	<p>Kampaï is an experience that says cheers to refined cuisine and urban chic décor. It toasts the wonderful flavors of Japan and Asia while giving each dish contemporary seasoning and unique identity.</p>
	        </div>
		</div>
		<div class="col-md-6">
			<div class="port-img">
				<img class="img-responsive" src="../images/projects/saifi-suites.jpg" alt="Saifi Suites Project">
				<div class="overlay">
		        	<a class="info" href="{{ route('saifisuites_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
	        <div class="details">
	        	<h1>Saifi Suites</h1>
	        	<span class="line"></span>
	        	<p>Saifi Suites is a 4 star Boutique hotel that offers you an exceptional and trendy lifestyle. Only 10 minutes away from Beirut International Airport (around 7 km), Saifi Suites is a distinctive hotel in the heart of posh Downtown Beirut.</p>
	        </div>
		</div>
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