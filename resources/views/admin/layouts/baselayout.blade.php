<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('admin.layouts.supports')
    @include('admin.layouts.supportScripts')
</head>

<body>
    <div class="container-fluid">
        @section('header')
        @show
    </div>


    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-xs-12 col-sm-2 sidebar-offcanvas" id="sidebar">
                @section('body-content-sidebar')
                @show
            </div>
            <div class="col-xs-12 col-sm-10">
                @section('body-content-content')
                @show
            </div>
        
        </div>
    </div>



    <div class="container">        
        @section('footer')        
        @show
    </div>
</body>