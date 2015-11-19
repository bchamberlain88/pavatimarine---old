<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
<?php if(!$_GET['p']){ $p = $_GET['p']; $pageTitle = "About Pavati Marine Drift Boats"; }else{ $p = $_GET['p']; $pageTitle = "Pavati Marine Drift Boats - ".ucfirst(str_replace("-", " ", $p)).""; } ?>

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
<meta name="description" content="We are located in Southern Oregon, about five miles from Medford. Mountain views surround our headquarters, with the Rogue River running only minutes away. 
We build the highest quality drift boats in the world. Chuck Gros, Pavati Marine founder, spent a lot of time fishing on the Rogue River with his family and friends as a boy. 
Over time his weekend fishing hobby became a passion, but was hindered by cheap and clunky drift boats. This led him to design his own drift boat - suited for a serious, experienced fisherman. 
Our drift boats are not for novices, they are not for inexperienced fishermen. Pavati drift boats are for fishing pros, people who understand how great of an impact a 
quality boat has on a fishing trip. ">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="../files/fancybox/jquery.fancybox.css">
</head><body>

<!-- include the main page navigation -->
<?php include("../headers.php"); ?>
<!-- include the mobile navigation -->

<?php if($p){}else{ 
echo "<div class='lrg-about-container'>
<div class='word-1 parallax' data-velocity='.3'></div>
<div class='word-2 parallax' data-velocity='.7'></div>
<div class='word-3 parallax' data-velocity='.9'></div>
<div class='word-4 parallax' data-velocity='.5'></div>
<div class='scroll-down'>Scroll Down</div>
</div><div class='top100'>"; } ?>

<div class="main-page"><div class="container about-container" <?php if(!$p){ echo"style='padding-top:50px;'"; } ?>>

<?php  /* check to see if the page being viewed even exists */
$exists = checkpage("abouttabs", "abouttaburl", $p);
if($exists != 1){ include("../404.php"); }else{

if($_SESSION['admin']['rank'] == 1){
echo "<ul class='sixteen columns about-sidebar'>";
}else{
echo "<ul class='four columns about-sidebar'>";
}
$gettabs = mysql_query("SELECT * FROM abouttabs ORDER BY orderid ASC");
while($rowtabs = mysql_fetch_assoc($gettabs)){ if($p == $rowtabs['abouttaburl']){
echo "<a href='./".$rowtabs['abouttaburl']."'><li class='about-nav about-current-slide' id='about-tab-".$rowtabs['abouttabid']."'>".$rowtabs['abouttab']."</li></a>";
}else{ echo "<a href='./".$rowtabs['abouttaburl']."'><li class='about-nav' id='about-tab-".$rowtabs['abouttabid']."'>".$rowtabs['abouttab']."</li></a>"; }} echo "</ul>";
$gettab = mysql_query("SELECT * FROM abouttabs WHERE abouttaburl = '".$p."'"); $rowtab = mysql_fetch_assoc($gettab);
$getabout = mysql_query("SELECT * FROM aboutcontent WHERE abouttabid = '".$rowtab['abouttabid']."'"); $rowabout = mysql_fetch_assoc($getabout);

if($_SESSION['admin']['rank'] == 1){

	echo "<div class='sixteen columns about-content textEdit' id='about-content-".$rowabout['abouttabid']."' title='Click anywhere to edit this content'>".html_entity_decode($rowabout['aboutcontent'])."</div>";

}else{ echo "<div class='twelve columns about-content' id='about-content-".$rowabout['abouttabid']."'>".html_entity_decode($rowabout['aboutcontent'])."</div>"; }

} ?>

</div><?php include("../footer2.php"); ?></div>
<?php if($p){}else{ echo "</div>"; } ?>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/functions-test.js'></script>
<script type='text/javascript' src='../files/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>

<?php if($_SESSION['admin']['rank'] == 1){ ?>

	<script type="text/javascript">
		$(".textEdit").click(function(){
		var content = $(this).attr("id").replace("about-content-","");
		$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
		$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-aboutContent.php?id=" + content).delay(1000).fadeIn(300); });
	</script>

<?php }else{} ?>

<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->

</body></html>