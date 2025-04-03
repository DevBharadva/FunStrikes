<?php
include 'include/header.php';
?>

<div class="contact">
    <section class="comman-header">
        <div class="container">
            <div class="commn-title">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="wow fadeInUp">Contact</h2>
                    </div>
                    <div class="col-md-6">
                        <p class="wow fadeInUp text-right" data-wow-delay="0.5s">Home / Contact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about-data pb-4 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title-box mb-4 pb-3">
                        <h4 class="wow fadeInLeft">Get connected <br> to Fun Strike</h4>
                    </div>
                    <div class="img-box">
                        <img src="/images/contact/02.png" class="w-100 wow zoomIn">
                    </div>
                </div>
                <div class="col-md-8 mt-5 my-md-0">
                    <div class="row mb-5 ml-md-4">
                        <div class="col-md-5">
                            <div class="data-box">
                                <h5 class="wow fadeInUp">EMAIL</h5>
                                <p class="wow fadeInUp">inquiry.funstrikes@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-3 mt-4 my-md-0">
                            <div class="data-box">
                                <h5 class="call wow fadeInUp">PHONE</h5>
                                <p class="wow fadeInUp">+91 76005 57671</p>
                            </div>
                        </div>
                        <div class="col-md-4 mt-4 my-md-0">
                            <div class="data-box">
                                <h5 class="add wow fadeInUp">ADDRESS</h5>
                                <p class="wow fadeInUp">Gauravpath Road, Adajan,  Pal, Surat - Gujarat</p>
                            </div>
                        </div>
                    </div>
                    <div class="map-box ml-md-4">
                        <video style="border-radius: 16px;" loop="" width="100%" autoplay="" muted="">
                            <source src="/images/contact/drone-v.mp4" class="w-100">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-data">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="img-box">
                    <img src="/images/contact/01.png" class="w-100 wow zoomIn">
                </div>
            </div>
            <div class="col-md-8">
                <div class="floating-form ml-md-4 mt-5 my-md-0">
                    <form id="contactus">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input class="floating-input" name="fname" type="text" placeholder=" ">
                                    <label>First name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="floating-label">
                                    <input class="floating-input" name="lname" type="text" placeholder=" ">
                                    <label>Last name*</label>
                                </div>
                            </div>
                        </div>
                        <div class="floating-label">
                            <input class="floating-input" name="email" type="text" placeholder=" ">
                            <label>Enter your email*</label>
                        </div>
                        <div class="floating-label">
                            <textarea class="floating-input floating-textarea" name="message" placeholder=" "></textarea>
                            <label>Your message here*</label>
                        </div>
                        <!--                            <div class="col-12 alert alert-danger d-none"></div>
                                                    <div class="col-12 alert alert-success d-none"></div>-->
                        <div class="sub-btn">
                            <a href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">
                                <button class="px-5 wow fadeInLeft mt-4">SUBMIT</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<link rel="stylesheet" href="css/jquery.fancybox.min.css" />
<script src="<?php echo MAIN_URL; ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript">initContact();</script>
<?php
include 'include/footer.php';
?>

