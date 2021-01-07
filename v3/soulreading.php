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
    font-size: 30px;
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
    font-size: 23px;
    text-transform: capitalize;
	padding-top: 10px;
	width: 100% ;
    text-align: center;
	font-size: 35px;
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

	<div class="galaxy-video-container">
		<video autoplay loop playsinline muted  id="bg-hero"> 
		<source src="../assets/video/astronomical.mp4" type="video/mp4">
		<source src="../assets/video/astronomical.ogg" type="video/ogg">
		</video>
	 </div>



 <section id="first">
<div class="container-fluid" id="soul">
	<br>
	<br>
	<form method="post" action="./result.php">
		<div class="row">
			<div class="col-sm-11 col-md-11 col-lg-11 center-block">
				<div class="row">
					<div class="col-sm-10 col-md-10 col-lg-10 center-block" style="background: rgba(255,255,255,0.5);box-shadow: 0px 0px 10px 5px #33383e;">
						<div class="row">
							<br>
							<div class="col-sm-12 col-md-12 col-lg-12">
								<center><img src="./assets/images/taurus.png" alt=""></center>
	  							<h1 id="heading" class="center-block"><center style="color: #fb3535">YOUR ASTROLOGICAL DREAM READING RESULT</center></h1>
							</div>
							<br>
						</div>
						<div class="row">
							<div class="col-sm-10 col-md-10 col-lg-10 center-block">
								<h6 style="text-align: justify;text-indent: 30px;font-family: Montserrat">Hi <?php echo $_SESSION["name"]; ?>, thank you so much for being here with me. Now there are many great laws in this universe such as the law of attraction, the law of rhythm , and the law of gestation just to name a few.
								And the force of planetary alignment is just as powerful. The alignment of the planets dictates the flow of energy through out earth.
								As the planets came in alignment the day you were born, you were affecting by this special force. And you were given a sign that plays a big part in your life force.
								Understanding your sign is one of best ways to discover your natural advantages when it comes to using the law of attraction to manifest your desires. 
								Now let's talk about your sign and how you can start using your hidden gifts to manifest your desires</h6>
								<hr>
								<ul class="list-group">
									  	    <li class="list-group-item" style="background: #fdcbeb9c;font-family: Montserrat"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Summary of sign
								As a Taurus you are one of the most reliable signs in the zodiac. You make a good friend, a business partner, and a loyal romantic partner. You are well grounded, and many of your ideas are sound and logical. You believe in a practical way of life and you are always working towards a strong foundation of stability.
								Now let's get into what natural advantages you have when using the law of attraction.</li>
									  	    <li class="list-group-item" style="background: #fdcbeb9c;font-family: Montserrat"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Advantages to using sign in synchronicity with law of attraction
								As a Taurus, your biggest advantage when it comes to manifesting your desires is persistence. Regardless of how negative things may get you have a relentless ability to stay focused on the bigger picture and your vision. While other signs may get off track in the face of negativity, you, the Taurus charge through these situations and you always manage to stay connected to your inner being.
								Here are some things that may be working against you if you are trying to harness the law of attraction to your liking</li>
									  	    <li class="list-group-item" style="background: #fdcbeb9c;font-family: Montserrat"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> The disadvantages you may face (manifestation blockages) 
								'All that glitters isn't gold". As a Taurus you may find yourself attracted to beauty that may be toxic to your well being.
								You can easily become swayed by an attractive person, yet you may find they have mental baggage, create negativity in your environment, or they are just a bad influence for you. And they keep you coming back for more.
								The same can go for your career, you may find yourself attracted to big paychecks, but you also find that it hasn''t been getting you anywhere, or you aren't really working towards your dreams.</li>
									  	</ul>
									  	<hr>
								<h6 style="text-align: justify;font-family: Montserrat">As a Taurus you must be aware of your persistence and your habit of charging towards things that sparkle, but leave you feeling empty.
								Because beauty has a way of making you distrust your intuition and inner being. Making it easy to strive towards desires that are great at the surface, but bad underneath.

								Now if you have certain desires that may be out of reach, I want to introduce you to a ground breaking method to accelerate your manifestations. I want to introduce you to the powerful art of dream alchemy.
								This breakthrough on how to use the law of attraction is as big as when the subject was released into the mainstream media.
								This powerful method has been used in civilizations such as ancient egypt, ancient india, has been shared among shamans many many years go. Click this link so I can reveal the same secrets that have been shared among many sacred circles.</h6>
									  	<br>
							</div>
						</div>
						<div class="row" style="display:none;">
							<div class="col-sm-10 col-md-10 col-lg-10 center-block">
								<video width="600" style="display:block; margin: 0 auto;" controls>
					            <source src="./assets/images/mov_bbb.mp4" type="video/mp4">
					            <source src="./assets/images/mov_bbb.ogg" type="video/ogg">
					        	</video>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6 center-block">
								<input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">		
							<br>
							<button type="submit" class="btn btn-primary btn-lg btn-block" name="Submit">I Want To See My Reading</button>
							<br>
							</div>
						</div>
						<div class="row">
						<p id=section-title>What is the Number 1 Biggest Challenge in your Life?<p>
						<div id= "row-btn">
						<div class="block-btn">
								<button class="global-btn">My Lovelife</button>
								<button class="global-btn">My My Health</button>
								<button class="global-btn">My Family</button>
							<button class="global-btn">My Finances</button>
							<button class="global-btn">My Work</button>
						
							<p id= section-caption> (Click on one of the options above to proceed to the next step of your reading) </p>
						</div>
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
<script src="./assets/js/jquery-3.5.1.js"></script>
<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("#soul").hide();
	$('body').append('<div id="loadingDiv"><div class="container"><br><div class="row"><div class="col-sm-6 col-md-6 col-lg-6 center-block"><center><h1 style="color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";">PREPARING YOUR ASTROLOGICAL DREAM</h1></center></div></div><div class="row"><div class="col-sm-10 col-md-10 col-lg-10 center-block"><video id="videoloader" playsinline="" autoplay="" loop="" muted="" src="./assets/images/Zodiac2.mp4"></video></div></div><br><div class="row"><div class="col-sm-8 col-md-8 col-lg-8 center-block"><h4 style=";color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";"><center><?php echo $_SESSION["name"]; ?>,We Are Preparing Your ASTROLOGICAL DREAM READING Will Dive Into Parts Of Your Personality That Were Written Into Your Soul Since The Day You Were Born...</center></h4></div></div></div></div>');
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
</script>
</body>
</html>