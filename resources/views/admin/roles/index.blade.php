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
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($roles as $role)
			<tr>
				<td>{{ $role->id }}</td>
				<td>{{ $role->name }}</td>
				<td>{{ $role->status }}</td>
				<td>
						<button type="button" class="btn btn-info btn-xs" id="myButton"
								data-toggle="modal" 
								data-target="#myModal" 
								data-id = "{{ $role->id }}"
								data-name = "{{ $role->name }}"
								data-status = "{{ $role->status }}"
								>Open Modal</button>
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
				<div class="modal-body">
					<p>Some text in the modal.</p>





				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	

<script type="text/javascript">
	$(document).ready(function(e){
		$('#myModal').on('click', function(ex){
			alert('sdfaf');
		});
		
		  alert("The paragraph was clicked.");

	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
