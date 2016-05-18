<!doctype html>
<html lang="gb">
<head>
	<title>Yeovill Youth Theatre</title>
	<meta name ="author" content="Matthew Barnett">
	<meta name ="generated by" content="me">
	<meta name ="description" content="This is Project 1, a brief introduction to HTML and CSS.">
	<meta name ="keywords" content="html, css, web design, bath, bath college">
	<meta name ="charset" content="utf-8">
	<link rel= "stylesheet" href= "css/styles.css" type= "text/css">

	<!-- Jquery start -->

	<link rel="stylesheet" href="css/styles.css" type="text/css">
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Jquery end -->

<script>
	//JQuery slideshow start

	  $('document').ready(function(){

	    setInterval(function() {
	      var imageObject = $('#slideshowImage');
	      var imagePosition = imageObject.css('left');

	      if(imagePosition == "0px"){
	        imageObject.animate({left: '-380px'});

	      }else if(imagePosition == "-380px"){
	        imageObject.animate({left: '-760px'});

	      }else if (imagePosition == "-760px"){
	        imageObject.animate({left: '-1140px'});

	      }else{
	        imageObject.animate({left: '0px'});

	      }
	    }, 1500);
	  });

	  //JQuery slideshow end
</script>


</head>
<body>
	<div id="header">
		<img src="assets/long logo.png"></img>
	</div>

	<div id="menu">
		<?php	include 'navmenu.php'?>
	</div>

	<div id="currentProductions">
		<!-- start slipsum code -->

	<p>Proin ut quam eros. Donec sed lobortis diam. Nulla nec odio lacus. Quisque porttitor egestas</p>

	<!-- end slipsum code -->

	<!-- ABOUT 15 WORD FIT HERE -->
	</div>

<div id="mainSlideShow">
	<div id="slideshowBox">
	<img src="assets/test full.png" id="slideshowImage"></img>
	<!--  PUT MARGIN AROUND SLIDESHOW	-->
	</div>
</div>
<div id="buttonWrapper">
	<div id="buttonOne">
		<a href="currentProduction.HTML">
		<img src="assets/currentProductionButton.png" class="button"></img>
	</a>
	</div>
	<div id="buttonTwo">
		<a href="joiningUs.HTML">
		<img src="assets/joiningUsButton.png" class="button"></img>
		</a>
	</div>
	<div id="buttonThree">
		<a href="fundraisers.HTML">
		<img src="assets/fundraisersButton.png" class="button"></img>
		</a>
	</div>
	<div id="buttonFour">
		<a href="sponsors.HTML">
		<img src="assets/sponsorsButton.png" class="button"></img>
		</a>
	</div>
</div>

<div id="aboutUs">
	<h1>Welcome to Yeovil youth theatre</h1>
	<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.</p>
</div>
<div id="ourSponsers"><div>

<div id="aboutUs"></div>
<div id="ourSponsers">
<?php
	include 'sponserBanner.php'
?>
	<div>
</body>
</html>
