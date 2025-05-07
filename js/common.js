




function initHome() {
    $('.slider-carousel').owlCarousel({
        loop: true,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true
            },
            600: {
                items: 1,
                nav: false,
                loop: true
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    })

    $('.about-img-carousel').owlCarousel({
        loop: true,
        dots: false,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true
            },
            600: {
                items: 1,
                nav: false,
                loop: true
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    })



    $('.game-carousel').owlCarousel({
        loop: true,
        margin: 40,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true
            },
            600: {
                items: 2,
                nav: false,
                loop: true
            },
            1000: {
                items: 3,
                nav: false,
                loop: true
            }
        }
    })

    $('.offer-carousel').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: false,
        autoplay: true,
        center: true,
//        stagePadding: 250,
        autoplayTimeout: 1500,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true,
            },
            600: {
                items: 1,
                nav: false,
                loop: true,
            },
            1000: {
                items: 3,
                nav: false,
                loop: true,
            },
            1600: {
                items: 3,
                nav: false,
                loop: true,
            },
            1800: {
                items: 3,
                nav: false,
                loop: true,
            }
        }
    })

    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 20,
        dots: true,
        nav: false,
        autoplay: true,
        center: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true,
                stagePadding: 0,
            },
            600: {
                items: 1,
                nav: false,
                loop: true,
                stagePadding: 0,
            },
            1000: {
                items: 1,
                nav: false,
                loop: true,
                stagePadding: 350,
            },
            1600: {
                items: 2,
                nav: false,
                loop: true,
                stagePadding: 250,
            },
            1800: {
                items: 3,
                nav: false,
                loop: true,
                stagePadding: 100,
            }
        }
    })


    $(".icon", "[data-img-hover='img']").hover(function () {
        var $this = $(this);
        $this.find("img").attr("data-src", $this.find("img").attr("src"));
        $this.find("img").attr("src", $this.find("img").attr("data-hover-src"));
    }, function () {
        var $this = $(this);
        $this.find("img").attr("src", $this.find("img").attr("data-src"));
    });
    $(".more-btn", "[data-img-hover='img']").hover(function () {
        var $this = $(this);
        $this.find("img").attr("data-src", $this.find("img").attr("src"));
        $this.find("img").attr("src", $this.find("img").attr("data-hover-src"));
    }, function () {
        var $this = $(this);
        $this.find("img").attr("src", $this.find("img").attr("data-src"));
    });
    $(".txt-box", "[data-img-hover='img']").hover(function () {
        var $this = $(this);
        $this.find("img").attr("data-src", $this.find("img").attr("src"));
        $this.find("img").attr("src", $this.find("img").attr("data-hover-src"));
    }, function () {
        var $this = $(this);
        $this.find("img").attr("src", $this.find("img").attr("data-src"));
    });
    $(".tab", "#planTab").click(function () {
        $(".tab", "#planTab").removeClass("active");
        $(this).addClass("active");
        $(".tab-data", "#planTabContent").removeClass("active");
        $("[tab-data='" + $(this).attr("data-tab") + "']").addClass("active");
    });

    $('.count').each(function () {
        $(this).prop('counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
}

function initWork() {
    $('.amenities-carousel').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        stagePadding: 120,
        nav: true,
        navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true
            },
            600: {
                items: 2,
                nav: true,
                loop: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: true
            }
        }
    })
}



function initContact() {
    $("#contactus").submit(function (e) {
        var $submitButton = $(this).find("button[type='submit']");
        $(".alert").addClass("d-none");
        e.preventDefault();
        $submitButton.hide();
        var form = $(this);
        var url = "send.php";
        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(),
            dataType: 'JSON',
            success: function (data) {
                $submitButton.show();
                console.log(data);
                if (data.code == 0) {
                    $(".alert-danger").text(data.message);
                    $(".alert-danger").removeClass('d-none');
                }
                if (data.code == 1) {
                    $(".alert-success").text(data.message);
                    $(".alert-success").removeClass('d-none');
                    $('#contactus')[0].reset();
                }
            },
            error: function () {
                $submitButton.show();
            }
        });
    });
}


