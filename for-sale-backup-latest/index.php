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
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="../imgs/favicon.ico" type="image/x-icon">
</head><body>

<!-- include the main page navigation -->
<?php include("../headers.php"); ?>
<!-- include the mobile navigation -->

<div class="main-page"><div class="container boats-container" style="margin-top:0px;">

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

<div class="eight columns sale-thumb" data-sort="used" id="used-custom-17-x-61-legacy">
    <img class="sale-img" src="http://www.pavatimarine.com/blog/assets/images/featured/Pavati%20Guardian%20Drift%20Boat%20-%20Travis%20Ortiz%201.JPG" />
    <div class="sale-hover">
        <label><b>Used</b><span class="sale-title">17 x 61 Custom 2012 Pavati Legacy</span><i>i</i></label>
    </div>
    <span class="sale-text">Easily one of the most unique drift boats ever built, this 17x61 Legacy model was made in 2012 and has a one of a kind Deyoung Fish Art wrap above embossed diamond plate sides. Interior is a light grey powder coat with the floors and boxes powder coated and shaved black texture.<br><br>
Two (2) custom Pavati Element seats on dry storage boxes. One (1) padded row seat with removable back rest on dry storage boxes. Front removable padded casting stand. Rear removable padded casting stand. Vacuum sealed UHMW bottom. Accessory box with tackle storage. Rod butt holder with leader roller. Front port side door. Rear starboard side door. Full level diamond plate floor with quick lock seat system. North West custom aluminum trailer.<br><br>
Contact Steve Crisler @ Pavati Marine for more details.
    </span>
</div>

<div class="eight columns sale-thumb" data-sort="used" id="2012-used-17-61-guardian">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/chris-young-brown-guardian.jpg" />
    <div class="sale-hover">
        <label><b>Used</b><span class="sale-title">17' x 61" 2012 Used Pavati Guardian</span><i>i</i></label>
    </div>
    <span class="sale-text">
    If you have been waiting on a screaming deal on a fully loaded PAVATI Guardian this is your boat! This boat has just about every option included!
    3 Removable/adjustable custom PAVATI seats on dry storage boxes
    1 padded row seat with removable padded back rest and dry storage box
    Front casting line deck with pizza oven
    Front heater kit
    Removable FULL LEVEL diamond plate floor with quick lock seat system
    North west custom aluminum trailer
    12 position oar lock block
    Helfrich stainless steel oar locks
    In floor fish box with removable bait box
    Manual style anchor kit with locking anchor nest and plug storage
    Powder coated custom fade exterior/  custom powder coat interior with floors and boxes powder coated black and shaved diamond plate.
    Electric bilge pump
    3 doors, front port front starboard and rear starboard
    Vacuumed sealed UHMW bottom
    </span>
</div>

<div class="eight columns sale-thumb" data-sort="used" id="used-17-61-warrior">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/red-used-warrior.jpg" />
    <div class="sale-hover">
        <label><b>Used</b><span class="sale-title">17' x 61" 2009 Pavati Warrior</span><i>i</i></label>
    </div>
    <span class="sale-text">
    Great used boat up for sale, this boat has the front bench style seating with drop door storage , stepped
    level floors with quick lock seat system, heater, 3/4 row seat with padded seat and back rest, fish box, manual
    style anchor, front and rear starboard side doors, kevlar bottom, sides, and transom, 3 rod holders, sawyer oars,
    pizza oven, custom flame paint job, and aluminum trailer.
    </span>
</div>

<div class="eight columns sale-thumb" data-sort="used" id="used-16-61-guardian">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/015.jpg" />
    <div class="sale-hover">
        <label><b>Used</b><span class="sale-title">16' x 61" 2011 Guardian with custom trailer</span><i>i</i></label>
    </div>
    <span class="sale-text">
    This boat would retail today for over 19,000 plus shipping to get it here. It has some scratches from everyday use but is in perfect working condition.
    Has three Bentley seats, Sawyer Box-Top oars, an in-floor fish box, dual heater system, rod holders, and an anchor, plus much more! Drive it away for only
    $12,900.00. Call or email Captain Troy A. Creasy. 1-315-243-2389 - <a href="mailto:troy@highadventurefishing.com">troy@highadventurefishing.com</a>
    </span>
</div>

<div class="eight columns sale-thumb" data-sort="demo" id="demo-16-55-guardian">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/white-16x55.jpg" />
    <div class="sale-hover">
        <label><b>Demo</b><span class="sale-title">16' x 55" 2014 White Guardian</span><i>i</i></label>
    </div>
    <span class="sale-text">
    Package includes, 2 passenger PAVATI Element seats on dry storage boxes, Ultimate padded row seat with removable back rest, TRUE FULL LEVEL removable diamond plate
    floor, quick-lock seat system, manual style anchor with locking anchor nest, The Truth Ruler, powder coated interior with white wrap exterior, 12 position oar lock
    block, Helfrich Oar locks, Sawyer Square top oars,Vacuumed sealed UHMW Bottom, Elite Diamond punched sides, North West Aluminum trailer. Call now for pricing! </span>
</div>

<div class="eight columns sale-thumb" data-sort="new" id="new-16-61-legacy">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/sportsmans-boat.jpg" />
    <div class="sale-hover">
        <label><b>New</b><span class="sale-title">16' x 61" 2014 Legacy</span><i>i</i></label>
    </div>
    <span class="sale-text">
    This new, 2014 Legacy comes equipped with 2 Drifter Doors&trade;, one on the front port side, and one on the rear starboard side. Casting stands are installed
    in the front and rear ends of the boat to make flyfishing a breeze. The bottom of this boat is sealed with UHMW for superior strength and resistance, and has
    kevlar sides, bow, and transom. The 12-position Helfrich oarlocks make rowing easier than ever. All Pavati boats come standard with full-level, Quick-Lock&trade;
    floors, so you can easily adjust your boat to your liking. The floors are textured and powder coated black. The inside and outside of this Legacy are powder coated
    Silver Vein.</span>
</div>

<div class="eight columns sale-thumb" data-sort="new" id="new-16-61-guardian">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/scaled.jpg" />
    <div class="sale-hover">
        <label><b>New</b><span class="sale-title">16' x 61" 2014 Guardian</span><i>i</i></label>
    </div>
    <span class="sale-text">Front starboard side door. 2 passanger seats. Full level diamond plate floor with quick lock seat system. Accessory tower and rod butt holder.
        Inside color Silver Vein. Outside color Moondust Lime over Ink Black. Northwest custom aluminum trailer. 12 position oar lock block. Helfrich Oarlocks. Padded row seat.</span>
</div>

<div class="eight columns sale-thumb" data-sort="used" id="used-20-open-bow-destroyer">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/red-destroyer-sized.jpg" />
    <div class="sale-hover">
        <label><b>Used</b><span class="sale-title">20' Open Bow Destroyer</span><i>i</i></label>
    </div>
    <span class="sale-text">5 passanger seats. 1 padded captains chain. 150 HP Optimax. 9.9 Pro Kicker. EZ Loader galvanized trailer. Washdown pump. Bilge pump.
        Full level, removable diamond plate floors. 55 gallon gas tank. </span>
</div>

<div class="eight columns sale-thumb" data-sort="used" id="used-17-61-legacy">
    <img class="sale-img" src="http://www.pavatimarine.com/imgs/boats/for-sale/lavander-legacy-scaled.jpg" />
    <div class="sale-hover">
        <label><b>Used</b><span class="sale-title">17' x 61" 2014 Legacy</span><i>i</i></label>
    </div>
    <span class="sale-text">Inside and outside powder coated. Inside color is Silver Hammertone, outside color is Chameleon Sapphire over Ink Black. Front port starbord side door. Front and rear casting stands included.
        Rod butt holder and accessory tower. Vaccum sealed UHMW bottom with kevlar sides, bow, and transom. Northwest aluminum trailer, and Helfrich oarlocks. 12-position
        oar lock block, full-level diamond plate floors with quick-lock seat system&trade;</span>
</div>

</div><?php include("../footer2.php"); ?></div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/functions.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>
<script type="text/javascript">$(".forSale-content").hide();
$(".forSale-nav").click(function () {
    $(".forSale-nav").removeClass("about-current-slide");
    $(this).addClass("about-current-slide");
    $(".forSale-content").hide();
    var saleTab = $(this).attr("id").replace("forsale-", "");
    var saleContent = $(".content-" + saleTab);
    saleContent.hide().delay(300).fadeIn(300);
});
$(".forSale-nav:first").click();


$(window).load(function(){

    if(window.location.hash){

        var url = window.location.hash.replace("/","").replace("#","").replace("/","");
        $("#"+url).click();

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
