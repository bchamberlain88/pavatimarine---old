<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
<?php if(!$_GET['p']){ $p = $_GET['p']; $pageTitle = "Drift Boats - Pavati Marine Boat Models"; $metaDesc = "View all available boat models by Pavati Marine. Drift boats & power boats, both new and used available. Contact a sales representative today!";
}else{ $p = $_GET['p']; $pageTitle = "Drift Boats - The ".ucfirst($p)." by Pavati Marine"; $getboat = mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'");
$rowboat = mysql_fetch_assoc($getboat); $metaDesc = $rowboat['boatdesc']; } ?>


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
<meta name="description" content=<?php echo"'".$metaDesc."'"; ?>>
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master-test-test.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="../css/lightbox.css" />
<link rel="stylesheet" href="../css/mobile.css">
<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="../imgs/favicon.ico" type="image/x-icon">
</head><body>

<!-- include the main page navigation -->
<?php include("../headers.php"); ?>


<div class="boat-tab-subnav"><div class="container">
	<!-- overview tab -->
	<a class='tab two columns' id='tab-1'>overview</a>
	<!-- design tab -->
	<a class='tab two columns' id='tab-2'>design</a>
	<!-- features tab -->
	<a class='tab two columns' id='tab-3'>features</a>
	<!-- gallery tab -->
	<a class='tab two columns' id='tab-4'>gallery</a>
	<!-- call to action tab -->
	<a href='../contact' class='tab three columns get-started-link'>Get A Quote</a>
</div></div>


<div class="main-page boat-content">

<?php if($p){

/* check to see if the page being viewed even exists */
$exists = checkpage("boatmodels", "boatname", $p);
if($exists != 1){ include("../404.php"); }else{

include("../slider.php");
echo"<div class='main-container bc'>
	<!-- tab controls container -->
	<div class='container main-tabs'>
		<!-- overview tab -->
		<a class='tab two columns overview-tab current-tab' id='tab-1'><h2>overview</h2></a>
		<!-- design tab -->
		<a class='tab two columns' id='tab-2'><h2>design</h2></a>
		<!-- features tab -->
		<a class='tab two columns' id='tab-3'><h2>features</h2></a>
		<!-- gallery tab -->
		<a class='tab two columns' id='tab-4'><h2>gallery</h2></a>
		<!-- call to action tab -->
		<a href='../contact' class='tab three columns get-started-link'><h2>Get A Quote</h2></a>
	</div>

	<div class='container main-content'>

		<!-- overview container -->
		<div class='content content-1'>";

			include("./boat-overview.php");

   echo"</div>
		<!-- design container -->
		<div class='content content-2'>";
			include("./boat-design.php");
   echo"</div>

   		<!-- features container -->
		<div class='content content-3'>";
			include("./boat-features.php");
   echo"</div>

<!-- gallery container -->
		<div class='content content-4'>";
			include("./boat-gallery.php");
  echo "</div>";


	echo" </div>

	<!-- include the page footer --> ";

	include("../footer2.php");

	echo "</div>";
}}else{

echo "<div class='container boats-container'>";

$getboats = mysql_query("SELECT * FROM boatmodels");
while($rowboats = mysql_fetch_assoc($getboats)){
echo "<div class='sixteen columns boat-model-large clear-content'>";
echo "<a class='fancybox' href='../imgs/boats/boat-model-".$rowboats['boatname'].".jpg' rel='group'><img alt='The Pavat Marine ".ucwords($rowboats['boatname'])." ".ucwords($rowboats['boattype'])." Boat Model' class='five columns' src='../imgs/boats/boat-model-".$rowboats['boatname'].".jpg' /></a>";
echo "<div class='nine columns large-boat-info'><h2>The Pavati ".$rowboats['boatname']."</h2><p>".htmlspecialchars_decode($rowboats['boatdesc'])."</p><a class='animate2 border3' href='./".$rowboats['boatname']."'>View ".$rowboats['boatname']."</a></div>";
echo "</div>";
}; echo "</div>";

} ?>

</div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/droppable.js'></script>
<script src="../js/lightbox.min.js"></script>

<?php if($_SESSION['admin']){?>
<script type="text/javascript">

$(".manage-features").click(function(){
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-features.php").delay(1000).fadeIn(300); });

$(".specEdit").click(function(){ /* admin - manage blog comments */
var spec = $(this).attr("id").replace("spec-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-specs.php?id=" + spec).delay(1000).fadeIn(300); });

</script> <?php } ?>

<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->

<script language="JavaScript">

/* switch between tabs on the boat model page */
$(".tab").click(function(){
var clicked = $(this).attr("id").replace("tab-","");
$("html,body").delay(250).animate({scrollTop: $('.content-'+clicked).offset().top - 150 }, "slow");
$(".tab").removeClass("current-tab");
$(this).addClass("current-tab"); });

var winHeight = $(window).height();

$(window).scroll(function(){

	var scrolled = $(this).scrollTop();
	var overviewTop = $(".content-1").height() + $(".content-1").offset().top - 150;
	var designTop = $(".content-2").height() + $(".content-2").offset().top - 150;
	var featuresTop = $(".content-3").height() + $(".content-3").offset().top - 150;
	var galleryTop = $(".content-4").height() + $(".content-4").offset().top - 150;

	if(scrolled < winHeight - 200){
		$(".boat-tab-subnav").hide();
		$(".overview-tab").addClass("current-tab");
	}

	if(scrolled >= winHeight - 200){
		$(".boat-tab-subnav").show();
		$(".boat-tab-subnav").animate({top: "70px"},500);
		$(".tab").removeClass("current-tab");
		$("#tab-1").addClass("current-tab");
	}

	if(scrolled >= overviewTop){
		$(".tab").removeClass("current-tab");
		$("#tab-2").addClass("current-tab");
	}

	if(scrolled >= designTop){
		$(".tab").removeClass("current-tab");
		$("#tab-3").addClass("current-tab");
	}

	if(scrolled >= featuresTop){
		$(".tab").removeClass("current-tab");
		$("#tab-4").addClass("current-tab");
	}

	if(scrolled >= galleryTop){
		$(".tab").removeClass("current-tab");
		$("#tab-5").addClass("current-tab");
	}

});

</script>


</body></html>