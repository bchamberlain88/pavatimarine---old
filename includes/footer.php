<?php
// +------------------------------------------------+
// | Droppable - Dynamic Drop Menu
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: /includes/footer.php
// | Author: Sebastian Inman (stiffnasty)
// | Last Modified: October 14, 2013
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

// +------------------------------------------------+
// | INITIALIZE THE SITE
// +------------------------------------------------+
?>

<div class="animate2 scroll-top">Top</div>

<div class="footer">
    <div class="container">

        <ul class="fifth-container footer-list">
            <h1>Boat Models</h1>
            <li class="animate2">Drift Boats</li>
            <li class="animate2">Power Boats</li>
            <li class="animate2">Wake Boats</li>
        </ul>

        <ul class="fifth-container footer-list">
            <h1>Discussions</h1>
            <li class="animate2">All Discussions</li>
            <li class="animate2">General Information</li>
            <li class="animate2">Reviews & Testimonials</li>
        </ul>

        <ul class="fifth-container footer-list">
            <h1>About Pavati</h1>
            <li class="animate2">About Pavati Marine</li>
            <li class="animate2">Patented Features</li>
            <li class="animate2">Testimonials</li>
            <li class="animate2">Boating Partners</li>
        </ul>

        <ul class="fifth-container footer-list">
            <h1>Contact</h1>
            <li class="animate2">Send Us A Message</li>
            <li class="animate2">Visit Our Location</li>
            <li class="animate2">Call Our Main Office</li>
            <li class="animate2">Like Us On Facebook</li>
        </ul>

        <ul class="fifth-container footer-list">
            <h1>Useful Links</h1>
            <li class="animate2">Privacy Policy</li>
            <li class="animate2">Take A Test Row</li>
            <li class="animate2">Photo Gallery</li>
        </ul>

    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright &copy; 2003 - <?php echo date("Y"); ?> Pavati Marine. All rights reserved.
        </div>
    </div>
</div>

<!-- SCROLL TO TOP FUNCTION -->
<script language="JavaScript">
$(window).scroll(function(){
    var scrolled = $(window).scrollTop();
    var contentHeight = $("body").height() / 2;
    if(scrolled >= contentHeight){ $(".scroll-top").css("bottom",0);
    }else{ $(".scroll-top").css("bottom","-60px"); }});
$(".scroll-top").click(function(){
$("html, body").animate({scrollTop:0}, "slow");
return false; }); 
</script>

<!-- LIVECHAT -->
<script type="text/javascript">
var __lc = {};
__lc.license = 3356512;
(function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>