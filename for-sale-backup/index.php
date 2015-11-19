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

<div class="main-page"><div class="container boats-container">

<div class="sixteen columns home-content" style="border-bottom:1px dotted #CCC; margin-bottom:30px;">
<?php if($_SESSION['admin']){ echo "<a class='admin-btn add-boat-sale'>Add New Boat For Sale</a>"; }else{} ?>

	<h3>Pavati Marine Boats For Sale</h3>
	<p>Thinking about buying a drift boat? Would you like to cruise down the river in your very own Pavati drift boat? 
	Take a look at our inventory, or call us to put together a package that fits your boating and fishing needs and desires. 
	It only takes a few minutes and it will start the ball rolling.
	During the week our normal hours of operation are from 7:00 AM to 5:00 PM. We are located in White City, Oregon however if you live in a different state please call our toll free number at
	<a href="tel:18008665269">1-800-866-5269</a>. After hours or weekends? No problem. That's a key part of our customer service.<br><br>
	We make ourselves available when you need us and take calls until 9:00 PM, all seven days of the week, (sometimes even later). 
	Please call this number after 5:00 PM and on weekends - <a href="tel:15417782650">1-541-778-2650</a>. 
	If we don't answer immediately, then please leave a message and we will get back to you shortly.<br><br>
	<b>We get new demo and used boats on a daily basis, so call for the latest available boats.</b></p><br><br>
</div>

<ul class="four columns forSale-sidebar">
	<a><li class="forSale-nav about-current-slide" id="forsale-new">New Boats</li></a>
	<a><li class="forSale-nav" id="forsale-used">Used Boats</li></a>
</ul>

<div style="display:none;" class="twelve columns forSale-content content-new">
<?php $getNew = mysql_query("SELECT * FROM boatsforsale WHERE forsaletype = 'new' ORDER BY forsaleid DESC");
if(mysql_num_rows($getNew) == 0){
echo "<h3>More boats coming soon!</h3>";
}else{ while($rowNew = mysql_fetch_assoc($getNew)){ 
if($_SESSION['admin']['rank'] == 1){
echo "<h3>".$rowNew['forsaletitle']."<i class='editForSale' id='for-sale-".$rowNew['forsaleid']."' title='Edit this boat for sale'></i></h3>";
}else{ echo "<h3>".$rowNew['forsaletitle']."</h3>"; }
echo "<p>".$rowNew['forsalecontent']."</p>"; 
}} ?></div>

<div style="display:none;" class="twelve columns forSale-content content-used">
<?php $getUsed = mysql_query("SELECT * FROM boatsforsale WHERE forsaletype = 'used' ORDER BY forsaleid DESC");

if(mysql_num_rows($getUsed) == 0){
echo "<h3>More boats coming soon!</h3>";
}else{ while($rowUsed = mysql_fetch_assoc($getUsed)){ 
if($_SESSION['admin']['rank'] == 1){
echo "<h3>".$rowUsed['forsaletitle']."<i class='editForSale' id='for-sale-".$rowUsed['forsaleid']."' title='Edit this boat for sale'></i></h3>";
}else{ echo "<h3>".$rowUsed['forsaletitle']."</h3>"; }
echo "<p>".$rowUsed['forsalecontent']."</p>"; 
}} ?></div>

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
$(".forSale-nav:first").click();</script>


<?php if($_SESSION['admin']){ ?>

<script type="text/javascript">

	$(".add-boat-sale").click(function(){
		$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
		$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin/admin-addBoatSale.php").delay(1000).fadeIn(300);
	});

	$(".editForSale").click(function(){ var boat = $(this).attr("id").replace("for-sale-","");
		$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
		$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin/admin-editBoatSale.php?id=" + boat).delay(1000).fadeIn(300);
	});

</script>

<?php }else{}?>


<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>