@extends('layouts.useapp')
@section('content')


<br><br>
<!-- Start Contact Modal -->
	<!-- Modal Core -->
<div class="">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		{{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
		<h4 class="modal-title" id="myModalLabel"></h4>
	  </div>
	  <div class="modal-body">
			<div class="section landing-section">
	                <div class="row">
	                    <div class="col-md-12">
							<h2 class="text-center description"> 
							<i class="material-icons">date_range</i> Schedules</h2>
	                   <form class="" role="search">
	                           <button type="submit" class="btn btn-info btn-round btn-just-icon pull-right">
											<i class="material-icons">search</i><div class="ripple-container"></div>
								</button>
							<div class="form-group  is-empty">
							<input type="text" class="form-control" placeholder="Search">
							<span class="material-input"></span>

							</div>
										
						 </form>
	                    </div>
	                </div>

	        </div>
	  </div>
	  <div class="modal-footer">
		{{-- <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button> --}}
	  </div>
	</div>
  </div>
</div>
<!-- End Contact Modal -->

@endsection