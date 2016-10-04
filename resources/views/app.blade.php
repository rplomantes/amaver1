<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        @if (Auth::guest())
        <title>AMA University Online</title>
        @else
	<title>{{ Auth::user()->fname }} {{ Auth::user()->lname }} - AMA University</title>

	 <script>
            
//         var explode = function(){
         
//         $.get('/checksession',function(data){
//             if(data=="false"){
//                 document.location='auth/logout';
//             }
//         })
//         setTimeout(explode, 2000);
//     }
//            setTimeout(explode, 2000);
//        </script>	

        @endif
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/fileinput.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/jquery-ui-min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/jquery-ui-theme.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
       
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('/script/fileinput.js')}}"></script>
<script src="{{asset('/script/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('/script/jquery-ui.min.js')}}"></script> 
</head>
<body> 
<div class= "container-fluid">
        <div class="col-md-12">
         <img class ="img-responsive" style ="margin-top:10px;" src = "{{ asset('/images/AMAOnlineEduc.png') }}" alt="AMA Online" />
        </div>
        </div>
 
       <nav class="navbar navbar-default" style="background-color: maroon;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                                <li><a href="http://www.amauonline.com">AMA University Online</a></li>
				<li><a href="http://portal.amauonline.com">My Portal</a></li>
				<li><a href="http://lms.amauonline.com">My Class</a></li>
				</ul>

                            <ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->fname }} {{ Auth::user()->lname }}<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	
<footer class="footer">
<div class="container_fluid">
<p class="text-muted"> Copyright 2015, AMA University All Rights Reserved.</p>
</div>
</footer>
   
</body>
</html>
