<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("./connect.php"); include("./functions.php"); ?>
<?php $path = "http://www.pavatimarine.com/"; ?>

<?php // CREATE FULL MOBILE VIEW
if($_GET['view'] && $_GET['view'] == "full"){ $_SESSION['checkmobile'] = true; }else{}?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head> <!-- BASIC PAGE NEEDS -->
<title>Pavati Marine - All Aluminum Drift Boats For Sale</title>
<base href="http://www.pavatimarine.com">
<link rel="canonical" href="http://www.pavatimarine.com">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Get the most out of your fishing experience with a Pavati drift boat. From the Legacy to the Warrior, our boats are the most innovative boats on the water.">
<meta name="keywords" content="pavati marine, pavati, marine, fishing, boats, aluminum, flyfishing, fish, river, drift, drift boats, power boats, drifter, doors, true leve floors, fishing boats, 
warrior, guardian, legacy, wildcat, destroyer, new boats, used boats, boats for sale">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="./css/master.css" class="rs-file">
<link rel="stylesheet" href="./css/droppable.css">
<link rel="shortcut icon" href="./imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="./imgs/favicon.ico" type="image/x-icon">
</head><body>

<!-- INCLUDE THE MAIN NAVIGATION -->
<?php include("./headers.php"); ?>

    <!-- TOPMOST PARALLAX FULLSCREEN IMAGE -->
    <div class='fullscreen-image'>
        <div class="sliderContainer fullWidth clearfix">
            <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
                <?php slideshow("home", $path); ?>
            </div>
        </div>
    </div>

    <div class="bottom-content"><div class="page-container">

            <div class="bottom-content-container bottom-content-left">

                <!-- NEWSLETTER SUBSCRIBE FORM -->
                <!-- <form class="border3 home-search">
                    <h1>Subscribe to the Pavati Marine newsletter</h1>
                    <input class="border3 home-search-input" placeholder="Enter your email address to receive monthly updates" type="text" />
                    <input class="animate2 border3 home-search-button" type="button" value="Subscribe" />
                </form> -->

                <h1 class="content-title">Welcome to Pavati Marine</h1>
                <h2>The leading manufacturer of aluminum drift boats</h2>
                <p>We know your passion for fishing, because it's the same passion that drives us to work every day. 
                And your family may think you’re crazy, but we know why you wake up before dawn to get on the river. 
                We know why, because we do it too. Some people may not understand what makes a fisherman tick, but we do, 
                because we’re fishermen. That’s why, when it comes to boats, we design and build our own – because other 
                boat makers don’t get it. Maybe that’s what makes Pavati the most trusted and coveted drift boat on the water.</p>

            </div> <!-- end .bottom-content-left -->

            <div class="bottom-content-container bottom-content-right" style="margin-left:6%;">

                <div class="noSelect callout-model">

                    <div class="animate2 circle callout-feature" id="callout-1"></div>
                    <div class="animate2 circle callout-feature" id="callout-2"></div>
                    <div class="animate2 circle callout-feature" id="callout-3"></div>
                    <div class="animate2 circle callout-feature" id="callout-4"></div>
                    <div class="animate2 circle callout-feature" id="callout-5"></div>
                    <div class="animate2 circle callout-feature" id="callout-6"></div>

                    <div class="callout-info" id="info-1">
                        The new custom Pavati Rower Seat is as comfortable as it is practical<br>
                        <!-- <a href="#">Learn More</a> -->
                        <div class="info-indicator" id="indicator-1"></div>
                    </div> <!-- end .info-1 -->

                    <div class="callout-info" id="info-2">
                        Custom Pavati seats make the ride more comfortable for you and your passangers<br>
                        <!-- <a href="#">Learn More</a> -->
                        <div class="info-indicator" id="indicator-2"></div>
                    </div> <!-- end .info-2 -->

                    <div class="callout-info" id="info-3">
                        Our patented Drifter Doors&trade; make getting in and out of your boat easier than ever<br>
                        <!-- <a href="#">Learn More</a> -->
                        <div class="info-indicator" id="indicator-3"></div>
                    </div> <!-- end .info-3 -->

                    <div class="callout-info" id="info-4">
                        The patented Quick-Lock Floor System&trade; makes orgnaization a snap<br>
                        <!-- <a href="#">Learn More</a> -->
                        <div class="top-info-indicator" id="indicator-4"></div>
                    </div> <!-- end .info-4 -->

                    <div class="callout-info" id="info-5">
                        With "The Truth" scale CNC'd right into your boat, you can measure your fish on the fly!<br>
                        <!-- <a href="#">Learn More</a> -->
                        <div class="top-info-indicator" id="indicator-5"></div>
                    </div> <!-- end .info-5 -->

                    <div class="callout-info" id="info-6">
                        The 12-position oar lock lets you find the most comfortable rowing position<br>
                        <!-- <a href="#">Learn More</a> -->
                        <div class="info-indicator" id="indicator-6"></div>
                    </div> <!-- end .info-6 -->

                </div> <!-- end .callout-model -->

            </div> <!-- end .bottom-content-right -->

            <!-- INCLUDE ROW OF FEATURES -->
            <!-- <?php include_once("./features.php"); ?> -->

        </div> <!-- end .page-container -->

        <div class="box">
            <div class="page-container">
                <div class="bottom-content-container bottom-content-left">

                    <div class="box-testimonial">
                        <div class="quotes"></div>
                        <h1 class="test-head">Littleleaf Guide Service, Oregon</h1>
                        <p class="test-body">The doors are a blessing for the elders, children and tight waders. We love our Paviti Warrior, spendy and worth it 100%. 
                        Now we have to practice opening doors for our clients, like a chauffeur limo driver. Lol! 
                        Thanks Chuck and Steve and the Paviti crew.</p>
                    </div> <!-- end .box-testimonial -->

                </div> <!-- end .bottom-content-left -->
            </div> <!-- end .page-container -->
        </div> <!-- end .box -->

        <div class="noSelect gallery-slider">
            <div class="container gallery-slider-container">

                <h2>Check out our all new videos below!</h2>

                <div class="animate2 circle gallery-slider-navigation slide-left" id="slide-left"></div>

                <!-- FIRST ROW OF GALLERY THUMBNAILS -->
                <div class="gallery-slides" id="slides-container-1">

                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 1" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-black-drifter-red-stripe-warrior.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->

                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 2" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-group-fishing-green-warrior.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->

                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 3" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-diamond-plate-black-warrior.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->

                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 4" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-chris-deyoung-guardian-custom-paintjob-1.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->
                    
                </div> <!-- end .slides-container-1 -->

                <!-- SECOND ROW OF GALLERY THUMBNAILS -->
                <div class="gallery-slides" id="slides-container-2">

                    <div class="gallery-slider-thumb video-thumb" id="prepping-your-boat" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/87886056?title=0&amp;byline=0&amp;portrait=0&amp;color=3AA1BE&amp;autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
                        <div class="video-box">
                        <img alt="Pavati Marine Video: Prepping your boat" src="http://www.pavatimarine.com/imgs/videos/video-prepping-the-drift-boat.jpg" />
                        </div>
                    </div> <!-- end .gallery-slider-thumb -->

                    <div class="gallery-slider-thumb video-thumb" id="launching-your-boat" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/87882750?title=0&amp;byline=0&amp;portrait=0&amp;color=3AA1BE&amp;autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
                        <div class="video-box">
                        <img alt="Pavati Marine Video: Launching your boat" src="http://www.pavatimarine.com/imgs/videos/video-launching-the-drift-boat.jpg" />
                        </div>
                    </div> <!-- end .gallery-slider-thumb -->

                    <div class="gallery-slider-thumb video-thumb" id="deluxe-trailers" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/87879621?title=0&amp;byline=0&amp;portrait=0&amp;color=3AA1BE&amp;autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
                        <div class="video-box">
                        <img alt="Pavati Marine Video: Deluxe Trailers" src="http://www.pavatimarine.com/imgs/videos/video-deluxe-trailer.jpg" />
                        </div>
                    </div> <!-- end .gallery-slider-thumb -->

                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 8" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-green-wildcat-lake.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->

                </div> <!-- end .slides-container-2 -->

                <a class="animate2 view-more" href="./gallery/">View Our Full Gallery</a>
                <div class="animate2 circle gallery-slider-navigation slide-right" id="slide-right"></div>

            </div> <!-- end .gallery-slide-container -->
        </div> <!-- end .gallery-slider -->

        <div class="blog-post-container">
            <div class="page-container">

                <h1>Why Choose Pavati Marine?</h1>
                <div class="half-container">
                    <p>Pavati boats are the lightest, strongest, and most advanced drift boats on the water. Filled with features that just "make sense", you will find that these boats are in a league of their own - 
                    we like to say that they're light on the water, but not on features.<br><br>
                    There are currently nine active drift boat patents in existence today; we own all of them. This indicates our commitment to 
                    innovate and push the envelope, but it also shows the uniqueness of a Pavati drift boat. Our patented Drifter Doors ™ allow you to get in and out of your boat with ease. The Quick-Lock Floor System ™ 
                    enables you to put your seats and accessories anywhere you want them, any time. The Radius Transom ™ improves the navigability and speed of the boat.<br><br>
                    These are only a few of the features that cause a Pavati drift boat stand apart from all other drift boats. We are more than the leaders of drift boat technology... we're the inventors. 
                    Take a moment to browse our boat models and features.<br><br>
                    Have an idea for a feature but don't see it on our website? Our pro team and fully staffed engineering team work together every day, to create custom features and designs for our customers. 
                    With our full aluminum fabrication shop, we can build anything you want into your boat. Just give us a call.</p>
                </div> <!-- end .half-container -->

                <!-- youtube video playlist -->
                <div class="noSelect half-container" style="margin-top:16px;">
                    <!-- <iframe width="465" height="292" src="//www.youtube.com/embed/videoseries?list=PLfdLNTjEJUW7Gfu2oT0-q_ZshshhCbCBf" frameborder="0" allowfullscreen="true"></iframe> -->
                    <iframe width="465" height="292" src="//www.youtube.com/embed/ErWKkf8I2jY" style="z-index:0;" frameborder="0" allowfullscreen></iframe>
                    <a class="animate2 border3 test-row-button" href="./boats/">View Boat Models</a>
                </div>
                
            </div> <!-- end .page-container -->
        </div> <!-- end .blog-post-container -->

        <div class="noSelect gallery-slider" style="height:auto; padding:15px 0 30px 0;">
            <div class="page-container">
                <h1 class="content-title">Pavati Marine has been published in these magazines</h1>
                <img class="animate2 published" src="./files/images/published/high-country-angler.png" />
                <img class="animate2 published" src="./files/images/published/fly-fisherman.png" />
                <img class="animate2 published" src="./files/images/published/salmon-trout-steelhead.png" />
                <img class="animate2 published" src="./files/images/published/fish-alaska.png" />
                <img class="animate2 published" src="./files/images/published/fly-fishing-and-tying.png" />
                <img class="animate2 published" src="./files/images/published/northwest-sportsman.png" />
            </div> <!-- end .page-container -->
        </div> <!-- end .gallery-slider -->

        <!-- <div class="noSelect test-row-container"></div> -->

        <?php include_once("./footer2.php"); ?>

    </div> <!-- end .bottom-content -->


<!-- include necessary javascript files -->
<script type='text/javascript' src='./js/master.js'></script>
<script type='text/javascript' src='./js/droppable.js'></script>

<script type='text/javascript'>
    var url = window.location.hash.replace('#','');
    if(url == "thanks"){
        $("body").append("<div class='thanks-shadow'><div class='thanks-overlay'><h1 style='padding-bottom:26px;'>Thanks for contacting us, we'll get back to you as soon as possible!</h1></div></div>");
        $(".thanks-shadow, .thanks-overlay").show();
        $(".thanks-overlay").delay(2500).fadeOut(500);
        $(".thanks-shadow").delay(3000).fadeOut(500);
    }else{
        if(url == "error"){
        $("body").append("<div class='thanks-shadow'><div class='thanks-overlay'><h1 style='padding-bottom:26px;'>It looks like you've already contacted us. If you need assistance, please call us at 1-800-866-5269</h1></div></div>");
        $(".thanks-shadow, .thanks-overlay").show();
        $(".thanks-overlay").delay(2500).fadeOut(500);
        $(".thanks-shadow").delay(3000).fadeOut(500);
        }
    }
</script>

<?php if($_SESSION['admin']['rank'] == 1){?>
<script type="text/javascript">
$(".textEdit").click(function(){
var overview = $(this).attr("id").replace("overview-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("./admin-overviewText.php?id=" + overview).delay(1000).fadeIn(300); });
</script><?php } ?>

<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>

<script id="addJS">jQuery(document).ready(function($) {
$('#full-width-slider').royalSlider({ arrowsNav: true, loop: true, keyboardNavEnabled: true, imageAlignCenter: true,
controlsInside: true, imageScaleMode: 'fill', arrowsNavAutoHide: true, allowCSS3: true,
autoScaleSlider: true, controlNavigation: 'bullets', thumbsFitInViewport: false, slidesOrientation : 'horizontal',
navigateByClick: false, startSlideId: 0, transitionType:'move', globalCaption: false, autoPlay: { enabled: true, pauseOnHover: false, delay: 6000 },
arrowsNavHideOnTouch: true, slidesSpacing: 5, deeplinking: { enabled: true, change: false }, imgWidth: 1920 }); }); </script>