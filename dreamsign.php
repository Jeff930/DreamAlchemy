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
	<link rel="stylesheet" href="./v3/assets/css/style.css">
	<?php include("./v3/styles.php"); ?>
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
	<?php include("./v3/meta.php"); ?>
	<?php include("./v3/header.php"); ?>
	<!-- <div class="galaxy-video-container">
		<video autoplay loop playsinline muted  id="bg-hero"> 
		<source src="./assets/video/astronomical.mp4" type="video/mp4">
		<source src="./assets/video/astronomical.ogg" type="video/ogg">
		</video>
	 </div> -->

<!-- <div style="background-image: url(https://wallpapercave.com/wp/wp3504574.jpg);height:500px;width:100%">
	<h3 id="heading" class="center-block"><center>YOUR ASTROLOGICAL DREAM READING RESULT</center></h3>

</div> -->
<!-- <div style="background-image: url(https://wallpapercave.com/wp/wp3504574.jpg"> -->
<div style="background-color:black">
<div class="container-fluid" id="soul">
	<form method="post" action="./disadvantages.php" id="soulreading-form">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 center-block">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-9 center-block" style="margin-top:50px">
						<div class="row">
							<br>
							<div class="col-sm-12 col-md-12 col-lg-12">
								<h3 id="heading" class="center-block"><center>Your Dream Sign Revealed!</center></h3>
							</div>
							<br>
						</div>
						<div class="row"  style="margin-top:50px;">
            <div class="col-sm-12 col-md-12 col-lg-6">
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Your dream sign is…
								</h6>
								<br>

								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 27px"><strong>The Smith</strong>
								</h6>
								<br>

								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Now the two rings represent many things. First off, the two rings is a strong representation of devotion.
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">If you are able to remember any of your dreams, you may recall dreaming about your goals and aspirations. Your goals in life are a big priority of yours. Remember, a smith’s job is to “mold”, “shape”, and “create”. In your dreams you’ll find yourself creating the type of world and place where your goals already exist.
								</h6>
								<br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">As a smith, you may realize your dreams are about love and romance. If they are not about your current lover, it is because deep down you have a strong desire that is not being fulfilled.
								</h6>
                <br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">The two colored rings represent great polarization in your dreams. Meaning you may find yourself in the middle of nightmares or ecstasy-filled dreams.
								</h6>
                <br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Your dreams may be the key to wealth and financial freedom. Inside your dreams lies many hidden treasures. As you dream your mind becomes flooded with new inventions, solutions, and inspiration for new ideas. If you are able to one-day master the art of dreaming. You’ll find that you are able to use your dreams as a source for innovation and creation for the non-dreaming world. You may also recognize yourself playing the role of a knight. Coming to the rescue for people and in situations. In your dreams it is in your nature to play a heroic role.
								</h6>
                <br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">If you ever find yourself flying or in new lands. It is because you are a natural explorer with great curiosity.
								</h6>
                <br>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 center-block">
								<img src="./assets/images/astrology-signs/Thesmith-Acuario-Purple.png" style="padding-left: 30px;padding-right:30px;" class="center-block">
							</div>
						</div>
						<br>						
					</div>
				</div>
        <div class="row" style="margin-top:50px;">
					<div class="col-sm-12 col-md-12 col-lg-9 center-block">
						<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 center-block">
								<img src="./assets/images/astrology-signs/Thesmith-Acuario-Purple.png" style="padding-left: 30px;padding-right:30px;" class="center-block">
							</div>
              <div class="col-sm-12 col-md-12 col-lg-6">
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 27px"><strong>Dream Power</strong>
								</h6>
								<br>

								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">The ability to create other worlds
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Introduction to the art of dreaming: From all walks of life, shamans, witches, magicians, and others from different religions have been able to create entirely new worlds inside the alternate reality of the dream world. Doing so has enabled them to summon the power to create, control, and direct kingdoms. With the great power of world-crafting, they have been able to unleash a force to be reckoned with within their own spirit.
								</h6>
								<br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">As a smith, you have the unlimited potential and power to create a powerful world. To where, anytime you dream, you may enter this world.
								</h6>
                <br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Your greatest talent when it comes to the art of dreaming is that you are able to create a world full of love. Where everyone you come in contact with will respond to you with great friendship and devotion towards your goals.
								</h6>
                <br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Your dreams may be the key to wealth and financial freedom. Inside your dreams lies many hidden treasures. As you dream your mind becomes flooded with new inventions, solutions, and inspiration for new ideas. If you are able to one-day master the art of dreaming. You’ll find that you are able to use your dreams as a source for innovation and creation for the non-dreaming world. You may also recognize yourself playing the role of a knight. Coming to the rescue for people and in situations. In your dreams it is in your nature to play a heroic role.
								</h6>
                <br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Right now your spirit has been pulled, pushed, and shoved around in a false sense of reality. Where people bring-forth false promises, no commitment, and their own agendas. By grasping your power as a smith, you’ll change your inner blueprint, and spirit to automatically change the minds of people as they come into your presence.
								</h6>
                <br>
							</div>
						</div>
						<br>
					</div>
				</div>
        <div class="row" style="margin-top:50px;">
					<div class="col-sm-12 col-md-12 col-lg-9 center-block">
						<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 27px"><strong>Relationships:</strong>
								</h6>
								<br>

								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">When entering the dream world, continue to paint, and craft a world where your purest idea of a relationship exists. You must look deep within yourself and find the truest feelings of your ideal relationship. And create every detail all the way from looks, to the way this person makes you feel. Learn to enjoy a personal and soulmate like relationship in this space within your dreams. And you will be able to unleash a vibration of love and unleash a signal of love with every person you speak to. Eventually drawing love, devotion, and romance to you.
								</h6>
								<br>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 center-block">
								<img src="./assets/images/astrology-signs/Thesmith-Acuario-Purple.png" style="padding-left: 30px;padding-right:30px;" class="center-block">
							</div>
						</div>
						<br>						
					</div>
				</div>
        <div class="row" style="margin-top:50px;">
					<div class="col-sm-12 col-md-12 col-lg-9 center-block">
						<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 center-block">
								<img src="./assets/images/astrology-signs/Thesmith-Acuario-Purple.png" style="padding-left: 30px;padding-right:30px;" class="center-block">
							</div>
            <div class="col-sm-12 col-md-12 col-lg-6">
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 27px"><strong>Friendships:</strong>
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">In order to create wonderful friendships, you must envision all the qualities you look for inside friendships. And with every dream, you must encircle yourself with different types of friends. Surround yourself with friends inside your dreams that bring you pure positivity, laughter, guidance, warmth, joy, and great company. When you awaken from each dream embrace yourself for the new emotions that arise from within and bask in all the friendly emotions and relationshps you made inside your dream world. What will happen is that you will begin to draw many different types of relationships towards you. Any ill intentioned person will be cursed upon arrival within your presence. And your spirit will send them on their way.
								</h6>
								<br>
							</div>
						</div>
						<br>						
					</div>
				</div>
        <div class="row" style="margin-top:50px;">
					<div class="col-sm-12 col-md-12 col-lg-9 center-block">
						<div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6">
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 27px"><strong>In Business:</strong>
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">For many centuries, the tribe of smiths have been able to dream of wealth, creation, and innovation. And unknowingly bring a stables form of trade, business, and resources into real life. Today this translates into being able to create a business that results in stability and wealth.
                </h6>
								<br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Use your natural talents and let your mind drift into a world where you have the wealth that you want. As you continue to dream in this way, you will discover new inventions, business ideas, and concepts within your dreams. When you exit your dreams, your spirit will naturally call people to you and enable their spirit to communicate with you to create a world where business shapes into your reality.
                </h6>
								<br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">As you continue living, breathing and thinking of business within the dream world. You will attract ideas and people in your waking reality. That will eventually transform your reality for good.
                </h6>
								<br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Now if you have certain desires that may be out of reach, I want to introduce you to a ground breaking method to accelerate your manifestations. I want to introduce you to the powerful art of dream alchemy. This breakthrough on how to use the law of attraction is as big as when the subject was released into the mainstream media. This powerful method has been used in civilizations such as ancient egypt, ancient india, has been shared among shamans many many years go. 
                </h6>
								<br>
							</div>
              <div class="col-sm-12 col-md-12 col-lg-6 center-block">
								<img src="./assets/images/astrology-signs/Thesmith-Acuario-Purple.png" style="padding-left: 30px;padding-right:30px;" class="center-block">
							</div>
						</div>
						<br>						
					</div>
				</div>
        <div class="row">
					<div class="col-sm-12 col-md-12 col-lg-9 center-block">
						<div class="row">
							<br>
							<div class="col-sm-12 col-md-12 col-lg-12">
								<h3 id="heading" class="center-block"><center>The Secret of Dream Alchemy</center></h3>
							</div>
							<br>
						</div>
						<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Dream Alchemy is the powerful art of reshaping your world by first creating it, then living it. Now that you have more awareness about your dream sign. There is a secret art that I wish to share with you. 
								</h6>
								<br>
								<h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">When it comes to manifestation, we are taught to endure long visualization sessions, told to read countless books, pages and pages of theory on the law of attraction, and sometimes we are told to listen to an audio that claims to change your neuro pathways…
								</h6>
								<br>
                <h6 style="text-align: justify;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">The list goes on.
								</h6>
                <br>
							</div>
						</div>
						<br>						
					</div>
				</div>
        <div class="row">
					<div class="col-sm-12 col-md-12 col-lg-9 center-block">
						<div class="row">
							<br>
							<div class="col-sm-12 col-md-12 col-lg-12">
								<h3 id="heading" class="center-block"><center>What you’re about to discover on the next page will…</center></h3>
							</div>
							<br>
						</div>
						<div class="row"  style="margin-top:50px;">
            <div class="col-sm-12 col-md-12 col-lg-6">
								<h6 style="text-align: center;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Open the lions mouth to great wealth…
								</h6>
								<br>
								<h6 style="text-align: center;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Show you a fast reality-shifting key…
								</h6>
								<br>
                <h6 style="text-align: center;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">And show you how to use the power that creates worlds…
                </h6>
                <br>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-6 center-block">
              <h6 style="text-align: center;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Reveal your soulmates metaphysical fingerprint…
								</h6>
								<br>
								<h6 style="text-align: center;font-family: Open Sans;color:white;padding-left: 30px;padding-right: 30px;font-size: 18px">Reveal how to delete and dispel negativity…
								</h6>
								<br>
							</div>
						</div>
						<br>						
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
 });}
</script>
</body>
</html>