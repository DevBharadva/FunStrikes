<?php

$page = "home";
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$otherParam = "";
if (!empty($uri_segments[1])) {
    $page = $uri_segments[1];
}

switch ($page) {
    case "about-us":
        include 'about.php';
        break;
    case "games-play":
        include 'play.php';
        break;
    case "soft-play&trampoline":
        include 'trampoline.php';
        break;
    case "arcade-games":
        include 'arcade.php';
        break;
    case "bowling-with-spark":
        include 'bowling.php';
        break;
    case "vr-games":
        include 'vr.php';
        break;
    case "kiddie-rides":
        include 'kiddie-ride.php';
        break;
    case "go-karting":
        include 'karting.php';
        break;
    case "restaurant-us":
        include 'cafe.php';
        break;
    case "our-event":
        include 'event.php';
        break;
    case "our-memories":
        include 'memories.php';
        break;
    case "contact-us":
        include 'contact.php';
        break;
    case "privacy-policy":
        include 'policy.php';
        break;
    case "our-offer":
        include 'offer.php';
        break;
    default:
        include 'home.php';
}
?>


