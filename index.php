<?php
	include 'template/template.php';
	echo $header;
	echo $nav;
	$title = 'Welcome';
	$side1 = 'Learn More';
	$side2 = 'Gardening Tips';
	$side3 = 'Get in Touch';
	$intro = 'Introduction';
	include 'content/home.html';
	echo $footer;
?>