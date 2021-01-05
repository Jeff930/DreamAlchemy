<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include("meta.php"); ?>
    <?php include("styles.php"); ?>
</head>
<body>
<?php include("header.php"); ?>
    <section id="banner" style="background-image: url(./assets/images/slide.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <img src="./assets/images/slider_logo.png" alt="">
                            <h1 class="animated slideInLeft slow" id= header-title>Dream Alchemy</h1>
                            <p class="animated slideInRight slow">Prepare for what is up and coming for you. Uncover what the universe has to say. Astrology is here to guide you towards making better decisions for your future. </p>
                            <a href="http://staging.dreamalchemy.bestworkz.com/" class="def-btn">Read More</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="sign_box_main text-center">
    <h1 class="zodiac-heading pb-3 wow fadeInUp"> What's Your Sign? Read Your Daily Horoscope Today </h1>
    <div class="col-md-10 mx-auto pt-3">
        <div class="row">
            <div class="col-md-3 " onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Aries.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thepassionate-Aries-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Aries</h4>
                        <p style="color: #333;" class=zodiac-desc>Mar 21-Apr 20</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseout="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Taurus.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thebastion-Tauro-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Taurus</h4>
                        <p style="color: #333;" class=zodiac-desc>20 Apr–21 May</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Gemini.png" class="zodiac-sign" style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thecreator-Geminis-Purple.png" class="zodiac-sign" style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Gemini</h4>
                        <p style="color: #333;" class=zodiac-desc>21 May–21 June</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Cancer.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thedistortion-Cancer-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Cancer</h4>
                        <p style="color: #333;" class=zodiac-desc>21 Jun–23 Jul</p>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="row">
        <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Leo.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Theleader-Leo-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Leo</h4>
                        <p style="color: #333;" class=zodiac-desc >	23 Jul–23 Aug</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Virgo.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thementalist-Virgo-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Virgo</h4>
                        <p style="color: #333;" class=zodiac-desc >Aug 23-Sept 20</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Libra.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thecontrol-Libra-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Libra</h4>
                        <p style="color: #333;" class=zodiac-desc >Sept 23-Oct 23</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Scorpio.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Theilluminated-Escorpio-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Scorpio</h4>
                        <p style="color: #333;" class=zodiac-desc >Oct 23-Nov 22</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Sagittarius.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Theexplorer-Sagitario-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Sagittarius</h4>
                        <p style="color: #333;" class=zodiac-desc >Nov 23- Dec 22</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Capricorn.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thefortress-Capricornio-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Capricorn</h4>
                        <p style="color: #333;" class=zodiac-desc >Nov 22-Dec 22</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Aquarius.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thesmith-Acuario-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Aquarius</h4>
                        <p style="color: #333;" class=zodiac-desc >Jan 20-Feb 19</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3" onmouseover="changeText(this)" onmouseleave="changeText2(this)">
                <div class="row">
                <div class="flip-box">
                    <div class="flip-box-inner">
                          <div class="flip-box-front">
                          <img src="./assets/images/astro-signs/Pisces.png" class=zodiac-sign style="object-fit: contain;" alt="">
                          </div>
                          <div class="flip-box-back">
                        <img src="./assets/images/astrology-signs/Thedreamer-Piscis-Purple.png" class=zodiac-sign style="object-fit: contain;" alt="">
                        </div>
                    </div>
                </div>
                    <div class="zodiac-content-title wow fadeInUp">
                        <h4 style="color: #333;">Pisces</h4>
                        <p style="color: #333;" class=zodiac-desc>Feb 19- Mar 21</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <div class="container pb-3">
     <div class="row">
         <div class="col">
         <h1 class="blog-list wow animated fadeInUp pt-5"> Recent Blog Post </h1>
         </div>
     </div>
 </div>
	  
      <div class="container">
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel" data-interval="4000">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog wow slideInLeft">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">November 02 2020</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="./assets/images/alchemy-blog/blog1.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="/v3/how-astrology-affects-human-lives.php" tabindex="0">
                                <h5>How Astrology Affects Human Lives</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                            
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Humans are interconnected to other elements in more ways than we can imagine. The sun, the moon, the planets, and the stars are integral to our lives.</p>
                            </div>
                            <div class="mt"> <a href="/v3/how-astrology-affects-human-lives.php" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog wow slideInUp">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">November 02 2020</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="./assets/images/alchemy-blog/blog6.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="/v3/how-to-tell-if-astrology-reading-is-accurate.php" tabindex="0">
                                <h5>How To Tell If Astrology Reading is Accurate</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                            
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>When it comes to astrology, every person has different beliefs. Some see the Horoscope as their gospel. Some just don't see the value in them.</p>
                            </div>
                            <div class="mt"> <a href="/v3/how-to-tell-if-astrology-reading-is-accurate.php" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog wow slideInRight">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">November 02 2020</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="./assets/images/alchemy-blog/blog5.png"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="/v3/astrology-and-marriage-prediction.php" tabindex="0">
                                <h5>Astrology and Marriage Prediction</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                            
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>We’ve learned a lot about how astrology is used to interpret the connection of the movements of celestial bodies to human life.</p>
                            </div>
                            <div class="mt"> <a href="/v3/astrology-and-marriage-prediction.php" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                    <div class="col-md-4" >
                        <div class="item-box-blog wow slideInLeft">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">November 02 2020</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="./assets/images/alchemy-blog/blog4.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="/v3/how-astrology-affects-human-lives.php" tabindex="0">
                                <h5>How Astrology Affects Human Lives</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                            
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Humans are interconnected to other elements in more ways than we can imagine. The sun, the moon, the planets, and the stars are integral to our lives.</p>
                            </div>
                            <div class="mt"> <a href="/v3/how-astrology-affects-human-lives.php" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog wow slideInDown">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">November 02 2020</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="./assets/images/alchemy-blog/blog5.png"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="/v3/how-to-tell-if-astrology-reading-is-accurate.php" tabindex="0">
                                <h5>How To Tell If Astrology Reading is Accurate</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                            
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>When it comes to astrology, every person has different beliefs. Some see the Horoscope as their gospel. Some just don't see the value in them.</p>
                            </div>
                            <div class="mt"> <a href="/v3/how-to-tell-if-astrology-reading-is-accurate.php" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog wow slideInRight">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">November 02 2020</span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="./assets/images/alchemy-blog/blog6.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                              <a href="/v3/astrology-and-marriage-prediction.php" tabindex="0">
                                <h5>Astrology and Marriage Prediction</h5>
                              </a>
                            </div>
                            <!--Data-->
                            <div class="item-box-blog-data" style="padding: px 15px;">
                            
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>We’ve learned a lot about how astrology is used to interpret the connection of the movements of celestial bodies to human life.</p>
                            </div>
                            <div class="mt"> <a href="/v3/astrology-and-marriage-prediction.php" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>

<div class= "zodiac-selection"  style="background-image: url(./assets/images/bg-parallax-1.jpg);background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="step-1">
                <h3 class= "text-center wow fadeIn slow" id="zodiac-heading">Want To Have Our Daily Horoscopes Sent To Your Email? Start By Selecting Your Star Sign:</h3>
                <div class="zodiac-signs text-center wow fadeIn slower">
                    <div class="horoscope-sign" onclick="getForm(this, 1)">
                        <picture>
                            <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/aries.avif" type="image/avif">
                            <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/aries.webp" type="image/webp">
                            <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="aries" title="Aries" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                        </picture>
                        <p class=zodiac-astrology>Aries</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 2)">
                        <picture>
                            <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/taurus.avif" type="image/avif">
                            <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/taurus.webp" type="image/webp">
                            <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="taurus" title="Taurus" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                        </picture>
                        <p class="zodiac-astrology">Taurus</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 3)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/gemini.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/gemini.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="gemini" title="Gemini" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Gemini</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 4)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/cancer.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/cancer.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="cancer" title="Cancer" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Cancer</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 5)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/leo.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/leo.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="leo" title="Leo" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Leo</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 6)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/virgo.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/virgo.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="virgo" title="Virgo" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Virgo</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 7)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/libra.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/libra.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="libra" title="Libra" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Libra</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 8)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/scorpio.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/scorpio.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="scorpio" title="Scorpio" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Scorpio</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 9)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/sagittarius.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/sagittarius.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="sagittarius" title="Sagittarius" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Sagittarius</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 10)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/capricorn.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/capricorn.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="capricorn" title="Capricorn" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Capricorn</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 11)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/aquarius.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/aquarius.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="aquarius" title="Aquarius" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Aquarius</p>
                    </div>
                    <div class="horoscope-sign" onclick="getForm(this, 12)">
                    <picture>
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/pisces.avif" type="image/avif">
                        <source srcset="https://assets.astrologyanswers.com/ee-assets/media/footer_sign/pisces.webp" type="image/webp">
                        <img data-src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png" loading="lazy" class="lazyload" alt="pisces" title="Pisces" width="86" height="86" src="https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png">
                    </picture>
                        <p class="zodiac-astrology">Pisces</p>
                    </div>
                   
                    
                </div>
            </div>
            <div class="step-2" style="display: none; margin:auto; width:100%; max-width: 100%; " id="zodiac-form">
                <h3 class="text-center">Who should we send this to?</h3>
                <div id="signsectionerror_bottom"></div>
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="form-group">
                    <input type="text-left" class="form-control footer_txt_box signup_name" placeholder="First Name" id="name_bottom" name="name">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="form-group">
                    <input type="email" class="form-control footer_txt_box signup_email" placeholder="Your Email..." id="email_bottom" name="email">
                    </div>
                </div>
                <input type="hidden" id="starsign_bottom" name="starsign" value="Aries">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="form-group">
                    <input type="button" class="btn_submit" id="signupformsubmit_bottom_new" value="SUBSCRIBE">
                    </div>
                </div>
                <div class="clearfix">

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    
                </div>
                <div class="clearfix">

                </div>
                </div>
            </div>

            
        </div>
        <div class="row circler pb-3" style='display: none;'>
            <div style="margin-top: 6px; width: 50px; height: 50px; border-radius: 100%; border: 1px solid transparent; background-color: rgba(200, 200, 200, .7); display: flex; align-items: center;"><img src="" alt="" id="zodiac-img" style="margin: auto; display: none; width: 80%; object-fit: contain;"></div> <button onclick="diffSign()" id="diff-sign" style="display:none;" class="btn btn-outline-secondary">Select a different sign</button>
        </div>
    </div>
</div>


<!-- Footer -->
<?php include("footer.php"); ?>
<script>
    var zodiac_form = document.getElementById("zodiac-form");
    var zodiac_signs = document.querySelector(".zodiac-signs");
    var zodiac_circle = document.querySelector(".circler");
    var zodiac_img = document.getElementById("zodiac-img");
    var diff_sign = document.getElementById("diff-sign");
    var zodiac_heading = document.getElementById("zodiac-heading");
    var x = document.querySelectorAll(".horoscope-sign");
    var zodiac_urls = [
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/aries.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/taurus.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/gemini.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/cancer.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/leo.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/virgo.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/libra.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/scorpio.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/sagittarius.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/capricorn.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/aquarius.png", 
        "https://assets.astrologyanswers.com/ee-assets/images/star-signs/footer_sign/pisces.png"
    ];
    
    function getForm(element, num){
        zodiac_form.style.display = "block";
        zodiac_signs.style.display = "none";
        diff_sign.style.display = "block";
        zodiac_img.style.display = "block";
        zodiac_heading.style.display = "none";
        zodiac_img.src = zodiac_urls[num-1];
        zodiac_circle.style.display = "flex";
    }

    function diffSign(){
        zodiac_form.style.display = "none";
        zodiac_signs.style.display = "block";
        diff_sign.style.display = "none";
        zodiac_img.style.display = "none";
        zodiac_circle.style.display = "none";
        zodiac_heading.style.display = "block";
    }

    function changeText(element){
      var qwe = element.children;
      var qwe2 = qwe[0].children;
      var qwe3 = qwe2[1].children;

      if(qwe3[0].innerHTML == "Aries"){
        qwe3[0].innerHTML = "The Passionate";
        qwe3[0].style.color = "#b589f1";
        
        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');

      }
      else if(qwe3[0].innerHTML == "Taurus"){
        qwe3[0].innerHTML = "The Bastion";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Gemini"){
        qwe3[0].innerHTML = "The Creator";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Cancer"){
        qwe3[0].innerHTML = "The Distortion";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Leo"){
        qwe3[0].innerHTML = "The Leader";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Virgo"){
        qwe3[0].innerHTML = "The Mentalist";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Libra"){
        qwe3[0].innerHTML = "The Control";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Scorpio"){
        qwe3[0].innerHTML = "The Illuminated";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Sagittarius"){
        qwe3[0].innerHTML = "The Explorer";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Capricorn"){
        qwe3[0].innerHTML = "The Fortress";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Aquarius"){
        qwe3[0].innerHTML = "The Smith";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
      else if(qwe3[0].innerHTML == "Pisces"){
        qwe3[0].innerHTML = "The Dreamer";
        qwe3[0].style.color = "#b589f1";

        qwe3[0].classList.add('animated');
        qwe3[0].classList.add('slower');
        qwe3[0].classList.add('fadeIn');
      }
    }

    function changeText2(element){
      var qwe = element.children;
      var qwe2 = qwe[0].children;
      var qwe3 = qwe2[1].children;
      
      if(qwe3[0].innerHTML == "The Passionate"){
        qwe3[0].innerHTML = "Aries";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Bastion"){
        qwe3[0].innerHTML = "Taurus";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Creator"){
        qwe3[0].innerHTML = "Gemini";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Distortion"){
        qwe3[0].innerHTML = "Cancer";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Leader"){
        qwe3[0].innerHTML = "Leo";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Mentalist"){
        qwe3[0].innerHTML = "Virgo";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Control"){
        qwe3[0].innerHTML = "Libra";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Illuminated"){
        qwe3[0].innerHTML = "Scorpio";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Explorer"){
        qwe3[0].innerHTML = "Sagittarius";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Fortress"){
        qwe3[0].innerHTML = "Capricorn";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Smith"){
        qwe3[0].innerHTML = "Aquarius";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
      else if(qwe3[0].innerHTML == "The Dreamer"){
        qwe3[0].innerHTML = "Pisces";
        qwe3[0].style.color = "black";

        qwe3[0].classList.remove('animated');
        qwe3[0].classList.remove('slower');
        qwe3[0].classList.remove('fadeIn');
      }
    }

 
</script>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

  <script> 
    $( document ).ready(function() {
        new WOW().init();
    });
</script>
</body>

</html>