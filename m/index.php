<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: index.php
// | Author: Sebastian Inman (stiffnasty)
// | Last Modified: October 21, 2013
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

    <!-- FULLSCREEN IMAGE -->
    <div class="m-slider fullscreen" style="background-image: url(http://pavatimarine.com/files/images/backgrounds/white-legacy-autumn-homepage.jpg); -webkit-background-size:cover; background-size:cover; background-position:center center; background-repeat:no-repeat;"></div>
    
    <!-- INTRODUCTIONS -->
    <div class="m-content m-introduction">
        <h1>Welcome to Pavati Marine</h1>
        <h2>The leading manufacturer of aluminum drift boats</h2>
        <p>We know your passion for fishing, because it's the same passion that drives us to work every day. And your family may think you’re crazy, but we know why you wake up before dawn to get on the river. 
        We know why, because we do it too. Some people may not understand what makes a fisherman tick, but we do, because we’re fishermen. That’s why, when it comes to boats, we design and build our own – because other boat makers don’t get it. 
        Maybe that’s what makes Pavati the most trusted and coveted drift boat on the water.</p>
    </div> <!-- END .m-introduction -->

    <!-- TESTIMONIALS -->
    <div class="m-content m-testimonials">
        <span class="m-quotes"></span>
        <h2 class="m-testimonial-header">Littleaf Guide Service, Oregon</h2>
        <p>The doors are a blessing for the elders, children and tight waders. We love our Paviti Warrior, spendy and worth it 100%. Now we have to practice opening doors for our clients, like a chauffeur limo driver. 
        Lol! Thanks Chuck and Steve and the Paviti crew.</p>
    </div> <!-- END .m-testimonials -->

    <!-- GALLERY THUMBNAILS -->
    <div class="m-content m-thumbnails">

        <!-- THUMBNAIL CONTROLS -->
        <div class="m-home-thumb-control m-slide-left"><i class="m-slide-right-icon"></i></div>
        <div class="m-home-thumb-control m-slide-right"><i class="m-slide-left-icon"></i></div>

        <!-- FIRST ROW OF THUMBNAILS -->
        <div class="m-slides" id="slides-1">
            <div class="m-home-thumb m-thumb" id="thumb-15"><img src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-black-drifter-red-stripe-warrior.jpg"/></div>
            <div class="m-home-thumb m-thumb" id="thumb-18"><img src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-group-fishing-green-warrior.jpg"/></div>
        </div>
        <!-- SECOND ROW OF THUMBNAILS -->
        <div class="m-slides" id="slides-2">
            <div class="m-home-thumb m-thumb" id="thumb-10"><img src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-diamond-plate-black-warrior.jpg"/></div>
            <div class="m-home-thumb m-thumb" id="thumb-5"><img src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-chris-deyoung-guardian-custom-paintjob-1.jpg"/></div>
        </div>
    </div> <!-- END .m-thumbnails -->

    <!-- HOMEPAGE VIDEO / VIEW MODELS / WHY PAVATI -->
    <div class="m-content m-why">
        <iframe class="m-video" width="100%" height="" src="http://www.youtube.com/embed/uISLtaz2G_I?rel=0&amp;wmode=opaque" allowfullscreen="true"></iframe>
        <!-- VIEW BOAT MODELS BUTTON -->
        <a class="animate2 border3 m-button-large" href="./boats">View Boat Models</a>
        <!-- WHY CHOOSE PAVATI MARINE -->
        <h1>Why choose Pavati Marine?</h1>
        <p>Pavati boats are the lightest, strongest, and most advanced drift boats on the water. Filled with features that just "make sense", you will find that these boats are in a league of their own - 
        we like to say that they're light on the water, but not on features.
        <br><br>
        There are currently nine active drift boat patents in existence today; we own all of them. This indicates our commitment to innovate and push the envelope, but it also shows the uniqueness of a Pavati drift boat. 
        Our patented Drifter Doors ™ allow you to get in and out of your boat with ease. The Quick-Lock Floor System ™ enables you to put your seats and accessories anywhere you want them, any time. The Radius Transom ™ improves the navigability and speed of the boat.
        <br><br>
        These are only a few of the features that cause a Pavati drift boat stand apart from all other drift boats. We are more than the leaders of drift boat technology... we're the inventors. Take a moment to browse our boat models and features.
        <br><br>
        Have an idea for a feature but don't see it on our website? Our pro team and fully staffed engineering team work together every day, to create custom features and designs for our customers. 
        With our full aluminum fabrication shop, we can build anything you want into your boat. Just give us a call.</p>
    </div> <!-- END .m-why -->

    <!-- PAGE FOOTER -->
    <div class="m-footer">
        Copyright &copy; 2003 - <?php echo date("Y"); ?> Pavati Marine. All rights reserved.
    </div> <!-- END .m-footer -->

    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript"> var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
    (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

    </body>
    </html>