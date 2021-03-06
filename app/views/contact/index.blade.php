@extends('layouts.default')


@section('content')

<div id="contact" class="container">
  {{ Form::open(['route' => 'contact_path']) }}
	<div class="col-md-6">
		<h1>Contact Information</h1>
		<div class="row">
			<div class="col-sm-6">
				<div class="row">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
					</span>
					<p style="margin-top:0">+961 1 970970 <br> +961 1 987970</p>
				</div>
				<div class="row">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-fax fa-stack-1x fa-inverse"></i>
					</span>
					<p>+961 1 970970 - ext 102</p>
				</div>
				<div class="row">
					<span class="fa-stack fa-lg">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
					</span>
					<p><a href="mailto:helpdesk@lifequo.com" target="_top"> helpdesk@lifequo.com </a></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row">
					<span class="fa-stack fa-lg" style="float:none; left:25%">
					  <i class="fa fa-circle fa-stack-2x"></i>
					  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
					</span>
					<p style="margin:8px 0">Lifequo Management SAL, <br> Mina El Hosn, Palladium Blg. <br> Dowtown, Beirut, Lebanon</p>
				</div>
			</div>
		</div>
		<div id="customer" class="row">
			<h1>Customer service <br> <strong>request Form</strong></h1>
			<div class="row">
				<h2>Personal information</h2>
	            <div class="form-group contact-form">
	                <div class="controls col-sm-6">
	                  <input type="text" placeholder="Your first name" name="fname">
	                </div>
	                <div class="controls col-sm-6">
	                  <input type="text" placeholder="Your last name" name="lname">
	                </div>
	            </div>
	            <div class="form-group contact-form">
	                <div class="controls col-sm-6">
	                  <input type="email" class="email" placeholder="Your email address" name="email">
	                </div>
	                <div class="controls col-sm-6">
	                  <input type="text" placeholder="Your phone number" name="phone">
	                </div>
	            </div>
	            <div class="form-group contact-form">
	                <div class="controls">
	                  <textarea rows="4" placeholder="Your address" name="address"></textarea>
	                </div>
	            </div>
			</div>
			<div class="row">
				<h2>How can we serve you?</h2>
	            <div class="form-group contact-form">
	                <div class="controls">
	                  <input type="text" placeholder="Your subject" name="subject">
	                </div>
	            </div>
	            <div class="form-group contact-form">
	                <div class="controls">
	                  <textarea rows="6" placeholder="Your message" name="msg_client"></textarea>
	                </div>
	            </div>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3938.2865001042605!2d35.49818178481011!3d33.897611105966185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16dd62ea6937%3A0x2285cb772837204a!2sMinet+El+Hosn!5e0!3m2!1sen!2slb!4v1487585717735" class="hidden-xs hidden-sm" width="600" height="450" style="border:0" allowfullscreen></iframe>
		<div class="row">
			<h2>When can we visit you ?</h2>
            <div class="form-group contact-form">
                <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" name="date_client" style="margin-bottom:0;"/>
                    <span class="input-group-addon" style="float:none; background-color: transparent; border-color:#eee">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
		</div>
		<div class="row">
			<h2>One last step to make sure you're human !</h2>
			<div class="form-group contact-form" style="width: 240px;">
		        <img src="<?php echo Captcha::img(); ?>" alt='Captcha image'>
			    <input type='text' class="form-control" placeholder="Type the above code" name="captcha"/>
			</div>		
		</div><br><br><br>
		<div class="row contact-form">
			<button name="submit_form" type="submit" class="green-btn btn btn-primary">Submit Request</button>
		</div>
	</div>
  {{ Form:: close() }}

</div>

@stop