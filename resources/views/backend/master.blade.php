<!doctype html>
<html lang="en">
<head>
<title>:: HexaBit :: Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

<link rel="stylesheet" href="{{ asset('backend/assets/vendor/charts-c3/plugin.css')}}"/>
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/chartist/css/chartist.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/toastr/toastr.min.css')}}">


<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/color_skins.css')}}">
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('backend/assets/images/icon-light.svg')}}" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

     
   @include('backend.body.header')
     
   @include('backend.body.sidebar')

   @yield('content')
    
</div>

<!-- Javascript -->
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{ asset('backend/assets/bundles/c3.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/chartist.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/vendor/toastr/toastr.js')}}"></script>

<script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/js/index.js')}}"></script>
</body>
</html>
