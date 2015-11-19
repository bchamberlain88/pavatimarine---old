<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: about.php
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

        <!-- ABOUT TABS AND CONTENT -->
        <div class="m-content m-about">
            <h1>About Pavati Marine</h1>
            <?php // GET ABOUT TABS
                $getAbout = mysql_query("SELECT * FROM aboutcontent LIMIT 2");
                while($about = mysql_fetch_assoc($getAbout)){ 
                    $formatContent = htmlspecialchars_decode(str_replace("../imgs/about/","../files/images/about/",$about['aboutcontent']));
                    $formatContent = str_replace("../imgs/","../files/images/",$formatContent);
                    $formatContent = str_replace("<h3>Leaders in the Fish Boating World</h3>","<h1>Leaders in the Fish Boating World</h1>",$formatContent);?>

                    <div class="m-about-content"><p><?php echo $formatContent; ?></p></div>

            <?php }?>
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