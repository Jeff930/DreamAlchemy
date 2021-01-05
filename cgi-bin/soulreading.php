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
	<br>
	<br>
	<!-- <div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 center-block">
			<p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div> -->
	<form method="post" action="./result.php">
	<div class="box">
	  <div class="col-sm-8 col-md-8 col-lg-8" style="background: white">
	  	<br>
	  		<center><img src="./assets/images/taurus.png" alt=""></center>
	  	<h1><center style="color: #5c5c3d">YOUR SOUL READING RESULT</center></h1>
	  	<br>
	  	<h6 style="text-align: justify;text-indent: 30px;">Hi there, thank you so much for being here with me. Now there are many great laws in this universe such as the law of attraction, the law of rhythm , and the law of gestation just to name a few.
And the force of planetary alignment is just as powerful. The alignment of the planets dictates the flow of energy through out earth.
As the planets came in alignment the day you were born, you were affecting by this special force. And you were given a sign that plays a big part in your life force.
Understanding your sign is one of best ways to discover your natural advantages when it comes to using the law of attraction to manifest your desires. 
Now let’s talk about your sign and how you can start using your hidden gifts to manifest your desires</h6>
<hr>
<ul class="list-group">
	  	    <li class="list-group-item" style="background: #fdcbeb9c;"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Summary of sign
As a Taurus you are one of the most reliable signs in the zodiac. You make a good friend, a business partner, and a loyal romantic partner. You are well grounded, and many of your ideas are sound and logical. You believe in a practical way of life and you are always working towards a strong foundation of stability.
Now let’s get into what natural advantages you have when using the law of attraction.</li>
	  	    <li class="list-group-item" style="background: #fdcbeb9c;"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> Advantages to using sign in synchronicity with law of attraction
As a Taurus, your biggest advantage when it comes to manifesting your desires is persistence. Regardless of how negative things may get you have a relentless ability to stay focused on the bigger picture and your vision. While other signs may get off track in the face of negativity, you, the Taurus charge through these situations and you always manage to stay connected to your inner being.
Here are some things that may be working against you if you are trying to harness the law of attraction to your liking…</li>
	  	    <li class="list-group-item" style="background: #fdcbeb9c;"><span class="pull-left "><img src="./assets/images/flower.jpg" style="width: 30px" class="img-reponsive img-rounded" /></span> The disadvantages you may face (manifestation blockages) 
“All that glitters isn’t gold". As a Taurus you may find yourself attracted to beauty that may be toxic to your well being.
You can easily become swayed by an attractive person, yet you may find they have mental baggage, create negativity in your environment, or they are just a bad influence for you. And they keep you coming back for more.
The same can go for your career, you may find yourself attracted to big paychecks, but you also find that it hasn’t been getting you anywhere, or you aren’t really working towards your dreams.</li>
	  	</ul>
	  	<hr>
<h6 style="text-align: justify;">As a Taurus you must be aware of your persistence and your habit of charging towards things that sparkle, but leave you feeling empty.
Because beauty has a way of making you distrust your intuition and inner being. Making it easy to strive towards desires that are great at the surface, but bad underneath.

Now if you have certain desires that may be out of reach, I want to introduce you to a ground breaking method to accelerate your manifestations. I want to introduce you to the powerful art of dream alchemy.
This breakthrough on how to use the law of attraction is as big as when the subject was released into the mainstream media.
This powerful method has been used in civilizations such as ancient egypt, ancient india, has been shared among shamans many many years go. Click this link so I can reveal the same secrets that have been shared among many sacred circles.</h6>
	  	<br>
	  	<video width="600" style="display:block; margin: 0 auto;" controls>
	            <source src="./assets/images/mov_bbb.mp4" type="video/mp4">
	            <source src="./assets/images/mov_bbb.ogg" type="video/ogg">
	        </video>
	        <br>

	<!-- <div class="row">
		<div class="col-sm-6 col-md-6 col-lg-6 center-block">
			<video width="600" style="display:block; margin: 0 auto;" controls>
	            <source src="./assets/images/mov_bbb.mp4" type="video/mp4">
	            <source src="./assets/images/mov_bbb.ogg" type="video/ogg">
	        </video>
        </div>
	</div> -->
	
				<input type="text" class="form-control" name="email" id="email" placeholder="Enter your email">		
			<br>
				<button type="submit" class="btn btn-primary btn-lg btn-block" name="Submit">I want to see my reading</button>
			<br>
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