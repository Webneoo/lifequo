@extends('layouts.default')

@section('title', 'LifeQuo - Privacy Policy')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<img class="img-responsive" src="../images/privacy.png" alt="Privacy Policy Image" width="100%" height="200">

<div id="privacy" class="container">
	<span class="line hidden-xs" style="margin:40px auto auto -300px"></span><h1>Privacy <strong>Policy</strong></h1><span class="line hidden-xs" style="margin:-69px auto auto 145px"></span>
	<p>Please read our Privacy Policy before using our website. </p>
	<p>This website is owned and operated by LifeQuo, with headquarters based in Lebanon. We reserve the right to delete and modify the content of this website at any time, for any reason and without notification to anyone. It is prohibited to copy, reproduce, republish, upload, post, transmit or distribute any content in this website, for public or commercial purposes, without written permission from the LifeQuo Legal Department.</p>
	<p>LifeQuo is committed to ensuring the personal and corporate privacy of all who enter this website. The following discusses how information submitted to this website is gathered and disseminated. Please note that if you use this site, you agree to this policy. </p>
</div>

<!--     WORK WITH US     -->
<div id="work-with-us" class="dark-bg">
	<div class="container">
		<span class="line hidden-xs" style="margin:70px auto auto -370px; background-color:#fff"></span><h1>Want to work with us ?</h1><span class="line hidden-xs" style="margin:-63px auto auto 220px; background-color:#fff"></span>
		<a class="green-btn" href="{{ route('contact_path') }}">Get in touch <i class="fa fa-arrow-right"></i></a></p>
	</div>
</div>

@stop