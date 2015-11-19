<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
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
<title>Pavati - Aluminum Fishing Drift Boats For Sale</title>
<base href="http://www.pavatimarine.com">
<link rel="canonical" href="http://www.pavatimarine.com">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="We know your passion for fishing, because it's the same passion that drives us to work every day. 
And your family may think you’re crazy, but we know why you wake up before dawn to get on the river.
We know why, because we do it too. Some people may not understand what makes a fisherman tick, but we do, because we’re fishermen. 
That’s why, when it comes to boats, we design and build our own – because other boat makers don’t get it. 
Maybe that’s what makes Pavati the most trusted and coveted drift boat on the water.">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="./css/master.css" class="rs-file">
<link rel="stylesheet" href="./css/droppable.css">
</head><body style="background:#FFF;">

<?php include("../headers.php"); ?>

<div class="four-oh-four-container"><div class="container four-oh-four-content">
<img src=<?php echo "'".$path."imgs/404-page-image.png'"; ?> class="eight columns" />
<div class="eight columns four-oh-four-copy"><h1>you seem to be lost...</h1>
<p>The page you're looking for doesn't seem to be here. It may have been moved or deleted. Try looking somewhere else.</p>
</div></div></div>

<?php include_once("../footer2.php"); ?>

<!-- include necessary javascript files -->
<script type='text/javascript' src='./js/master.js'></script>
<script type='text/javascript' src='./js/droppable.js'></script>
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->

</body></html>