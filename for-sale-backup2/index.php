<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head><!-- basic page needs -->
<title>Drift Boats for Sale – Pavati Marine</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Pavati Marine has a variety of used and new boats for sale. View our selection of boats and contact us for more information!">
<meta name="keywords" content="fishing, boats, aluminum, pavati, marine, flyfishing, fish, river, drift, drift boats, power boats, drifter, doors, true leve floors, fishing boats,
warrior, guardian, legacy, wildcat, destroyer, for sale, used boats, new boats">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="../css/mobile.css">
<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="../imgs/favicon.ico" type="image/x-icon">
</head><body>

<!-- include the main page navigation -->
<?php include("../headers.php"); ?>
<!-- include the mobile navigation -->

<div class="main-page"><div class="container boats-container m-fsale" style="margin-top:0px;">

<div class="sixteen columns home-content" style="min-height: 100px;">
<?php if($_SESSION['admin']){ echo "<a class='admin-btn add-boat-sale'>Add New Boat For Sale</a>"; }else{} ?>
<h3>New & Used Pavati Marine Boats For Sale</h3>
<h2>We get new demo and used boats on a daily basis, so call for the latest available boats.</h2>
</div>

<div class="eight columns home-content">
<p>Thinking about buying a drift boat? Would you like to cruise down the river in your very own Pavati drift boat?
Take a look at our inventory, or call us to put together a package that fits your boating and fishing needs and desires.
It only takes a few minutes and it will start the ball rolling. During the week our normal hours of operation are from 7:00 AM to 5:00 PM.
We are located in Oregon, but you can call our toll free number at <a href="tel:18008665269">1-800-866-5269</a>.</p>
</div>

<div class="eight columns home-content">
<p>After hours or weekends? No problem. That's a key part of our customer service.
We make ourselves available when you need us and take calls until 9:00 PM, all seven days of the week, (sometimes even later).
Please call this number after 5:00 PM and on weekends - <a href="tel:15417782650">1-541-778-2650</a>.
If we don't answer immediately, then please leave a message and we will get back to you shortly.</p>
</div>

<div class="sixteen columns model-links">
    <label>Sort results by :</label>
    <a class="sale-sort active" id="sort-all">All Boats</a>
    <a class="sale-sort" id="sort-new">New Boats</a>
    <a class="sale-sort" id="sort-demo">Demo Boats</a>
    <a class="sale-sort" id="sort-used">Used Boats</a>
</div>

<div class='for-sale-container' data-tag='used' data-sold='false'>
    <h3>Used 2013 Pavati Legacy 17 x 61</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/used-2013-pavati-legacy-17-x-61-dave-decker/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>Fully customized 2013 Pavati Legacy 17 x 61 with all of the bells and whistles. Call Steve Crisler @ 541-778-2650 for pricing and more information</p>
    </div>
</div>

<div class='for-sale-container' data-tag='used' data-sold='false'>
    <h3>Used 2012 Pavati 17' x 61" Custom Wrapped Guardian</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/todd-harrington-guardian/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>1 padded row seat with removable back rest on dry storage box.
        2 custom Pavati seats on dry storage boxes.
        1 Pavati Element seat on dry storage box.
        In floor fish box with removable bait box.
        Manual style anchor kit.
        Elite diamond punched sides.
        Vacuumed sealed UHMW bottom kit.
        Powder coated floors and boxes black and shaved.
        Powder coated exterior with custom vinyl wrap.
        Powder coated interior.
        Casting stand line deck with pizza oven.
        Heater kt.
        Sawyer Sq. top oars.
        Deluxe Aluminum trailer </p>
    </div>
</div>

<div class='for-sale-container' data-tag='used' data-sold='true'>
    <h3>Used 2012 Pavati 17' x 61" Black &amp; Gold Guardian</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/used-2012-pavati-17x61-guardian-black-gold/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>If you have been waiting on a screaming deal on a fully loaded PAVATI Guardian, this is your boat! This boat has just about every option included!<br><br>
        Casting stand line deck with pizza oven, 3 passenger seat boxes w/ dry storage, 2 Bentley River Master Style seats, 1 Bentley sportsman's style seat,
        padded row seat with dry storage box and removable back rest, front heater kit, rear Port side rod storage tube, front starboard side door,
        front port side door, rear Starboard side door, vacuumed sealed UHMW Bottom, 12 posistion oar lock block, Helfrich Stainless Steel oar locks,
        sawyer Sq. Top oars w/ Dynelite blades, accessory tower w/ tackle storage and rod storage rack, rod holder floor box w/ leader roller,
        North West Aluminum trailer Deluxe, powder coated outside  blk/gold Fade, interior gold vein, floors and boxes black texture and shaved diamonds,
        Bilge Pump kit, in floor fish box, manual style anchor w/ locking anchor nest.</p>
    </div>
</div>

<div class='for-sale-container' data-tag='new' data-sold='true'>
    <h3>New 2014 Pavati 17' x 61" Seafoam Green Guardian For Sale</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/new-2014-pavati-17x61-new-guardian-seafoam-green/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>If you like fishing in comfort and style, than this is the drift boat for you! This boat has just about every option included! Elite Diamond punched sides, casting stand line deck with pizza oven,
        3 Passenger seat boxes w/ dry storage, 3 Pavati Element seats, padded row seat with dry storage box and removable back rest,
        front heater kit, rear port side rod storage tube, front starboard side door, front port side door, rear starboard side door, vacuumed sealed UHMW bottom, 12 posistion oar lock block,
        Helfrich Stainless Steel oar locks, Sawyer Sq. Top oars w/ Dynelite blades, accessory tower w/ tackle storage and rod storage rack, rod holder floor box w/ leader roller,
        North West Aluminum trailer Deluxe, powder coated outside emerald green , interior silver hammer, floors and boxes mock rock  texture and shaved diamonds, in floor fish box,
        foot stomp anchor kit with locking anchor nest.</p>
    </div>
</div>

<div class='for-sale-container' data-tag='new' data-sold='true'>
    <h3>New 2013 Pavati 16' x 61" Moondust Lime Over Ink Black Guardian For Sale</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/new-2013-pavati-16x61-guardian-green-diamond-plate/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>Stylish and highly functional, this PAVATI Guardian drift boat is what you need to get you on the fish! 2 Passenger seat boxes w/ dry storage, 2 Pavati Element seats,
        padded row seat with dry storage box and removable back rest, front starboard side door, vacuumed sealed UHMW bottom, 12 posistion oar lock block,
        Helfrich Stainless Steel oar locks, Sawyer Sq. Top oars w/ Dynelite blades, accessory tower w/ tackle storage and rod storage rack, rod holder floor box w/ leader roller,
        North West Aluminum trailer, powder coated outside Green over black , interior silver vein, manual style anchor w/ locking anchor nest.</p>
    </div>
</div>

<div class='for-sale-container' data-tag='used' data-sold='true'>
    <h3>Used 2011 Pavati 17' x 61" Red &amp; Black Guardian</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/used-2011-pavati-17x61-guardian-red-black/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>If you’re looking for a drift boat that stands out from the crowd, this beautiful red & black PAVATI Guardian is the ticket! This  boat is loaded with options.<br><br>
        Pizza oven line deck, 3 passenger seat boxes w/ dry storage and Pavati Elements seats Pizza oven line deck, padded row seat with dry storage box and removable back rest,
        front heater kit, port side rod storage tube, front starboard side door, vacuumed sealed UHMW Bottom With Kevlar sides bow and transom, 12 posistion oar lock block,
        helfrich Stainless Steel oar locks, sawyer Sq. Top oars w/ Dynelite blades, accessory tower w/ tackle storage and rod storage rack, rod holder floor box w/ leader roller,
        North West Aluminum trailer.</p>
    </div>
</div>

<div class='for-sale-container' data-tag='new' data-sold='false'>
    <h3>New 2012 Pavati 16' x 61" Gray Marble Guardian For Sale</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/new-2012-pavati-17x61-guardian-gray-marble/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>Get a smokin’ deal on this brand new 2012 display model. This PAVATI Guardian drift boat is located in Alaska. 2 passenger seat boxes w/ dry storage,
        2 Bentley sportsman's style seats, padded row seat with dry storage box and removable back rest, front starboard side door, vacuumed sealed UHMW bottom,
        12 posistion oar lock block, Helfrich Stainless Steel oar locks, Sawyer Sq. Top oars w/ Dynelite blades, accessory tower w/ tackle storage and rod storage rack,
        rod holder floor box w/ leader roller, North West Aluminum trailer Deluxe, Custom paint – Gray Marble, in floor fish box, manual style anchor w/ locking anchor nest.</p>
    </div>
</div>

<div class='for-sale-container' data-tag='used' data-sold='false'>
    <h3>Used 2012 Pavati 20' x 84" Red Destroyer For Sale</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/used-2012-pavati-20x84-destroyer-red/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>5 passanger seats. 1 padded captains chain. 150 HP Optimax. 9.9 Pro Kicker. EZ Loader galvanized trailer. Washdown pump. Bilge pump. Full level, removable diamond plate floors. 55 gallon gas tank.</p>
    </div>
</div>

<div class='for-sale-container' data-tag='used' data-sold='false'>
    <h3>Used 2012 Pavati 17' x 16" Custom Legacy For Sale</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/used-2012-pavati-custom-17x61-legacy/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>Easily one of the most unique drift boats ever built, this 17x61 Legacy model was made in 2012 and has a one of a kind Deyoung Fish Art wrap above embossed diamond plate sides. Interior is a light grey powder coat with the floors and boxes powder coated and shaved black texture.
        <br><br>Two (2) custom Pavati Element seats on dry storage boxes. One (1) padded row seat with removable back rest on dry storage boxes. Front removable padded casting stand. Rear removable padded casting stand. Vacuum sealed UHMW bottom. Accessory box with tackle storage. Rod butt holder with leader roller. Front port side door. Rear starboard side door. Full level diamond plate floor with quick lock seat system. North West custom aluminum trailer.
        <br><br>Contact Steve Crisler @ Pavati Marine for more details.</p>
    </div>
</div>

<div class='for-sale-container' data-tag='demo' data-sold='true'>
    <h3>Demo 2014 Pavati 17' x 61" White Warrior For Sale</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/demo-2012-pavati-16x55-guardian-white/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>Package includes, 2 passenger PAVATI Element seats on dry storage boxes, Ultimate padded row seat with removable back rest, TRUE FULL LEVEL removable diamond plate floor, quick-lock seat system, manual style anchor with locking anchor nest, The Truth Ruler, powder coated interior with white wrap exterior, 12 position oar lock block, Helfrich Oar locks, Sawyer Square top oars,Vacuumed sealed UHMW Bottom, Elite Diamond punched sides, North West Aluminum trailer. Call now for pricing!</p>
    </div>
</div>

<div class='for-sale-container' data-tag='used' data-sold='true'>
    <h3>Used 2014 Pavati 17' x 61" Chameleon Sapphire over Ink Black Legacy</h3>
    <div class='for-sale-slider'>
        <div class='fs-slider'>
            <?php listImages('../imgs/boats/for-sale/used-2014-pavati-17x61-legacy-lavendar/', 'fs-slide', 'slideimage-'); ?>
        </div>
    </div>
    <div class='for-sale-information'>
        <p>Inside and outside powder coated. Inside color is Silver Hammertone, outside color is Chameleon Sapphire over Ink Black. Front port starbord side door. Front and rear casting stands included. Rod butt holder and accessory tower. Vaccum sealed UHMW bottom with kevlar sides, bow, and transom. Northwest aluminum trailer, and Helfrich oarlocks. 12-position oar lock block, full-level diamond plate floors with quick-lock seat system&trade;.</p>
    </div>
</div>

</div><?php include("../footer2.php"); ?></div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/functions.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>
<script type="text/javascript">

    $('.for-sale-container').each(function(){
        var a = $(this).attr('data-tag');
        var b = $(this).attr('data-sold');
        $(this).append("<span class='fs-condition' id='cond-"+a+"'>"+a+"</span>");
        if(b == 'true'){
            $(this).append("<span class='fs-sold'></span>");
        }else{}
    });

    $('.fs-slider').each(function(i){
        var a = i+1; // current slider id
        var b = $(this).find('.fs-slide').length; // total number of slides in this slider
        $(this).attr('id','slider-'+a); // number each slider
        if(b > 1){
            $('#slider-'+a).find('.fs-slide').each(function(k){
                var c = k+1; // number each image
                $(this).attr('id','slide-'+c);
            });
            $('#slider-'+a).parent().append("<div class='fs-controls' id='controls-"+a+"'/>"); // append selectors to the slider
            for(var j = 1; j < b+1; j++){
            var l = $('#slider-'+a).find('#slide-'+j).attr('src');
            $('#controls-'+a).append("<a class='fs-control' id='control-"+j+"'><img src='"+l+"'/></a>"); }
            $('#controls-'+a).find('#control-1').addClass('active');
            $('#controls-'+a).find('.fs-control').click(function(){
                var l = $(this).attr('id').replace('control-','');
                var m = $('.fs-slider').width()*l - $('.fs-slider').width();
                $('#controls-'+a+' .fs-control').removeClass('active');
                $(this).addClass('active');
                $('#slider-'+a).animate({scrollLeft: m}, 200);
            });
        }
    });

    $('.sale-sort').click(function(){
        var a = $(this).attr('id').replace('sort-','');
        if(a == 'all'){
            $('.for-sale-container').removeClass('hidden');
        }else{
            $('.for-sale-container').addClass('hidden');
            $('.for-sale-container[data-tag="'+a+'"]').removeClass('hidden');
        }
    });

</script>



<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>
