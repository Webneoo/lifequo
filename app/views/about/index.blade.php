@extends('layouts.default')

@section('title', 'LifeQuo - About Us')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<!--     ABOUT     -->
<div id="about" class="dark-bg">
	<div class="container">
		<div class="col-md-7">
			<h1>LIFE Q<sup style="top:-5px">UO</sup> <br> <strong>the agency</strong></h1>
			<p>LifeQuo is a full-source property design, management, and maintenance company based in Beirut, Lebanon. Established in 2014, LifeQuo aims to shape the industry and set forth a new quality of life. LifeQuo consolidates and meets all residential and commercial property needs, offering a wide array of services through its professional and specialized team of experts in various corresponding fields.</p>
			<br><br>
		</div>
		<div class="col-md-5 statement">
            <h4 class="panel-title"><i class="fa fa-wrench"></i> Mission Statement</h4>
            <div class="panel-body">
            	<p>LifeQuo reduces chaos and offers a secure, dependable, and specialized source for all property and hospitality management and maintenance services.</p>
            </div>

            <h4 class="panel-title"><i class="fa fa-magic"></i> Vision Statement</h4>
            <div class="panel-body">
            	<p>To offer the highest level of excellent property management and set a new bar for the quality of life.</p>
            </div>
		</div>
	</div>
</div>

<img class="img-responsive image-about" src="../images/about-us.jpg" alt="About us Image" style="width:100%">

<div id="letter" class="container">
	<h1>Letter from our <strong>CEO </strong></h1>
	<div class="col-md-6">
		<p>“All fields of the real estate industry have been heavily integrated in my family and have instilled in me a passion and dedication that has been passed down from generation to generation. Now, it is my turn to continue in the steps of the generations that came before me and establish an entity that will enhance real estate services and take them to a new level.</p>
		<br>
		<p>With the importance of the hospitality sector in the country and the current booming of residential complexes needing high-quality management and maintenance, we bring to you ‘LifeQuo’. With 'LifeQuo' I aim to provide residential and commercial property owners ‘peace of mind’ by combining multiple technical and managerial specializations under one umbrella to effectively meet all needs. </p>
	</div>
	<div class="col-md-6">
		<img class="img-responsive" src="../images/ceo.jpg" alt="CEO Picture"><br>
	</div>
	<div class="col-md-12">
		<p>Here at LifeQuo, we do not intend on simply offering services. Rather, we promise to offer you the lifestyle everyone dreams of. Our objective is to provide such superior property management and maintenance, as well as management of third-party hospitality services that we exceed customer expectations and set forth new standards of luxurious living. It is not about getting the job done but going one step beyond and leaving a lasting memory. </p>
		<p>One of our major focuses is to provide clients with very classy, modern, yet elegant interior designs and concepts customized to individual needs. We want our designs to reflect the personality and image of our customer, thus we pay special attention and care to study customer style and profile.</p>
		<p>We want property owners, whether individuals or businesses, as well as tenants and guests to sleep comfortably at night without unnecessary tension and worries. We want to help provide a living experience that escapes the chaos of daily life. Thus, we will handle everything pertaining to property management and maintenance, quality and cost control, and hospitality management. </p>
		<p>I am so excited to move forward into a new era with a higher ‘quality of life’ that we, our highly specialized and expert team and myself, aim to bring you.” </p>
		<em>Paul Mouawad, LifeQuo CEO</em><br>
		<em>2 November 2014</em>
	</div>
</div>

<div id="clients" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:94px auto auto -320px; background-color:#fff"></span><h1>Our <strong>Clients </strong></h1><span class="line hidden-xs" style="margin:-60px auto auto 165px; background-color:#fff"></span>
		<div class="row clients">
			<a href="{{ route('pavillions_path') }}" class="col-md-4 col-sm-4 col-xs-6">
				<img class="img-responsive" src="../images/clients/pavilions.png" alt="The Pavilions Logo">
			</a>
			<a href="{{ route('palladium_path') }}" class="col-md-4 col-sm-4 col-xs-6">
				<img class="img-responsive" src="../images/clients/palladium.png" alt="The Palladium Logo">
			</a>
			<a href="{{ route('capitalgardens_path') }}" class="col-md-4 col-sm-4 col-xs-6">
				<img class="img-responsive" src="../images/clients/capital-gardens.png" alt="The Capital Gardens Logo">
			</a>
			<a href="{{ route('atrium_path') }}" class="col-md-4 col-sm-4 col-xs-6">
				<img class="img-responsive" src="../images/clients/atrium.jpg" alt="The Atrium Logo">
			</a>
			<a href="{{ route('saifipearl_path') }}" class="col-md-4 col-sm-4 col-xs-6">
				<img class="img-responsive" src="../images/clients/saifipearl.png" alt="Saifi Pearl Logo">
			</a>
			<a href="{{ route('oakridge_path') }}" class="col-md-4 col-sm-4 col-xs-6">
				<img class="img-responsive" src="../images/clients/oakridge.png" alt="Oakridge Logo">
			</a>
		</div>
	</div>
</div>

@stop