@extends('admin.layouts.baselayout')
@section('title','Role Index')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
	{{-- @include('admin.layouts.content') --}}
	<h1>Admin > Role > </h1>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Status</th>
				<th>Action
					<button type="button" class="btn btn-success btn-xs myNewRecord pull-right" 
						data-dismiss="modal"
						data-toggle="modal" 
						data-target="#myModal"
					>New</button>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($roles as $role)
			<tr>
				<td>{{ $role->id }}</td>
				<td>{{ $role->name }}</td>
				<td>{{ $role->status }}</td>
				<td>
						<a href="" class="btn btn-warning btn-xs" >Preview</a>
						<a class="btn btn-info btn-xs myUpdateButton" id="myButton"
								data-toggle="modal" 
								data-target="#myModal" 
								data-id = "{{ $role->id }}"
								data-name = "{{ $role->name }}"
								data-status = "{{ $role->status }}" 
								>Update</a>
						{!! Form::open(['method'=>'DELETE', 'route'=>['roles.destroy', $role], 'style'=>'display:inline']) !!}                                        
                        	{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-xs')) }}                    
                    	{{ Form::close() }}
						{{--  <a href="{{ route('roles.destroy', ['role' => $role])}}" class="btn btn-danger btn-xs" >Delete</a>  --}}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>










		<!-- Trigger the modal with a button -->
	



	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<form id="frm" method="POST" action="{{ url('post_job') }}">

				<div class="modal-body">
					

						<div class="row">
							<div class="col-lg-2">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" id="sizing-addon3">id</span>											
								<input type="text" class="form-control" name="id" id="id" aria-label="..." placeholder="id" readonly>
								</div><!-- /input-group -->
							</div><!-- /.col-lg-6 -->

							<div class="col-lg-6">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" id="sizing-addon3">name</span>											
									<input type="text" class="form-control" name="nm" id="nm" aria-label="..." placeholder="Enter name...">
								</div><!-- /input-group -->
							</div><!-- /.col-lg-6 -->
							
							<div class="col-lg-4">
								<div class="input-group input-group-sm">
									<span class="input-group-addon" id="sizing-addon3">Status</span>											
									<input type="text" class="form-control" name="st" id="st" aria-label="..." placeholder="Enter status...">
								</div><!-- /input-group -->
							</div><!-- /.col-lg-6 -->
						</div><!-- /.row -->


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary mySubmitButton" data-dismiss="modal">Update</button>
				</div>
					
				</form>
			</div>
		</div>
	</div>
	

<script type="text/javascript">

	$(document).ready(function(){
		var id;
		var nm;
		var st;



		$('.myUpdateButton').on('click', function() {

			id = $(this).data('id');
			nm = $(this).data('name');
			st = $(this).data('status');
			//alert('fdsf:'+ id + nm + st);
			

			$('input[name="id"]').val(id); 
			$('input[name="nm"]').val(nm); 
			$('input[name="st"]').val(st); 

		});



		$('.mySubmitButton').on('click', function() {
			id = $('#id').val().trim();
			nm = $('#nm').val().trim();
			st = $('#st').val().trim();

			//var u = '{{url("/newRole")}}';
			var u ="{{ route('roles.store') }}";
			var t = '{{csrf_token()}}';

	 		$.ajax({
		      	method:'post',
		      	url: u,      
		      	data: {rid: id, rnm: nm, rst: st, _token: t},
		      	success: function(msg){	    			            
		            console.log("Message: "+msg['data']+", name: " + msg['nm']+', status: '+msg['st']);
		    	},
		    	error: function (data) {
	                console.log('Error:', data);
	            }
			}); //end of ajax 
			

		});

	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
