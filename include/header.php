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
        <!-- Save this as include/header.php -->
<header>
  <nav class="navbar">
    <div class="navbar-container">
      <a href="index.php" class="logo">
        <img src="images/f-logo.png" alt="Fun Strike Logo">
      </a>
      <ul class="nav-menu">
        <li><a href="home.php" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
          <a href="#">Games ▾</a>
          <ul class="dropdown-menu">
            <li><a href="bowling.php">Bowling</a></li>
            <li><a href="arcade.php">Arcade</a></li>
            <li><a href="vr.php">VR</a></li>
            <li><a href="karting.php">Karting</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#">Offers ▾</a>
          <ul class="dropdown-menu">
            <li><a href="offer.php">Special Offers</a></li>
            <li><a href="policy.php">Policy</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </nav>
</header>
