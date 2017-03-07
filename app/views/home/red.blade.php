@extends('layouts.default-red')

@section('title', 'LifeQuo')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<!-- -->
<section>
	<div class="container">

		<div class="box-inner">
		
			<div class="timeline"><!-- .timeline-inverse = right position [left on RTL] -->

					<!-- ITEM -->
					<div class="timeline-item timeline-item-bordered">
						<!-- timeline entry -->
						<div class="timeline-entry rounded"><!-- .rounded = entry -->
							01
							<div class="timeline-vline"><!-- vertical line --></div>
						</div>
						<!-- /timeline entry -->

						<h3>Renting and selling</h3>
						<p>Renting and selling a property comes with inherent nuances that can be both helpful and disruptive. We can assist you in navigating the process.</p>

					</div>
					<!-- /ITEM -->

					<!-- ITEM -->
					<div class="timeline-item timeline-item-bordered">
						<!-- timeline entry -->
						<div class="timeline-entry rounded"><!-- .rounded = entry -->
							02
							<div class="timeline-vline"><!-- vertical line --></div>
						</div>
						<!-- /timeline entry -->

						<h3>Timing</h3>
						<p>When renting or selling any investment it's important to understand that markets are dynamic and shift regularly. Real estate values are constantly changing based on the time of year, the inventory available, and the global economy. Having a team that understands and monitors these trends is extremely useful.</p>

					</div>
					<!-- /ITEM -->

					<!-- ITEM -->
					<div class="timeline-item timeline-item-bordered">
						<!-- timeline entry -->
						<div class="timeline-entry rounded"><!-- .rounded = entry -->
							03
							<div class="timeline-vline"><!-- vertical line --></div>
						</div>
						<!-- /timeline entry -->

						<h3>Pricing</h3>
						<p>One of the biggest mistakes you can make when renting or selling real estate is a flawed pricing strategy. Over-valued properties stagnate quickly, while undervaluing could leave hundreds of thousands of dollars on the table.</p>

					</div>
					<!-- /ITEM -->

					<!-- ITEM -->
					<div class="timeline-item timeline-item-bordered">
						<!-- timeline entry -->
						<div class="timeline-entry rounded"><!-- .rounded = entry -->
							04
							<div class="timeline-vline"><!-- vertical line --></div>
						</div>
						<!-- /timeline entry -->

						<h3>Marketing</h3>
						<p>When it comes time to rent or sell, a home becomes a product. It's important to ensure that your product's value is easily seen and understood by prospective purchasers. An experienced team and a tailored strategy are important in facilitating a successful transaction.</p>
						<ul class="list-unstyled">
							<li>
								<b>1-	Photography</b><br>
								Arguably one of the most important elements of your marketing package are the photos. Engaging the services of a professional real estate photographer will ensure that the property is shown to prospective purchasers in an effective and appealing way.
							</li>
							<li>
								<b>2-	Advertising</b><br>
								Online advertising is far-reaching. LifeQuo Management Purple is the platform that will allow more active buyers to see your property than any other resource. Homes of distinction and unique investment opportunities warrant a more tailored approach. Whether it be niche market/special interest publications or direct target marketing, tailoring is necessary.
							</li>
							<li>
								<b>3-	Networks</b><br>
								As part of a large property management company, we have access to a database of active investor clients, top-producing realtors, and industry influencers. Each one of our properties is marketed internally and externally, maximizing your exposure.
							</li>
						</ul>

					</div>
					<!-- /ITEM -->

					<!-- ITEM -->
					<div class="timeline-item timeline-item-bordered">
						<!-- timeline entry -->
						<div class="timeline-entry rounded"><!-- .rounded = entry -->
							05
							<div class="timeline-vline"><!-- vertical line --></div>
						</div>
						<!-- /timeline entry -->

						<h3>Pre-sale Reno/facelift</h3>
						<p>Over time, investment properties can become neglected and show signs of wear and tear. Some specific upgrades can unleash a property's hidden value, allowing you to maximize your sale price. Managing a renovation on your own can be tedious and difficult; our team offers full-service project management, allowing you to be as hands-on or hands-off as you'd like.</p>

					</div>
					<!-- /ITEM -->

					<!-- ITEM -->
					<div class="timeline-item timeline-item-bordered">
						<!-- timeline entry -->
						<div class="timeline-entry rounded"><!-- .rounded = entry -->
							06
							<div class="timeline-vline"><!-- vertical line --></div>
						</div>
						<!-- /timeline entry -->

						<h3>Property Maintenance</h3>
						<p>Property maintenance is necessary, and arranging it can be time-consuming and tricky. LifeQuo Management will consult with you to schedule all maintenance in advance. Whether it's grass cutting or furnace inspections, or perhaps more specialized work like testing the fire system to cleaning your premises, we customize the maintenance plan to suit the needs of your home.</p>

					</div>
					<!-- /ITEM -->

					<!-- ITEM -->
					<div class="timeline-item timeline-item-bordered">
						<!-- timeline entry -->
						<div class="timeline-entry rounded"><!-- .rounded = entry -->
							07
							<div class="timeline-vline"><!-- vertical line --></div>
						</div>
						<!-- /timeline entry -->

						<h3>Repairs</h3>
						<p>Repair calls are unpredictable and can be incredibly disruptive to your property and tenant. LifeQuo Management available 24/7 to respond to emergencies and communicate with your tenants. We work with trades we trust to get the work done right and keep costs under control.</p>

					</div>
					<!-- /ITEM -->
			
			</div>

		</div>

	</div>
</section>
<!-- / -->


<!--     WORK WITH US     -->
<div id="work-with-us" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -370px; background-color:#fff"></span><h1>Want to work with us ?</h1><span class="line hidden-xs" style="margin:-63px auto auto 320px; background-color:#fff"></span>
		<a class="green-btn" href="{{ route('contact_path') }}">Get in touch <i class="fa fa-arrow-right"></i></a>
	</div>
</div>

@stop