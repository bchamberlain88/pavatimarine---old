<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
<?php if(!$_GET['p']){ $pageTitle = "About Pavati Marine Drift Boats"; }else{ $p = $_GET['p']; $pageTitle = "Pavati Marine Drift Boats - ".ucfirst(str_replace("-", " ", $p)).""; } ?>

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
<meta name="description" content="Pavati Marine is located in Southern Oregon, and has been manufacturing all aluminum drift boats and power boats for over 30 years.">
<meta name="robots" content="index, follow">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="../css/mobile.css">
<link rel="stylesheet" href="../files/fancybox/jquery.fancybox.css">
<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="../imgs/favicon.ico" type="image/x-icon">
</head><body>

<!-- include the main page navigation -->
<?php include("../headers.php"); ?>
<!-- include the mobile navigation -->

<?php if($p){}else{ echo $_SERVER['TEST_VAR'];
echo "<div class='lrg-about-container'>
<div class='word-1 parallax' data-velocity='.3'></div>
<div class='word-2 parallax' data-velocity='.7'></div>
<div class='word-3 parallax' data-velocity='.9'></div>
<div class='word-4 parallax' data-velocity='.5'></div>
<div class='scroll-down'>Scroll Down</div>
</div><div class='top100'>"; } ?>

<div class="main-page"><div class="container about-container testimonial-page" style='padding-top:50px;'>

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

}else{ echo "<div class='twelve columns about-content' id='about-content-".$rowabout['abouttabid']."'>";
     if($p == "pro-staff"){
        echo "<h3>Pro Staff</h3>";

        $getProstaff = mysql_query("SELECT * FROM prostaff ORDER BY id DESC");
        while($prostaff = mysql_fetch_assoc($getProstaff)){
            $id = $prostaff['id'];
            $person = $prostaff['person'];
            $location = $prostaff['location'];
            $text = $prostaff['text'];
            $service = $prostaff['service'];
            $website = $prostaff['website'];
            $email = $prostaff['email'];

            echo "<p id='prostaff-$id' style='border-bottom:1px dashed #ccc; margin:0 0 20px; padding:0 0 10px 0; width:100%;'>";
            echo "<b>$person"; if($email != NULL){ echo ", <a href='mailto:$email'>$email</a>"; }else{} if($website != NULL){ echo "<br><a href='".$website."'>".$website."</a>"; }else{} echo "</b><br>";
            echo "<i>".$location."</i><br>";
            echo "<br>$text<br><br>";
            $getImages = mysql_query("SELECT * FROM prostaff_img WHERE guide_name = '$person'");
            if(mysql_num_rows($getImages) == 0){}else{
                while($image = mysql_fetch_assoc($getImages)){
                    echo "<a class='testimonial-quarter-photo fancybox'href='../imgs/prostaff/".$image['image']."' rel='group'>
                    <img class='testimonial-photo hoverZoomLink' src='../imgs/prostaff/".$image['image']."' /></a>";
                }
            }

            echo "</p>";

        }
    }
    if($p == "testimonials"){ ?>
        <?php $approve = $_GET['approve'];
        if($approve){
            $checkApproval = mysql_query("SELECT * FROM testimonials WHERE verify = '$approve'");
            if(mysql_num_rows($checkApproval) > 0){
                $testimonial = mysql_fetch_assoc($checkApproval);
                if($testimonial['approved'] == 0){
                    echo "<span class='return-success'>Success: The testimonial has been approved!</span>";
                    mysql_query("UPDATE testimonials SET approved = 1 WHERE verify = '$approve'");
                    emailApproval($approve);
                }else{
                    echo "<span class='return-error'>Error: That testimonial has already been approved</span>";
                }
            }else{ echo "<span class='return-error'>Error: That testimonial does not exist</span>"; }
        }else{}
        if($_POST['submit']){
            $verify = $_SESSION['testimonial'];
            $text = mysql_real_escape_string($_POST['testimonial']);
            $person = mysql_real_escape_string($_POST['name']);
            $email = mysql_real_escape_string($_POST['email']);
            if(isset($_POST['guide'])){ $guide = 1; }else{ $guide = 0; }
            $service = mysql_real_escape_string($_POST['service']);
            $website = mysql_real_escape_string($_POST['website']);
            $location = mysql_real_escape_string($_POST['location']);
            $ipaddress = getUserIp();
            $date = date("Y-m-d");
            $check_test = mysql_query("SELECT * FROM testimonials WHERE verify = '$verify'");
            if(mysql_num_rows($check_test) == 0){
            echo "<span class='return-success'>Success: Your testimonial has been submitted and is awaiting review!</span>";

            mysql_query("INSERT INTO testimonials (verify, text, person, email, guide, service, website, location, ipaddress, date) VALUES (\"$verify\", \"$text\", \"$person\", \"$email\", \"$guide\", \"$service\", \"$website\", \"$location\", \"$ipaddress\", \"$date\")")or die(mysql_error());

            emailTestimonial($verify, $email, $person, $service, $website, $location, $ipaddress, $date, $text);

            }else{}

        }else{}

        echo "<h3>what our customers have to say</h3>";

        $getTestimonials = mysql_query("SELECT * FROM testimonials WHERE approved = 1 ORDER BY id DESC");
        while($testimonial = mysql_fetch_assoc($getTestimonials)){

            $id = $testimonial['id'];
            $ver = $testimonial['verify'];
            $person = $testimonial['person'];
            $location = $testimonial['location'];
            $text = $testimonial['text'];
            if($testimonial['guide'] == 1){

                $service = $testimonial['service'];
                $website = $testimonial['website'];

            }else{ $service = NULL; $website = NULL; }

            echo "<p id='testimonial-$id' style='border-bottom:1px dashed #ccc; margin:0 0 20px; padding:0 0 10px 0; width:100%;'>";
            echo "<b>$person"; if($service != NULL){ echo ", $service"; }else{} if($website != NULL){ echo "<br><a href='".$website."'>".$website."</a>"; }else{} echo "</b><br>";
            echo "<i>".$location."</i><br>";
            echo "<br>$text<br><br>";

            $getImages = mysql_query("SELECT * FROM testimonial_img WHERE verify = '$ver'");
            if(mysql_num_rows($getImages) == 0){}else{
                //echo "<div class='test-post-images'>";
                while($image = mysql_fetch_assoc($getImages)){
                    echo "<a class='testimonial-quarter-photo fancybox'href='../imgs/testimonials/".$image['image']."' rel='group'>
                    <img class='testimonial-photo hoverZoomLink' src='../imgs/testimonials/".$image['image']."' /></a>";
                } //echo "</div>";
            }

            echo "</p>";

        }

    }

echo html_entity_decode($rowabout['aboutcontent'])."</div>"; }

} ?>
<div id="add-testimonial" style='background:transparent; float:left; height:5px; width:100%;'></div>
</div><?php include("../footer2.php"); ?></div>
<?php if($p){}else{ echo "</div>"; } ?>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/functions-test.js'></script>
<script type='text/javascript' src='../files/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>

<script type="text/javascript">
    $(document).ready(function(){ var hash = window.location.hash;
    if(hash == "#add-testimonial"){ var winY = $(document).height();
    $("html,body").animate({scrollTop: winY}, 300, function(){ pause(); });}else{}});
</script>



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