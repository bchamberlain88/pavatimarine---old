<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: for-sale.php
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

    <!-- BOATS FOR SALE CONTENT -->
    <div class="m-content m-sale">
        <h1>Pavati Marine Boats For Sale</h1>
        <p>Thinking about buying a drift boat? Would you like to cruise down the river in your very own Pavati drift boat?
        The first thing to do is call us for a quote. We will help you put together a package that fits your boating and fishing needs and desires.
        It only takes a few minutes and it will start the ball rolling. During the week our normal hours of operation are from 7:00 AM to 5:00 PM.
        We get new demo and used boats on a daily basis, so call for the latest available boats.</p>

        <a class="animate2 border3 m-button-large-green" href="tel:18008665269">Call Us</a>

        <ul class="m-sale-tabs">

            <!-- NEW PAVATI BOATS TAB AND CONTENT -->
            <li class="animate2 sale-tab" id="sale-1">New Pavati Boats</li>
            <div class="sale-content" id="sale-content-1">

                <h2>16' x 61" 2014 Legacy For Sale</h2>
                <img src="http://www.pavatimarine.com/imgs/boats/for-sale/sportsmans-boat.jpg" />
                <p>This new, 2014 Legacy comes equipped with 2 Drifter Doors™, one on the front port side, and one on the rear starboard side. Casting stands are installed in the front and rear ends of the boat to make flyfishing a breeze. The bottom of this boat is sealed with UHMW for superior strength and resistance, and has kevlar sides, bow, and transom. The 12-position Helfrich oarlocks make rowing easier than ever. All Pavati boats come standard with full-level, Quick-Lock™ floors, so you can easily adjust your boat to your liking. The floors are textured and powder coated black. The inside and outside of this Legacy are powder coated Silver Vein.</p>
                <br><br><br><br>
                <h2>16' x 61" 2014 Guardian For Sale</h2>
                <img src="http://www.pavatimarine.com/imgs/boats/for-sale/scaled.jpg" />
                <p>Front starboard side door. 2 passanger seats. Full level diamond plate floor with quick lock seat system. Accessory tower and rod butt holder. Inside color Silver Vein. Outside color Moondust Lime over Ink Black. Northwest custom aluminum trailer. 12 position oar lock block. Helfrich Oarlocks. Padded row seat.</p>

                <a class="animate2 border3 m-button-large-green" href="tel:18008665269">Call Us</a>

            </div>

            <!-- NUSED PAVATI BOATS TAB AND CONTENT -->
            <li class="animate2 sale-tab" id="sale-2">Used Pavati Boats</li>
            <div class="sale-content" id="sale-content-2">

                <h2>17' x 61" 2012 Used Pavati Guardian For Sale</h2>
                <img src="http://www.pavatimarine.com/imgs/boats/for-sale/chris-young-brown-guardian.jpg" />
                <p>If you have been waiting on a screaming deal on a fully loaded PAVATI Guardian this is your boat! This boat has just about every option included! 3 Removable/adjustable custom PAVATI seats on dry storage boxes 1 padded row seat with removable padded back rest and dry storage box Front casting line deck with pizza oven Front heater kit Removable FULL LEVEL diamond plate floor with quick lock seat system North west custom aluminum trailer 12 position oar lock block Helfrich stainless steel oar locks In floor fish box with removable bait box Manual style anchor kit with locking anchor nest and plug storage Powder coated custom fade exterior/ custom powder coat interior with floors and boxes powder coated black and shaved diamond plate. Electric bilge pump 3 doors, front port front starboard and rear starboard Vacuumed sealed UHMW bottom</p>

                <h2>17' x 61" 2009 Pavati Warrior For Sale</h2>
                <img src="http://www.pavatimarine.com/imgs/boats/for-sale/red-used-warrior.jpg" />
                <p>Great used boat up for sale, this boat has the front bench style seating with drop door storage , stepped level floors with quick lock seat system, heater, 3/4 row seat with padded seat and back rest, fish box, manual style anchor, front and rear starboard side doors, kevlar bottom, sides, and transom, 3 rod holders, sawyer oars, pizza oven, custom flame paint job, and aluminum trailer.</p>

                <h2>16' x 61" 2011 Guardian with custom trailer For Sale</h2>
                <img src="http://www.pavatimarine.com/imgs/boats/for-sale/015.jpg" />
                <p>This boat would retail today for over 19,000 plus shipping to get it here. It has some scratches from everyday use but is in perfect working condition. Has three Bentley seats, Sawyer Box-Top oars, an in-floor fish box, dual heater system, rod holders, and an anchor, plus much more! Drive it away for only $12,900.00. Call or email Captain Troy A. Creasy. 1-315-243-2389 - troy@highadventurefishing.com</p>

                <h2>20' Open Bow Destroyer For Sale</h2>
                <img src="http://www.pavatimarine.com/imgs/boats/for-sale/red-destroyer-sized.jpg" />
                <p>5 passanger seats. 1 padded captains chain. 150 HP Optimax. 9.9 Pro Kicker. EZ Loader galvanized trailer. Washdown pump. Bilge pump. Full level, removable diamond plate floors. 55 gallon gas tank.</p>

                <a class="animate2 border3 m-button-large-green" href="tel:18008665269">Call Us</a>

            </div>

        </ul>

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
