@extends('layouts.default')

@section('title', 'LifeQuo - Services')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<!--     SERVICES     -->
<div id="services-desc" class="dark-bg">
	<div class="container">
		<div class="col-md-7">
			<h1>Services</h1>
			<p>We provide a wide array of services ranging from Property Management & Maintenance; to Quality & Cost-Control; to Management of Hospitality Services provided by third-parties. </p>
			<p>We ensure your property integrates the latest technologies and innovations in the market, including eco-friendly renewable energy house and water heating solutions.</p>
			<br><br>
			<p><a class="green-btn" target="_blank" href="pdf/catalog.pdf">Download Catalog </a></p>
		</div>
		<div class="col-md-5 hidden-sm hidden-xs">
			<img class="img-responsive" src="../images/services/services.jpg" alt="Services Picture" style="width:100%">
		</div><br>
	</div>
</div>

<div id="our-services" class="container">
	<div id="property" class="row">
		<span class="line hidden-xs hidden-sm" style="margin: 40px 0 0 -535px;"></span><h1>Property management and maintenance</h1><span class="line hidden-xs hidden-sm" style="margin: -68px 0 0 380px;"></span>
		<p>We at LifeQuo are responsible for the upkeep of your entire estate, meeting highest standards to maintain a safe and attractive property. With the required technical expertise, legal know-how, and extensive management skills, we cover all management and maintenance work in residential and commercial complexes and buildings, including flats, chalets, hotel suites, rooms and common areas, as well as offices and other properties.
		<br>Find all your property management and maintenance needs here at LifeQuo!</p>
		<p><strong>We offer superior quality services for entire residential properties and commercial real estate.</strong></p>
		<div class="col-sm-6">
			<img class="img-responsive" src="../images/services/property-management.png" alt="Property Management and maintenance">
		</div>
		<div class="col-sm-6 serv1">
			<div class="col-md-4">
				<div class="service-btn" data-toggle="modal" data-target="#s1">
					<p><i class="fa fa-users fa-lg"></i><br> Common Area Services</p>
				</div>
				<div class="modal fade" id="s1" tabindex="-1" role="dialog" aria-labelledby="s1Label">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Common Area Services</h4>
				      </div>
				      <div class="modal-body">
				        <ul class="icons-list">
							<li><i class="fa fa-check-circle"></i> Manage the accounts and finances of real estate properties </li>
							<li><i class="fa fa-check-circle"></i> Review and manage maintenance policies to enhance efficiency</li>
							<li><i class="fa fa-check-circle"></i> Provide preventive, corrective, and condition-based maintenance</li>
							<li><i class="fa fa-check-circle"></i> Audit and provide consulting for risk management and technical services</li>
							<li><i class="fa fa-check-circle"></i> Perform building equipment maintenance (assess the functionality ofequipment and offer repair strategies)</li>
							<li><i class="fa fa-check-circle"></i> Manage third-party property cleaning services for all facilities (elevator, lobby, parking, entrance, etc.)</li>
							<li><i class="fa fa-check-circle"></i> Ensure pest control</li>
						</ul>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
			<div class="col-md-4">
				<div class="service-btn" data-toggle="modal" data-target="#s2">
					<p><i class="fa fa-user-secret fa-lg"></i><br> Private Area Services</p>
				</div>
				<div class="modal fade" id="s2" tabindex="-1" role="dialog" aria-labelledby="s2Label">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Private Area Services</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
					        <div class="col-md-6">
						    	<p><strong class="accent-color">Swift Expert Services</strong></p>
								<ul class="icons-list">
						        	<li><i class="fa fa-check-circle"></i> Heat, Ventilation and Air Conditioning (HVAC) system </li>
									<li><i class="fa fa-check-circle"></i>Plumbing</li>
									<li><i class="fa fa-check-circle"></i>Electrical connections and operations</li>
									<li><i class="fa fa-check-circle"></i>Paint Works</li>
									<li><i class="fa fa-check-circle"></i>Carpentries maintenance</li>
									<li><i class="fa fa-check-circle"></i>Furniture maintenance</li>
									<li><i class="fa fa-check-circle"></i>Flooring</li>
									<li><i class="fa fa-check-circle"></i>Steel, Aluminum and Glass</li>
									<li><i class="fa fa-check-circle"></i>Gypsum Board</li>
									<li><i class="fa fa-check-circle"></i>Satellite</li>
									<li><i class="fa fa-check-circle"></i>Pest Control Services</li>
									<li><i class="fa fa-check-circle"></i>Landscape and Irrigation</li>
									<li><i class="fa fa-check-circle"></i>Energy Saving Solutions</li>
									<li><i class="fa fa-check-circle"></i>Initial inspection and assessment of your property</li>
									<li><i class="fa fa-check-circle"></i>Providing maintenance and repairs</li>
									<li><i class="fa fa-check-circle"></i>Liaising with utility companies </li>
									<li><i class="fa fa-check-circle"></i>Obtaining cost effect quotes for maintenance</li>
									<li><i class="fa fa-check-circle"></i>No hidden fees </li>
									<li><i class="fa fa-check-circle"></i>A personalized service tailored to your needs</li>
								</ul>
							</div>
							<div class="col-md-6">
								<p><strong class="accent-color">IT Services</strong></p>
								<ul class="icons-list">
									<li><i class="fa fa-check-circle"></i> Network and connectivity maintenance</li>
									<li><i class="fa fa-check-circle"></i> Hardware and software troubleshooting</li>
									<li><i class="fa fa-check-circle"></i> New Hardware and software installation</li>
									<li><i class="fa fa-check-circle"></i> Backup and recovery solutions</li>
									<li><i class="fa fa-check-circle"></i> Security and parental control</li>
								</ul>
							</div>
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
			<div class="col-md-4">
				<div class="service-btn" data-toggle="modal" data-target="#s3">
					<p><i class="fa fa-plug fa-lg"></i><br> Mechanical, Electrical & Plumbing</p>
				</div>
				<div class="modal fade" id="s3" tabindex="-1" role="dialog" aria-labelledby="s3Label">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Mechanical, Electrical & Plumbing</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="row">
					        <div class="col-md-6">
						      	<p><strong class="accent-color">Electrical Works</strong></p>
								<ul class="icons-list">
									<h5>Equipment</h5>
						        	<li><i class="fa fa-check-circle"></i>Parking control equipment</li>
									<h5>Integrated automation</h5>
									<li><i class="fa fa-check-circle"></i>Building alarm system</li>
									<h5>Electrical</h5>
									<li><i class="fa fa-check-circle"></i>Medium voltage cables </li>
									<li><i class="fa fa-check-circle"></i>Low voltage electrical power </li>
									<li><i class="fa fa-check-circle"></i>Conductor and cables</li>
									<h5>Communications</h5>
									<li><i class="fa fa-check-circle"></i>Satellite and master antenna TV system</li>
									<li><i class="fa fa-check-circle"></i>Videophone systems </li>
									<li><i class="fa fa-check-circle"></i>Structured cabling system</li>
									<h5>IT services</h5>
									<li><i class="fa fa-check-circle"></i>Wireless Internet installation; computer systems; etc.</li>
									<h5>Electronic safety & security</h5>
									<li><i class="fa fa-check-circle"></i>Video surveillance (CCTV)</li>
									<li><i class="fa fa-check-circle"></i>Addressable fire alarm system </li>
									<li><i class="fa fa-check-circle"></i>Carbon monoxide detection systemHeat, Ventilation and Air Conditioning (HVAC) system </li>
								</ul>
							</div>
							<div class="col-md-6">
								<p><strong class="accent-color">Mechanical Works</strong></p>
								<ul class="icons-list">
									<li><i class="fa fa-check-circle"></i>Fire suppression </li>
									<li><i class="fa fa-check-circle"></i>Heating/Ventilation/AC (HVAC)</li>
								</ul>
								<p><strong class="accent-color">Plumbing works</strong></p>
								<ul class="icons-list">
									<li><i class="fa fa-check-circle"></i>Plumbing insulation</li>
									<li><i class="fa fa-check-circle"></i>Domestic water piping</li>
									<li><i class="fa fa-check-circle"></i>Storm water</li>
									<li><i class="fa fa-check-circle"></i>Sanitary waste </li>
									<li><i class="fa fa-check-circle"></i>Vent piping</li>
									<li><i class="fa fa-check-circle"></i>Soil waste </li>
									<li><i class="fa fa-check-circle"></i>Storm drainage piping</li>
									<li><i class="fa fa-check-circle"></i>Cleaning of tanks</li>
								</ul>
							</div>
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
			<div class="col-md-4">
				<div class="service-btn" data-toggle="modal" data-target="#s4">
					<p><i class="fa fa-map fa-lg"></i><br> Landscaping</p>
				</div>
				<div class="modal fade" id="s4" tabindex="-1" role="dialog" aria-labelledby="s4Label">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Landscaping</h4>
				      </div>
				      <div class="modal-body">
				        <ul class="icons-list">
					        <li><i class="fa fa-check-circle"></i> Soft/Hard landscaping</li>
							<li><i class="fa fa-check-circle"></i> Irrigation systems</li>
							<li><i class="fa fa-check-circle"></i> Regular maintenance</li>
					      </ul>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
			<div class="col-md-4">
				<div class="service-btn" data-toggle="modal" data-target="#s5">
					<p><i class="fa fa-life-ring fa-lg"></i><br>Security, Safety & Hygienic Services</p>
				</div>
				<div class="modal fade" id="s5" tabindex="-1" role="dialog" aria-labelledby="s5Label">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title">Security, Safety & Hygienic Services</h4>
				      </div>
				      <div class="modal-body">
				        <ul class="icons-list">
					        <li><i class="fa fa-check-circle"></i> Ensure compliance with security and life safety standards</li>
							<li><i class="fa fa-check-circle"></i> Report any unusual incidents or hazardous conditions</li>
							<li><i class="fa fa-check-circle"></i> Monitor security desk consoles (employee access control and alarm computer, CCTV video monitors, DVRs)</li>
							<li><i class="fa fa-check-circle"></i> Assign guards to protect premises from unwanted entry</li>
							<li><i class="fa fa-check-circle"></i> Security and cleaning</li>
					      </ul>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
		</div>
	</div>

	<div id="quality" class="row">
		<span class="line hidden-xs hidden-sm" style="margin: 40px 0 0 -410px;"></span><h1>Quality and cost control</h1><span class="line hidden-xs hidden-sm" style="margin: -68px 0 0 250px;"></span>
		<p>Our team handles all issues related to quality and cost control for all real estate properties and construction sites. We monitor quality and ensure compliance to contracts, governmental requirements and other legal agreements. We track and ensure cost-efficiency throughout all operations pertaining to the management of residential and commercial properties, as well as review, discuss and negotiate all upcoming offers.</p>
		<div class="col-md-6">
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-money fa-lg"></i> <br>Billing reports and procedures</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-hourglass-half fa-lg"></i> <br>Timely submission of invoices</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-asterisk fa-lg"></i> <br>Compliance to all requirements</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-area-chart fa-lg"></i> <br>Accuracy of reports</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-tasks fa-lg"></i> <br>Tasks scheduling and monitoring</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-road fa-lg"></i> <br>Setting milestone schedules</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-compress fa-lg"></i> <br>Regulated staff-client contact</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-exclamation fa-lg"></i> <br>Problems prevention and solving</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-certificate fa-lg"></i> <br>Six Sigma and PMP certificate-holding staff</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<img class="img-responsive" src="../images/services/quality-cost.png" alt="Quality and cost control">
		</div>
	</div>

	<div id="management" class="row">
		<span class="line hidden-xs hidden-sm" style="margin: 40px 0 0 -500px;"></span><h1>Management of hospitality services</h1><span class="line hidden-xs hidden-sm" style="margin: -68px 0 0 345px;"></span>
		<p>At LifeQuo, in addition to securing a high quality of life, we aim to create a luxurious life style. We will be responsible for organizing, supervising and controlling all third-party providers of hospitality management services that you require at your residential and commercial properties.</p>
		<div class="col-md-6">
			<img class="img-responsive" src="../images/services/hospitality.png" alt="Management of hospitality services">
		</div>
		<div class="col-md-6">
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-cogs fa-lg"></i> <br>Management and maintenance</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-bullseye fa-lg"></i> <br>Compliance to guest needs</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-money fa-lg"></i> <br>Quality and cost control</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-star fa-lg"></i> <br>High standards of service</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-bullhorn fa-lg"></i> <br>Hospitality staff supervision</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-list-ol fa-lg"></i> <br>Tasks organization</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-line-chart fa-lg"></i> <br>Reports submission</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-btn">
					<p><i class="fa fa-black-tie fa-lg"></i> <br>Hospitality providers selection</p>
				</div>
			</div>
		</div>
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