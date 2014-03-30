<?php
require_once('../init.php');

$site_title = "Webcasts";
$site_page_title = "Webcasts";
$active = "projects";

require_once('../header.php');
?>
  <div class="conatiner-fluid">
	<div class="row-fluid">
		<div class="container">
			<h1>Watch?</strong></h1>
			<hr>
		</div>
		<!--<div class="span6 offset3">-->
		<div class="container" style="width:600px;">
			<div class="accordion" id="accordion-videos">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-videos" href="#collapseVideo0"><h3>Making Money - Part 1 [Vimeo]</h3></a>
						<a class="accordion-toggle" href="https://vimeo.com/49171109" target="_blank">Direct Link</a>
						<a class="accordion-toggle" href="making-money">Resources</a>
					</div>
					<div id="collapseVideo0" class="accordion-body collapse">
						<div class="accordion-inner">
							<p style="text-align:center"><iframe src="http://player.vimeo.com/video/49171109" 
								width="500" height="375" frameborder="0" 
								webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							</p>
						</div>
					</div>
				</div>
				<!--<div class="accordion-group">

				</div>-->
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<h1>Resources</h1>
		<hr>
	</div>
	<div class="span8 offset2">
		<p><a href="making-money"><h3>Making Money</h3></a>
			<strong>Part 1</strong> is primarily concerned with the money creation process (fiat money, fractional reserve banking, and interest) and who benefits from this. <br />
			<strong>Part 2</strong> is a conceptual introduction to Bitcoin, why it is such a significant achievement, and why it is superior to our current monetary systems.
		</p>
	</div>
</div>

<?php
require_once('../footer.php');

?>