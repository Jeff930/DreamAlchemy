<!-- <?php

// Start the session
session_start();

if(isset($_POST["name"])){
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["mobths"] = $_POST["mobths"];
	$_SESSION["day"] = $_POST["day"];
	$_SESSION["year"] = $_POST["year"];
}

?> -->
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
	<link rel="stylesheet" href="../assets/css/style.css">
	<?php include("../styles.php"); ?>
	<title>Horoscope</title>
	<style type="text/css">


.galaxy-video-container{
position: fixed ;
top: 0;
left: 0;
right: 0;
bottom: 0;
display: block;
overflow: hidden;
/* z-index: -1; */
}
h2 {
    font-size: 28px;
    font-weight: 300;
}
.global-btn {
  border: 3px;
  color: white;
  padding: 8px 67px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
    margin-top: 0px;
    height: 50px;
    align-items: center;
    text-align: center;
	justify-content: center;
	border-style: solid;
	border-color: #d3d3d3;
    border-radius: 15px;
    width: 100%;
    height: 65px;
    font-size: 16px;
    font-weight: 600;
    color: #ffff;
font-family: 'Raleway';
border-radius: 2.5rem;
}

.global-btn {
  background-color:#412a58; 
  border: 2px solid #787878;
  max-width: 250px;
min-width: 250px;
}
.global-btn:hover {
    background-color: #E7BFFC;
    color: black;
transition-duration:2s;
}
#section-title {
    font-family: 'Lato Semibold';
    color: #ffff;
    text-transform: capitalize;
	padding-top: 10px;
	width: 100% ;
    text-align: center;
	font-size: 24px;
}
div#row-btn {
    margin: auto;
    width: 50%;
    margin-bottom: 20px;
    margin-top: 20px;
}
#section-caption {
    font-family: 'Lato Semibold';
	padding-top: 10px;
	width: 100% ;
    text-align: center;
}
.col-sm-10.col-md-10.col-lg-10.center-block {
    border-radius: 20px;
}
.col-sm-12.col-md-12.col-lg-12 {
    margin-top: 30px;
}
#videoloader{
  width: 100%

}
button.btn.btn-primary.btn-lg.btn-block {
    border-radius: 2.5rem;
    width: 100%;
    height: 65px;
    line-height: 65px;
    padding: 0;
    font-family: 'Raleway';
    font-weight: 600;
    background: #412a58;
    outline: none !important;
    transition: all 0.3s ease;
	box-shadow: 0px 0px 6px 3px #bba2c7;
}
button.btn.btn-primary.btn-lg.btn-block:hover {
    background-color: #E7BFFC;
    color: black;
transition-duration:2s;
}

.form-control {
    border: 1px solid #ced4da;
    border-radius: 1.25rem;
    font-family: 'Raleway';
    font-weight: 600;
    height: 55px;
    box-shadow: 0px 0px 6px 3px #E7BFFC;
}
.form-control:hover {
background-color: #E7BFFC;
color:white;
transition:0.5s;
}

@media only screen and (max-width: 1024px) and (min-width: 769px) {
  div#row-btn {
    width: 66%!important;
}
}
@media only screen and (max-width: 768px) and (min-width: 426px) {
  div#row-btn {
    width: 82%!important;

}
}
@media only screen and (max-width: 425px) and (min-width: 376px) {
  div#row-btn {
    width: 82%!important;
}
}
@media only screen and (max-width: 375px) and (min-width: 321px) {
  div#row-btn {
    width: 82%!important;
}
}
@media only screen and (max-width: 320px) and (min-width: 300px) {
  div#row-btn {
    width: 82%!important;
}
}
video {
  min-height: 100%;
  min-width: 100%;
}



</style>

</head>

<body>
	<?php include("../meta.php"); ?>
	<?php include("../header.php"); ?>
	<!-- <div class="galaxy-video-container">
		<video autoplay loop playsinline muted  id="bg-hero"> 
		<source src="./assets/video/astronomical.mp4" type="video/mp4">
		<source src="./assets/video/astronomical.ogg" type="video/ogg">
		</video>
	 </div> -->

<!-- <div style="background-image: url(https://wallpapercave.com/wp/wp3504574.jpg);height:500px;width:100%">
	<h3 id="heading" class="center-block"><center>YOUR ASTROLOGICAL DREAM READING RESULT</center></h3>

</div> -->
<div style="background-image: url(https://wallpapercave.com/wp/wp3504574.jpg">
<div class="container-fluid" id="soul">
	<form method="post" action="./resultsign.php" id="soulreading-form">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-9 center-block" style="margin-top:50px">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 center-block">
						<!-- <div class="row">
							<br>
							<div class="col-sm-12 col-md-12 col-lg-12">
								<h3 id="heading" class="center-block"><center>YOUR ASTROLOGICAL DREAM READING RESULT</center></h3>
								<center><img id="horoscope-image" class="horoscope-image"></center>
							</div>
							<br>
						</div> -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6">
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 22px"><strong>Dearest <?php echo $_SESSION["name"]; ?>,</strong>
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">I want to thank you for joining me on this dream discovery of your very own sign. 
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">As promised, here is your astrological dream sign reading.
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Now there are many great laws in this universe such as the law of attraction, the law of rhythm , and the law of gestation just to name a few.
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">And the force of planetary alignment is just as powerful. The alignment of the planets dictates the flow of energy through out earth. 
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">As the planets came in alignment the day you were born, you were affected by this special force. And you were given a sign that plays a big part in your life force and your destiny.
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Understanding your sign is one of best ways to discover your natural advantages when it comes to using the law of attraction to manifest your desires. 
								</h6>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6">
								<img src="./assets/images/logo.png" style="padding-left: 30px;padding-right:30px" class="center-block">
							</div>
						</div>
						<!-- <div class="row" style="display:none;">
							<div class="col-sm-10 col-md-10 col-lg-10 center-block">
								<video width="600" style="display:block; margin: 0 auto;" controls>
					            <source src="./assets/images/mov_bbb.mp4" type="video/mp4">
					            <source src="./assets/images/mov_bbb.ogg" type="video/ogg">
					        	</video>
							</div>
						</div> -->
						<br>
						<div class="row" style="margin-top:60px">
							<div class="col-sm-6 col-md-6 col-lg-4 center-block">
								<input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" style="width:100%;height:55px;background-color: white" required>		
							<br>
								<!-- <button type="button" name="Submit" class="btn btn-primary btn-lg btn-block" onclick="foo()"><a href="resultsign.php">I Want To See My Reading</a></button> -->
								<a href="resultsign.php"><button type="button" name="Submit" class="btn btn-primary btn-lg btn-block">I Want To See My Reading</button></a>
							<br>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<br>
<br>
<br>
</div>
<script src="./assets/js/jquery-3.5.1.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/sign.js"></script>
<script type="text/javascript">
	$("#soul").hide();
	$('body').append('<div id="loadingDiv"><div class="container"><br><div class="row"><div class="col-sm-10 col-md-10 col-lg-10 center-block"><video id="videoloader" playsinline="" autoplay="" loop="" muted="" src="./assets/images/Zodiac2.mp4"></video></div></div><br><div class="row"><div class="col-sm-6 col-md-6 col-lg-6 center-block"><center><h3 style="color: white;font-family: "Tangerine";">Preparing The Results...</h3></center></div></div></div></div>');
$(window).on('load', function(){
  setTimeout(removeLoader, 5400); //wait for page load PLUS two seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
      $("#soul").show();
  });  
}


function foo () {
  console.log("called");
  $.ajax({
    url:"sendmail.php", //the page containing php script
    type: "POST", //request type
    success:function(result){
    	console.log(result);
   }
 });
}
</script>
</body>
</html>