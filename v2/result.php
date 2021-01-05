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
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900|Lato:100,200,300,400,500,600,700,800,900|Montserrat:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900|Roboto:100,200,300,400,500,600,700,800,900|Open+Sans+Condensed:100,200,300,400,500,600,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900|Oswald:100,200,300,400,500,600,700,800,900">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>Horoscope</title>
	<style type="text/css">
		body {
    background: url("./assets/images/original.gif")no-repeat center center fixed;
   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
	</style>
</head>

<body>
<div class="container-fluid" id="result">
	<div class="row">
		<div class="col-sm-11 col-md-11 col-lg-11 center-block">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<img class="img-responsive center-block d-block" style="max-width:20%;" src="./assets/images/astrology.png">
				</div>
			</div>
			<br>
			<div class="row">
			  <div class="col-sm-10 col-md-10 col-lg-10 center-block" style="background: white;box-shadow: 0px 0px 10px 5px rgb(253, 254, 0);">
			  	<div class="row">
			  		<div class="col-sm-6 col-md-6 col-lg-6 center-block" style="background: white">
			  			<h2 style="margin-bottom: 2.5rem!important;margin-top: 2.5rem!important;font-size: 50px;font-family: Montserrat;padding-left: 30px;">Build your site on the <span class="color-red">most powerful eCommerce platform<span></h2>
		  				<div class="left-border">
		  					Customizable and agile, Magento gives your business the flexibility other platforms cannot. With Magento your business can:
		  					<ul>
		  						<li>Transform Customer Experiences</li>
		  						<li>Reduce Business Costs</li>
		  						<li>Get to Market Quickly</li>
		  						<li>Drive New Revenue Growth</li>
		  					</ul>
		  				</div>
			  		</div>
			  		<div class="col-sm-6 col-md-6 col-lg-6 center-block" style="background: white">
			  			<img src="./assets/images/book.jpg" style="display: block;margin-left: auto;margin-right: auto;width: 40%;margin-top: 25px;margin-bottom: 25px;">
			  		</div>
			  	</div>
			  	<hr>
			  	<div class="row">
			  		<div class="col-sm-12 col-md-12 col-lg-12" style="background: white">
			  			<div class="row">
			  				<div class="col-sm-2 col-md-2 col-lg-2 center-block">
			  					<figure class="figure">
								  <img src="./assets/images/signs/aquarius.png" class="figure-img img-fluid rounded">
								</figure>
			  				</div>
			  				<div class="col-sm-2 col-md-2 col-lg-2 center-block">
			  					<figure class="figure">
								  <img src="./assets/images/signs/aries.png" class="figure-img img-fluid rounded">
								</figure>
			  				</div>
			  				<div class="col-sm-2 col-md-2 col-lg-2 center-block">
			  					<figure class="figure">
								  <img src="./assets/images/signs/cancer.png" class="figure-img img-fluid rounded">
								</figure>
			  				</div>
			  				<div class="col-sm-2 col-md-2 col-lg-2 center-block">
			  					<figure class="figure">
								  <img src="./assets/images/signs/capricorn.png" class="figure-img img-fluid rounded">
								</figure>
			  				</div>
			  				<div class="col-sm-2 col-md-2 col-lg-2 center-block">
			  					<figure class="figure">
								  <img src="./assets/images/signs/gemini.png" class="figure-img img-fluid rounded">
								</figure>
			  				</div>
			  				<div class="col-sm-2 col-md-2 col-lg-2 center-block">
			  					<figure class="figure">
								  <img src="./assets/images/signs/leo.png" class="figure-img img-fluid rounded">
								</figure>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<br>
			  	<div class="row">
			  		<div class="col-sm-12 col-md-12 col-lg-12 center-block">
			  			<div class="row" style="background: #00224A">
			  				<div class="col-sm-4 col-md-4 col-lg-4 center-block">
					  			<img src="./assets/images/book.jpg" style="display: block;margin-left: auto;margin-right: auto;width: 40%;margin-top: 25px;margin-bottom: 25px;">
					  		</div>
					  		<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  			<h2 style="margin-bottom: 2.5rem!important;margin-top: 2.5rem!important;font-size: 30px;font-family: Montserrat;padding-left: 30px;color: white">Your <span class="color-red">PERSONALIZED SOUL PATH REPORT</span> will also reveal the things that are <span class="color-red">holding you back</span> in this lifetime… <br>And <span class="color-red">what</span> you can do to overcome them.</h2>
					  		</div>
			  			</div>
			  			<br>
			  			<div class="row">
			  				<div class="col-sm-12 col-md-12 col-lg-12">
			  					<div class="row">
					  				<div class="col-sm-12 col-md-12 col-lg-12">
					  					<h3><center>Here's what you’ll receive inside your <br><span class="color-red"> Personalized Soul Path Report:</span></center></h3>
					  				</div>
					  			</div>
					  			<br>
					  			<div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/taurus.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      This is a title
					  					    </h2>
					  					    <p class="paragraph">

					  					      Lorem ipsum dolor sit amet, consectetur adipisicing elit. At non ex earum, libero dignissimos voluptates. Quis beatae dolorem autem ipsa!
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/pisces.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      This is a title
					  					    </h2>
					  					    <p class="paragraph">

					  					      Lorem ipsum dolor sit amet, consectetur adipisicing elit. At non ex earum, libero dignissimos voluptates. Quis beatae dolorem autem ipsa!
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/virgo.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      This is a title
					  					    </h2>
					  					    <p class="paragraph">

					  					      Lorem ipsum dolor sit amet, consectetur adipisicing elit. At non ex earum, libero dignissimos voluptates. Quis beatae dolorem autem ipsa!
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/scorpio.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      This is a title
					  					    </h2>
					  					    <p class="paragraph">

					  					      Lorem ipsum dolor sit amet, consectetur adipisicing elit. At non ex earum, libero dignissimos voluptates. Quis beatae dolorem autem ipsa!
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/sagittarius.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      This is a title
					  					    </h2>
					  					    <p class="paragraph">

					  					      Lorem ipsum dolor sit amet, consectetur adipisicing elit. At non ex earum, libero dignissimos voluptates. Quis beatae dolorem autem ipsa!
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
			  				</div>
			  			</div>
			  			<div class="row" style="background: #00224A">
			  				<br>
			  				<div class="col-sm-12 col-md-12 col-lg-12">
				  				<div class="row">
					  				<div class="col-sm-12 col-md-12 col-lg-12">
					  					<h2 style="color: white"><center>Give your business the world's most <span class="color-red"> flexible platform.</span></center></h2>
				  					</div>
				  				</div>
					  			<div class="row">
					  				<div class="col-sm-12 col-md-12 col-lg-12 center-block">
					  					<div class="row">
					  						<div class="col-sm-3 col-md-3 col-lg-3 center-block">
		  									  	<figure class="figure">
												  <img src="./assets/images/discount.png" class="figure-img img-fluid rounded">
												  <figcaption class="figure-caption text-center" style="color: white">A caption for the above image.</figcaption>
												</figure>
					  						</div>
					  						<div class="col-sm-3 col-md-3 col-lg-3 center-block">
		  									  	<figure class="figure">
												  <img src="./assets/images/discount.png" class="figure-img img-fluid rounded">
												  <figcaption class="figure-caption text-center" style="color: white">A caption for the above image.</figcaption>
												</figure>
					  						</div>
					  						<div class="col-sm-3 col-md-3 col-lg-3 center-block">
		  									  	<figure class="figure">
												  <img src="./assets/images/discount.png" class="figure-img img-fluid rounded">
												  <figcaption class="figure-caption text-center" style="color: white">A caption for the above image.</figcaption>
												</figure>
					  						</div>
					  						<div class="col-sm-3 col-md-3 col-lg-3 center-block">
		  									  	<figure class="figure">
												  <img src="./assets/images/discount.png" class="figure-img img-fluid rounded">
												  <figcaption class="figure-caption text-center" style="color: white">A caption for the above image.</figcaption>
												</figure>
					  						</div>
										</div>
									</div>
					  			</div>
					  		</div>
				  		</div>
			  		</div>
			  	</div>
			  	<!-- <h1 id="headline-62-6917" style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  	tempor incididunt ut labore et dolore magna aliqua.</h1><br>
			  	<h1><center><img src="./assets/images/book.jpg" style="width: 25%"></center></h1>
			  	<p style="text-align: center;font-family: Montserrat;font-size: 20px;text-indent: 20px;word-spacing: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			  	consequat. </p>
			  	<hr>
			  	<p style="text-align: center;font-family: Montserrat;text-indent: 20px;word-spacing: 10px;"><h4>Duis aute irure dolor in reprehenderit in voluptate velit esse
			  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4></p>

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
			  	<h2 style="text-align: center;font-family: Montserrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
			  	<h2 style="text-align: center;font-family: Montserrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  	tempor incididunt ut labore et dolore magna aliqua.</h4>
			  	<hr> -->
			  </div>
			</div>
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
	$("#result").hide();
	$('body').append('<div id="loadingDiv"><div class="container"><br><div class="row"><div class="col-sm-6 col-md-6 col-lg-6 center-block"><center><h1 style="color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";">PREPARING YOUR SOUL</h1></center></div></div><div class="row"><div class="col-sm-10 col-md-10 col-lg-10 center-block"><video id="videoloader" playsinline="" autoplay="" loop="" muted="" src="./assets/images/Zodiac2.mp4"></video></div></div><br><div class="row"><div class="col-sm-8 col-md-8 col-lg-8 center-block"><h4 style="color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";"><center>Your Soul Reading Will Dive Into Parts Of Your Personality That Were Written Into Your Soul Since The Day You Were Born...</center></h4></div></div></div></div>');
$(window).on('load', function(){
  setTimeout(removeLoader, 5400); //wait for page load PLUS two seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
      $("#result").show();
  });  
}
</script>
</body>
</html>