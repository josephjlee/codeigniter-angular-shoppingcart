<!doctype html>
<html class="no-js" ng-app="TawanCleanFit">
<head>
	<meta charset="utf-8">
	<title></title>

    <link href="<?php echo site_url('assets/img/icons/favicon.ico'); ?>" rel="shortcut icon">
    <link href="<?php echo site_url('assets/img/icons/touch.png'); ?>" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
</head>
<body ng-controller="selectionController">

	<header class="masthead">
	  <div class="container">
	  <div class="row">
	    <div class="main-header-logo">
		    <a href="/" class="brand">
		    <img src="https://fastwork-beta.s3.amazonaws.com/56ddb0dd674b32044b5b5aad/fw_5958_cleanfit.png">
		    </a>
		</div>
	  </div>
	  </div>
	</header>	  	  	
	  	
	<!-- Begin Navbar -->
	<div id="nav">
	  <div class="navbar navbar-default navbar-static-fixed">
	    <div class="container">
	      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
	      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      	<ngcart-summary></ngcart-summary>
	      </a>
	      <div class="navbar-collapse collapse">
	        <ul class="nav navbar-nav">
	          <li class="active"><a href="/"><i class="glyphicon glyphicon-home"></i> สินค้าทั้งหมด</a></li>
	          <li><a href="/"><i class="glyphicon glyphicon-dashboard"></i> เช็คสถานะออเดอร์</a></li>
	          <li><a href="#"><i class="glyphicon glyphicon-gift"></i> สถานที่จัดจำหน่าย</a></li>
	          <li><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> แจ้งชำระเงิน</a></li>
	          <li><a href="#"><i class="glyphicon glyphicon-user"></i> ติดต่อเรา</a></li>
	        </ul>
	        <ul class="nav pull-right navbar-nav">
	          <li><a href="#"><i class="glyphicon glyphicon-lock"></i> สมัครสมาชิก/เข้าระบบ</a></li>
	          <li class="dropdown">
	              <a data-toggle="dropdown" class="dropdown-toggle" href="#"><ngcart-summary></ngcart-summary> <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	              <ngcart-cart></ngcart-cart>
	              </ul>
              </li>
	        </ul>
	      </div>		
	    </div>
	  </div><!-- /.navbar -->
	</div>
