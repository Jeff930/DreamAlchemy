<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>Horoscope</title>
	<style type="text/css">
		body {
  background-image: url("./assets/images/original.gif");
  background-size:100%;
    background-repeat: repeat-y;
    background-attachment: fixed;
    height:100%;
    width:100%;
}
	</style>
</head>

<body>
<div class="container" id="123">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<img class="img-responsive center-block d-block" style="max-width:20%;" src="./assets/images/astrology.png">
		</div>
	</div>
	<br>
	<div class="box2">
	  <div class="col-sm-10 col-md-10 col-lg-10" style="background: white">
	  	<h1 id="headline-62-6917" style="text-align: center;font-family: Open Sans Light Italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  	tempor incididunt ut labore et dolore magna aliqua.</h1><br>
	  	<h1><center><img src="./assets/images/book.jpg" style="width: 25%"></center></h1>
	  	<p style="text-align: justify;font-family: Open Sans Light Italic;font-size: 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	  	<table class="table table-borderless" height="125" width="1037">
	  	<tbody>       
	  	<tr>
	  		<th rowspan="2"><img src="./assets/images/book.jpg" style="width: 100%"></th>
	  		<td><a href="#"><img src="./assets/images/add_to_cart.png" style="width: 50%"></a></td> 
	  		<td><img src="./assets/images/discount.png" style="width: 25%"></td> 
	  	</tr> 
	  	<tr>
	  		<td><img src="./assets/images/logo.png" style="width: 25%"></td> 
	  		<td><img src="./assets/images/add_to_cart.png" style="width: 50%"></td> 
	  	</tr>
	  	</tbody>
	  	</table>
	  	<br>
	  	<h2 style="text-align: center;font-family: Open Sans Light Italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  	tempor incididunt ut labore et dolore magna aliqua.</h4>
	  	<br>
	  	<ul class="list-group">
	  	    <li class="list-group-item"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> First item</li>
	  	    <li class="list-group-item"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Second item</li>
	  	    <li class="list-group-item"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Third item</li>
	  	</ul>
	  	<br>
	  	<table class="table table-borderless" height="125" width="1037">
	  		  	<tbody>       
	  		  	<tr>
	  		  		<th rowspan="2"><img src="./assets/images/book.jpg" style="width: 60%"></th>
	  		  		<td><img src="./assets/images/discount.png" style="width: 25%"></td> 
	  		  	</tr> 
	  		  	<tr>
	  		  		<td><img src="./assets/images/add_to_cart.png" style="width: 40%"></td> 
	  		  	</tr>
	  		  	</tbody>
	  		  	</table>
	  	<br>
	  	<h2 style="text-align: center;font-family: Open Sans Light Italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	  	tempor incididunt ut labore et dolore magna aliqua.</h4>
	  	<hr>
	  </div>
	</div>
	<br>
	<br>
		<footer>
			<div class="col-sm-6 col-md-6 col-lg-6 center-block" id="footer">
				<a href="#">Terms</a>&nbsp;<span style="color: white">|</span>&nbsp;<a href="#">Privacy</a>&nbsp;<span style="color: white">|</span>&nbsp;<a href="#">Disclamer</a><span style="color: white">&nbsp;|&nbsp;</span><a href="#">Contact</a>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-10 col-md-10 col-lg-10 center-block">
					<p style="color: white;text-align: center;">Copyright © 2020 Dream Alchemy</p>
				</div>
			</div>
			<br>
		</footer>
</div>

<script src="./assets/js/jquery-3.5.1.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("#123").hide();
	$('body').append('<div id="loadingDiv"><div class="container"><br><div class="row"><div class="col-sm-6 col-md-6 col-lg-6 center-block"><center><p style="color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";font-size: 25px">PREPARING YOUR SOUL</p></center></div></div><div class="row"><div class="col-sm-10 col-md-10 col-lg-10 center-block"><video id="videoloader" playsinline="" autoplay="" loop="" muted="" src="./assets/images/Zodiac2.mp4"></video></div></div><br><div class="row"><div class="col-sm-6 col-md-6 col-lg-6 center-block"><p style="color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";font-size: 18px">Your Soul Reading Will Dive Into Parts Of Your Personality That Were Written Into Your Soul Since The Day You Were Born...</p></div></div></div></div>');
$(window).on('load', function(){
  setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
      $("#123").show();
  });  
}
</script>
</body>
</html>