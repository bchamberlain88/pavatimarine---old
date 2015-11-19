<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=614140675272373";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php include("../connect.php"); $getinfo = mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$_GET['p']."'");
$rowinfo = mysql_fetch_assoc($getinfo);
$getoverview = mysql_query("SELECT * FROM boatoverview WHERE boatid = '".$rowinfo['boatid']."'");
$rowoverview = mysql_fetch_assoc($getoverview); ?>

<div class="sixteen columns tab-content clear-top">

<?php if($_SESSION['admin']['rank'] == 1){

    echo "<h3 title='Edit this tabs title' class='textEdit overviewSlogan' id='slogan-".$_GET['p']."'>".escape($rowinfo['overviewslogan'])."</h3>";
    echo "<a class='adminEditNavDesc' id='navDesc-".$rowinfo['boatid']."'>Edit this boats navigation description</a>";

}else{

    echo "<h3>".escape($rowinfo['overviewslogan'])."</h3>"; ?>

    <!-- AddThis Button BEGIN -->
    <div class="addthis_toolbox model-addthis addthis_default_style ">
    <a href="http://www.pavatimarine.com/pdf/pm-buyers-guide-2014.pdf" target="new"><img class="model-pdf" src="http://www.pavatimarine.com/pdf/pdf-16.png"/></a>
    <a class="addthis_button_preferred_1"></a>
    <a class="addthis_button_preferred_2"></a>
    <a class="addthis_button_preferred_3"></a>
    <a class="addthis_button_compact"></a>
    <a class="addthis_counter addthis_bubble_style"></a>
    </div>
    <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52eaabba6313636d"></script>
    <!-- AddThis Button END -->

<?php } ?>

</div>


<?php $getoverview = mysql_query("SELECT * FROM boatoverview WHERE boatid = '".$rowinfo['boatid']."' ORDER BY orderid");
echo "<div class='tab-content clear-bottom'>";

    while($rowoverview = mysql_fetch_assoc($getoverview)){
    if($rowoverview['contenttype'] == "video"){
        echo "<div class='".$rowoverview['columnwidth']." columns'>".htmlspecialchars_decode($rowoverview['columncontent'])."</div>";
    }else{
    echo "<div class='".$rowoverview['columnwidth']." columns'>";
    if($_SESSION['admin']['rank'] == 1){
    echo "<p class='textEdit overviewEdit' id='overview-".$p."' title='Click anywhere to edit this text'>"; }else{ echo "<p>"; }
    echo htmlspecialchars_decode($rowoverview['columncontent']);
    echo "</p></div>"; }}

 echo "</div>"; ?>

<?php echo "<div class='sixteen columns tab-content clear-content'>"; ?>
<a class="pdf-download-button" href="http://www.pavatimarine.com/pdf/pm-buyers-guide-2014.pdf" target="new">
    <img src="http://www.pavatimarine.com/pdf/pdf-64.png" />
    Download the Pavati Marine 2014 Buyer’s Guide
</a>
<h2>standard features</h2>
<?php if($_SESSION['admin']['rank'] == 1){echo "<i class='admin-manage header-manage manage-features' alt='Manage standard features' title='Manage standard features'></i>";}else{}
echo "</div>";
$getfeatures = mysql_query("SELECT * FROM boatfeatures");
echo "<ul class='feature-list clear-content'>";

/* first column list of standard features */
while($rowfeatures = mysql_fetch_assoc($getfeatures)){
    $boats = explode(",",$rowfeatures['featureboats']);
    foreach($boats as $boat){
    if($boat == $rowinfo['boatid']){
    echo "<li class='one-third column'><div class='check'></div>".$rowfeatures['featurename']."</li>";
}else{}}} echo "</ul>";

$getspecs = mysql_query("SELECT * FROM boatspecs WHERE boatid = '".$rowinfo['boatid']."' ORDER BY specid DESC");
while($rowspecs = mysql_fetch_assoc($getspecs)){
echo "<div class='one-third column boat-specs-table'>";

if($_SESSION['admin']['rank'] == 1){ echo "<div class='specEdit' id='spec-".$rowspecs['specid']."' title='Edit these model specifications'></div>"; }else{}

echo "<b>model : ".$rowspecs['model']."</b>";
echo "<div class='specs-seperator'></div>";
echo "<p>center length : ".$rowspecs['centerlength']."</p>";
echo "<p>bottom width : ".$rowspecs['bottomwidth']."</p>";
echo "<p>hull weight : ".$rowspecs['hullweight']."</p>";
echo "<p>beam : ".$rowspecs['beam']."</p>";
echo"</div>"; }?>

<?php if($_SESSION['admin']){?>
<script type="text/javascript">
$(".overviewSlogan").click(function(){
var slogan = $(this).attr("id").replace("slogan-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-slogans.php?overview=" + slogan).delay(1000).fadeIn(300); });

$(".overviewEdit").click(function(){
var overview = $(this).attr("id").replace("overview-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-overviewText.php?id=" + overview).delay(1000).fadeIn(300); });

$(".adminEditNavDesc").click(function(){
    var navDesc = $(this).attr("id").replace("navDesc-","");
    $("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
    $(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin/admin-navDesc.php?id=" + navDesc).delay(1000).fadeIn(300);
});

$(".specEdit").click(function(){ /* admin - manage blog comments */
var spec = $(this).attr("id").replace("spec-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-specs.php?id=" + spec).delay(1000).fadeIn(300); });

</script> <?php } ?>
