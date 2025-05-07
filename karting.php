<?php
include 'include/header.php';
?>

<div class="play-game">
    <section class="comman-header">
        <!--<img src="/images/comman-header.png" class="w-100">-->
        <div class="container">
            <div class="commn-title">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="wow fadeInUp">Go Karting</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="wow fadeInUp text-right" data-wow-delay="0.5s">Home / Play / Go Karting</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about-data">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-box d-flex align-items-center">
                        <img src="/images/karting/logo.png" class="mr-4 wow bounceInDown">
                        <h4 class="wow fadeInUp">GO KARTING</h4>
                    </div>
                </div>
                <div class="col-md-6 mt-5 my-md-0">
                    <div class="txt-box">
                        <p class="pb-1 wow fadeInUp" data-wow-delay="0.1s">Race to Win! 🏎️💨 </p>
                        <p class="pb-1 wow fadeInUp" data-wow-delay="0.2s">Experience the ultimate thrill on our exciting Go-Karting track! With sharp turns and fast straightaways, it's the perfect place to unleash your inner racer. Whether you’re challenging friends or just enjoying the ride, our track offers endless fun for all ages and skill levels.</p>
                        <p class="pb-1 wow fadeInUp" data-wow-delay="0.3s">Fast. Fun. Exciting.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Get ready for the ride of a lifetime on our thrilling track – your adventure awaits!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="game-img">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="img-box wow fadeInLeft" data-wow-delay="0.1s">
                        <a data-fancybox="gallery"  href="/images/karting/n-01.png">
                            <img src="/images/karting/n-01.png" class="w-100">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box wow fadeInLeft" data-wow-delay="0.1s">
                        <video style="border-radius: 16px;" loop="" width="100%" autoplay="" muted="">
                            <source src="/images/karting/v-01.mp4" class="w-100">
                        </video>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-box wow fadeInLeft" data-wow-delay="0.1s">
                        <video style="border-radius: 16px;" loop="" width="100%" autoplay="" muted="">
                            <source src="/images/karting/v-02.mp4" class="w-100">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</div>

<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
<script src="<?php echo MAIN_URL; ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript">initHome();</script>
<?php
include 'include/footer.php';
?>

