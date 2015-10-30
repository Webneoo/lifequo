@extends('layouts.default')

@section('title', 'LifeQuo - Services')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<!--     SERVICES     -->
<div id="services-desc" class="dark-bg">
	<div class="container">
		<div class="col-md-7">
			<h1>Services</h1>
			<p>LifeQuo is your one stop source for property and hospitality management. We provide a wide array of services ranging from Property Management & Maintenance; to Quality & Cost-Control; to Management of Hospitality Services provided by third-parties. </p>
			<p>We ensure your property integrates the latest technologies and innovations in the market, including eco-friendly renewable energy house and water heating solutions.</p>
			<br><br>
			<p><a class="green-btn" href="{{ route('about_path') }}">Download Catalog </a></p>
		</div>
		<div class="col-md-5 hidden-sm hidden-xs">
			<img class="img-responsive" src="../images/services/services.jpg" alt="Services Picture" width="100%">
		</div><br>
	</div>
</div>

<div id="our-services"  class="container">
	<div id="property" class="row">
		<span class="line hidden-xs hidden-sm" style="margin: 40px 0 0 -535px;"></span><h1>Property management and maintenance</h1><span class="line hidden-xs hidden-sm" style="margin: -68px 0 0 380px;"></span>
		<p>We at LifeQuo are responsible for the upkeep of your entire estate, meeting highest standards to maintain a safe and attractive property. With the required technical expertise, legal know-how, and extensive management skills, we cover all management and maintenance work in residential and commercial complexes and buildings, including flats, chalets, hotel suites, rooms and common areas, as well as offices and other properties.
		<br>Find all your property management and maintenance needs here at LifeQuo!</p>
		<p><strong>We offer superior quality services for entire residential properties and commercial real estate.</strong></p>
		<div class="col-md-6 col-xs-10 col-xs-pull-1 col-md-pull-5 service-desc">
			<div id="servicesCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#servicesCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#servicesCarousel" data-slide-to="1"></li>
			      <li data-target="#servicesCarousel" data-slide-to="2"></li>
			      <li data-target="#servicesCarousel" data-slide-to="3"></li>
			      <li data-target="#servicesCarousel" data-slide-to="4"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">

			      <div class="item active">
			        <i class="fa fa-users fa-4x hidden-md"></i>
					<h2>Common Area Services</h2><br>
					<p>- Manage the accounts and finances of real estate properties <br>
					- Review and manage maintenance policies to enhance efficiency<br>
					- Provide preventive, corrective, and condition-based maintenance<br>
					- Audit and provide consulting for risk management and technical services<br>
					- Perform building equipment maintenance (assess the functionality ofequipment and offer repair strategies)<br>
					- Manage third-party property cleaning services for all facilities (elevator, lobby, parking, entrance, etc.)<br>
					- Ensure pest control</p>
			      </div>

			      <div class="item">
			        <i class="fa fa-user-secret fa-4x hidden-md"></i>
					<h2>Private Area Services</h2><br>
					<h3><em>Swift Expert Services</em></h3>
					<em>- Heat, Ventilation and Air Conditioning (HVAC) system<br>
					- Plumbing<br>
					- Electrical connections and operations<br>
					- Paint Works<br>
					- Carpentries maintenance<br>
					- Furniture maintenance<br>
					- Flooring<br>
					- Steel, Aluminum and Glass<br>
					- Gypsum Board<br>
					- Satellite<br>
					- Pest Control Services<br>
					- Landscape and Irrigation<br>
					- Energy Saving Solutions</em><br>
					<p>- Initial inspection and assessment of your property<br>
					- Providing maintenance and repairs<br>
					- Liaising with utility companies <br>
					- Obtaining cost effect quotes for maintenance<br>
					- No hidden fees <br>
					- A personalized service tailored to your needs</p><br>
					<h3>IT Services:</h3>
					<p>- Network and connectivity maintenance<br>
					- Hardware and software troubleshooting<br>
					- New Hardware and software installation<br>
					- Backup and recovery solutions<br>
					- Security and parental control</p>
			      </div>

			      <div class="item">
			        <i class="fa fa-cogs fa-4x hidden-md"></i>
					<h2>Mechanical, Electrical <br> & Plumbing (MEP)</h2><br>
					<h3>Electrical Works:</h3>
					<h4>Equipment:</h4>
					<p>- Parking control equipment</p>
					<h4>Integrated automation: </h4>
					<p>- Building alarm system</p>
					<h4>Electrical:</h4>
					<p>- Medium voltage cables<br>
					- Low voltage electrical power<br>
					- Conductor and cables</p>
					<h4>Communications:</h4>
					<p>- Satellite and master antenna TV system<br>
					- Videophone systems<br>
					- Structured cabling system</p>
					<h4>IT services:</h4>
					<p>- Wireless Internet installation; computer systems; etc. </p>
					<h4>Electronic safety & security:</h4>
					<p>- Video surveillance (CCTV)<br>
					- Addressable fire alarm system<br>
					- Carbon monoxide detection system</p><br>
					<h3>Mechanical Works:</h3>
					<p>- Fire suppression<br>
					- Heating/Ventilation/AC (HVAC)</p><br>
					<h3>Plumbing works:</h3>
					<p>- Plumbing insulation<br>
					- Domestic water piping<br>
					- Storm water<br>
					- Sanitary waste <br>
					- Vent piping<br>
					- Soil waste <br>
					- Storm drainage piping<br>
					- Cleaning of tanks</p>
			      </div>

			      <div class="item">
			        <i class="fa fa-map fa-4x"></i>
					<h2>Landscaping</h2><br>
					<p>- Soft/Hard landscaping<br>
					- Irrigation systems<br>
					- Regular maintenance</p>
			      </div>

			      <div class="item">
			        <i class="fa fa-life-ring fa-4x"></i>
					<h2>Security, Safety <br>& Hygienic services</h2><br>
					<p>- Ensure compliance with security and life safety standards<br>
					- Report any unusual incidents or hazardous conditions<br>
					- Monitor security desk consoles (employee access control and alarm computer, CCTV video monitors, DVRs)<br>
					- Assign guards to protect premises from unwanted entry<br>
					- Security and cleaning</p>
			      </div>

			    </div>
			</div>
		</div>
		<div class="col-md-6 col-md-push-6">
			<img src="../images/services/property-management.png" alt="Property Management and maintenance">
		</div>
	</div>
	
	<div id="quality" class="row">
		<span class="line hidden-xs hidden-sm" style="margin: 40px 0 0 -410px;"></span><h1>Quality and cost control</h1><span class="line hidden-xs hidden-sm" style="margin: -68px 0 0 250px;"></span>
		<p>Our team handles all issues related to quality and cost control for all real estate properties and construction sites. We monitor quality and ensure compliance to contracts, governmental requirements and other legal agreements. We track and ensure cost-efficiency throughout all operations pertaining to the management of residential and commercial properties, as well as review, discuss and negotiate all upcoming offers.</p>
		<div class="col-md-6 col-xs-10 col-xs-pull-1 col-md-pull-5 service-desc">
			<i class="fa fa-money fa-4x"></i><br>
			<p>Our quality and cost control services include but are not limited to:<br><br>
			- Establish timely, accurate and complete billings, as well as undertake cost containment procedures<br>
			- Enforce timely submissions of invoices and other contract data<br>
			- Ensure compliance with contract requirements<br>
			- Guarantee accuracy of reports<br>
			- Schedule tasks and monitor task durations<br>
			- Set milestone schedules and ensure they are adhered to<br>
			- Create parameters for constant and open communication between management staff and clients<br>
			- Analyze and identify potential problems and take proactive problem preventive strategies<br>
			- Identify problems early-on and set in place efficient problem solving strategies<br>
			- Qualified employees holding the Six Sigma and Project Management Professional (PMP) certificates</p>
		</div>
		<div class="col-md-6 col-xs-12 col-md-push-6">
			<img src="../images/services/quality-cost.png" alt="Quality and cost control">
		</div>
	</div>

	<div style="hidden-lg hidden-md hidden-sm"><br><br></div>

	<div id="management" class="row">
		<span class="line hidden-xs hidden-sm" style="margin: 40px 0 0 -500px;"></span><h1>Management of hospitality services</h1><span class="line hidden-xs hidden-sm" style="margin: -68px 0 0 345px;"></span>
		<p>At LifeQuo, in addition to securing a high quality of life, we aim to create a luxurious life style. We will be responsible for organizing, supervising and controlling all third-party providers of hospitality management services that you require at your residential and commercial properties.</p>
		<div class="col-md-6 col-xs-10 col-xs-pull-1 col-md-pull-5 service-desc">
			<i class="fa fa-black-tie fa-4x"></i><br>
			<p>Our responsibilities include but are not limited to:<br><br>
			- Undertake daily management and on-site maintenance tasks<br>
			- Identify and anticipate guest needs<br>
			- Perform quality and cost control<br>
			- Set forth and ensure compliance with required high standards of service<br>
			- Supervise hospitality staff<br>
			- Schedule and oversee tasks<br>
			- Develop and monitor reporting<br>
			- Employ hospitality management providers</p>
		</div>
		<div class="col-md-6 col-md-push-6">
			<img src="../images/services/hospitality.png" alt="Management of hospitality services">
		</div>
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