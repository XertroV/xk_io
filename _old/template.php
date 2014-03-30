<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>XK.IO - <?php echo $site_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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
              <li class="active"><a href="/">Main</a></li>
              <li class="dropdown">
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
              <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  Servers
					  <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
				      <li class="nav-header">By Domain</li>
				      <a href="#">xk.io</a>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					  Projects
					  <b class="caret"></b>
				  </a>
				  <ul class="dropdown-menu">
					  <a href="/pres">Webcasts</a>
				      <a href="/cjdns">CJDNS Stuff</a>
				  </ul>
			  </li>
			  <li class="">
				<a href="/about">About Max</a>
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

      <div class="row">
        <div class="span12">
			  <div class="hero-unit">
				<p class="above">The personal site of</p>
				<h1>Max<strong>Kaye</strong></h1>
				<!-- <p><a class="btn btn-primary btn-large">About Max &raquo;</a></p> -->
			  </div>
        </div>
	  </div>
	  <?php echo $site_body; ?>
      <!-- Example row of columns -->
	  <!--
      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-warning" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-primary" href="#">View details &raquo;</a></p>
        </div>
      </div>
	  -->

      <hr>

      <footer>
        <p>&copy; Max Kaye 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
