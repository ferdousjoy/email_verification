!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Farhanit - Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	 <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
	<link href="{{asset('dashboard_assets/css/styles.css')}}" rel="stylesheet">
	<!--Custom Font-->
	<link href="css/font.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Digital Innovation  </span></a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Jhon Dhon</div>
				<div class="profile-usertitle-status">Jhon@demo.com</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
	 <li><a href="{{url('/')}}" target="_blank"><em class="fa fa-calendar">&nbsp;</em> Website</a></li>
	 <li><a href="{{url('/text/editor')}}" target="_blank"><em class="fa fa-calendar">&nbsp;</em> text</a></li>
	 <li class="parent "><a data-toggle="collapse" href="#sub-item-2">
		 <em class="fa fa-navicon">&nbsp;</em> Menu <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
		 </a>
		 <ul class="children collapse" id="sub-item-2">
			 <li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('menu') }}"><span class="fa fa-arrow-right">&nbsp;</span> Menu Add</a></li>
		 </ul>

	 </li>

	  <li class="parent "><a data-toggle="collapse" href="#sub-item-27u">
		<em class="fa fa-navicon">&nbsp;</em>Sub Menu<span data-toggle="collapse" href="#sub-item-27u" class="icon pull-right"><em class="fa fa-plus"></em></span>
		</a>
		<ul class="children collapse" id="sub-item-27u">
			<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('sub') }}"><span class="fa fa-arrow-right">&nbsp;</span> Sub Menu Add</a></li>
		</ul>

	</li>
	 <li class="parent "><a data-toggle="collapse" href="#sub-item-27">
		<em class="fa fa-navicon">&nbsp;</em>Upper Head <span data-toggle="collapse" href="#sub-item-27" class="icon pull-right"><em class="fa fa-plus"></em></span>
		</a>
		<ul class="children collapse" id="sub-item-27">
			<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('upper') }}"><span class="fa fa-arrow-right">&nbsp;</span> Upper Head Add</a></li>
		</ul>

	</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Banner <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('banner') }}"><span class="fa fa-arrow-right">&nbsp;</span> Banner Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-s">
				<em class="fa fa-navicon">&nbsp;</em> Service <span data-toggle="collapse" href="#sub-item-s" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-s">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('service') }}"><span class="fa fa-arrow-right">&nbsp;</span> Service Add</a></li>
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('OurServiceDetail') }}"><span class="fa fa-arrow-right">&nbsp;</span> Our Service  </a></li>
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('SpecificServiceDetail') }}"><span class="fa fa-arrow-right">&nbsp;</span> Specific Service Add  </a></li>
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('Specificinput3') }}"><span class="fa fa-arrow-right">&nbsp;</span>  Three Specific Service  </a></li>
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('Specificinput2') }}"><span class="fa fa-arrow-right">&nbsp;</span>  TWO Specific Service </a></li>

				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em> Solution <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('solution') }}"><span class="fa fa-arrow-right">&nbsp;</span> Solution Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-navicon">&nbsp;</em> GT Solution <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('gtsolution') }}"><span class="fa fa-arrow-right">&nbsp;</span> Solution Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-navicon">&nbsp;</em> Cad Solution <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('cadsolution') }}"><span class="fa fa-arrow-right">&nbsp;</span>  Solution Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-6">
				<em class="fa fa-navicon">&nbsp;</em> Biometric<span data-toggle="collapse" href="#sub-item-6" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-6">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('biometric') }}"><span class="fa fa-arrow-right">&nbsp;</span>  Biometric Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-7">
				<em class="fa fa-navicon">&nbsp;</em> UPS<span data-toggle="collapse" href="#sub-item-7" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-7">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('ups') }}"><span class="fa fa-arrow-right">&nbsp;</span>  UPS Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-8">
				<em class="fa fa-navicon">&nbsp;</em> Fire<span data-toggle="collapse" href="#sub-item-8" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-8">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('fire') }}"><span class="fa fa-arrow-right">&nbsp;</span>  Fire Add</a></li>
				</ul>

			</li>

			<li class="parent "><a data-toggle="collapse" href="#sub-item-9">
				<em class="fa fa-navicon">&nbsp;</em> Event<span data-toggle="collapse" href="#sub-item-9" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-9">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('event') }}"><span class="fa fa-arrow-right">&nbsp;</span>  Event Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-99">
				<em class="fa fa-navicon">&nbsp;</em> Partner<span data-toggle="collapse" href="#sub-item-99" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-99">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('Partner') }}"><span class="fa fa-arrow-right">&nbsp;</span>  Partner Add</a></li>
				</ul>

			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-99q">
				<em class="fa fa-navicon">&nbsp;</em> Footer<span data-toggle="collapse" href="#sub-item-99q" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-99q">
					<li> <i class="fas fa-hand-pointer"></i><a class=""href="{{ route('footer') }}"><span class="fa fa-arrow-right">&nbsp;</span>  footer Add</a></li>
				</ul>

			</li>









			<li>

				<a class="dropdown-item" href="{{ route('logout') }}"
					 onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
				</form>









			</li>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row dashboard">
			<div class="col-md-12">
			 @yield('content')
			</div>
		</div>
	</div>	<!--/.main-->



	<script src="{{asset('dashboard_assets/js/js/custom.js')}}"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

@yield('foot')
</body>
</html>
