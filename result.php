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
		 #videoloader{
  		width: 100%

}
@media only screen and (max-width: 425px) {
.col-sm-12.col-md-12.col-lg-12 {
    text-align: center;
}
.figure-img {
    width: 100px;
}
p.paragraph {
    text-align: justify;
	font-size: 14px;
}
img.img-responsive.center-block.d-block {
    max-width: 35%!important;
}
.section {
    display: unset;
}
}

	
	</style>
</head>

<body>
<div class="galaxy-video-container">
		<video autoplay loop playsinline muted  id="bg-hero"> 
		<source src="assets/video/astronomical.mp4" type="video/mp4">
		<source src="assets/video/astronomical.ogg" type="video/ogg">
		</video>
	 </div>

<div class="container-fluid" id="result">
	<div class="row">
		<div class="col-sm-11 col-md-11 col-lg-11 center-block">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<img class="img-responsive center-block d-block" style="max-width:20%;" src="./assets/images/astrologicalwheel.png">
				</div>
			</div>
			<br>
			<div class="row">
			  <div class="col-sm-10 col-md-10 col-lg-10 center-block" style="background: rgb(255 255 255 / 0.9);box-shadow: 0px 0px 10px 5px #f8f9fa;">
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
					  					  <img src="./assets/images/signs/aries.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					     Aries
					  					    </h2>
					  					    <p class="paragraph">

											  Mars, your powerful ruler, begins the year in adventurous, knowledge-seeking Sagittarius, so right away you’re interested in seeing new sights and learning about new cultures. This sets the tone for a year filled with exciting activities that could take you beyond the limits of your comfort level and to the stars.

												The emotional, motherly moon plays a large role in how you get along with your family, and the full moon and lunar eclipse in Cancer early in January put familial relationships front and center. This is the time to finally try to gain a sense of security in this area, especially if you’ve been having issues with your mom (recently or for your entire life).

												When the sun shines brightly in your competitive sign between late March and April, it seems as though everything between you and your friends turns into a competition. You’re motivated to put your best foot forward, but does that have to be at the expense of the people closest to you? You can be a wonderfully loyal and reliable friend if you put your own success second.

												Aries and your ruler Mars both govern the head and brain areas of your body, so when Mars is involved in tense transits, headaches or migraines or general brain fogginess can be an issue. An Aries new moon at the end of March makes you want to give in to impulse, and this can be an exciting, high-energy time. Your body will want to move forward at maximum speed, but your brain will need some time to catch up.
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
					  					      Pisces
					  					    </h2>
					  					    <p class="paragraph">

											  As a mutable water sign, you don’t like to make waves. You prefer to go with the flow instead of against it, but standing up for yourself in 2020 offers you the most successful outcome.

												Neptune, your home planet, is an outer planet and therefore not always a major part of the big planetary news. But for you, because it’s in your sign for all of 2020, you’re affected by its influence quite a bit.

												A bright spot of the year is when the sun passes through your creative sign from the end of February until the end of March, so be sure to celebrate your birthday in true Pisces style! Being by the water soothes you, so perhaps a beach trip would be the perfect celebration. You thrive living in your own little dream world, and at the beach you can capture the solitude you crave.

												Your life often has a dreamlike quality, but this year you can be shaken out of it during Neptune’s retrograde cycle from late June to the end of November. There will be realities to face now, and things will resurface that you’ve been pushing down emotionally, but you’re up to the task this year, Pisces. Take it slow and let your intuition guide you when you’re unsure.

												Dynamic Mercury joins the sun in outgoing Leo at the start of August, so if it’s been a while since you were in touch with a beloved family member, reach out to them now. You’ll never be sorry for taking the initiative where family is concerned, Pisces. Fun and warm Leo energy is especially good around children, so interact with the young members of your family now as much as possible.
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/aquarius.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      Aquarius
					  					    </h2>
					  					    <p class="paragraph">

											  You’re an innovator and a pioneer, but as a fixed sign you also want things your way. Can this interesting combination of energies work for you in 2020? Yes, Aquarius, it can!

												The winter sun always passes through your sign at the start of the year, so from the end of January until the end of February, you get to celebrate being the amazing humanitarian and innovator that you were born to be! All your good qualities are exposed to the light now, and your confidence soars. Let the world know you’re not afraid to show off your exceptional talents.

												Rebellious Uranus, your home planet, is paired up with slow and steady Taurus this whole year, however, which isn’t the most harmonious partnership. The measured, conservative, and traditional energy of the Bull can try to slow you down, but it can’t completely stop you. Will you perhaps consider some things this year that you wouldn’t normally? Yes. Does this mean you’ll lose that infamous Aquarian edge? Not a chance.

												You’re a sign who loves to communicate, schmooze, network, and make new friends, and chatty Mercury’s retrograde cycles try to hinder that banter that you love so much. The three retrograde cycles to be aware of this year hit from mid-February to early March, mid-June to mid-July, and mid-October to early November. Another thing to remember is that all these retrograde cycles touch down in emotional water signs, just like last year, so using your intuition will be the key to avoiding a lot of Mercury retrograde.
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
					  			<div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/capricorn.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      Capricorn
					  					    </h2>
					  					    <p class="paragraph">

											  You’re one of the most ambitious signs around, and this year you won’t stop until you’ve reached as many of your goals as humanly possible.

												Your home planet Saturn arrived in your practical sign back in December of 2017 and continues that trip for part of this year, but you also experience a stellium at the start of the year, which is a very special occurrence when three or more heavenly bodies are in one sign (and this time it’s yours, as the sun, Jupiter, Saturn, and Pluto all line up together until the end of January). To say that you’re focused on your goals now might be the biggest understatement of the year!

												There’s a sun-Saturn conjunction in your sign in the middle of January that makes you extra motivated to reach your goals, so be sure to include your health goals on that list of priorities as well. Do you want to get in better shape in general? Run a marathon? Become a boxer? Taking your physical goals seriously now will help you reach them.

												Your power planet’s retrograde period begins in mid-May after having moved back into free-thinking Aquarius (toward the end of March). After all your hard work earlier in the year, this retrograde cycle gives you a little bit of breathing room and provides the opportunity to think about things you might do over if you get the chance.

												The sun is in loyal Taurus from late April until late May, making you extra vigilant when it comes to protecting your friendships. Honesty is an important factor now, and jealousy might play a role in tensions with friends. Being a good friend means being happy for them when something good happens to them, and if you aren’t, Capricorn, you should look within to try to understand why you’re not, and vice versa.
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
					  					      Sagittarus
					  					    </h2>
					  					    <p class="paragraph">

											  You love to learn, explore, and expand your mind, Sagittarius, and 2020 has lots of opportunities for you to do those things and more!

												Your ruler Jupiter has incredibly mind-expanding energy, and because it spends most of the year in dedicated, practical Capricorn, you can learn a lot when you’re willing to settle down and get serious. You can be more mature and look at your responsibilities with the long term in mind in 2020, and ambition, persistence, and dedication are some of your greatest strengths now.

												Your home planet goes through its retrograde period between mid-May and mid-September, offering a chance for profound inner growth, which is something you kind of live for. This is a time to tune out the distractions of your everyday life in order to focus on what your inner consciousness has to say. You have deep philosophical questions, and now is the time to get some answers.

												Dreamy Neptune spends the entire year in Pisces, the sign it rules, so you might spend a lot of time idealizing your current friendships and/or looking at other people as though they’re so lucky to have the circle of friends they have. And the truth lies somewhere in the middle. When you realize that no one’s relationships are perfect, you can start to appreciate your own friendships for their little imperfections.
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
					  					      Scorpio
					  					    </h2>
					  					    <p class="paragraph">

											  You’re a fixed water sign, which means you can be more resistant to change than others. However, this year has some intriguing twists and turns, and everyone knows you can’t resist a good mystery!

												Mars, your powerful co-ruler along with Pluto, spends the entire second half of the year (from the end of June) in powerful Aries, the other sign it rules. You can gain a lot of positive momentum now because of the Ram’s unwillingness to quit. The exception to this will be the planet’s retrograde period from the second week of September to the middle of November, when you’ll want to spend some time examining your motivations for past actions.

												Pluto is in steady Capricorn all year and goes retrograde for five months starting in late April, bringing some amazingly transformational possibilities. When Pluto is retrograde, you get to know yourself in a much more intimate way, as brutal as the truth may be. Going deep within your subconscious can uncover a lot of demons, Scorpio, but it’s better you know they’re there than to have them rise to the surface at inopportune times.

												Giving and accepting advice continues to be on your friendship/family agenda as Saturn, the wise teacher of the universe, spends some retrograde time in Capricorn again in late fall. You give your opinions and advice easily to trusted friends and family members, but when it comes to receiving advice and taking other people’s opinions to heart, well, that isn’t as easy for you. Use Saturn’s introspective retrograde period to figure out what your limitations are in this area and how you can learn to change your ways.
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
								  <div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/libra.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      Libra
					  					    </h2>
					  					    <p class="paragraph">

											  Hard worker Saturn sets the overall mood this year, and it holds steady in earthy Capricorn, the sign it rules, until the end of March. The beginning of the year is a time to keep plodding away at your plans and goals with an eye toward completion.

												The sun enters powerful Aries at the end of March, putting you in an enthusiastic, energetic mood. If your circle of friends needs an organizer, you’re the one who makes the calls and gets the party started now. You might also be feeling more competitive than usual, so don’t turn a little friendly game between friends into an all-out war.

												Because you’re represented by the Scales, so it will be important for you to maintain your work/life balance this year, as well as maintain a literal sense of balance regarding your health. Air signs can get aches and pains out of nowhere, but just as quickly as they come on, they can leave. However, just because you don’t have any major physical pain doesn’t mean that everything’s okay, so always get miscellaneous aches and pains checked out.

												Your home planet, lovely Venus, starts 2020 in innovative Aquarius, so you might be willing to experiment with love and money. Venus quickly moves into creative, caring Pisces in the middle of January, however, so you should continue to have imaginative (if not a bit idealized) thoughts about how to do things a little differently.
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
					  					      Virgo
					  					    </h2>
					  					    <p class="paragraph">

											  Virgo, you’re ruled by quick-moving Mercury, master of information and communication. You’re a mutable sign motivated by common sense, perhaps this year more than ever, and your extraordinary attention to detail can lead to a very successful 2020.

												There are three Mercury retrograde periods to be aware of: mid-February to early March, mid-June to early July, and mid-October to early November. All touch down in the intuitive water signs of Pisces, Cancer, and Scorpio, respectively. While Mercury retrograde is never convenient, you should be able to tap into your gut instincts to rise above the usual chaos and confusion that your retrograde home planet can cause.

												Determined Saturn is in responsible Capricorn through the end of March, and you can apply this hardworking energy to improving your reputation within your family. Are you already looked at as the “responsible” one, or do you have a reputation for being immature? You can turn negative viewpoints around and make sure you gain your family’s respect by taking advantage of the hardworking aspect of this transit. Show you’re serious. Find ways to let your family know they can count on you when they need to.

												The sun spends its usual time in Virgo from late August to late September, entering your practical sign only two days after your home planet Mercury starts a six-week trip through Virgo as well. This highly detailed, communicative time can be a turning point for you regarding getting your point across. If you’ve felt shut down and/or tuned out, this is the time to make sure you say your peace and maybe even get the last word in.
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
								  <div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/leo.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      Leo
					  					    </h2>
					  					    <p class="paragraph">

											  Right away this year you get to jump on board the expansion train with Jupiter, the planet that wants to help you make your world a bigger and better place. Its pairing with practical Capricorn isn’t always ideal, but even in its fall position, you can still make big things happen. Jupiter wants to help you free your mind, and while you might not feel the full extent of the possibilities that are in front of you with Capricorn’s steady energy, you can still succeed beyond your wildest dreams.

												The summer is a wonderful time for you as you’re fully in your element when your ruler the sun spends time in your sign from the end of July to the end of August. You love it when the attention is on you, and you get your birthday wish for the next four weeks. As the life of the party, you add the color and drama that the people closest to you have come to love and expect from you, Leo.

												But because the sun is your ruler, you can get stressed out during its more difficult transits, and the sun’s square to unpredictable Uranus later in January is one such time. If you’re subjected to a sudden change that you didn’t plan for, your mental state and/or body could be thrown for a loop. Take precautions for when you’re feeling overstressed, like talking to a friend, drinking a soothing cup of tea, or taking a shower to cool yourself off.
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
								  <div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/cancer.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      Cancer
					  					    </h2>
					  					    <p class="paragraph">

											  You’re a deep-feeling sign who can be up one minute and down the next, so it makes sense that your power planet is the emotional moon. The moon’s movements can help you better understand your moods this year, beginning with a full moon/lunar eclipse in your sensitive sign right away in early January. Use the moon’s lunations throughout the year to guide you in all matters, Cancer.

												The moon is also highly influential on your health this year, so look for positive lunar aspects like the new moon in Pisces in late February and the one in your own sign in late July for renewal in areas of health. These are perfect times to start a new eating plan, hit the gym, or take yoga classes.

												Next to the moon, taskmaster Saturn sets the general tone for the year, laying out your responsibilities and urging you to follow through on the plans you’ve made and goals you’ve set. Saturn moves slowly through ambitious Capricorn at the beginning of the year, which is a reminder to stick with your current goals.

												Saturn is also the universal teacher so you can take advantage of a lot of lessons regarding family and friendship matters while it’s in responsible Capricorn. Pay attention to what a strong, masculine father figure has to say and take his advice where applicable.
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
								  <div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/gemini.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      Gemini
					  					    </h2>
					  					    <p class="paragraph">

											  As a mutable air sign, you’re driven by the need for information. You want the details, and you want to be on the cutting edge of all the latest technologies. Communicative Mercury, your home planet, has its normal three retrograde periods in 2020 (February, June, and October), all of them passing through emotional water signs. That means there will be closures, breakdowns, and misinformation to deal with as usual, but you’ll be better off dealing with mishaps using your intuition rather than your typical common-sense approach.

												Logic is firmly intact in some areas of your life, however, as three outer planets (Jupiter, Saturn, and Pluto) travel through practical Capricorn, which helps you set major goals, formulate plans, and be a more responsible person in general. These transits make you think about the long term and what you can do to prepare for a brighter future.

												The sun spends time in your airy sign during your birthday month from late May to late June, encouraging you to communicate openly and often, revealing what’s on your mind and willing to freely engage in conversations with anyone and everyone.

												Gemini technically rules the arms, shoulders, and nervous system, but perhaps your most important (and active) body part is your brain. Details are extremely important as the sun enters Virgo, the other sign Mercury rules, at the end of August, and health issues are always a key aspect of that transit. Stomach or intestinal issues might be highlighted now, and they shouldn’t be ignored. It doesn’t take long for something to reach critical status, so don’t disregard those early literal gut feelings that something might be wrong.
					  					    </p>
					  					  </div>
					  					</section>
					  				</div>
					  			</div>
								  <div class="row">
					  				<div class="col-sm-8 col-md-8 col-lg-8 center-block">
					  					<section class="section">
					  					  <img src="./assets/images/signs/taurus.png" class="zodiac" />
					  					  <div class="content">

					  					    <h2 class="title">
					  					      Taurus
					  					    </h2>
					  					    <p class="paragraph">

											  You might struggle to maintain your usual conservative, steady approach to life this year, but keeping an open mind helps you deal with the inevitable ups and downs that 2020 will bring.

												As the year begins, beautiful Venus, your ruler and the goddess of love and money, is paired up with innovative Aquarius, so you’re much more open to new ideas.

												Uranus, the unpredictable planet that favors change and rules eccentric Aquarius, is paired up with your steady sign all year, so some upheaval is inevitable. Uranus is retrograde at the start of the year only until January 10 and then again starting in mid-August until the end of the year. Rolling with the changes might be your only option for much of this year, Taurus.

												Powerful Mars is in independent Aries from the end of June to the end of the year, making the second half of 2020 very “me”-centric. Healthwise, Mars in Aries (direct) represents your physical body and taking action, so this should be a time when you’re proactive about your health. If anything has been bothering you, get it checked out now.

												Mercury is closely tied to sibling relationships, so paying close attention to the three Mercury retrograde cycles this year (mid-February to early March; mid-June to mid-July; and mid-October to early November) can help you avoid misunderstandings with brothers and sisters.

												Both loving Venus and chatty Mercury enter Libra, the sign of relationships, at the end of October, so you take a rational, fair-minded approach to friendship. You give good advice now, so don’t be surprised if friends want you to act as a ref or mediator for their disagreements.
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
	$('body').append('<div id="loadingDiv"><div class="container"><br><div class="row"><div class="col-sm-6 col-md-6 col-lg-6 center-block"><center><h1 style="color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";">PREPARING YOUR SOUL</h1></center></div></div><div class="row"><div class="col-sm-10 col-md-10 col-lg-10 center-block"><video id="videoloader" playsinline="" autoplay="" loop="" muted="" src="./assets/images/Zodiac2.mp4"></video></div></div><br><div class="row"><div class="col-sm-8 col-md-8 col-lg-8 center-block"><h4 style="color: white;text-shadow: 2px 2px 3px #fb3535;font-family: "Open Sans Condensed";"><center>Your ASTROLOGICAL DREAM READING Will Dive Into Parts Of Your Personality That Were Written Into Your Soul Since The Day You Were Born...</center></h4></div></div></div></div>');
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