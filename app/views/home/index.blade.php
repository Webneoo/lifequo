@extends('layouts.default')

@section('content')

<!--     CAROUSEL     -->
<div id="homecarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img-responsive" src="../images/home-carousel/management.jpg" alt="Management & Maintenance Services">
      <div class="carousel-caption hidden-xs">
        <h1>Management & Maintenance Services</h1>
        <em>Super quality services for entire residential properties and commercial real estate.</em>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="../images/home-carousel/quality.jpg" alt="Quality & Cost Control">
      <div class="carousel-caption hidden-xs">
        <h1>Quality & Cost Control</h1>
        <em>We handle all issues related to quality and cost control.</em>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="../images/home-carousel/hospitality.jpg" alt="Management of Hospitality Services">
      <div class="carousel-caption hidden-xs">
        <h1>Management of Hospitality Services</h1>
        <em>We aim to create a luxurious life style.</em>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#homecarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#homecarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!--     SERVICES     -->
<div id="services" class="container">
	<div class="row">
		<span class="line hidden-xs" style="margin:42px auto auto -293px;"></span><h1>What we <strong>do ?</strong></h1><span class="line hidden-xs" style="margin:-47px auto auto 130px;"></span>
		<p>At LifeQuo, a single and fundamental thread runs through all of our consultancy services—maximised performance of our clients' facilities. Whether we are finding efficiencies in a building’s systems, providing interim management of the daily facilities operations, or helping companies to accommodate more employees in less space, we are always focused on getting the best out of your property and helping you to reach your corporate objectives.</p>
	</div>
	<div class="row">
        <br>
        <div class="all-services custom-carousel touch-carousel" data-appeared-items="4">

			<div class="item">
				<a href="">
					<i class="fa fa-money fa-4x"></i>
					<h2>Quality & Cost <br> Control</h2>
					<p>Our team handles all issues related to quality and cost control for all real estate properties and construction sites.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="">
					<i class="fa fa-black-tie fa-4x"></i>
					<h2>Hospitality & <br> Management services</h2>
					<p>At LifeQuo, in addition to securing a high quality of life, we aim to create a luxurious life style.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="">
					<i class="fa fa-users fa-4x"></i>
					<h2>Common Area <br> Services</h2>
					<p>We offer superior quality services for entire residential properties and commercial real estate.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="">
					<i class="fa fa-user-secret fa-4x"></i>
					<h2>Private Area <br> Services</h2>
					<p>Ensure your residence or commercial property is maintained to the highest standard of engineering and care, which will increase the property’s life-span, and in-turn, its value.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="">
					<i class="fa fa-cogs fa-4x"></i>
					<h2>Mechanical, Electrical, <br> & Plumbing (MEP)</h2>
					<p>With the required technical expertise, legal know-how we cover all mechanical, electrical, and plumbing maintenance work.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="">
					<i class="fa fa-map fa-4x"></i>
					<h2>Landscaping</h2>
					<p>Soft or Hard landscaping, Irrigation systems and Regular maintenance</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="">
					<i class="fa fa-life-ring fa-4x"></i>
					<h2>Security, Safety, <br> & Hygienic Services</h2>
					<p>Monitor security desk consoles (employee access control and alarm computer, CCTV video monitors, DVRs)</p>
				</a>
			</div>

        </div>

    </div>
</div>


<!--     WELCOME     -->
<div id="welcome" class="dark-bg">
	<div class="container">
		<div class="col-md-7">
			<h1>Welcome to <br> <strong>our Website</strong></h1>
			<p>Here at LifeQuo (sister company of Mouawad Projects), we help offer a superior living experience, from hassle and stress-free property maintenance, well-organized services, and cost-effective quality management. With qualified experts in all fields, we make managing various projects, properties, and venues a breeze. Sit back, relax and let us do all the work.</p>
			<br>
			<p>To get to know us a little bit more, visit <a class="green-btn" href="{{ route('about_path') }}">About <i class="fa fa-arrow-right"></i></a></p>
		</div>
		<div class="col-md-5 hidden-sm hidden-xs">
			<img class="img-responsive" src="../images/building.jpg" alt="Architects pointing to a building">
		</div>
	</div>
</div>


<!--     PORTFOLIO     -->
<div id="projects" class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12 project">
			<img class="img-responsive" src="../images/projects/oakridge.jpg" alt="Oakridge Project">
			<div class="overlay">
	           <h1>Oakridge</h1>
	           <span class="line"></span>
	           <p>The Residences consist of one level of garden simplexes and two levels of terrace residences. The areas of these attractive residences ensure residents have ample space to relax and entertain.</p>
	           <a class="info" href="#"><i class="fa fa-plus fa-2x"></i></a>
	        </div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="row project">
				<img class="img-responsive" src="../images/projects/kampai2.png" alt="Kampai Catering Project">
				<div class="overlay">
		           <h1>Kampai Catering</h1>
		           <span class="line"></span>
		           <a class="info" href="#"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
			<div class="row">
				<div class="col-sm-6 project">
					<img class="img-responsive" src="../images/projects/monot.jpg" alt="Monot Project">
					<div class="overlay">
			           <h1>Monot 38</h1>
			           <span class="line"></span>
			           <a class="info" href="#"><i class="fa fa-plus fa-2x"></i></a>
			        </div>
				</div>
				<div class="col-sm-6 project">
					<img class="img-responsive" src="../images/projects/atrium.jpg" alt="Atrium Project">
					<div class="overlay">
			           <h1>Atrium</h1>
			           <span class="line"></span>
			           <a class="info" href="#"><i class="fa fa-plus fa-2x"></i></a>
			        </div>
				</div>
			</div>
		</div>
	</div>
	<div class="row all">
		<a href="{{ route('portfolio_path') }}">View all work <i class="fa fa-arrow-right"></i></a>
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