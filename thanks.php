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
    <div class="thanksImage">
        <div class="thanksDialogue">Thank you for contacting us! Your quote request has been received and will be responded to.<br /><br />
        <a href="http://www.pavatimarine.com/">Return to the home page</a></div>
    </div>

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