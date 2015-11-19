<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("./connect.php"); include("./functions.php"); ?>
<?php $path = "http://www.pavatimarine.com/"; ?>

<?php // CREATE FULL MOBILE VIEW

if($_GET['view'] && $_GET['view'] == "full"){
    $_SESSION['checkmobile'] = true;
}else{}?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head> <!-- BASIC PAGE NEEDS -->
<title>Drift Boats - Pavati All Aluminum Drift Boats For Sale</title>
<base href="http://www.pavatimarine.com">
<link rel="canonical" href="http://www.pavatimarine.com">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="Pavati Marine is the leading manufacturer of 100%, all aluminum drift boats available on the market.">
<meta name="keywords" content="fishing, boats, aluminum, pavati, marine, flyfishing, fish, river, drift, drift boats, power boats, drifter, doors, true leve floors, fishing boats, 
warrior, guardian, legacy, wildcat, destroyer">
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
    <div class="lax fullscreen" style="background:url('./files/images/backgrounds/white-legacy-autumn-homepage.jpg') center 75% no-repeat; 
    -webkit-background-size:cover; -moz-background-size:cover; -o-background-size:cover; background-size:cover;"></div>

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
                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 5" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-black-linex-elite-warrior-dog.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->
                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 6" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-diamond-plate-black-warrior-fishing.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->
                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 7" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-black-destroyer-group-ride.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->
                    <div class="gallery-slider-thumb">
                        <img alt="Pavati Marine home page carousel thumbnail 8" src="http://www.pavatimarine.com/imgs/gallery/thumbs/pavati-marine-gallery-image-green-wildcat-lake.jpg" />
                    </div> <!-- end .gallery-slider-thumb -->
                </div> <!-- end .slides-container-2 -->

                <a class="animate2 view-more" href="./gallery/">View More Images</a>
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
                    <iframe width="465" height="292" src="//www.youtube.com/embed/videoseries?list=PLfdLNTjEJUW7Gfu2oT0-q_ZshshhCbCBf" frameborder="0" allowfullscreen="true"></iframe>
                    <a class="animate2 border3 test-row-button" href="./boats/">View Boat Models</a>
                </div>
                
            </div> <!-- end .page-container -->
        </div> <!-- end .blog-post-container -->

        <div class="noSelect gallery-slider" style="padding:15px 0;">
            <div class="page-container">
                <div class="third-container">
                    <div class="animate2 published"><img src="./files/images/published/high-country-angler.png" /></div>
                </div> <!-- end .third-container -->
                <div class="third-container">
                    <div class="animate2 published"><img src="./files/images/published/fly-fisherman.png" /></div>
                </div> <!-- end .third-container -->
                <div class="third-container">
                    <div class="animate2 published"><img src="./files/images/published/fish-alaska.png" /></div>
                </div> <!-- end .third-container -->
            </div> <!-- end .page-container -->
        </div> <!-- end .gallery-slider -->

        <!-- <div class="noSelect test-row-container"></div> -->

        <?php include_once("./footer2.php"); ?>

    </div> <!-- end .bottom-content -->


<!-- include necessary javascript files -->
<script type='text/javascript' src='./js/master.js'></script>
<script type='text/javascript' src='./js/droppable.js'></script>

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