<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
 -->
 	<link rel="icon" href="{{ asset('/img/favicon.ico')}}" />
	<link rel="stylesheet" href="{{ asset('/css/reset.css')}}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('/css/dashboard.css')}}"> <!-- Resource style -->
 	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css')}}">
	

	<link rel="stylesheet" href="{{ asset('/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('/css/util/util.css')}}">


	<!--<script src="js/jquery.min.js"></script>-->
	<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('/js/modernizr.js')}}"></script> <!-- Modernizr -->
  	


    
	<title>IBS-IS | Home</title>
</head>
<body>
	<header class="cd-main-header">
		<a href="#0" class="cd-logo"><img src="{{ asset('/img/logo.png') }}" alt="Logo"></a>

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a> <!-- mobile -->

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<!-- <li><a href="#0">Link</a></li>
				<li><a href="#0">Link</a></li> -->
				<li class="has-children account">
					<a href="#0">
						<img src="{{ asset('/img/cd-avatar.png') }}" alt="avatar">
						{{ Session::get('name') }}

					</a>

					<ul>
						<li><a href="logout">Logout</a></li>
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
					<a href="admin-home">Home</a>
				</li>
				<!-- NOTIFICATIONS -->
				<li class="notifications">
					<a href="notifications">Notifications
						@if(count($editnotifs) > 0)
							<span class="count">
								{{ count($editnotifs) }}
							</span>
						@endif
					</a>
				</li>
				<!-- FACULTY -->
				<li class="has-children">
					<a href="#">Employee</a>
					
					<ul>
						<li><a href="search-employee-filter">View All or Search</a></li>
						<li><a href="add-faculty-employee">Add Faculty Record</a></li>
						<li><a href="add-staff-employee">Add Staff Record</a></li>
						<li><a href="generate-report">Generate Report</a></li>
						<li><a href="employee-upload-bulk-data">Upload Bulk Data</a></li>
						<li><a href="view-archive">Archives</a></li>
					</ul>
				</li>
				<li class="has-children">
					<a href="#0">Courses</a>
					
					<ul>
						<li><a href="view-course-select">View All or Search</a></li>
						<li><a href="add-course">Add Course</a></li>
						<li><a href="edit-course-select">Edit Course</a></li>
						<li><a href="delete-course-select">Delete Course</a></li>
					</ul>
				</li>
				<!-- ALUMNI -->
				<li class="has-children">
					<a href="#0">Graduate</a>

					<ul>
						<li><a href="add-graduate">Add a Record</a></li>
						<li><a href="search-graduate-filter">View All</a></li>
						<li><a href="graph">Visualize Data</a></li>
						<li><a href="graduate-upload-bulk-data">Upload Bulk Data</a></li>
					</ul>
				</li>
				<!-- USER LOGS -->
				<li>
					<a href="view-user-logs">User Logs</a>
				</li>

			</ul>

			<ul>
				<li class="action-btn" disabled><a href="#0">{{ Session::get('email') }}</a></li>
			</ul>

		</nav>

		<div class="content-wrapper">
			<!-- <h1>IBS Information System</h1> -->
			<!--<div class="container-fluid">-->
				@yield('content')
			<!--</div>-->

		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->

<script src="{{ asset('/js/jquery-2.1.4.js')}}"></script>
<script src="{{ asset('/js/jquery.menu-aim.js')}}"></script>
<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('/js/dashboard.js')}}"></script> <!-- Resource jQuery -->
<script>
	$(document).ready(function(e){
		$('.search-section .dropdown-menu').find('a').click(function(e){
			e.preventDefault();
			var concept = $(this).text();
			$('.search-section #input-getter').attr("placeholder", "Search by " + concept);


			if(concept == "Major"){
				$('.search-section #input-getter').attr("name", "major");
				$('.search-section form').attr("action", "{{ url('/search-graduate-major') }}");
			}
			else if(concept == "Master of Science Degree"){
				$('.search-section #input-getter').attr("name", "mscdegere");
				$('.search-section form').attr("action", "{{ url('/search-graduate-mscdegree') }}");
			}
			else if(concept == "Year Graduated"){
				$('.search-section #input-getter').attr("name", "yeargrad");
				$('.search-section form').attr("action", "{{ url('/search-graduate-yeargrad') }}");
			}
			else if(concept == "Current Company"){
				$('.search-section #input-getter').attr("name", "companyname");
				$('.search-section form').attr("action", "{{ url('/search-graduate-companyname') }}");
			}else if(concept == "Last Name"){
				$('.search-section #input-getter').attr("name", "lname");
				$('.search-section form').attr("action", "{{ url('/search-graduate-lname') }}");
			}
			
		});

		$('.btn').click(function(){
			var buttonID = $(this).attr('id');
			
			if(buttonID == 'search-confirm-del-button'){
				var emp = $(this).data('id').split(" ");				

				$('.getter').val(emp[0]);
				$('.modal-body').html("Are you sure you want to delete the record of <b>" + emp[1] + " " + emp[2] + "</b>?");
			}

			else if(buttonID == 'search-delete-button'){
				$('.search-result-btns').attr("action", "{{ url('/delete-graduate') }}");
				
			}
		});
			$(document).on('change', '.btn-file :file', function() {
		  var input = $(this),
		      numFiles = input.get(0).files ? input.get(0).files.length : 1,
		      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		  input.trigger('fileselect', [numFiles, label]);
		});

		$(document).ready( function() {
		    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
		        
		        var input = $(this).parents('.input-group').find(':text'),
		            log = numFiles > 1 ? numFiles + ' files selected' : label;
		        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
	});
	});
</script>

</body>
</html>