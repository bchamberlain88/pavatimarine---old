<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); $pageTitle = "Pavati Marine - Gallery"; ?>
<?php if(!$_GET['p']){ $p = $_GET['p'];
$pageTitle = "Drift Boat Photos – Pavati Marine";
$pageDesc = "Browse photos of custom and standard drift boats by Pavati Marine. Includes features and patented options only available at Pavati.";
}else{
$p = $_GET['p'];
$pageTitle = ucfirst($p)." Drift Boat Photos – Pavati Marine";
$pageDesc = "Browse photos of custom and standard ".ucfirst($p)." drift boats by Pavati Marine. Includes features and patented options only available at Pavati.";
} ?>

<!-- get the sites root directory -->
<?php $path = "http://www.pavatimarine.com/" ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head><!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="<?php echo $pageDesc; ?>">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="../css/mobile.css">
<link rel="stylesheet" href="../files/fancybox/jquery.fancybox.css">
</head><body>
<?php include("../headers.php"); ?>

<div class="main-page"><div class="container gallery-container">

<div class="sort-links"><label>Sort by:</label>
<button class='toggle-thumbs active' id='toggle-all'>All Media</button>
<?php $a = mysql_query("SELECT * FROM boatmodels");
while($b = mysql_fetch_assoc($a)){
echo "<button class='toggle-thumbs' id='toggle-".$b['boatname']."''>".ucfirst($b['boatname'])."</button>"; }?>
<button class='toggle-thumbs' id='toggle-fishing'>Fishing</button>
<button class='toggle-thumbs' id='toggle-videos'>Videos</button></div>
<?php galleryTest(0); ?>


</div> <?php include("../footer2.php"); ?> </div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../files/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='../js/functions-test.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>

<?php if($_SESSION['admin']){ ?>

<script type="text/javascript">
$(".adminResults").hide().slideDown(300);

$(".adminThumbReturn").each(function(i){
	$(this).hide().delay(300 * i).fadeIn(300);
});

</script>

<?php }else{} ?>

<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>