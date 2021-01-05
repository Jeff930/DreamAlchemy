<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/7e51c33259.js" crossorigin="anonymous"></script>

    <title>Home</title>
</head>

<nav class="navbar navbar-expand-lg py-3 shadow-sm">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="./assets/images/logo.png" width="45" alt="" class="d-inline-block align-middle mr-2">
            <span class="text-uppercase font-weight-bold">Horoscope</span>
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<body>

    <section id="banner" style="background-image: url(./assets/images/slide.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <img src="./assets/images/slider_logo.png" alt="">
                            <h1>The Best Horoscope</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse fugiat adipisci distinctio
                                qui modi quod, aspernatur vel illum excepturi.</p>
                            <a href="#" class="def-btn">Read More</a>
                        </div>
                        <div class="col-md-4">
                            <div class="horoscope-btn d-flex">
                                <div class="icon mb-3">
                                    <i class="fas fa-horse-head"></i>
                                </div>
                                <a href="#" class="bnnr-btn">Chinese Astrology</a>
                            </div>
                            <div class="horoscope-btn d-flex">
                                <div class="icon mb-3">
                                    <i class="fas fa-home"></i>
                                </div>
                                <a href="#" class="bnnr-btn">Vasthusastra</a>
                            </div>
                            <div class="horoscope-btn d-flex">
                                <div class="icon mb-3">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="#" class="bnnr-btn">Carret Tarrot</a>
                            </div>
                            <div class="horoscope-btn d-flex">
                                <div class="icon mb-3">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#" class="bnnr-btn">Love Tarrot</a>
                            </div>
                            <div class="horoscope-btn d-flex">
                                <div class="icon mb-3">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <a href="#" class="bnnr-btn">Numerology</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2>About Horoscope</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem eum repudiandae
                                voluptatum voluptas officia adipisci aspernatur.</p>
                            <h4 class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo quidem
                                perferendis.</h4>
                            <a href="#" class="lm-link">Learn More About Horoscope</a>
                        </div>
                        <div class="col-md-6">
                            <img src="./assets/images/about_img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="history">
        <div class="stars"></div>
        <div class="twinkling"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="./assets/images/best-agency.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <h2>The Most Accurate Horoscope since 1917 in The City</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem eum repudiandae
                                voluptatum voluptas officia adipisci aspernatur.</p>
                            <ul>
                                <i class="far fa-check-circle"> There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered.</i>
                                <i class="far fa-check-circle"> There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered.</i>
                                <i class="far fa-check-circle"> There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered.</i>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="CTA">
        <div class="stars"></div>
        <div class="twinkling"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <video width="320" height="240" autoplay loop muted>
                                <source src="./assets/images/Fire_Smaller.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="col-md-6">
                            <h2>Effective Prediction Techniques</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem eum repudiandae
                                voluptatum voluptas officia adipisci aspernatur.</p>
                            <div class="horoscope-btn d-flex">
                                <a href="#" class="def-btn">MAKE AN APPOINTMENT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <h2>OUR SERVICES</h2>
        <div class="sep">
            <i class="fas fa-ellipsis-h"></i><i class="fas fa-grip-lines"></i><i class="fas fa-gem"></i><i
                class="fas fa-grip-lines"></i><i class="fas fa-ellipsis-h"></i>
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem eum repudiandae
            voluptatum voluptas officia adipisci aspernatur.</p>
        <div class="services-btn">
            <div class="left-btn"><a href="#" class="serv-btn">ALL</a></div>
            <div class="mid-btn"><a href="#" class="serv-btn">PAID SERVICES</a></div>
            <div class="right-btn"><a href="#" class="serv-btn">FREE SERVICES</a></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-3">
                            <div class="box-border">
                                <div class="serv-img-container">
                                    <div class="img-cont">
                                        <img src="./assets/images/success.png" alt="">
                                    </div>
                                </div>
                                <div class="serv-offered">
                                    <h4>CAREER</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis.</p>
                                    <div class="serv-link">
                                        <a href="#"><span>Read More</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="box-border">
                                <div class="serv-img-container">
                                    <div class="img-cont">
                                        <img src="./assets/images/proposal.png" alt="">
                                    </div>
                                </div>
                                <div class="serv-offered">
                                    <h4>MARRIAGE</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis.</p>
                                    <div class="serv-link">
                                        <a href="#"><span>Read More</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="box-border">
                                <div class="serv-img-container">
                                    <div class="img-cont">
                                        <img src="./assets/images/church.png" alt="">
                                    </div>
                                </div>
                                <div class="serv-offered">
                                    <h4>WORSHIP LESSON</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis.</p>
                                    <div class="serv-link">
                                        <a href="#"><span>Read More</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="box-border">
                                <div class="serv-img-container">
                                    <div class="img-cont">
                                        <img src="./assets/images/pregnant.png" alt="">
                                    </div>
                                </div>
                                <div class="serv-offered">
                                    <h4>PREGNANCY</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis.</p>
                                    <div class="serv-link">
                                        <a href="#"><span>Read More</span><i class="fa fa-long-arrow-right"></i></a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="feedback">
        <h2>WHAT CLIENTS ARE SAYING</h2>
        <div class="sep">
            <i class="fas fa-ellipsis-h"></i><i class="fas fa-grip-lines"></i><i class="fas fa-gem"></i><i
                class="fas fa-grip-lines"></i><i class="fas fa-ellipsis-h"></i>
        </div>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem eum repudiandae
            voluptatum voluptas officia adipisci aspernatur.</p>

        <div id="client-feedback" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="top:280px;">
                <li data-target="#client-feedback" data-slide-to="0" class="active"></li>
                <li data-target="#client-feedback" data-slide-to="1"></li>
                <li data-target="#client-feedback" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="feedback-comment row">
                                            <div class="feedback-i col-md-1">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="feedback-p col-md-11">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem
                                                    eum
                                                    repudiandae
                                                    voluptatum voluptas officia adipisci aspernatur.</p>
                                            </div>
                                        </div>
                                        <div class="feedback-client row align-items-center">
                                            <div class="col-md-7"></div>
                                            <div class="feedback-name col-md-3">
                                                <h5>JOAN DOE</h5>
                                                <span>Designer</span>
                                            </div>
                                            <div class="feedback-image col-md-2">
                                                <img src="./assets/images/taurus.png" width="60px" height="60px" alt="">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="feedback-comment row">
                                            <div class="feedback-i col-md-1">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="feedback-p col-md-11">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem
                                                    eum
                                                    repudiandae
                                                    voluptatum voluptas officia adipisci aspernatur.</p>
                                            </div>
                                        </div>
                                        <div class="feedback-client row align-items-center">
                                            <div class="feedback-image col-md-2">

                                                <img src="./assets/images/taurus.png" width="60px" height="60px" alt="">
                                            </div>
                                            <div class="feedback-name col-md-3">
                                                <h5>JOAN DOE</h5>
                                                <span>Designer</span>
                                            </div>
                                            <div class="col-md-7"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="feedback-comment row">
                                            <div class="feedback-i col-md-1">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="feedback-p col-md-11">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem
                                                    eum
                                                    repudiandae
                                                    voluptatum voluptas officia adipisci aspernatur.</p>
                                            </div>
                                        </div>
                                        <div class="feedback-client row align-items-center">
                                            <div class="col-md-7"></div>
                                            <div class="feedback-name col-md-3">
                                                <h5>JOAN DOE</h5>
                                                <span>Designer</span>
                                            </div>
                                            <div class="feedback-image col-md-2">
                                                <img src="./assets/images/taurus.png" width="60px" height="60px" alt="">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="feedback-comment row">
                                            <div class="feedback-i col-md-1">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="feedback-p col-md-11">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem
                                                    eum
                                                    repudiandae
                                                    voluptatum voluptas officia adipisci aspernatur.</p>
                                            </div>
                                        </div>
                                        <div class="feedback-client row align-items-center">
                                            <div class="feedback-image col-md-2">

                                                <img src="./assets/images/taurus.png" width="60px" height="60px" alt="">
                                            </div>
                                            <div class="feedback-name col-md-3">
                                                <h5>JOAN DOE</h5>
                                                <span>Designer</span>
                                            </div>
                                            <div class="col-md-7"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="feedback-comment row">
                                            <div class="feedback-i col-md-1">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="feedback-p col-md-11">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem
                                                    eum
                                                    repudiandae
                                                    voluptatum voluptas officia adipisci aspernatur.</p>
                                            </div>
                                        </div>
                                        <div class="feedback-client row align-items-center">
                                            <div class="col-md-7"></div>
                                            <div class="feedback-name col-md-3">
                                                <h5>JOAN DOE</h5>
                                                <span>Designer</span>
                                            </div>
                                            <div class="feedback-image col-md-2">
                                                <img src="./assets/images/taurus.png" width="60px" height="60px" alt="">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="feedback-comment row">
                                            <div class="feedback-i col-md-1">
                                                <i class="fas fa-quote-left"></i>
                                            </div>
                                            <div class="feedback-p col-md-11">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero autem
                                                    eum
                                                    repudiandae
                                                    voluptatum voluptas officia adipisci aspernatur.</p>
                                            </div>
                                        </div>
                                        <div class="feedback-client row align-items-center">
                                            <div class="feedback-image col-md-2">
                                                <img src="./assets/images/taurus.png" width="60px" height="60px" alt="">
                                            </div>
                                            <div class="feedback-name col-md-3">
                                                <h5>JOAN DOE</h5>
                                                <span>Designer</span>
                                            </div>
                                            <div class="col-md-7"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="newsletter"
        style="background-image: url(./assets/images/bg-parallax-1.jpg);background-repeat: no-repeat;">
        <h1>Subscribe for News and Updates</h1>
        <div class="horoscope-btn">
            <input type="text">
            <a href="#" class="def-btn">
                Subscribe
            </a>
        </div>
        </span>

    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <div class="footer-item">
                                <img src="./assets/images/footer_logo.png">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis.</p>
                                <div class="footer-link">
                                    <a href="#"><span>Read More</span><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="footer-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-item">
                                <h4>NEED OUR HELP</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis.</p>
                                <div class="footer-btn">
                                    <a href="#" class="def-btn">FREE QUOTE</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-item">
                                <h4>CONTACT US TODAY</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis.</p>
                                <div class="footer-contact">
                                    <input id="email" type="text" placeholder="&#xf0e0 Email Address...">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>