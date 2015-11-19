<?php include("../connect.php"); $getinfo = mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$_GET['p']."'"); 
$rowinfo = mysql_fetch_assoc($getinfo); ?>
<div class="sixteen columns tab-content clear-top">

<?php

if($_SESSION['admin']['rank'] == 1){

	echo "<h3 title='Edit this tabs title' class='textEdit gallerySlogan' id='slogan-".$_GET['p']."'>".escape($rowinfo['galleryslogan'])."</h3>";
	echo "<a href='../gallery/".$_GET['p']."' class='adminEditNavDesc' id='navDesc-".$rowinfo['boatid']."'>Edit this boats gallery images</a>";

}else{

	echo "<h3>".escape($rowinfo['galleryslogan'])."</h3>";

}

?>

</div>

<?php $boatid = $rowinfo['boatid']; galleryTest($boatid); ?>

<?php if($_SESSION['admin']){?>
<script type="text/javascript">
$(".gallerySlogan").click(function(){
var slogan = $(this).attr("id").replace("slogan-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-slogans.php?gallery=" + slogan).delay(1000).fadeIn(300); });
</script> <?php } ?>