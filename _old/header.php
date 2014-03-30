<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>XK.IO - <?php echo $site_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $sd; ?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo $sd; ?>assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $sd; ?>assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $sd; ?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $sd; ?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $sd; ?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $sd; ?>assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Max<strong>Kaye</strong></a>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li class="<?php isActive("main");?>"><a href="<?php echo $sd; ?>">Main</a></li>
              <li class="dropdown <?php isActive("contact"); ?>">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  Contact
					  <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
				      <li class="nav-header">Email</li>
				      <a href="mailto:m@xk.io">m@xk.io</a>
				      <a href="mailto:max.kaye@gmail.com">max.kaye@gmail.com</a>
				  </ul>
			  </li>
        <?php /*<li class="dropdown <?php isActive("servers");?>">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  Servers
					  <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
				      <li class="nav-header">By Domain</li>
				      <a href="http://xk.io/">xk.io</a>
				  </ul>
			  </li> */ ?>
        <li class="<?php isActive("blog");?>">
          <a href="<?php echo $sd; ?>blog/">Blog | No Fit State</a>
        </li>
			  <li class="dropdown <?php isActive("projects");?>">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  Projects
					  <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
					  <a href="https://github.com/XertroV/MarketcoinWhitepaper">Marketcoin</a>
				    <a href="https://bitcoin.asn.au">Bitcoin Assn. of Aus.</a>
            <a href="#">OFES</a>
            <li class="nav-header">Inactive <b class="caret"></b></li>
            <a href="https://github.com/XertroV/lambsfry">Lambsfry</a>
            <a href="<?php echo $sd; ?>pres">Webcasts</a>
				  </ul>
			  </li>
			  <li class="dropdown <?php isActive("services");?>">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  Services
					  <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
					  <!--<li class="nav-header">Bitcoin Related</li>-->
            <a href="http://u.xk.io/">URL Minifyer</a>
				  </ul>
			  </li>
			  <li class="<?php isActive("about");?>">
				  <a href="<?php echo $sd; ?>about">About Max</a>
			  </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <header class="page-header">
		<div class="container">
			<h1><?php echo $site_page_title; ?></h1>
		</div>
	</header>

    <div class="container main-content">