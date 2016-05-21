@extends('facultyandstaff.admin.dash-admin')

@section('content')
		
	@if($deleteStatus)

		<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Successfully deleted the record!
    	</div>

	@endif

	@if($archiveStatus)

		<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Successfully archived the record!
    	</div>

	@endif

	@if($retrieveStatus)

		<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Successfully retrieved the record!
    	</div>

	@endif

	<div class="row">					
		<!-- SEARCH -->
		<div class="col-xs-12">
			<div class="search-section">
			<h4>Search</h4>
			<hr></hr>
			<div class="input-group">
				<div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by <span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Employee ID</a></li>
						<li><a href="#">Last Name</a></li>
						<li><a href="#">Position</a></li>
						<li><a href="#">Division</a></li>
					</ul>
				</div>
				<form class="form-horizontal" method="POST" action="{{ url('/search-employee-filter') }}">
					<input type="hidden" name="search_param" value="all" id="search-param">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<input type="text" id="input-getter" name="" placeholder="Select search filter" class="col-sm-11 control-label" style="text-align:left;"placeholder="Select search filter" >
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</form>
			</div>
			</div>
		</div>
		<!-- /search -->
	</div>

	@if(count($employees) > 0)
		@foreach ($employees as $e)
			<div class="row">
				<div class="col-xs-4">
					<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default search-results-panel">
							<div class="panel-body" onclick="viewProfile({{ $e->employeeNum }})" style="cursor: pointer;">
							
								<b>{{ $e->lastName }}, {{ $e->firstName }}</b>	
								<h5>
									{{ $e->emailAddress }} <br/>
									{{ $e->employeeNum }} <br/>
									{{ $e->position }} <br/>
									{{ $e->division }} <br/>
								</h5>
							</div>
						</div>
					</div>
					</div>

					<div class="row">
					<div class="col-sm-12">
						<form class="search-result-btns" method="POST" action="">
							<div id="main-search-result-btns" class="btn-group btn-group-sm" role="group" aria-label='...'>
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="employeeNum" value="{{ $e->employeeNum }}">
								
								<button type="submit" id="search-update-button" class="btn btn-default">Update Info</button>
								<button type="submit" id="search-upload-record-button" class="btn btn-default">Upload Record</button>
								<button type="button" id="search-confirm-archive-button" class="btn btn-default" data-toggle="modal" data-id="{{ $e->employeeNum }} {{ $e->firstName }} {{ $e->lastName }}" data-target="#confirm-archive-modal">
									Archive
								</button>	
								<button type="button" id="search-confirm-del-button" class="btn btn-danger" data-toggle="modal" data-id="{{ $e->employeeNum }} {{ $e->firstName }} {{ $e->lastName }}" data-target="#confirm-delete-modal">
									Delete
								</button>		
								
							</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		@endforeach

	@else
		<div>
			Employee not found.
		</div>
	@endif

	<!-- PAGINATION -->
	<div class="row">
		<div class="col-xs-12">
			<nav>
				<ul class="pagination pagination-sm">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span> </a></li>
					<li><a href="#">2</a>
					<li><a href="#">3</a>
					<li><a href="#">4</a>
					<li><a href="#">5</a>
					<li><a href="#">6</a>
					<li><a href="#" aria-label="Previous"><span aria-hidden="true">&raquo;</span></a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Delete Confirmation Modal -->
	<div class="modal fade" id="confirm-delete-modal" tab-index="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">Confirm Delete</div>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<form class="search-result-btns" method="POST" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input class="getter" type="hidden" name="employeeNum" value="">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" id="search-delete-button" class="btn btn-danger">Delete</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Archive Confirmation Modal -->
	<div class="modal fade" id="confirm-archive-modal" tab-index="-1" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">Confirm Archive</div>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<form class="search-result-btns" method="POST" action="">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input class="getter" type="hidden" name="employeeNum" value="">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" id="search-archive-button" class="btn btn-success">Archive</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
