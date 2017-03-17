<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('meta-title')</title>
    <meta name="description" content="@yield('meta-desc')">
    <meta name="author" content="@yield('meta-author')">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="/assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
     <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>



			
	    <div class="main-panel">
			<nav class="navbar navbar-default navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
				
					</div>
					<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-left">
					 
		      <li>
		        <a href="{{ url('/') }}" class="simple-text">
				<img style="" src="images/myambunet.png" alt="">	
				</a>
			  </li>
			
	              @if (Auth::user() ? Auth::user()->role->id === 1 : '')
	          <li>
	          <a href="{{ url('/admin') }}">Admin</a>
	          </li>
	              @endif
           </ul>
						{{-- <div class="collapse navbar-collapse"> --}}
						<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">view_list</i>
									<p class="hidden-lg hidden-md">Lists</p>
								</a>
								<ul class="dropdown-menu dropdown-menu-right">
		                            
		                            @if (Auth::user())
		                           <li>
                                    <a href="{{ url('/test/') }}">
		                            <i class="fa fa-medkit"></i> Available Medics</a></li>
		                            @endif
		                            <li class="divider"></li>
		                            <li>
		                            <a href="{{ url('/openschedules/') }}">
		                            <i class="fa fa-list-alt"></i> Open Schedules</a></li>
		                            
		                            
		                        </ul>
							</li>
							<li>
								<a href="{{ url('/list/') }}"> {{-- class="dropdown-toggle" data-toggle="modal" data-target="#myModal"> --}}
								<i class="material-icons">date_range</i>
									<p class="hidden-lg hidden-md">Schedules</p>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="material-icons">message</i>
									<span class="notification">7</span>
									<p class="hidden-lg hidden-md">Messages</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">15</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
                                <ul class="dropdown-menu" role="menu">

                                	{{-- <li>&nbsp&nbsp Joe Tester</li>  --}}
                                    <li> &nbsp&nbsp&nbsp{{ Auth::user()->name }}
                                    @if (Auth::user())
                                    <a href="{{ url('/users/') }}">&nbsp
                                    <i class="fa fa-user-circle"></i>&nbsp Profile</a></li>
                                    @endif
                                    <hr>
                                    <li><a href="#"><i class="fa fa-credit-card"></i> Subscription</a></li>
                                    <hr>
                                    <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope-o"></i>   Email Us</a></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            
                                            <i class="fa fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
							</li>
							@endif
						</ul>
					</div>
				</div>
			</nav>
			<br><br>

        @yield('content')               
    </div>
     </script>
      <script>
        @if (notify()->ready())
            swal({
                  title: "{!! notify()->message() !!}",
                  type: "{!! notify()->type() !!}",
                  @if (notify()->option('timer'))
                    timer: "{!! notify()->option('timer') !!}",
                    showConfirmButton: true,
                  @endif
                  html: true
                });
        @endif
    </script>

</body>

	<!--   Core JS Files   -->
	<script src="/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="/assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="/assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="/assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="/assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found /assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
