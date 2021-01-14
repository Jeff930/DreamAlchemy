<!-- <?php
   // Start the session
   session_start();

?> -->
<!DOCTYPE html>
<html>
      <head>

      <?php include("../styles.php"); ?>

      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900|Lato:100,200,300,400,500,600,700,800,900|Montserrat:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900|Roboto:100,200,300,400,500,600,700,800,900|Open+Sans+Condensed:100,200,300,400,500,600,700,800,900|Open+Sans:100,200,300,400,500,600,700,800,900|Oswald:100,200,300,400,500,600,700,800,900">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
      <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <title>Horoscope</title>
      
      </head>
      <body>
		   <div class="galaxy-video-container">
		   <video autoplay loop playsinline muted  id="bg-hero"> 
		   <source src="../assets/video/astronomical.mp4" type="video/mp4">
		   <source src="../assets/video/astronomical.ogg" type="video/ogg">
		   </video>
		   </div>
         <section id="first">
         <div class="container">
         <br>
         <div class="row">
               <div class="col-sm-12 col-md-12 col-lg-12 center-block">
                  <h4 id="heading" class="center-block">
                   Discover Your Compatibility<br>
                  That Unlocks The Key To<br>
                  Your Life's Destiny</h4>
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 center-block">
               <h5 id="heading-text" class="center-block bottom-margin"><span class="capital"> uncovers an ancient secret technique that is within your astrological dream sign so
               <br> that you can unlock your dream manifestation abilities... <br></span>
               <br>
                  <b>Get Your FREE Astrological Compatibility Reading Now!</b>
               </h5>
            </div>
         </div>
         <div class="row" style="margin-left:2px;">
            <div class="col-sm-12 col-md-12 col-lg-6 center">
               <img class="img-responsive center-block d-block" style="width:550px; height: 550px;" src="../assets/images/Wheel-05.png" usemap="#astrology-map">
               <map name="astrology-map" id="map">
                  <area target="" class="area" zodiac="Aquarius" alt="Aquarius" title="January 20-February 18" href="#Aquarius" coords="247,166,263,163,280,163,291,164,303,166,336,43,312,39,289,36,266,36,232,39,213,44" shape="poly">
                  <area target="" class="area" zodiac="Pisces" alt="Pisces" title="February 19–March 20" href="#Pisces" coords="304,166,320,172,332,178,343,186,353,194,444,104,424,87,406,74,385,62,363,52,337,43" shape="poly">
                  <area target="" class="area" zodiac="Aries" alt="Aries" title="March 21–April 19" href="#Aries" coords="384,245,379,231,369,213,356,196,446,106,472,138,483,157,492,175,499,188,506,211" shape="poly">
                  <area target="" class="area" zodiac="Taurus" alt="Taurus" title="April 20–May 20" href="#Taurus" coords="384,247,387,264,388,282,384,304,507,336,514,300,515,279,514,263,512,241,507,214"  shape="poly">
                  <area target="" class="area" zodiac="Gemini" alt="Gemini" title="May 21–June 20" href="#Gemini" coords="383,305,378,319,367,339,354,355,446,445,467,418,482,397,497,367,506,338" shape="poly">
                  <area target="" class="area" zodiac="Cancer" alt="Cancer" title="June 21–July 22" href="#Cancer" coords="354,354,341,366,326,375,305,383,338,507,374,494,404,477,426,462,444,445"  shape="poly">
                  <area target="" class="area" zodiac="Leo" alt="Leo" title="July 23–August 22" href="#Leo" coords="246,384,261,386,274,387,287,386,302,384,337,507,313,511,287,514,262,514,241,513,213,507" shape="poly">
                  <area target="" class="area" zodiac="Virgo" alt="Virgo" title="August 23–September 22" href="#Virgo" coords="244,383,233,379,221,373,209,366,197,355,107,444,120,460,148,478,162,487,176,493,189,499,202,502,212,507" shape="poly">
                  <area target="" class="area" zodiac="Libra" alt="Libra" title="September 23–October 22" href="#libra" coords="166,305,171,318,183,340,194,353,105,444,89,426,73,406,60,380,52,364,43,338" shape="poly">
                  <area target="" class="area" zodiac="Scorpio" alt="Scorpio" title="October 23–November 21" href="#Scorpio" coords="166,247,163,263,162,279,165,303,43,336,35,298,36,261,38,233,45,214" shape="poly">
                  <area target="" class="area" zodiac="Sagittarius" alt="Sagittarius" title="November 22–December 21" href="#Sagittarius" coords="167,245,172,229,183,210,195,196,105,107,92,121,81,135,67,155,57,177,49,192,43,212"shape="poly">
                  <area target="" class="area" zodiac="Capricorn" alt="Capricorn" title="December 22-January 19" href="#Capricorn" coords="245,167,233,170,220,177,209,184,197,195,106,105,127,86,156,66,172,59,191,50,212,44" shape="poly">
               </map>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6">
               <img class="img-responsive center-block d-block" style="width:550px; height: 550px;" src="../assets/images/Wheel-05.png" usemap="#astrology-map2">
               <map name="astrology-map2" id="map2">
                  <area target="" class="area" zodiac2="Aquarius" alt="Aquarius" title="January 20-February 18" href="#Aquarius" coords="247,166,263,163,280,163,291,164,303,166,336,43,312,39,289,36,266,36,232,39,213,44" shape="poly">
                  <area target="" class="area" zodiac2="Pisces" alt="Pisces" title="February 19–March 20" href="#Pisces" coords="304,166,320,172,332,178,343,186,353,194,444,104,424,87,406,74,385,62,363,52,337,43" shape="poly">
                  <area target="" class="area" zodiac2="Aries" alt="Aries" title="March 21–April 19" href="#Aries" coords="384,245,379,231,369,213,356,196,446,106,472,138,483,157,492,175,499,188,506,211" shape="poly">
                  <area target="" class="area" zodiac2="Taurus" alt="Taurus" title="April 20–May 20" href="#Taurus" coords="384,247,387,264,388,282,384,304,507,336,514,300,515,279,514,263,512,241,507,214"  shape="poly">
                  <area target="" class="area" zodiac2="Gemini" alt="Gemini" title="May 21–June 20" href="#Gemini" coords="383,305,378,319,367,339,354,355,446,445,467,418,482,397,497,367,506,338" shape="poly">
                  <area target="" class="area" zodiac2="Cancer" alt="Cancer" title="June 21–July 22" href="#Cancer" coords="354,354,341,366,326,375,305,383,338,507,374,494,404,477,426,462,444,445"  shape="poly">
                  <area target="" class="area" zodiac2="Leo" alt="Leo" title="July 23–August 22" href="#Leo" coords="246,384,261,386,274,387,287,386,302,384,337,507,313,511,287,514,262,514,241,513,213,507" shape="poly">
                  <area target="" class="area" zodiac2="Virgo" alt="Virgo" title="August 23–September 22" href="#Virgo" coords="244,383,233,379,221,373,209,366,197,355,107,444,120,460,148,478,162,487,176,493,189,499,202,502,212,507" shape="poly">
                  <area target="" class="area" zodiac2="Libra" alt="Libra" title="September 23–October 22" href="#Libra" coords="166,305,171,318,183,340,194,353,105,444,89,426,73,406,60,380,52,364,43,338" shape="poly">
                  <area target="" class="area" zodiac2="Scorpio" alt="Scorpio" title="October 23–November 21" href="#Scorpio" coords="166,247,163,263,162,279,165,303,43,336,35,298,36,261,38,233,45,214" shape="poly">
                  <area target="" class="area" zodiac2="Sagittarius" alt="Sagittarius" title="November 22–December 21" href="#Sagittarius" coords="167,245,172,229,183,210,195,196,105,107,92,121,81,135,67,155,57,177,49,192,43,212"shape="poly">
                  <area target="" class="area" zodiac2="Capricorn" alt="Capricorn" title="December 22-January 19" href="#Capricorn" coords="245,167,233,170,220,177,209,184,197,195,106,105,127,86,156,66,172,59,191,50,212,44" shape="poly">
               </map>
            </div>
         </div>
         <br>
         <form method="post" action="./soulcompatibility.php" id="soulreading-form">
            <div class="row"  style="margin-left:20px;">
               <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="astrology-description" data-id="Aries">
                     <div class="row">
                        <div class="col-6 pl-5">
                           <div class="image-container">
                              <img src="../assets/images/astro-signs/Aries.png" alt="" class="img-fluid">
                              <h5 class="title">Aries</h5>
                           </div>
                        </div>
                        <div class="col-6 pr-5">
                           <div class="image-container">
                              <img src="../assets/images/astrology-signs/Thepassionate-Aries-Purple.png" alt="" class="img-fluid">
                              <h5 class="title">The Passionate </h5>
                           </div>
                        </div>
                     </div>
                     <p class="description">
                  
                                    Mars, your powerful ruler, begins the year in adventurous, knowledge-seeking Sagittarius, so right away you're interested in seeing new sights and learning about new cultures. This sets the tone for a year filled with exciting activities that could take you beyond the limits of your comfort level and to the stars.

												The emotional, motherly moon plays a large role in how you get along with your family, and the full moon and lunar eclipse in Cancer early in January put familial relationships front and center. This is the time to finally try to gain a sense of security in this area, especially if you've been having issues with your mom (recently or for your entire life).

												<br>
                                    <br>
                                    When the sun shines brightly in your competitive sign between late March and April, it seems as though everything between you and your friends turns into a competition. You're motivated to put your best foot forward, but does that have to be at the expense of the people closest to you? You can be a wonderfully loyal and reliable friend if you put your own success second.

												Aries and your ruler Mars both govern the head and brain areas of your body, so when Mars is involved in tense transits, headaches or migraines or general brain fogginess can be an issue. An Aries new moon at the end of March makes you want to give in to impulse, and this can be an exciting, high-energy time. Your body will want to move forward at maximum speed, but your brain will need some time to catch up.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Pisces">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Pisces.png" alt="" class="img-fluid">
                        <h5 class="title"> Pisces</h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thedreamer-Piscis-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Dreamer </h5>
                     </div>
                  </div>
                  </div>
                     
                     <p class="description">
                                 As a mutable water sign, you don't like to make waves. You prefer to go with the flow instead of against it, but standing up for yourself in 2020 offers you the most successful outcome.

                                 Neptune, your home planet, is an outer planet and therefore not always a major part of the big planetary news. But for you, because it's in your sign for all of 2020, you're affected by its influence quite a bit.

                                 A bright spot of the year is when the sun passes through your creative sign from the end of February until the end of March, so be sure to celebrate your birthday in true Pisces style! Being by the water soothes you, so perhaps a beach trip would be the perfect celebration. 
                                 <br>
                                 <br>
                                 You thrive living in your own little dream world, and at the beach you can capture the solitude you crave.

                                 Your life often has a dreamlike quality, but this year you can be shaken out of it during Neptune's retrograde cycle from late June to the end of November. There will be realities to face now, and things will resurface that you've been pushing down emotionally, but you're up to the task this year, Pisces. Take it slow and let your intuition guide you when you're unsure.

                                 Dynamic Mercury joins the sun in outgoing Leo at the start of August, so if it's been a while since you were in touch with a beloved family member, reach out to them now. You'll never be sorry for taking the initiative where family is concerned, Pisces. Fun and warm Leo energy is especially good around children, so interact with the young members of your family now as much as possible.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Aquarius">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Aquarius.png" alt="" class="img-fluid">
                        <h5 class="title"> Aquarius </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thesmith-Acuario-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Smith </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
								You're an innovator and a pioneer, but as a fixed sign you also want things your way. Can this interesting combination of energies work for you in 2020? Yes, Aquarius, it can!

                        The winter sun always passes through your sign at the start of the year, so from the end of January until the end of February, you get to celebrate being the amazing humanitarian and innovator that you were born to be! All your good qualities are exposed to the light now, and your confidence soars. Let the world know you're not afraid to show off your exceptional talents.

                        Rebellious Uranus, your home planet, is paired up with slow and steady Taurus this whole year, however, which isn't the most harmonious partnership. 
                        <br>
                        <br>
                        The measured, conservative, and traditional energy of the Bull can try to slow you down, but it can't completely stop you. Will you perhaps consider some things this year that you wouldn't normally? Yes. Does this mean you'll lose that infamous Aquarian edge? Not a chance.

                        You're a sign who loves to communicate, schmooze, network, and make new friends, and chatty Mercury's retrograde cycles try to hinder that banter that you love so much. The three retrograde cycles to be aware of this year hit from mid-February to early March, mid-June to mid-July, and mid-October to early November. Another thing to remember is that all these retrograde cycles touch down in emotional water signs, just like last year, so using your intuition will be the key to avoiding a lot of Mercury retrograde.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Capricorn">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Capricorn.png" alt="" class="img-fluid">
                        <h5 class="title"> Capricorn </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thefortress-Capricornio-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Fortress </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
                     You're one of the most ambitious signs around, and this year you won't stop until you've reached as many of your goals as humanly possible.

                     Your home planet Saturn arrived in your practical sign back in December of 2017 and continues that trip for part of this year, but you also experience a stellium at the start of the year, which is a very special occurrence when three or more heavenly bodies are in one sign (and this time it�s yours, as the sun, Jupiter, Saturn, and Pluto all line up together until the end of January). To say that you're focused on your goals now might be the biggest understatement of the year!

                     <br>
                     <br>
                     
                     There's a sun-Saturn conjunction in your sign in the middle of January that makes you extra motivated to reach your goals, so be sure to include your health goals on that list of priorities as well. Do you want to get in better shape in general? Run a marathon? Become a boxer? Taking your physical goals seriously now will help you reach them.

                     Your power planet's retrograde period begins in mid-May after having moved back into free-thinking Aquarius (toward the end of March). After all your hard work earlier in the year, this retrograde cycle gives you a little bit of breathing room and provides the opportunity to think about things you might do over if you get the chance.

                     The sun is in loyal Taurus from late April until late May, making you extra vigilant when it comes to protecting your friendships. Honesty is an important factor now, and jealousy might play a role in tensions with friends. Being a good friend means being happy for them when something good happens to them, and if you aren�t, Capricorn, you should look within to try to understand why you're not, and vice versa.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Sagittarius">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Sagittarius.png" alt="" class="img-fluid">
                        <h5 class="title"> Sagittarius </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Theexplorer-Sagitario-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Explorer </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
                     You love to learn, explore, and expand your mind, Sagittarius, and 2020 has lots of opportunities for you to do those things and more!

							Your ruler Jupiter has incredibly mind-expanding energy, and because it spends most of the year in dedicated, practical Capricorn, you can learn a lot when you're willing to settle down and get serious. You can be more mature and look at your responsibilities with the long term in mind in 2020, and ambition, persistence, and dedication are some of your greatest strengths now.

							<br>
                     <br>
                     
                     Your home planet goes through its retrograde period between mid-May and mid-September, offering a chance for profound inner growth, which is something you kind of live for. This is a time to tune out the distractions of your everyday life in order to focus on what your inner consciousness has to say. You have deep philosophical questions, and now is the time to get some answers.

							Dreamy Neptune spends the entire year in Pisces, the sign it rules, so you might spend a lot of time idealizing your current friendships and/or looking at other people as though they're so lucky to have the circle of friends they have. And the truth lies somewhere in the middle. When you realize that no one's relationships are perfect, you can start to appreciate your own friendships for their little imperfections.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Scorpio">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Scorpio.png" alt="" class="img-fluid">
                        <h5 class="title"> Scorpio </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Theilluminated-Escorpio-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Illuminated </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
                     You're a fixed water sign, which means you can be more resistant to change than others. However, this year has some intriguing twists and turns, and everyone knows you can't resist a good mystery!

							Mars, your powerful co-ruler along with Pluto, spends the entire second half of the year (from the end of June) in powerful Aries, the other sign it rules. You can gain a lot of positive momentum now because of the Ram's unwillingness to quit. The exception to this will be the ' retrograde period from the second week of September to the middle of November, when you'll want to spend some time examining your motivations for past actions.

							Pluto is in steady Capricorn all year and goes retrograde for five months starting in late April, bringing some amazingly transformational possibilities. 
                     <br>
                     <br>

                     When Pluto is retrograde, you get to know yourself in a much more intimate way, as brutal as the truth may be. Going deep within your subconscious can uncover a lot of demons, Scorpio, but it's better you know they're there than to have them rise to the surface at inopportune times.

							Giving and accepting advice continues to be on your friendship/family agenda as Saturn, the wise teacher of the universe, spends some retrograde time in Capricorn again in late fall. You give your opinions and advice easily to trusted friends and family members, but when it comes to receiving advice and taking other people's opinions to heart, well, that isn't as easy for you. Use Saturn's introspective retrograde period to figure out what your limitations are in this area and how you can learn to change your ways.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Libra">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Libra.png" alt="" class="img-fluid">
                        <h5 class="title">Libra </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thecontrol-Libra-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Control</h5>
                     </div>
                  </div>
                  </div>
                     
                     <p class="description">
                                 
                     Hard worker Saturn sets the overall mood this year, and it holds steady in earthy Capricorn, the sign it rules, until the end of March. The beginning of the year is a time to keep plodding away at your plans and goals with an eye toward completion.

							The sun enters powerful Aries at the end of March, putting you in an enthusiastic, energetic mood. If your circle of friends needs an organizer, you're the one who makes the calls and gets the party started now. You might also be feeling more competitive than usual, so don't turn a little friendly game between friends into an all-out war.

							<br>
                     <br>

                     Because you're represented by the Scales, so it will be important for you to maintain your work/life balance this year, as well as maintain a literal sense of balance regarding your health. Air signs can get aches and pains out of nowhere, but just as quickly as they come on, they can leave. However, just because you don't have any major physical pain doesn't mean that everything's okay, so always get miscellaneous aches and pains checked out.

							Your home planet, lovely Venus, starts 2020 in innovative Aquarius, so you might be willing to experiment with love and money. Venus quickly moves into creative, caring Pisces in the middle of January, however, so you should continue to have imaginative (if not a bit idealized) thoughts about how to do things a little differently.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Virgo">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Virgo.png" alt="" class="img-fluid">
                        <h5 class="title"> Virgo </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thementalist-Virgo-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Mentalist </h5>
                     </div>
                  </div>
                  </div>
                   
                     <p class="description">
                     Virgo, you're ruled by quick-moving Mercury, master of information and communication. You're a mutable sign motivated by common sense, perhaps this year more than ever, and your extraordinary attention to detail can lead to a very successful 2020.

                     There are three Mercury retrograde periods to be aware of: mid-February to early March, mid-June to early July, and mid-October to early November. All touch down in the intuitive water signs of Pisces, Cancer, and Scorpio, respectively. While Mercury retrograde is never convenient, you should be able to tap into your gut instincts to rise above the usual chaos and confusion that your retrograde home planet can cause.

                     <br>
                     <br>
                     
                     Determined Saturn is in responsible Capricorn through the end of March, and you can apply this hardworking energy to improving your reputation within your family. Are you already looked at as the responsible one, or do you have a reputation for being immature? You can turn negative viewpoints around and make sure you gain your family's respect by taking advantage of the hardworking aspect of this transit. Show you're serious. Find ways to let your family know they can count on you when they need to.

                     The sun spends its usual time in Virgo from late August to late September, entering your practical sign only two days after your home planet Mercury starts a six-week trip through Virgo as well. This highly detailed, communicative time can be a turning point for you regarding getting your point across. If you've felt shut down and/or tuned out, this is the time to make sure you say your peace and maybe even get the last word in.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Leo">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Leo.png" alt="" class="img-fluid">
                        <h5 class="title"> Leo </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Theleader-Leo-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Leader</h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                     Right away this year you get to jump on board the expansion train with Jupiter, the planet that wants to help you make your world a bigger and better place. Its pairing with practical Capricorn isn't always ideal, but even in its fall position, you can still make big things happen. Jupiter wants to help you free your mind, and while you might not feel the full extent of the possibilities that are in front of you with Capricorn�s steady energy, you can still succeed beyond your wildest dreams.

							<br>
                     <br>
                     
                     The summer is a wonderful time for you as you're fully in your element when your ruler the sun spends time in your sign from the end of July to the end of August. You love it when the attention is on you, and you get your birthday wish for the next four weeks. As the life of the party, you add the color and drama that the people closest to you have come to love and expect from you, Leo.

							But because the sun is your ruler, you can get stressed out during its more difficult transits, and the sun's square to unpredictable Uranus later in January is one such time. If you're subjected to a sudden change that you didn't plan for, your mental state and/or body could be thrown for a loop. Take precautions for when you're feeling overstressed, like talking to a friend, drinking a soothing cup of tea, or taking a shower to cool yourself off.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Cancer">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Cancer.png" alt="" class="img-fluid">
                        <h5 class="title"> Cancer </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thedistortion-Cancer-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Distortion </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                     You're a deep-feeling sign who can be up one minute and down the next, so it makes sense that your power planet is the emotional moon. The moon's movements can help you better understand your moods this year, beginning with a full moon/lunar eclipse in your sensitive sign right away in early January. Use the moon's lunations throughout the year to guide you in all matters, Cancer.

                     The moon is also highly influential on your health this year, so look for positive lunar aspects like the new moon in Pisces in late February and the one in your own sign in late July for renewal in areas of health. 
                     
                     <br>
                     <br>
                     These are perfect times to start a new eating plan, hit the gym, or take yoga classes.

                     Next to the moon, taskmaster Saturn sets the general tone for the year, laying out your responsibilities and urging you to follow through on the plans you've made and goals you've set. Saturn moves slowly through ambitious Capricorn at the beginning of the year, which is a reminder to stick with your current goals.

                     Saturn is also the universal teacher so you can take advantage of a lot of lessons regarding family and friendship matters while it's in responsible Capricorn. Pay attention to what a strong, masculine father figure has to say and take his advice where applicable.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Gemini">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Gemini.png" alt="" class="img-fluid">
                        <h5 class="title"> Gemini </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thecreator-Geminis-Purple.png" alt="" class="img-fluid">
                        <h5 class="title">The Creator </h5>
                     </div>
                  </div>
                  </div>
                    
                     <p class="description">
                     As a mutable air sign, you're driven by the need for information. You want the details, and you want to be on the cutting edge of all the latest technologies. Communicative Mercury, your home planet, has its normal three retrograde periods in 2020 (February, June, and October), all of them passing through emotional water signs. That means there will be closures, breakdowns, and misinformation to deal with as usual, but you'll be better off dealing with mishaps using your intuition rather than your typical common-sense approach.

							Logic is firmly intact in some areas of your life, however, as three outer planets (Jupiter, Saturn, and Pluto) travel through practical Capricorn, which helps you set major goals, formulate plans, and be a more responsible person in general.
                     <br>
                     <br>
                      These transits make you think about the long term and what you can do to prepare for a brighter future.

							The sun spends time in your airy sign during your birthday month from late May to late June, encouraging you to communicate openly and often, revealing what's on your mind and willing to freely engage in conversations with anyone and everyone.

							Gemini technically rules the arms, shoulders, and nervous system, but perhaps your most important (and active) body part is your brain. Details are extremely important as the sun enters Virgo, the other sign Mercury rules, at the end of August, and health issues are always a key aspect of that transit. Stomach or intestinal issues might be highlighted now, and they shouldn't be ignored. It doesn't take long for something to reach critical status, so don't disregard those early literal gut feelings that something might be wrong.
                     </p>
                  </div>
                  <div class="astrology-description" data-id="Taurus">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Taurus.png" alt="" class="img-fluid">
                        <h5 class="title"> Taurus </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thebastion-Tauro-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Bastion </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                     You might struggle to maintain your usual conservative, steady approach to life this year, but keeping an open mind helps you deal with the inevitable ups and downs that 2020 will bring.

							As the year begins, beautiful Venus, your ruler and the goddess of love and money, is paired up with innovative Aquarius, so you're much more open to new ideas.

							Uranus, the unpredictable planet that favors change and rules eccentric Aquarius, is paired up with your steady sign all year, so some upheaval is inevitable. Uranus is retrograde at the start of the year only until January 10 and then again starting in mid-August until the end of the year. 
                     
                     <br>
                     <br>
                     Rolling with the changes might be your only option for much of this year, Taurus.

							Powerful Mars is in independent Aries from the end of June to the end of the year, making the second half of 2020 very me-centric. Healthwise, Mars in Aries (direct) represents your physical body and taking action, so this should be a time when you're proactive about your health. If anything has been bothering you, get it checked out now.

							Mercury is closely tied to sibling relationships, so paying close attention to the three Mercury retrograde cycles this year (mid-February to early March; mid-June to mid-July; and mid-October to early November) can help you avoid misunderstandings with brothers and sisters.

							Both loving Venus and chatty Mercury enter Libra, the sign of relationships, at the end of October, so you take a rational, fair-minded approach to friendship. You give good advice now, so don't be surprised if friends want you to act as a ref or mediator for their disagreements.
                     </p>
                  </div>
               </div>








               <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="astrology-description2" data-id2="Aries">
                     <div class="row">
                        <div class="col-6 pl-5">
                           <div class="image-container">
                              <img src="../assets/images/astro-signs/Aries.png" alt="" class="img-fluid">
                              <h5 class="title">Aries</h5>
                           </div>
                        </div>
                        <div class="col-6 pr-5">
                           <div class="image-container">
                              <img src="../assets/images/astrology-signs/Thepassionate-Aries-Purple.png" alt="" class="img-fluid">
                              <h5 class="title">The Passionate </h5>
                           </div>
                        </div>
                     </div>
                     <p class="description">
                  
                                    Mars, your powerful ruler, begins the year in adventurous, knowledge-seeking Sagittarius, so right away you're interested in seeing new sights and learning about new cultures. This sets the tone for a year filled with exciting activities that could take you beyond the limits of your comfort level and to the stars.

                                    The emotional, motherly moon plays a large role in how you get along with your family, and the full moon and lunar eclipse in Cancer early in January put familial relationships front and center. This is the time to finally try to gain a sense of security in this area, especially if you've been having issues with your mom (recently or for your entire life).

                                    <br>
                                    <br>
                                    When the sun shines brightly in your competitive sign between late March and April, it seems as though everything between you and your friends turns into a competition. You're motivated to put your best foot forward, but does that have to be at the expense of the people closest to you? You can be a wonderfully loyal and reliable friend if you put your own success second.

                                    Aries and your ruler Mars both govern the head and brain areas of your body, so when Mars is involved in tense transits, headaches or migraines or general brain fogginess can be an issue. An Aries new moon at the end of March makes you want to give in to impulse, and this can be an exciting, high-energy time. Your body will want to move forward at maximum speed, but your brain will need some time to catch up.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Pisces">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Pisces.png" alt="" class="img-fluid">
                        <h5 class="title"> Pisces</h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thedreamer-Piscis-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Dreamer </h5>
                     </div>
                  </div>
                  </div>
                     
                     <p class="description">
                                 As a mutable water sign, you don't like to make waves. You prefer to go with the flow instead of against it, but standing up for yourself in 2020 offers you the most successful outcome.

                                 Neptune, your home planet, is an outer planet and therefore not always a major part of the big planetary news. But for you, because it's in your sign for all of 2020, you're affected by its influence quite a bit.

                                 A bright spot of the year is when the sun passes through your creative sign from the end of February until the end of March, so be sure to celebrate your birthday in true Pisces style! Being by the water soothes you, so perhaps a beach trip would be the perfect celebration. 
                                 <br>
                                 <br>
                                 You thrive living in your own little dream world, and at the beach you can capture the solitude you crave.

                                 Your life often has a dreamlike quality, but this year you can be shaken out of it during Neptune's retrograde cycle from late June to the end of November. There will be realities to face now, and things will resurface that you've been pushing down emotionally, but you're up to the task this year, Pisces. Take it slow and let your intuition guide you when you're unsure.

                                 Dynamic Mercury joins the sun in outgoing Leo at the start of August, so if it's been a while since you were in touch with a beloved family member, reach out to them now. You'll never be sorry for taking the initiative where family is concerned, Pisces. Fun and warm Leo energy is especially good around children, so interact with the young members of your family now as much as possible.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Aquarius">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Aquarius.png" alt="" class="img-fluid">
                        <h5 class="title"> Aquarius </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thesmith-Acuario-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Smith </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
                        You're an innovator and a pioneer, but as a fixed sign you also want things your way. Can this interesting combination of energies work for you in 2020? Yes, Aquarius, it can!

                        The winter sun always passes through your sign at the start of the year, so from the end of January until the end of February, you get to celebrate being the amazing humanitarian and innovator that you were born to be! All your good qualities are exposed to the light now, and your confidence soars. Let the world know you're not afraid to show off your exceptional talents.

                        Rebellious Uranus, your home planet, is paired up with slow and steady Taurus this whole year, however, which isn't the most harmonious partnership. 
                        <br>
                        <br>
                        The measured, conservative, and traditional energy of the Bull can try to slow you down, but it can't completely stop you. Will you perhaps consider some things this year that you wouldn't normally? Yes. Does this mean you'll lose that infamous Aquarian edge? Not a chance.

                        You're a sign who loves to communicate, schmooze, network, and make new friends, and chatty Mercury's retrograde cycles try to hinder that banter that you love so much. The three retrograde cycles to be aware of this year hit from mid-February to early March, mid-June to mid-July, and mid-October to early November. Another thing to remember is that all these retrograde cycles touch down in emotional water signs, just like last year, so using your intuition will be the key to avoiding a lot of Mercury retrograde.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Capricorn">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Capricorn.png" alt="" class="img-fluid">
                        <h5 class="title"> Capricorn </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thefortress-Capricornio-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Fortress </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
                     You're one of the most ambitious signs around, and this year you won't stop until you've reached as many of your goals as humanly possible.

                     Your home planet Saturn arrived in your practical sign back in December of 2017 and continues that trip for part of this year, but you also experience a stellium at the start of the year, which is a very special occurrence when three or more heavenly bodies are in one sign (and this time it�s yours, as the sun, Jupiter, Saturn, and Pluto all line up together until the end of January). To say that you're focused on your goals now might be the biggest understatement of the year!

                     <br>
                     <br>
                     
                     There's a sun-Saturn conjunction in your sign in the middle of January that makes you extra motivated to reach your goals, so be sure to include your health goals on that list of priorities as well. Do you want to get in better shape in general? Run a marathon? Become a boxer? Taking your physical goals seriously now will help you reach them.

                     Your power planet's retrograde period begins in mid-May after having moved back into free-thinking Aquarius (toward the end of March). After all your hard work earlier in the year, this retrograde cycle gives you a little bit of breathing room and provides the opportunity to think about things you might do over if you get the chance.

                     The sun is in loyal Taurus from late April until late May, making you extra vigilant when it comes to protecting your friendships. Honesty is an important factor now, and jealousy might play a role in tensions with friends. Being a good friend means being happy for them when something good happens to them, and if you aren�t, Capricorn, you should look within to try to understand why you're not, and vice versa.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Sagittarius">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Sagittarius.png" alt="" class="img-fluid">
                        <h5 class="title"> Sagittarius </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Theexplorer-Sagitario-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Explorer </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
                     You love to learn, explore, and expand your mind, Sagittarius, and 2020 has lots of opportunities for you to do those things and more!

                     Your ruler Jupiter has incredibly mind-expanding energy, and because it spends most of the year in dedicated, practical Capricorn, you can learn a lot when you're willing to settle down and get serious. You can be more mature and look at your responsibilities with the long term in mind in 2020, and ambition, persistence, and dedication are some of your greatest strengths now.

                     <br>
                     <br>
                     
                     Your home planet goes through its retrograde period between mid-May and mid-September, offering a chance for profound inner growth, which is something you kind of live for. This is a time to tune out the distractions of your everyday life in order to focus on what your inner consciousness has to say. You have deep philosophical questions, and now is the time to get some answers.

                     Dreamy Neptune spends the entire year in Pisces, the sign it rules, so you might spend a lot of time idealizing your current friendships and/or looking at other people as though they're so lucky to have the circle of friends they have. And the truth lies somewhere in the middle. When you realize that no one's relationships are perfect, you can start to appreciate your own friendships for their little imperfections.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Scorpio">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Scorpio.png" alt="" class="img-fluid">
                        <h5 class="title"> Scorpio </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Theilluminated-Escorpio-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Illuminated </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                                 
                     You're a fixed water sign, which means you can be more resistant to change than others. However, this year has some intriguing twists and turns, and everyone knows you can't resist a good mystery!

                     Mars, your powerful co-ruler along with Pluto, spends the entire second half of the year (from the end of June) in powerful Aries, the other sign it rules. You can gain a lot of positive momentum now because of the Ram's unwillingness to quit. The exception to this will be the ' retrograde period from the second week of September to the middle of November, when you'll want to spend some time examining your motivations for past actions.

                     Pluto is in steady Capricorn all year and goes retrograde for five months starting in late April, bringing some amazingly transformational possibilities. 
                     <br>
                     <br>

                     When Pluto is retrograde, you get to know yourself in a much more intimate way, as brutal as the truth may be. Going deep within your subconscious can uncover a lot of demons, Scorpio, but it's better you know they're there than to have them rise to the surface at inopportune times.

                     Giving and accepting advice continues to be on your friendship/family agenda as Saturn, the wise teacher of the universe, spends some retrograde time in Capricorn again in late fall. You give your opinions and advice easily to trusted friends and family members, but when it comes to receiving advice and taking other people's opinions to heart, well, that isn't as easy for you. Use Saturn's introspective retrograde period to figure out what your limitations are in this area and how you can learn to change your ways.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Libra">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Libra.png" alt="" class="img-fluid">
                        <h5 class="title">Libra </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thecontrol-Libra-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Control</h5>
                     </div>
                  </div>
                  </div>
                     
                     <p class="description">
                                 
                     Hard worker Saturn sets the overall mood this year, and it holds steady in earthy Capricorn, the sign it rules, until the end of March. The beginning of the year is a time to keep plodding away at your plans and goals with an eye toward completion.

                     The sun enters powerful Aries at the end of March, putting you in an enthusiastic, energetic mood. If your circle of friends needs an organizer, you're the one who makes the calls and gets the party started now. You might also be feeling more competitive than usual, so don't turn a little friendly game between friends into an all-out war.

                     <br>
                     <br>

                     Because you're represented by the Scales, so it will be important for you to maintain your work/life balance this year, as well as maintain a literal sense of balance regarding your health. Air signs can get aches and pains out of nowhere, but just as quickly as they come on, they can leave. However, just because you don't have any major physical pain doesn't mean that everything's okay, so always get miscellaneous aches and pains checked out.

                     Your home planet, lovely Venus, starts 2020 in innovative Aquarius, so you might be willing to experiment with love and money. Venus quickly moves into creative, caring Pisces in the middle of January, however, so you should continue to have imaginative (if not a bit idealized) thoughts about how to do things a little differently.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Virgo">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Virgo.png" alt="" class="img-fluid">
                        <h5 class="title"> Virgo </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thementalist-Virgo-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Mentalist </h5>
                     </div>
                  </div>
                  </div>
                   
                     <p class="description">
                     Virgo, you're ruled by quick-moving Mercury, master of information and communication. You're a mutable sign motivated by common sense, perhaps this year more than ever, and your extraordinary attention to detail can lead to a very successful 2020.

                     There are three Mercury retrograde periods to be aware of: mid-February to early March, mid-June to early July, and mid-October to early November. All touch down in the intuitive water signs of Pisces, Cancer, and Scorpio, respectively. While Mercury retrograde is never convenient, you should be able to tap into your gut instincts to rise above the usual chaos and confusion that your retrograde home planet can cause.

                     <br>
                     <br>
                     
                     Determined Saturn is in responsible Capricorn through the end of March, and you can apply this hardworking energy to improving your reputation within your family. Are you already looked at as the responsible one, or do you have a reputation for being immature? You can turn negative viewpoints around and make sure you gain your family's respect by taking advantage of the hardworking aspect of this transit. Show you're serious. Find ways to let your family know they can count on you when they need to.

                     The sun spends its usual time in Virgo from late August to late September, entering your practical sign only two days after your home planet Mercury starts a six-week trip through Virgo as well. This highly detailed, communicative time can be a turning point for you regarding getting your point across. If you've felt shut down and/or tuned out, this is the time to make sure you say your peace and maybe even get the last word in.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Leo">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Leo.png" alt="" class="img-fluid">
                        <h5 class="title"> Leo </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Theleader-Leo-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Leader</h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                     Right away this year you get to jump on board the expansion train with Jupiter, the planet that wants to help you make your world a bigger and better place. Its pairing with practical Capricorn isn't always ideal, but even in its fall position, you can still make big things happen. Jupiter wants to help you free your mind, and while you might not feel the full extent of the possibilities that are in front of you with Capricorn�s steady energy, you can still succeed beyond your wildest dreams.

                     <br>
                     <br>
                     
                     The summer is a wonderful time for you as you're fully in your element when your ruler the sun spends time in your sign from the end of July to the end of August. You love it when the attention is on you, and you get your birthday wish for the next four weeks. As the life of the party, you add the color and drama that the people closest to you have come to love and expect from you, Leo.

                     But because the sun is your ruler, you can get stressed out during its more difficult transits, and the sun's square to unpredictable Uranus later in January is one such time. If you're subjected to a sudden change that you didn't plan for, your mental state and/or body could be thrown for a loop. Take precautions for when you're feeling overstressed, like talking to a friend, drinking a soothing cup of tea, or taking a shower to cool yourself off.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Cancer">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Cancer.png" alt="" class="img-fluid">
                        <h5 class="title"> Cancer </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thedistortion-Cancer-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Distortion </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                     You're a deep-feeling sign who can be up one minute and down the next, so it makes sense that your power planet is the emotional moon. The moon's movements can help you better understand your moods this year, beginning with a full moon/lunar eclipse in your sensitive sign right away in early January. Use the moon's lunations throughout the year to guide you in all matters, Cancer.

                     The moon is also highly influential on your health this year, so look for positive lunar aspects like the new moon in Pisces in late February and the one in your own sign in late July for renewal in areas of health. 
                     
                     <br>
                     <br>
                     These are perfect times to start a new eating plan, hit the gym, or take yoga classes.

                     Next to the moon, taskmaster Saturn sets the general tone for the year, laying out your responsibilities and urging you to follow through on the plans you've made and goals you've set. Saturn moves slowly through ambitious Capricorn at the beginning of the year, which is a reminder to stick with your current goals.

                     Saturn is also the universal teacher so you can take advantage of a lot of lessons regarding family and friendship matters while it's in responsible Capricorn. Pay attention to what a strong, masculine father figure has to say and take his advice where applicable.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Gemini">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Gemini.png" alt="" class="img-fluid">
                        <h5 class="title"> Gemini </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thecreator-Geminis-Purple.png" alt="" class="img-fluid">
                        <h5 class="title">The Creator </h5>
                     </div>
                  </div>
                  </div>
                    
                     <p class="description">
                     As a mutable air sign, you're driven by the need for information. You want the details, and you want to be on the cutting edge of all the latest technologies. Communicative Mercury, your home planet, has its normal three retrograde periods in 2020 (February, June, and October), all of them passing through emotional water signs. That means there will be closures, breakdowns, and misinformation to deal with as usual, but you'll be better off dealing with mishaps using your intuition rather than your typical common-sense approach.

                     Logic is firmly intact in some areas of your life, however, as three outer planets (Jupiter, Saturn, and Pluto) travel through practical Capricorn, which helps you set major goals, formulate plans, and be a more responsible person in general.
                     <br>
                     <br>
                      These transits make you think about the long term and what you can do to prepare for a brighter future.

                     The sun spends time in your airy sign during your birthday month from late May to late June, encouraging you to communicate openly and often, revealing what's on your mind and willing to freely engage in conversations with anyone and everyone.

                     Gemini technically rules the arms, shoulders, and nervous system, but perhaps your most important (and active) body part is your brain. Details are extremely important as the sun enters Virgo, the other sign Mercury rules, at the end of August, and health issues are always a key aspect of that transit. Stomach or intestinal issues might be highlighted now, and they shouldn't be ignored. It doesn't take long for something to reach critical status, so don't disregard those early literal gut feelings that something might be wrong.
                     </p>
                  </div>
                  <div class="astrology-description2" data-id2="Taurus">
                  <div class="row">
                  <div class="col-6 pl-5">
                     <div class="image-container">
                        <img src="../assets/images/astro-signs/Taurus.png" alt="" class="img-fluid">
                        <h5 class="title"> Taurus </h5>
                     </div>
                  </div>
                  <div class="col-6 pr-5">
                     <div class="image-container">
                        <img src="../assets/images/astrology-signs/Thebastion-Tauro-Purple.png" alt="" class="img-fluid">
                        <h5 class="title"> The Bastion </h5>
                     </div>
                  </div>
                  </div>
                     <p class="description">
                     You might struggle to maintain your usual conservative, steady approach to life this year, but keeping an open mind helps you deal with the inevitable ups and downs that 2020 will bring.

                     As the year begins, beautiful Venus, your ruler and the goddess of love and money, is paired up with innovative Aquarius, so you're much more open to new ideas.

                     Uranus, the unpredictable planet that favors change and rules eccentric Aquarius, is paired up with your steady sign all year, so some upheaval is inevitable. Uranus is retrograde at the start of the year only until January 10 and then again starting in mid-August until the end of the year. 
                     
                     <br>
                     <br>
                     Rolling with the changes might be your only option for much of this year, Taurus.

                     Powerful Mars is in independent Aries from the end of June to the end of the year, making the second half of 2020 very me-centric. Healthwise, Mars in Aries (direct) represents your physical body and taking action, so this should be a time when you're proactive about your health. If anything has been bothering you, get it checked out now.

                     Mercury is closely tied to sibling relationships, so paying close attention to the three Mercury retrograde cycles this year (mid-February to early March; mid-June to mid-July; and mid-October to early November) can help you avoid misunderstandings with brothers and sisters.

                     Both loving Venus and chatty Mercury enter Libra, the sign of relationships, at the end of October, so you take a rational, fair-minded approach to friendship. You give good advice now, so don't be surprised if friends want you to act as a ref or mediator for their disagreements.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-6 center-block">
                  <h2 style="color: white;text-align: center;font-family: Montserrat;text-transform: uppercase;">Discover your astrological dream sign and the lost keys to the
                     one is talking about
                  </h2>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-6 center-block">
                  <h2 style="color: white;text-align: center;font-family: Montserrat;text-transform: uppercase;">Discover your astrological dream sign and the lost keys to the
                     one is talking about
                  </h2>
               </div>
            </div>
         <div class="submit-form get hide">
              <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-6 form-group center-block">
                  <input type="text" class="form-control" name="name" id="fullname" placeholder="Enter Your Name" required>
               </div>
             </div>
             <div class="row">
               <div class="col-sm-6 col-md-6 col-lg-6 form-group center-block">
                  <div class="row">
                     <div class="col-sm-4 col-md-4 col-lg-4 form-group">
                        <select class="form-control" name="mobths" required >
                           <option value="" disabled selected hidden>Month</option>
                           <?php for($month = 1; $month <= 12; $month++) : ?>
                              <option value="<?= $month; ?>"><?= date('F', mktime(0, 0, 0, $month, 1)); ?></option>
                           <?php endfor; ?>
                        </select>
                     </div>
                     <div class="col-sm-4 col-md-4 col-lg-4 form-group">
                        <select class="form-control" name="day" required>
                           <option value="" disabled selected hidden>Day</option>
                           <?php for($day = 1; $day <= 31; $day++) : ?>
                              <option value="<?= $day; ?>"><?= str_pad($day, 2, "0", STR_PAD_LEFT) ?></option>
                           <?php endfor; ?>
                        </select>
                     </div>
                     <div class="col-sm-4 col-md-4 col-lg-4 form-group">
                        <select class="form-control" name="year" required>
                           <option value="" disabled selected hidden>Year</option>
                           <?php 
                              $currentYear = date("Y");
                              for( $year = 1920; $year <= $currentYear; $year++) :
                           ?>
                              <option value="<?= $year; ?>"><?= $year; ?></option>
                           <?php endfor; ?>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 col-md-6 col-lg-6 form-group center-block">
                  <button class="custom-btn btn-25 submit" name="submit" id="submit"><p>Get Your Free Compatibility Reading</p></button>
               </div>
            </div>
         </div>               
         
         <footer>
            <div class="col-sm-6 col-md-6 col-lg-6 center-block" id="footer">
               <a href="#">Terms</a>&nbsp;<span style="color: white">|</span>&nbsp;<a href="#">Privacy</a>&nbsp;<span style="color: white">|</span>&nbsp;<a href="#">Disclamer</a><span style="color: white">&nbsp;|&nbsp;</span><a href="#">Contact</a>
            </div>
            <br>
            <div class="row">
               <div class="col-sm-10 col-md-10 col-lg-10 center-block">
                  <p style="color: white;text-align: center;">Copyright � 2020 Dream Alchemy</p>
               </div>
            </div>
            <br>
         </footer>
      </div>
	</section>

      <script src="../assets/js/jquery-3.5.1.js"></script>
      <script src="../assets/js/mapster.min.js?ver=1.0.0"></script>
      <script src="../assets/js/bootstrap.min.js"></script>
      <script src="../assets/js/custom.js"></script>
      <script>
         (function($) {
            var basic_opts = {
               mapKey: 'zodiac',
               singleSelect: true
            };

            var basic_opts2 = {
               mapKey: 'zodiac2',
               singleSelect: true
            };
            

            var initial_opts = $.extend({}, basic_opts, 
               { 
                  fill: false,
                  stroke: true,
                  strokeWidth: 2,
                  scaleMap: true,
                  strokeColor: 'ff0000',
               });

            var initial_opts2 = $.extend({}, basic_opts2, 
               { 
                  fill: false,
                  stroke: true,
                  strokeWidth: 2,
                  scaleMap: true,
                  strokeColor: 'ff0000',
               });

            $('img[usemap="#astrology-map"]').mapster(initial_opts)
             .mapster('rebind',basic_opts)

            $('img[usemap="#astrology-map2"]').mapster(initial_opts2)
             .mapster('rebind',basic_opts2)
         })(jQuery)
      </script>
   </body>
</html>