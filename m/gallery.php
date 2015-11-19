<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: gallery.php
// | Author: Sebastian Inman (stiffnasty)
// | Last Modified: October 22, 2013
// +------------------------------------------------+
// | HANDLE ERRORS AND START SESSIONS
// +------------------------------------------------+

    error_reporting(E_ALL^E_NOTICE);
    session_start();

// +------------------------------------------------+
// | INCLUDE NECESSARY FILES
// +------------------------------------------------+

    require_once("./includes/connect.php");
    require_once("./includes/functions.php");
    include_once("./includes/headers.php")

// +------------------------------------------------+
// | INITIALIZE THE SITE
// +------------------------------------------------+

?>

    <body>

    <!-- PHOTO GALLERY CONTENT -->

        <?php if($_GET['i']){
        // GET SPECIFIC IMAGE
        $getPic = mysql_query("SELECT * FROM galleryimages WHERE galleryimgid = '".$_GET['i']."'");
        // CHECK IF THIS IMAGE EXISTS
        if(mysql_num_rows($getPic) == 0){ ?>

            <div class="m-content">
                <div class="m-error-container">
                    <?php returnError("Sorry, the image you're looking for doesn't exist."); ?>
                    <a class="animate2 border3 m-button-large" href="../gallery">View Gallery</a>
                </div>
            </div>

        <?php }else{ ?>

        <div class="m-content m-gallery">
            <h1>Pavati Marine Photo Gallery</h1>
            <?php $pic = mysql_fetch_assoc($getPic); ?>
            <img src="http://www.pavatimarine.com/imgs/gallery/<?php echo $pic['galleryimg']; ?>"/>
            <a class="animate2 border3 m-button-large" href="../gallery">View Gallery</a>

        </div>

        <?php }}else{ ?>

        <div class="m-content m-gallery">
            <h1>Pavati Marine Photo Gallery</h1>
            <?php // GET ALL IMAGES
            foreach(query("galleryimages","ALL") as $image){ ?>
                <a href="./gallery/<?php echo $image['galleryimgid']; ?>"><img src="http://www.pavatimarine.com/imgs/gallery/thumbs/<?php echo $image['galleryimg']; ?>"/></a>
            <?php }}?>
        </div>

    <!-- PAGE FOOTER -->
    <div class="m-footer">
        Copyright &copy; 2003 - <?php echo date("Y"); ?> Pavati Marine. All rights reserved.
    </div>

    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript"> var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
    (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

    </body>