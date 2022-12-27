<!doctype html>
<html lang="en">

<head>
<title>:: HexaBit :: Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('backend/assets/css/color_skins.css')}}">
</head>

<body class="theme-orange">
    
    <!-- WRAPPER -->
	<div id="wrapper" class="auth-main">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="javascript:void(0);"><img src="{{ asset('backend/assets/images/icon-light.svg')}}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">HexaBit</a>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Documentation</a></li>
                            <li class="nav-item"><a class="nav-link" href="page-register.html">Sign Up</a></li>
                        </ul>
                    </nav>                    
                </div>
                <div class="col-lg-8">
                    <div class="auth_detail">
                        <h2 class="text-monospace">
                            Everything<br> you need for
                            <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">your Admin</div>
                                    <div class="carousel-item">your Project</div>
                                    <div class="carousel-item">your Dashboard</div>
                                    <div class="carousel-item">your Application</div>
                                    <div class="carousel-item">your Client</div>
                                </div>
                            </div>
                        </h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <ul class="social-links list-unstyled">
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="header">
                            <p class="lead">Recover my password</p>
                        </div>
                        <div class="body">
                            <p>Please enter your email address below to receive instructions for resetting password.</p>
                            <form class="form-auth-small" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">                                    
                                    <input type="email" class="form-control" id="signup-password" placeholder="Email" name="email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
                                <div class="bottom">
                                    <span class="helper-text">Know your password? <a href="{{ route('login') }}">Login</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <!-- END WRAPPER -->
    
  
    <script src="{{ asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>    
    <script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script>
    
    <script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>

