<?php

$site_title = "";
$site_page_title = "";
$site_body = "";

$site_directory = "/";
$sd = $site_directory;

$active = "";

function isActive($test){
	global $active;
	if ($active==$test){
		echo "active";
	}
}

?>