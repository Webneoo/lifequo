@extends('layouts.default')

@section('title', 'LifeQuo')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<!--     CAROUSEL     -->
<div id="homecarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	<div class="item active">
      <img class="img-responsive" src="../images/home-carousel/1.jpg" alt="Certified System StandardsMarkTM Rules of Use">
      <div class="carousel-caption hidden-xs">
        <h1>Certified System StandardsMarkTM Rules of Use</h1>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="../images/home-carousel/2.jpg" alt="24/7 Management and Maintenance Services">
      <div class="carousel-caption hidden-xs">
        <h1>24/7 Management and Maintenance Services</h1>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="../images/home-carousel/3.jpg" alt="A Team of Experts">
      <div class="carousel-caption hidden-xs">
        <h1>A Team of Experts</h1>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="../images/home-carousel/4.jpg" alt="Precise Cost Control">
      <div class="carousel-caption hidden-xs">
        <h1>Precise Cost Control</h1>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="../images/home-carousel/5.jpg" alt="Near You at All Times">
      <div class="carousel-caption hidden-xs">
        <h1>Near You at All Times</h1>
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="../images/home-carousel/lifequo.jpg" alt="Lifequo">
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
		<span class="line hidden-xs" style="margin:42px auto auto -293px;"></span><h1>What we <strong>do</strong></h1><span class="line hidden-xs" style="margin:-47px auto auto 130px;"></span>
		<p>At LifeQuo, a single and fundamental thread runs through all of our consultancy services—maximised performance of our clients' facilities. Whether we are finding efficiencies in a building’s systems, providing interim management of the daily facilities operations, we are always focused on getting the best out of your property, helping you to reach your corporate objectives, and taking the FM world to a different level.</p>
	</div>
	<div class="row">
        <br>
        <div class="all-services custom-carousel touch-carousel" data-appeared-items="4">

        	<div class="post-row item">
				<a href="{{ route('services_path')}}#our-services">
					<i class="fa fa-users fa-4x"></i>
					<h2>Common Area <br> Services</h2>
					<p>We offer superior quality services for entire residential properties and commercial real estate.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="{{ route('services_path')}}#our-services">
					<i class="fa fa-shield fa-4x"></i>
					<h2>Private Area <br> Services</h2>
					<p>Ensure your residence or commercial property is maintained to the highest standard of engineering and care, which will increase the property’s life-span, and in-turn, its value.</p>
				</a>
			</div>

			<div class="item">
				<a href="{{ route('services_path')}}#quality">
					<i class="fa fa-money fa-4x"></i><i class="fa fa-check fa-4x" style="position:relative; margin-left:-28px; top:15px;"></i>
					<h2>Quality & Cost <br> Control</h2>
					<p>Our team handles all issues related to quality and cost control for all real estate properties and construction sites.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="{{ route('services_path')}}#management">
					<i class="fa fa-black-tie fa-4x"></i>
					<h2>Hospitality & <br> Management services</h2>
					<p>At LifeQuo, in addition to securing a high quality of life, we aim to create a luxurious life style.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="{{ route('services_path')}}#our-services">
					<i class="fa fa-cogs fa-4x"></i>
					<h2>Mechanical, Electrical, <br> & Plumbing (MEP)</h2>
					<p>With the required technical expertise, legal know-how we cover all mechanical, electrical, and plumbing maintenance work.</p>
				</a>
			</div>

			<div class="post-row item">
				<a href="{{ route('services_path')}}#our-services">
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
<div id="about"></div>
<div id="welcome" class="dark-bg">
	<div class="container">
		<div class="col-md-7">
			<h1>Welcome to <br> <strong>LIFE Q<sup style="top:-5px">UO</sup></strong></h1>
			<p>Here at LifeQuo (sister company of Mouawad Projects), we help offer a superior living experience, from hassle and stress-free property maintenance, to well-organized services, and cost-effective quality management. With qualified experts in all fields, we make managing various projects, properties, and venues a breeze. Sit back, relax and let us do all the work.</p>
			<br>
			<p style="line-height: 1.8;">To get to know us a little bit more, visit <a class="green-btn" href="{{ route('about_path') }}">About <i class="fa fa-arrow-right"></i></a></p>
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
	           <p class="hidden-xs">The Residences consist of one level of garden simplexes and two levels of terrace residences. The areas of these attractive residences ensure residents have ample space to relax and entertain.</p>
	           <a class="info" href="{{ route('oakridge_path') }}"><i class="fa fa-plus fa-2x"></i></a>
	        </div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="row project">
				<img class="img-responsive hidden-xs" src="../images/projects/kampai2.png" alt="Kampai Catering Project">
				<img class="img-responsive hidden-lg hidden-md hidden-sm" src="../images/projects/kampai.jpg" alt="Kampai Catering Project">
				<div class="overlay">
		           <h1>Kampai Catering</h1>
		           <span class="line"></span>
		           <a class="info" href="{{ route('kampai_path') }}"><i class="fa fa-plus fa-2x"></i></a>
		        </div>
			</div>
			<div class="row">
				<div class="col-sm-6 project">
					<img class="img-responsive" src="../images/projects/monot/monot1.jpg" alt="Monot Project">
					<div class="overlay">
			           <h1>Monot 38</h1>
			           <span class="line"></span>
			           <a class="info" href="{{ route('monot_path') }}"><i class="fa fa-plus fa-2x"></i></a>
			        </div>
				</div>
				<div class="col-sm-6 project">
					<img class="img-responsive" src="../images/projects/atrium/atrium1.jpg" alt="Atrium Project">
					<div class="overlay">
			           <h1>Atrium</h1>
			           <span class="line"></span>
			           <a class="info" href="{{ route('atrium_path') }}"><i class="fa fa-plus fa-2x"></i></a>
			        </div>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<div class="row all">
		<a href="{{ route('portfolio_path') }}">View all work <i class="fa fa-arrow-right"></i></a>
	</div>
</div>

<!--     EXPERTISE     -->
<div id="expertise" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -270px; background-color:#fff"></span>
		<h1>Expertise</h1>
		<span class="line hidden-xs" style="margin:-63px auto auto 120px; background-color:#fff"></span>
			
			<div class="row">
				<div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/tony.jpg" class="img-responsive img-circle" alt="Tony Hojeily | Technical manager" title="Tony Hojeily | Technical manager">
	                    <h3>Tony Hojeily</h3>
	                    <h4>Technical manager</h4> 
	                </div>
	            </div>

				<div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/farid.jpg?v=3.0" class="img-responsive img-circle" alt="Farid Abi Aad | Mechanical engineer with 30 years of experience" title="Farid Abi Aad | Mechanical engineer with 30 years of experience">
	                    <h3>Farid Abi Aad</h3>
	                    <h4 class="text-muted">Mechanical engineer with 30 years of experience</h4>
	                </div>
	            </div>

	            <div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/assaad.jpg" class="img-responsive img-circle" alt="Assaad Kfoury | Electrical engineer with 20 years of experience" title="Assaad Kfoury | Electrical engineer with 20 years of experience">
	                    <h3>Assaad Kfoury</h3>
	                    <h4>Electrical engineer with 20 years of experience</h4>
	                </div>
	            </div>

           </div>

           <div class="row">

           		<div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/julien.jpg" class="img-responsive img-circle" alt="Julien Mouchantaf | Civil engineer" title="Julien Mouchantaf | Civil engineer">
	                    <h3>Julien Mouchantaf</h3>
	                    <h4>Civil engineer</h4>  
	                </div>
	            </div>
	           
	           <div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/bassam.jpg" class="img-responsive img-circle" alt="Bassam Hammoud | Engineer" title="Bassam Hammoud | Engineer">
	                    <h3>Bassam Hammoud</h3>
	                    <h4>Engineer</h4> 
	                </div>
	           </div>

	           <div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/toni_chidiac.jpg" class="img-responsive img-circle" alt="Toni Chidiac | IT department" title="Toni Chidiac | IT department">
	                    <h3>Toni Chidiac</h3>
	                    <h4>IT department</h4> 
	                </div>
	           </div>


	           <div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/corine.jpg" class="img-responsive img-circle" alt="Corine Chadaideh | Accounting department" title="Corine Chadaideh | Accounting department">
	                    <h3>Corine Chadaideh</h3>
	                    <h4>Accounting department</h4>  
	                </div>
	            </div>

	            <div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/reem.jpg" class="img-responsive img-circle" alt="Reem Bou Matar | Operations manager collection" title="Reem Bou Matar | Operations manager collection">
	                    <h3>Reem Bou Matar</h3>
	                    <h4>Operations manager collection</h4> 
	                </div>
	           </div>

	           <div class="col-sm-4">
	                <div class="team-member">
	                    <img src="/images/team/richard.jpg" class="img-responsive img-circle" alt="Richard Hilal | IT Manager" title="Richard Hilal | IT Manager">
	                    <h3>Richard Hilal</h3>
	                    <h4>Business Development</h4> 
	                </div>
	           </div>
 
           </div>
	</div>
</div>


<!--     WORK WITH US     -->
<div id="work-with-us" class="work_with_us">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -370px; background-color:#000"></span>
		<h1>Want to work with us ?</h1>
		<span class="line hidden-xs" style="margin:-63px auto auto 320px; background-color:#000"></span>
		<a class="green-btn" href="{{ route('contact_path') }}">Get in touch <i class="fa fa-arrow-right"></i></a>
	</div>
</div>

@stop