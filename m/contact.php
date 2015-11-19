<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: contact.php
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

        <!-- CONTACT PAGE CONTENT -->
        <div class="m-content m-contact">
            <h1>Contact Pavati Marine</h1>

            <span class="m-contact-span" style="margin-bottom:30px">
                <h2>Get In Touch</h2>
                <p>Call us or send an email to <a href="mailto:contact@pavatimarine.com">contact@pavatimarine.com</a></p>
                <a class="animate2 border3 m-button-large-green" href="tel:18008665269">Call Us</a>
            </span>

            <span class="m-contact-span">
                <h2>Visit Our Location</h2>
                <p>7905 Agate Rd. White City, OR 97503</p>
                <a class="animate2 border3 m-button-large" href="https://maps.google.com/maps?ie=UTF-8&gl=us&daddr=7905+Agate+Rd,+White+City,+OR+97503&saddr=&panel=1&f=d&fb=1&dirflg=d&geocode=%3BKXOrh6nCYs9UMaMV4poQp7gq&ei=38vNUb2-IaLTiwK7z4HQBw&ved=0CCsQ-A8wAA" target="new">Get Directions</a>
            </span>

        </div>

        <div class="m-map"></div>

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