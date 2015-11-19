<?php /* get feature information for the current boat model */

$addonrow = mysql_fetch_assoc(mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'"));
$addonid = $addonrow = $addonid['boatid'];

$addonsrow = mysql_fetch_assoc(mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'"));
$addonslogan = $addonsrow['addonslogan'];

/* get this boats model specifications */
echo "<div class='sixteen columns tab-content clear-content'><h2>pricing information</h2></div>";
$getspecs = mysql_query("SELECT * FROM boatspecs WHERE boatid = '".$addonid."' ORDER BY specid DESC");
while($rowspecs = mysql_fetch_assoc($getspecs)){
$spectable = $spectable + 1;
echo "<a href='tel:18008665269'><div class='one-third column boat-specs-table' id='table-".$spectable."'>";
echo "<b>model : ".$rowspecs['model']."</b>";
echo "<div class='specs-seperator'></div>";
echo "<p>center length : ".$rowspecs['centerlength']."</p>";
echo "<p>bottom width : ".$rowspecs['bottomwidth']."</p>";
echo "<p>hull weight : ".$rowspecs['hullweight']."</p>";
echo "<p>beam : ".$rowspecs['beam']."</p>";
echo "<div class='specs-seperator'></div>";
echo "<span class='specs-price animate-slow'><b id='price-".$spectable."'>Packages Starting At $".$rowspecs['price']."</b></span>";
echo"</div></a>"; } 

echo "<div class='sixteen columns tab-content clear-content'><h2>additional features</h2></div>";

$gettabs = mysql_query("SELECT * FROM boatcustomtabs");
echo "<ul class='one-third column about-sidebar'>";
while($rowtabs = mysql_fetch_assoc($gettabs)){
$boats = $rowtabs['boats'];
$boatarray = explode("," , $boats);
foreach($boatarray as $boat){
if($boat == $addonid){
echo "<a><li class='about-nav custom-tab' id='about-tab-".$rowtabs['customtabid']."'>".$rowtabs['customtab']."</li></a>";
}else{}}} echo"</ul>"; ?>

<div class="two-thirds column custom-container">
<?php /* load the custom content */
$getcustom = mysql_query("SELECT * FROM boatcustomcontent");
while($rowcustom = mysql_fetch_assoc($getcustom)){

echo "<div class='custom-content' id='custom-".$rowcustom['customtabid']."'>";

if($_SESSION['admin']['rank'] == 1){
echo "<div class='textEdit customEdit' id='custom-".$rowcustom['customcontentid']."' title='Click anywhere to edit this content'>".$rowcustom['customcontent']."</div>"; }else{
echo $rowcustom['customcontent']; }
echo "</div>";

}?></div>

<?php if($_SESSION['admin']){?>
<script type="text/javascript">
$(".customSlogan").click(function(){
var slogan = $(this).attr("id").replace("slogan-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-slogans.php?custom=" + slogan).delay(1000).fadeIn(300); });

$(".customEdit").click(function(){
var content = $(this).attr("id").replace("custom-","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin/admin-customContent.php?id=" + content).delay(1000).fadeIn(300); });

</script> <?php } ?>