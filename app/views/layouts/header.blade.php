<header>

	<nav id="nav-menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a class="navbar-brand hidden-sm" href="{{ route('home_path') }}"><img src="../images/logo.png" alt="LifeQuo Logo" height="50"></a>
		      <a class="navbar-brand hidden-lg hidden-md hidden-xs" href="{{ route('home_path') }}"><img src="../images/logo.png" alt="LifeQuo Logo" height="30"></a>
		      <a href="{{ route('blue_path') }}" class="q hidden-lg"><img src="../images/q-blue.png" alt="LifeQuo Logo"></a>
		      <a href="{{ route('red_path') }}" class="q hidden-lg"><img src="../images/q-purple.png" alt="LifeQuo Logo"></a>
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
		      	<span class="sr-only">Toggle navigation</span>
		      	<span class="icon-bar"></span>
		      	<span class="icon-bar"></span>
		      	<span class="icon-bar"></span>
              </button>
		    </div>

		    <ul class="nav navbar-nav navbar-left hidden-md hidden-sm hidden-xs" style="margin-top:37px">
		    	<a href="{{ route('blue_path') }}"><img src="../images/logo-blue.png" alt="LifeQuo Logo" height="30" style="margin-right: 5px;"></a>
		    	<a href="{{ route('red_path') }}"><img src="../images/logo-red.png" alt="LifeQuo Logo" height="30"></a>
		    </ul>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-menubuilder">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="{{Request::path() == '/' ? 'active' : '';}}"><a href="{{ route('home_path') }}">Home <span class="sr-only">(current)</span></a></li>
		        <li class="{{Request::path() == 'about' ? 'active' : '';}}"><a href="{{ route('about_path') }}">About</a></li>
		        <li class="{{Request::path() == 'services' ? 'active' : '';}}"><a href="{{ route('services_path') }}">Services</a></li>
				<li class="{{Request::path() == 'portfolio' ? 'active' : '';}}"><a href="{{ route('portfolio_path') }}">Portfolio</a></li>
				<li class="{{Request::path() == 'expertise' ? 'active' : '';}}"><a href="{{ route('expertise_path') }}">Expertise</a></li>
				<li class="{{Request::path() == 'faq' ? 'active' : '';}}"><a href="{{ route('faq_path') }}">FAQ</a></li>
				<li class="{{Request::path() == 'contact' ? 'active' : '';}}"><a href="{{ route('contact_path') }}">Contact</a></li>
				<li class="{{Request::path() == 'mobile-application' ? 'active' : '';}}"><a href="{{ route('application_path') }}">Mobile App</a></li>
		      </ul>    
		    </div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>

</header>