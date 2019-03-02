@extends('admin.layouts.baselayout')
@section('title','Admin Home')

@section('header')
	@include('admin.layouts.navbar')
@endsection

@section('body-content-sidebar')
    @include('admin.layouts.sidebar')

@endsection

@section('body-content-content')
	{{-- @include('admin.layouts.content') --}}

	<a href="{{ route('roles.index') }}" class="btn btn-warning">Roles</a>

<script type="text/javascript">
	$(document).ready(function(e){
		
	});  
</script>

@endsection

@section('footer')
	@include('admin.layouts.footer')
@endsection
