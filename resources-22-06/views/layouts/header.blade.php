<!doctype html>
<?php $url = url()->current();?>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Publinetis</title>
<!-- Meta for Responsive View port -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Preview page of Metronic Admin Theme #4 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
      
	<!-- Google fonts -->

	<!-- Icon font (Fpntell0) -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/fontello.css') }}" type="text/css"> 

	<!-- Bootstrap v4.2.1 -->
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/bootstrap.min.css') }}" type="text/css">  
	<!-- Responsive Tab -->
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/easy-responsive-tabs.css') }}" type="text/css">

	<!-- Owl Carousel v2.3.4 -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/owl.carousel.min.css') }}" type="text/css"> 
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/owl.theme.default.min.css') }}" type="text/css"> 

	<!-- Custom Comman css file -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/style.css') }}" type="text/css"> 
	<!-- Responsive css file -->  
	<link rel="stylesheet" href="{{ asset('assets/layouts/layout4/front/css/query.css') }}" type="text/css"> 

</head>

<body>

<!--Header-->
<header class="stick">
<div class="container">
<div class="row">
<div class="col-12 col-md-4">
<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('logo/Logo1.png') }}" style="width:266px !important;height:70px !important;"></a></div>
</div>
<div class="col-12 col-md-8">
<nav class="navbar navbar-expand justify-content-center justify-content-md-end">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'home') !== false) echo 'active';?>" href="{{ url('/') }}"><i class="icon-multiple-users-silhouette d-block d-md-none"></i><span class="d-none d-md-inline-block">About Us</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if(strpos($url, 'service') !== false) echo 'active';?>" href="{{ url('service') }}"><i class="icon-shopping-list d-block d-md-none"></i><span class="d-none d-md-inline-block">Services</span></a>
    </li>
<?php if(!empty(session('user_name'))){ ?>
    <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'interview') !== false) echo 'active';?>" href="{{ url('interview/1') }}"><i class="icon-manager d-block d-md-none"></i><span class="d-none d-md-inline-block">New interview</span></a>
    </li>
<?php  } ?>
<?php if(empty(session('user_name'))){ ?>
    <li class="nav-item">
      <a class="nav-link  <?php if(strpos($url, 'login') !== false) echo 'active';?>" href="{{ url('login') }}"><i class="icon-locked-padlock d-block d-md-none"></i><span class="d-none d-md-inline-block">Login</span></a>
    </li>
<?php  } else { ?>
 <li class="nav-item">
      <a class="nav-link" href="{{ url('logout') }}"><i class="icon-locked-padlock d-block d-md-none"></i><span class="d-none d-md-inline-block">Logout</span></a>
    </li>
<?php  } ?>
<?php if(empty(session('user_name'))){ ?>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('register') }}"><i class="icon-signup d-block d-md-none"></i><span class="d-none d-md-inline-block">Signup</span></a>
    </li>
<?php  } ?>
  </ul>
</nav>
</div></div>
</div>
</header>
<!-- /Header-->
