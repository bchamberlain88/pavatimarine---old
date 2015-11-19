<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
<?php if(!$_GET['p']){ $p = $_GET['p']; $pageTitle = "Pavati Marine - Pro Shop"; }else{ $p = $_GET['p']; $pageTitle = "Pavati Marine - ".ucfirst($p).""; } ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head> <!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="The Pavati Marine Pro Shop is currently under construction.">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
</head><body>
<?php include("../headers.php"); ?>

<?php  /* check to see if the page being viewed even exists */
$exists = checkpage("abouttabs", "abouttaburl", $p);
if($exists != 1){ include("../404.php"); }else{

echo "<div class='lrg-comingSoon-container'>
<a class='animate-slow coming-soon-button' href='../'>Go Back</a>
<div class='coming-soon parallax' data-velocity='.75'></div></div>";

} ?>
<div class="top100">
<div class="main-page"><?php include("../footer2.php"); ?></div></div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>
<script type='text/javascript' src='../js/functions.js'></script>
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->

</body></html>