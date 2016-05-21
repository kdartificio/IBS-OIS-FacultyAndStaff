<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
 -->
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/dashboard.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>IBS-IS</title>
</head>
<body>
	<header class="cd-main-header">
		<a href="home" class="cd-logo"><img src="{{asset('/img/logo.png')}}" alt="Logo"></a>
		<a href="#" class="cd-nav-trigger">Menu<span></span></a>
		<nav class="cd-nav">
			<ul class="cd-top-nav">

				<li class="has-children account">
					<a href="#0">
						<img src="{{Session::get('avatar')}}" alt="avatar">
						<?php
							
							$enum = Session::get('userEmp')['employeeNum'];
							$emp = DB::table('employees')->where('employeeNum', '=', $enum)->get();
						?>

						{{ Session::get('userEmp')['firstName'] }} {{ Session::get('userEmp')['lastName'] }}
					</a>

					<ul>
						<li><a href="faculty-profile">My Profile</a></li>
						<li><a href="logout">Logout</a>

						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">Menu</li>
				<li>
					<a href="home">Home</a>
				</li>
				<li>
					<a href="faculty-profile">My Profile</a>
				</li>
				<!-- NOTIFICATIONS -->
				<li class="notifications">
					<a href="faculty-notifications">Notifications
						<?php 
							$total = count($approvedCount) + count($declinedCount) + count($editNoticeCount);
						?>
						@if($total!=0)
							<span class="count">
								{{ $total }}
							</span>
						@endif
					</a>
				</li>
				<li>
					<a href="schedule">View Schedule</a>
				</li>

			</ul>
		</nav>

		<div class="content-wrapper">
			<div class="container-fluid">

				@yield('content')

			</div>
				

		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/dashboard.js"></script> <!-- Resource jQuery -->
<script>
	$(document).ready(function(e){
		$('.search-panel .dropdown-menu').find('a').click(function(e){
			e.preventDefault();
			var param = $(this).attr("href").replace("#", "");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
</script>
</body>
</html>