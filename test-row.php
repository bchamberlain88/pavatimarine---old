<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("./connect.php"); include("./functions.php"); $pageTitle = "Pavati Marine - Take a Test Row"; ?>

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
<meta name="description" content="Contact a Pavati Marine sales representative today to set up a test row in one of our demo boats!">
<meta name="keywords" content="fishing, boats, aluminum, pavati, marine, flyfishing, fish, river, drift, drift boats, power boats, drifter, doors, true leve floors, fishing boats, 
warrior, guardian, legacy, wildcat, destroyer, test row, demo, sales representative">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="./css/master.css" class="rs-file">
<link rel="stylesheet" href="./css/droppable.css">
<link rel="shortcut icon" href="./imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="./imgs/favicon.ico" type="image/x-icon">
</head><body>
<!-- include the main page navigation -->
<?php include("./headers.php"); ?>

<div class="main-page">

		<div class="container request-container">

			<div class="sixteen columns">
				<div class="sixteen columns input-container">
					<h2 style="margin-left: 120px;">request a test row in a pavati boat</h2>
				</div>
			</div>

			<div class="eleven columns">

				<div class="aweber-form"><script type="text/javascript" src="http://forms.aweber.com/form/62/1068941762.js"></script></div>

			</div>
			
			<div style="margin-top:-15px;" class="five columns input-container">
				<h2>talk to a sales representitive</h2>
				<p><a href="tel:18774022388">1-877-402-2388 (Toll Free)</a></p>
			</div>	

		</div>
<?php include("./footer2.php"); ?>
</div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='./js/master.js'></script>
<script type='text/javascript' src='./js/functions.js'></script>
<script type='text/javascript' src='./js/droppable.js'></script>
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>