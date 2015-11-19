<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: /includes/headers.php
// | Author: Sebastian Inman (stiffnasty)
// | Last Modified: October 21, 2013
// +------------------------------------------------+
// | HANDLE ERRORS AND START SESSIONS
// +------------------------------------------------+

    error_reporting(E_ALL^E_NOTICE);
    session_start();

// +------------------------------------------------+
// | SET GLOBAL WEBSITE ROOT - !!!! CHANGE THIS !!!!
// +------------------------------------------------+

    $root = $_SESSION['root'] = ($_SERVER['DOCUMENT_ROOT']."/");
    $site = $_SESSION['site'] = "http://m.pavatimarine.com/";

// +------------------------------------------------+
// | INCLUDE NECESSARY FILES
// +------------------------------------------------+

    require_once("./includes/connect.php");
    require_once("./includes/functions.php");

// +------------------------------------------------+
// | INITIALIZE THE SITE HEADER
// +------------------------------------------------+

?>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Pavati Marine</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="<?php echo $site; ?>files/styles/master.css">
        <link rel="stylesheet" href="<?php echo $site; ?>files/styles/m.pavatimarine.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="<?php echo $site; ?>files/javascript/jquery.swipe.min.js"></script>
        <script type="text/javascript" src="<?php echo $site; ?>files/javascript/functions.js"></script>
    </head>

    <header class="m-header">
        <a class="m-logo" href="<?php echo $_SESSION['site']; ?>"></a>
        <button class="animate2 border3 m-nav-btn">MENU</button>
    </header>

    <div class="m-nav-swiper"></div>

    <nav class="m-nav">
        <a class="border3 m-nav-number" href="tel:18008665269">Call Us</a>
        <div class="m-nav-links">
            <a href="<?php echo $site; ?>"><li>Welcome</li></a>
            <a href="<?php echo $site; ?>boats"><li>Boat Models</li></a>
            <a href="<?php echo $site; ?>for-sale"><li>Boats For Sale</li></a>
            <a href="<?php echo $site; ?>about"><li>About Pavati</li></a>
            <a href="<?php echo $site; ?>blog"><li>Discussions</li></a>
            <a href="<?php echo $site; ?>gallery"><li>Photo Gallery</li></a>
            <a href="<?php echo $site; ?>contact"><li>Contact Us</li></a>
        </div>
    </nav>