<?php /* get feature information for the current boat model */
$featureRow = mysql_fetch_assoc(mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'"));
$featureid = $featureRow['boatid'];

$designRow = mysql_fetch_assoc(mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'"));
$designSlogan = $designRow['designslogan'];?>

<div class="sixteen columns tab-content clear-top">
    <?php echo "<h3>".escape($designSlogan)."</h3>"; ?>
</div>

<?php $getdesign = mysql_query("SELECT * FROM boatdesign ORDER BY orderid");
while($rowdesign = mysql_fetch_assoc($getdesign)){
$boats = explode("," , $rowdesign['boatid']);
foreach($boats as $boat){
if($boat == $featureid){
echo "<div class='sixteen columns tab-content'>";
if($_SESSION['admin']['rank'] == 1){

    echo "<div class='textEdit designEdit' id='designContent-".$rowdesign['designid']."'>".html_entity_decode($rowdesign['columncontent'])."</div>";

}else{

    echo html_entity_decode($rowdesign['columncontent']);

}
echo "</div>";
}else{}}} ?>

