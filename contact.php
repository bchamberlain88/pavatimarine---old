<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("./connect.php"); include("./functions.php"); $pageTitle = "Pavati Marine - Contact a Sales Representative"; ?>

<?php $states = array("alabama","alaska","arizona","arkansas","california","colorado","connecticut","delaware",
"florida","georgia","hawaii","idaho","illinois","indiana","iowa","kansas","kentucky","louisiana","maine",
"maryland","massachusetts","michigan","minnesota","mississippi","missouri","montana","nebraska","nevada",
"new hampshire","new jersey","new mexico","new york","north carolina","north dakota","ohio","oklahoma",
"oregon","pennsylvania","rhode island","south carolina","south dakota","tennessee","texas","utah","vermont",
"virginia","washington","west virginia","wisconsin","wyoming"); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head> <!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Contact a Pavati Marine sales representative for more information on one of our fishing boats.">
<meta name="keywords" content="fishing, boats, aluminum, pavati, marine, flyfishing, fish, river, drift, drift boats, power boats, drifter, doors, true leve floors, fishing boats, 
warrior, guardian, legacy, wildcat, destroyer">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="./css/master.css" class="rs-file">
<link rel="stylesheet" href="./css/droppable.css">
<link rel="stylesheet" href="./css/mobile.css">
<link rel="shortcut icon" href="./imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="./imgs/favicon.ico" type="image/x-icon">
<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css' rel='stylesheet' />
<style>
  #map { background:#121212;float:left;height:500px;margin-top:0px;position:relative;width:100%; }
</style>
</head><body>
<!-- include the main page navigation -->
<?php include("./headers.php"); ?>

<div class="main-page">

		<div id='map'></div>

		<div class="page-container container">

			<div class="sixteen columns contactor">

				<div class="contact-address">
					<h1>Pavati Marine Drift Boats</h1>
					<p><b>Address: </b><a target="new" href="http://maps.google.com/maps?ie=UTF-8&gl=us&daddr=7905+Agate+Rd,+White+City,+OR+97503&saddr=&panel=1&f=d&fb=1&dirflg=d&geocode=%3BKXOrh6nCYs9UMaMV4poQp7gq&ei=38vNUb2-IaLTiwK7z4HQBw&ved=0CCsQ-A8wAA">7905 Agate Road. White City, Oregon 97503</a>
					<b>Phone Number: </b>1-877-402-2388 (Toll Free)
					<b>Hours: </b>6AM - 7PM PST Monday - Friday</p>
				</div>

				<div class="ten columns">

					<div class="aweber-form"><script type="text/javascript" src="http://forms.aweber.com/form/62/1068941762.js"></script></div>

				</div>
				
				<div class="four columns input-container">
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style" style="float:left;">
		            <a class="addthis_button_preferred_1"></a>
		            <a class="addthis_button_preferred_2"></a>
		            <a class="addthis_button_preferred_3"></a>
		            <a class="addthis_button_preferred_4"></a>
		            <a class="addthis_button_compact"></a>
		            <a class="addthis_counter addthis_bubble_style"></a>
		            </div>

					<p><b>Contact Information</b><br>
					<a href="mailto:media@pavatimarine.com">media@pavatimarine.com</a><br>
					<a href="mailto:sales@pavatimarine.com">sales@pavatimarine.com</a></p>

				</div>	

			</div>

		</div>

<?php include("./footer2.php"); ?>
</div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='./js/master.js'></script>
<script type='text/javascript' src='./js/functions.js'></script>
<script type='text/javascript' src='./js/droppable.js'></script>
<script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js'></script>
<script>
var map = L.mapbox.map('map', 'stiffnasty.hj40i00n');
</script>
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>