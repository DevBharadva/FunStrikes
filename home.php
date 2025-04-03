<?php
include 'include/header.php';
?>

<div class="home" id="home">
    <section class="slider desk">
        <video id="brand-video" loop="" width="100%" height="100%" autoplay="" muted="">
            <source src="<?php echo MAIN_URL; ?>/images/funstrikes.mp4" type="video/mp4">
        </video>
        <div class="black-overlay"></div>
        <div class="title-txt">
            <h2 class="wow zoomIn"> <span>Where Fun </span><br> STRIKES FIRST</h2>
        </div>
    </section>
    <section class="slider mobile">
        <video id="brand-video" loop="" width="100%" height="100%" autoplay="" muted="">
            <source src="<?php echo MAIN_URL; ?>/images/memories/1.mp4" type="video/mp4">
        </video>
        <div class="black-overlay"></div>
        <div class="title-txt">
            <h2 class="wow zoomIn"> <span>Where Fun </span><br> STRIKES FIRST</h2>
        </div>
    </section>
    <section class="about-sec">
        <div class="container">
            <div class="heading">
                <h4 class="wow fadeInUp"><span> Step into Surat’s </span> ultimate gaming destination! At Funstrike, we bring you a world of excitement with thrilling bowling alleys, action-packed arcade games, immersive VR experiences, trampoline fun, and a dedicated kiddie zone for the little ones.</h4>
            </div>
            <div class="counter">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-box">
                            <img src="/images/right-up.png" class="pb-4">
                            <h2 class="count-digit count">7000 </h2>
                            <h5>Customers </h5>
                            <!--<p>Online & Physical</p>-->
                        </div>
                    </div>
                    <div class="col-md-4 mt-5 my-md-0">
                        <div class="about-img-carousel owl-carousel owl-theme">
                            <div class="img-box">
                                <img src="/images/about-center.png" class="w-100">
                            </div>
                            <div class="img-box">
                                <img src="/images/about-center-01.png" class="w-100">
                            </div>
                            <div class="img-box">
                                <img src="/images/about-center-02.png" class="w-100">
                            </div>
                            <div class="img-box">
                                <img src="/images/about-center-03.png" class="w-100">
                            </div>
                            <div class="img-box">
                                <img src="/images/about-center-04.png" class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-5 my-md-0">
                        <div class="about-box">
                            <img src="/images/right-up.png" class="pb-4">
                            <h2 class="count-digit count">100 </h2>
                            <h5>Daily fun visitors</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="game-sec">
        <div class="container">
            <div class="row align-items-end pb-5">
                <div class="col-md-6">
                    <div class="title">
                        <h2 class="wow fadeInLeft">Ready to strike up some fun? </h2>
                    </div>
                </div>
                <div class="col-md-6 mt-5 my-md-0" data-img-hover="img">
                    <h6 class="wow fadeInUp text-md-right" data-wow-delay="0.1s">Join us for an exhilarating <br> experience like no other!</h6>
                </div>
            </div>
            <div class="game-carousel owl-carousel owl-theme">
                <div class="game-box">
                    <div class="img-box mb-3">
                        <img src="/images/game-01.png" class="w-100">
                    </div>
                    <div class="d-flex justify-content-between align-items-center" data-img-hover="img">
                        <h4 class="wow fadeInUp">SOFT PLAY & TRAMPOLINE</h4>
                        <div class="icon wow zoomIn">
                            <a href="/soft-play&trampoline">
                                <img src="/images/send.png" data-hover-src="/images/send-hover.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="game-box">
                    <div class="img-box mb-3">
                        <img src="/images/game-02.png" class="w-100">
                    </div>
                    <div class="d-flex justify-content-between align-items-center" data-img-hover="img">
                        <h4 class="wow fadeInUp">BOWLING WITH SPARK</h4>
                        <div class="icon wow zoomIn">
                            <a href="/bowling-with-spark">
                                <img src="/images/send.png" data-hover-src="/images/send-hover.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="game-box">
                    <div class="img-box mb-3">
                        <img src="/images/game-03.png" class="w-100">
                    </div>
                    <div class="d-flex justify-content-between align-items-center" data-img-hover="img">
                        <h4 class="wow fadeInUp">ARCADE GAMES </h4>
                        <div class="icon wow zoomIn">
                            <a href="/arcade-games">
                                <img src="/images/send.png" data-hover-src="/images/send-hover.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="game-box">
                    <div class="img-box mb-3">
                        <img src="/images/game-04.png" class="w-100">
                    </div>
                    <div class="d-flex justify-content-between align-items-center" data-img-hover="img">
                        <h4 class="wow fadeInUp">VR Games</h4>
                        <div class="icon wow zoomIn">
                            <a href="/vr-games">
                                <img src="/images/send.png" data-hover-src="/images/send-hover.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="game-box">
                    <div class="img-box mb-3">
                        <img src="/images/game-05.png" class="w-100">
                    </div>
                    <div class="d-flex justify-content-between align-items-center" data-img-hover="img">
                        <h4 class="wow fadeInUp">KIDDIE RIDES</h4>
                        <div class="icon wow zoomIn">
                            <a href="/kiddie-rides">
                                <img src="/images/send.png" data-hover-src="/images/send-hover.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="game-box">
                    <div class="img-box mb-3">
                        <img src="/images/game-06.png" class="w-100">
                    </div>
                    <div class="d-flex justify-content-between align-items-center" data-img-hover="img">
                        <h4 class="wow fadeInUp">GO KARTING</h4>
                        <div class="icon wow zoomIn">
                            <a href="/go-karting">
                                <img src="/images/send.png" data-hover-src="/images/send-hover.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="offer-sec" data-img-hover="img">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="title mb-5">
                        <h2 class="wow fadeInUp">Offers to Maximize Fun</h2>
                    </div> 
                </div>
                <div class="col-md-3 mb-5">
                    <button class="more-btn wow swing"><a href="/our-offer">DISCOVER LATEST DEALS</a></button>
                </div>
            </div>
            <div class="offer-carousel owl-carousel owl-theme mb-5">
                <div class="testi-box">
                    <a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">
                        <img src="/images/offer/1.png" class="w-100">
                    </a>
                </div>
                <div class="testi-box">
                    <a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">
                        <img src="/images/offer/2.png" class="w-100">
                    </a>
                </div>
                <div class="testi-box">
                    <a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">
                        <img src="/images/offer/1.png" class="w-100">
                    </a>
                </div>
                <div class="testi-box">
                    <a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">
                        <img src="/images/offer/2.png" class="w-100">
                    </a>
                </div>
                <div class="testi-box">
                    <a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">
                        <img src="/images/offer/1.png" class="w-100">
                    </a>
                </div>
                <div class="testi-box">
                    <a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">
                        <img src="/images/offer/2.png" class="w-100">
                    </a>
                </div>
            </div>       
        </div>

    </section>
    <section class="testimonial-sec">
        <div class="container">
            <div class="title text-center mb-4">
                <h2 class="wow fadeInUp">Don’t Trust Us,  Trust Their Voice</h2>
            </div>
        </div>         
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="testi-box">
                <div class="row align-items-center">
                    <div class="col-md-5 col-6">
                        <img src="/images/review/01.png" class="w-100">
                    </div>
                    <div class="col-md-7 col-6">
                        <img src="/images/coma.png" class="pb-3">
                        <p>"Funstrike is hands down the best gaming arena in Surat! My kids loved the soft play area, and the arcade games kept me hooked for hours. IRA Café was the perfect spot to unwind, with delicious food and a lively ambiance. Can’t wait to visit again!"</p>
                        <h6>Radhika Patel</h6>
                    </div>
                </div>
            </div>
            <div class="testi-box">
                <div class="row align-items-center">
                    <div class="col-md-5 col-6">
                        <img src="/images/review/02.png" class="w-100">
                    </div>
                    <div class="col-md-7 col-6">
                        <img src="/images/coma.png" class="pb-3">
                        <p>"I attended a bowling night at Funstrike, and it was such a blast! The neon lights and music made it an electrifying experience. The café’s pizzas and mocktails were amazing too. Highly recommend this place for a fun family outing."</p>
                        <h6>Amit Patel</h6>
                    </div>
                </div>
            </div>
            <div class="testi-box">
                <div class="row align-items-center">
                    <div class="col-md-5 col-6">
                        <img src="/images/review/03.png" class="w-100">
                    </div>
                    <div class="col-md-7 col-6">
                        <img src="/images/coma.png" class="pb-3">
                        <p>"Funstrike is a hidden gem for anyone looking to spend quality time with friends or family.The VR games are super immersive, and the trampoline zone is pure joy for kids.IRA Café has a wide menu with something for everyone-great food and even better vibes!"</p>
                        <h6>Prince Kotak</h6>
                    </div>
                </div>
            </div>
            <div class="testi-box">
                <div class="row align-items-center ">
                    <div class="col-md-5 col-6">
                        <img src="/images/review/04.png" class="w-100">
                    </div>
                    <div class="col-md-7 col-6">
                        <img src="/images/coma.png" class="pb-3">
                        <p>"From arcade classics to go-karting, Funstrike has it all. It’s the perfect spot for thrill-seekers and foodies alike. We tried the burgers at IRA Café, and they were absolutely delicious. A must-visit for anyone in Surat!"</p>
                        <h6>Gruhil Kaswala</h6>
                    </div>
                </div>
            </div>
            <div class="testi-box">
                <div class="row align-items-center">
                    <div class="col-md-5 col-6">
                        <img src="/images/review/05.png" class="w-100">
                    </div>
                    <div class="col-md-7 col-6">
                        <img src="/images/coma.png" class="pb-3">
                        <p>"I hosted my son’s birthday party at Funstrike, and it was an unforgettable experience. The staff was incredibly helpful, and the kids loved the kiddie rides and bowling. The café’s desserts were a big hit too. Definitely coming back for more celebrations!"</p>
                        <h6>Dhruv Chovatiya</h6>
                    </div>
                </div>
            </div>
            <div class="testi-box">
                <div class="row align-items-center">
                    <div class="col-md-5 col-6">
                        <img src="/images/review/06.png" class="w-100">
                    </div>
                    <div class="col-md-7 col-6">
                        <img src="/images/coma.png" class="pb-3">
                        <p>"Funstrike is an all-in-one entertainment hub! Whether it’s gaming, bowling, or simply chilling at IRA Café, this place has something for everyone. The café’s pasta and shakes are a must-try. Perfect for weekend hangouts!"</p>
                        <h6>Jensi Rana</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-sec">
        <!--<img src="/images/gallery-back.png" class="w-100">-->
        <div class="container">
            <div class="title text-center mb-4">
                <h2 class="wow fadeInUp">Fun Strike Moments</h2>
            </div>

            <div id="carousel">
                <figure id="spinner">
                    <img src="/images/gallery/new/01.png" alt>
                    <img src="/images/gallery/new/02.png" alt>
                    <img src="/images/gallery/new/03.png" alt>
                    <img src="/images/gallery/new/04.png" alt>
                    <img src="/images/gallery/new/05.png" alt>
                    <img src="/images/gallery/new/06.png" alt>
                    <img src="/images/gallery/new/07.png" alt>
                    <img src="/images/gallery/new/08.png" alt>
                    <img src="/images/gallery/new/09.png" alt>
                    <img src="/images/gallery/new/10.png" alt>
                </figure>
            </div>
            <span style="float:left" class="left-icon" onclick="galleryspin('-')"><img src="/images/left-ar.png"></span>
            <span style="float:right" class="right-icon" onclick="galleryspin('')"><img src="/images/ridht-ar.png"></span>
        </div>
    </section>
    <section class="join-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="join-box">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="img-box">
                                    <img src="/images/team.png" class="w-100 wow zoomIn">
                                </div>
                            </div>
                            <div class="col-md-7" data-img-hover="img">
                                <div class="txt-box ml-md-4 mr-md-4">
                                    <div style="float:left">
                                        <h4 class="wow fadeInUp">Join Our Team</h4>
                                    </div>
                                    <div style="float:right" class="pt-2 wow bounceInRight">
                                        <a href="/contact-us">
                                            <img src="/images/send-hover.png" data-hover-src="/images/send.png">
                                        </a>
                                    </div>
                                    <p class="wow fadeInUp">If you are a fun person, and know that serving people with great enthusiasm is your thing – Come, join us! We are need of entertainment partners to guarantee amusement and assistance to our customers. </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--    <footer>
            <div class="container">
                <div class="footer-data pt-5">
                    <img src="/images/f-logo.png" class="pb-5">
                    <div class="link-data d-flex justify-content-center mb-4 pb-2">
                        <a href="/">Home</a>
                        <a href="/about-us">About Us</a>
                        <a href="/game-play">Play</a>
                        <a href="/our-event">Events</a>
                        <a href="/contact-us">Contact Us</a>
                    </div>
                    <div class="d-flex pb-5 justify-content-center">
                        <div class="ig mx-3"><a href="https://www.instagram.com/funstrikesurat/" target="_blank">Instagram</a></div>
                        <div class="fb mx-2"><a href="https://www.facebook.com/people/Fun-Strike/61559919923487/" target="_blank">Facebook</a></div>
                    </div>
                </div>
            </div>
            <div class="footer-bottam">
                © Copyright 2024 Fun Strike.  All Rights Reserved. |  Powered By <a href="https://achievecreative.in/" target="_blank"> Achieve creative</a>
            </div>
        </footer> -->
</div>

<script>
    var angle = 0;
    function galleryspin(sign) {
        spinner = document.querySelector("#spinner");
        if (!sign) {
            angle = angle + 45;
        } else {
            angle = angle - 45;
        }
        spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg);");
    }
</script>
<link rel="stylesheet" href="/css/animate.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
<script src="<?php echo MAIN_URL; ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript">initHome();</script>

<?php
include 'include/footer.php';
?>