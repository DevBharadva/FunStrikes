<?php
include 'include/header.php';
?>

<div class="event">
    <section class="comman-header">
        <div class="container">
            <div class="commn-title">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="wow fadeInUp">Events</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="wow fadeInUp text-right" data-wow-delay="0.5s">Home / Events</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="event-data">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-5">
                    <div class="event-box">
                        <img src="/images/event/doc.png" class="pb-4 wow bounceInDown">
                        <h4 class="wow fadeInUp">Bowling Tournament</h4>
                        <h6 class="wow fadeInUp pb-5 mb-4" data-wow-delay="0.5s">13th Nov 2024</h6>
                        <div class="mb-5">
                            <button class="more-btn wow swing"><a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">Join our fun WhatsApp Community! <img src="/images/w-right.png" class="ml-3"></a></button>
                        </div> <!--<p>Lorem ipsum dolor sit amet, consectetur tester adipiscing elit, sed do eiusmod tempor sdt incididunt ut labore et dolore </p>-->
                    </div>
                    <div class="send-arrow">
                        <a data-fancybox="gallery1"  href="/images/event-01/01.jpg">
                            <img src="/images/event/send.png">
                        </a>
                        <a data-fancybox="gallery1"  href="/images/event-01/02.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/03.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/04.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/05.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/06.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/07.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/08.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/09.jpg"></a>
                        <a data-fancybox="gallery1"  href="/images/event-01/10.jpg"></a>
                    </div>
                </div>
                <div class="col-md-7 mt-5 my-md-0">
                    <div class="img-box ml-md-3">
                        <video style="border-radius: 16px;" loop="" width="100%" autoplay="" muted="">
                            <source src="/images/event/01.mp4" class="w-100">
                        </video>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-5">
                    <div class="event-box">
                        <img src="/images/event/doc.png" class="pb-4 wow bounceInDown">
                        <h4 class="wow fadeInUp">Launch Mode On</h4>
                        <h6 class="wow fadeInUp pb-5 mb-4" data-wow-delay="0.5s">23th Nov 2024</h6>
                        <div class="mb-5">
                            <button class="more-btn wow swing"><a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">Join our fun WhatsApp Community! <img src="/images/w-right.png" class="ml-3"></a></button>
                        </div> <!--<p>Lorem ipsum dolor sit amet, consectetur tester adipiscing elit, sed do eiusmod tempor sdt incididunt ut labore et dolore </p>-->
                    </div>
                    <div class="send-arrow">
                        <img src="/images/event/send.png">
                    </div>
                </div>
                <div class="col-md-7 mt-5 my-md-0">
                    <div class="img-box ml-md-3">
                        <video style="border-radius: 16px;" loop="" width="100%" autoplay="" muted="">
                            <source src="/images/event/02.mp4" class="w-100">
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
<script>
    $(".more-btn", "[data-img-hover='img']").hover(function () {
        var $this = $(this);
        $this.find("img").attr("data-src", $this.find("img").attr("src"));
        $this.find("img").attr("src", $this.find("img").attr("data-hover-src"));
    }, function () {
        var $this = $(this);
        $this.find("img").attr("src", $this.find("img").attr("data-src"));
    });
</script>
<?php
include 'include/footer.php';
?>
