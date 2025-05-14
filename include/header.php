<?php
$version = "0.4.9";
?>
<!doctype html>
<html>
    <head>
        <?php
        $host = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
        if (!defined("MAIN_URL")) {
            if ($_SERVER['HTTP_HOST'] != 'fun-strike.test') {
                define('MAIN_URL', 'https://' . $_SERVER['HTTP_HOST']);
                ?>
                <script>
                    if (location.protocol !== 'https:') {
                        location.replace(`https:${location.href.substring(location.protocol.length)}`);
                    }
                </script>
                <?php
            } else {
                define('MAIN_URL', $host . '://' . $_SERVER['HTTP_HOST']);
            }
        }
        ?>
        <meta charset="UTF-8" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="Kmr_GvekTyJi-XJAQUG97ZqN84DR_EbAtCOIIiBZm2Y" />
        <meta name="description" content="<?php echo!empty($metaDescription) ? $metaDescription : ''; ?>">
        <meta name="keyword" content="<?php echo!empty($metaKeyword) ? $metaKeyword : ''; ?>">
        <title>Fun Strike</title>
        <link rel="icon" type="image/png" href="/images/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo MAIN_URL; ?>/css/mdb.min.css?0.6.3">
        <link rel="stylesheet" href="<?php echo MAIN_URL; ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo MAIN_URL; ?>/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="<?php echo MAIN_URL; ?>/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo MAIN_URL; ?>/css/style.css?0.1<?php echo $version; ?>">
        <script src="<?php echo MAIN_URL; ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_URL; ?>/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_URL; ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo MAIN_URL; ?>/js/mdb.min.js?0.6.3"></script>
        <script src="<?php echo MAIN_URL; ?>/js/common.js?<?php echo $version; ?>" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                new WOW().init();
            });
        </script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="menu-container">
                    <nav class="navbar navbar-expand-md position-fixed">
                        <a class="navbar-brand " href="/"><img src="/images/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <ul class="navbar-nav ml-auto">
                                <a class="nav-link <?php echo $page == 'home' ? 'active' : ''; ?>" href="/">HOME</a>
                                <a class="nav-link <?php echo $page == 'about-us' ? 'active' : ''; ?>" href="/about-us">ABOUT</a>
<!--                                <a class="nav-link <?php echo $page == 'games-play' ? 'active' : ''; ?>" href="/games-play">GAMES</a>-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        GAMES
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="/soft-play&trampoline">SOFT PLAY & TRAMPOLINE</a>
                                        <a class="dropdown-item" href="/bowling-with-spark">BOWLING WITH SPARK</a>
                                        <a class="dropdown-item" href="/arcade-games">ARCADE GAMES </a>
                                        <a class="dropdown-item" href="/vr-games">VR GAMES</a>
                                        <a class="dropdown-item" href="/kiddie-rides">KIDDIE RIDES</a>
                                        <a class="dropdown-item" href="/go-karting">GO KARTING</a>
                                        <!--<a class="dropdown-item" href="/games-play">ALL GAMES</a>-->
                                    </div>
                                </li>
                                <a class="nav-link <?php echo $page == 'our-offer' ? 'active' : ''; ?>" href="/our-offer">OFFER</a>
                                <a class="nav-link <?php echo $page == 'restaurant-us' ? 'active' : ''; ?>" href="/restaurant-us">RESTAURANT</a>
                                <a class="nav-link <?php echo $page == 'our-event' ? 'active' : ''; ?>" href="/our-event">EVENTS</a>
                                <a class="nav-link <?php echo $page == 'our-memories' ? 'active' : ''; ?>" href="/our-memories">MEMORIES</a>
                                <a class="nav-link <?php echo $page == 'contact-us' ? 'active' : ''; ?> pr-4 mr-3" href="/contact-us">CONTACT</a>
                                <a class="nav-link bro-btn" href="https://api.whatsapp.com/send?phone=917600557671&text=Hello" target="_blank">BOOK A PARTY</a>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>