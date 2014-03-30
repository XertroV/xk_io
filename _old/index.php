<?php
require_once('init.php');

$site_title = "Main";
$site_page_title = "Main";
$active="main";

require_once('header.php');
?>

  <div class="row">
    <div class="span12">
		  <div class="hero-unit">
			<p class="above">The personal site of</p>
			<h1><span style="font-weight:200">Max</span><strong style="font-weight:900">Kaye</strong></h1>
			<!-- <p><a class="btn btn-primary btn-large">About Max &raquo;</a></p> -->
		  </div>
    </div>
  </div>

  <div class="row">
  	<div class="span6">
  		<h3>Identities</h3>
  		<ul>
  			<li>
  				<strong>Bitcoin:</strong> 1MaxKayeQg4YhFkzFz4x6NDeeNv1bwKKVA
			</li>
			<li>
				<strong>GPG:</strong> <a href="/gpg">https://xk.io/gpg</a>
  			</li>
  		</ul>
  	</div>
  	<div class="span6">
  		<h3>Recent Updates</h3>
  		<ul>
  			<li>
  				<a href="/wp/FactumExchange.md">No Fit State: Factum Exchange</a>
  			</li>
  			<li>
  				<a href="http://u.xk.io/">URL Minifyer - Lambsfry</a>
  			</li>
  			<li>
  				<a href="/wp/FactumMoney.md">No Fit State: Factum Money</a>
  			</li>
  		</ul>
  	</div>
  </div>

<?php
require_once('footer.php');

?>
