<!doctype html>

<!-- Przy stronach div nie ustawiac overflow: hidden tekst wtedy miga przy najechaniu na rog -->
<html>
<head>
	<title>Biomed Resource Product Offerings Brochure</title>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="keywords" content="flip book, book, page, flip, effect, jquery, html5, magazine, pageflip, flipbook, pagefliper, newspaper, ipad, iphone, android, ios, mpc, massivePixelCreation">
	<meta name="description" content="HTML Flip Book is a jQuery powered magazine components which lets you easily create: books, magazines and newspapers.">
	
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/page-styles.css">
		
	<style type="text/css">
		body {
			background-image: url('http://www.mpcreation.pl/flipbook/html/patterns/p23.jpg');
		}
	</style>
	
	<?php include_once('php/settings.php'); ?><?php

?>

	<!-- Scripts -->
	<script type="text/javascript" src="js/swfobject2.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/turn.js"></script>
	<script type="text/javascript" src="js/flipbook.js"></script>
	<script type="text/javascript" src="js/jquery.doubletap.js"></script>
	<script type="text/javascript" src="js/jquery.color.js"></script>
	
	
</head>
<body>

<div id="flipbook-container-1" class="flipbook-container">
	
	<!-- Flip book -->
	<div id="flipbook-1" class="flipbook">
		<!-- Start Flip Book Pages -->
		
		<!-- Cover -->
		<div class="fb-page">
			<div class="page-content">
				<div class="container">
					<img src="pages/front.jpg" class="bg-img" />
					<img src="pages/front-zoomed.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
		
		<!-- Pages 2 & 3 -->
		<div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/1.jpg" height="600" class="bg-img"/>
					<img src="pages/1.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
		<div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/2.jpg" height="600" class="bg-img"/>
					<img src="pages/2.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/3.jpg" height="600" class="bg-img"/>
					<img src="pages/3.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/4.jpg" height="600" class="bg-img"/>
					<img src="pages/4.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/5.jpg" height="600" class="bg-img"/>
					<img src="pages/5.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/6.jpg" height="600" class="bg-img"/>
					<img src="pages/6.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/7.jpg" height="600" class="bg-img"/>
					<img src="pages/7.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/8.jpg" height="600" class="bg-img"/>
					<img src="pages/8.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/9.jpg" height="600" class="bg-img"/>
					<img src="pages/9.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/10.jpg" height="600" class="bg-img"/>
					<img src="pages/10.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
        <div class="fb-page double">
			<div class="page-content">
				<div class="container">
					<img src="pages/11.jpg" height="600" class="bg-img"/>
					<img src="pages/11.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
		
		<!-- Back Cover -->
		<div class="fb-page">
			<div class="page-content">
				<div class="container">
					<img src="pages/back.jpg" class="bg-img"/>
					<img src="pages/back-zoomed.jpg" class="bg-img zoom-large"/>
				</div>
			</div>
		</div>
		
		<!-- end Flip Book Pages -->
		
	</div> <!-- end Flip Book -->
	
	<!-- Flip Book Navigation -->
	<div id="fb-nav-1" class="fb-nav mobile spread">
		<ul>
			<!-- <li class="toc round">Table Of Content</li> -->
			<li class="zoom round">Zoom</li>
			<li class="slideshow round">Slide Show</li>
			<li class="show-all round">Show All Pages</li>
		</ul>
				
	</div> <!-- end FLip Book Nav -->
</div> <!-- end Flip Book Container -->

</body>
</html>
