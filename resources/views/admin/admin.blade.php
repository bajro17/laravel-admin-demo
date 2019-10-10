<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Forms - Ready Bootstrap Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{asset('myasset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{asset('myasset/css/ready.css')}}">
	<link rel="stylesheet" href="{{asset('myasset/css/demo.css')}}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.html" class="logo">
					Admin Demo
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <span >{{ Auth::user()->name }}</span></span> </a>
							<ul class="dropdown-menu dropdown-user">

									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					
					<ul class="nav">
						<li class="nav-item {{ Request::is('practice/*') || Request::is('practice') ? 'active' : ''}}">
							<a href="{{route('practice.index')}}">
								<i class="la la-dashboard"></i>
								<p>Practices</p>
							</a>
						</li>
						<li class="nav-item {{Request::is('employee/*') || Request::is('employee') ? 'active' : ''}}">
						<a href="{{route('employee.index')}}">
									<i class="la la-dashboard"></i>
									<p>Employees</p>
								</a>
							</li>
							<li class="nav-item {{Request::is('field/*') || Request::is('field')? 'active' : ''}}">
									<a href="{{route('field.index')}}">
										<i class="la la-dashboard"></i>
										<p>Fields of Practice</p>
									</a>
								</li>

					</ul>
				</div>
			</div>
			@yield('content')
			</div>
		</div>
	</div>
	<!-- Modal -->
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
</body>
<script src="{{asset('myasset/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('myasset/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('myasset/js/core/popper.min.js')}}"></script>
<script src="{{asset('myasset/js/core/bootstrap.min.js')}}"></script>

<script src="{{asset('myasset/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>

<script src="{{asset('myasset/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('myasset/js/ready.min.js')}}"></script>
</html>