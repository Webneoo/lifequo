@extends('layouts.default')

@section('title', 'LifeQuo - FAQ')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<div id="faq" class="container">
	<h1>Why is home maintenance required ?</h1>
	<p>To keep houses up and running constant maintenance is required. Small jobs like carpentry, plumbing or electric wiring demand vigilant care for which companies like LifeQuo provide efficient solutions within minutes all year long.</p>
	<br>
	<h1>What kind of packages do you offer ?</h1>
	<p>We offer structured packages on an annual basis which cover most maintenance issues. The fee covers preventive and corrective measures. In addition we also respond to preventive measures.</p>
	<br>
	<h1>Does LifeQuo do repairs ?</h1>
	<p>Yes indeed! Our team will evaluate the problem and give you the best possible recommendations for the repair(s) and would also work on a development plan to carry out the needed repair(s).</p>
	<br>
	<h1>Do a lot of homes need repair ?</h1>
	<p>Yes all homes require some sort of maintenance on an annual basis. Residential areas near the coast are prone to extreme weather conditions like wind, moisture and heat and therefore demand consistent preservation.</p>
	<br>
	<h1>What is covered in regular home maintenance ?</h1>
	<p>Some of the things included in our structured programs are plumbing, air conditioning and electrical maintenance.</p>
	<br>
	<h1>How can i save money by having a maintenance contract ?</h1>
	<p>Your savings can be over ten times the cost of our annual subscription fee. Regular house checkups can save you lots of money on repairs. We will keep a check on the running of the A/C, the pump, the water supply & drainage and electrical distribution board. Our technicians use a prescribed checklist during the annual maintenance program. You can trust our experts for guiding you through your home up keeping.</p>
	<br>
	<h1>Are your services available on weekends ?</h1>
	<p>Yes, our 24 hour customer helpdesk is there to register your complaints and assign professionals to solve your problems. You may call us on our toll free number for further assistance.</p>
	<br>
	<h1>How quickly can you reach me in case of an emergency ?</h1>
	<p>We respond to all emergencies* within 30 minutes.</p>
	<br>
	<h1>What if i require some specific kind of service that is not part of the structured packages ?</h1>
	<p>LifeQuo provides a whole range of services like window cleaning, maintenance of gardens & swimming pools and A/C Duct cleaning. Please send us an email outlining your query and we will send you a detailed reply.</p>
</div>

<!--     WORK WITH US     -->
<div id="work-with-us" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -370px; background-color:#fff"></span><h1>Want to work with us ?</h1><span class="line hidden-xs" style="margin:-63px auto auto 220px; background-color:#fff"></span>
		<a class="green-btn" href="{{ route('contact_path') }}">Get in touch <i class="fa fa-arrow-right"></i></a></p>
	</div>
</div>

@stop