<?php /* get feature information for the current boat model */
$featurerow = mysql_fetch_assoc(mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'"));
$featureid = $featureid['boatid'];

$featuresrow = mysql_fetch_assoc(mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'")); 
$featureslogan = $featuresrow['featureslogan']; ?>

<div class="sixteen columns tab-content clear-top"><h3><?php echo escape($featureslogan); ?></h3></div>
<?php /* generate list of features for the current boat model */
$getfeatures = mysql_query("SELECT * FROM boatfeatures ORDER BY featureid");
while($rowfeatures = mysql_fetch_assoc($getfeatures)){
$featureboats = $rowfeatures['featureboats'];
$featurearray = explode("," , $featureboats);
foreach($featurearray as $feature){if($feature == $featureid){
echo" <div class='sixteen columns feature feature-".$rowfeatures['featureid']."'>
<div class='feature-info'>
<h2>".escape($rowfeatures['featurename'])."</h2><br>
<p class='feature-text feature-info-".$rowfeatures['featureid']."' id='feature-info-".$rowfeatures['featureid']."'>".htmlspecialchars_decode($rowfeatures['featuredesc'])."</p><br>
</div>

<div class='feature-drop'>";

$getImages = mysql_query("SELECT * FROM feature_images WHERE featureid = '".$rowfeatures['featureid']."'");

if(mysql_num_rows($getImages) != 0){

    $getFeatureVideo = mysql_query("SELECT * FROM feature_videos WHERE featureid = '".$rowfeatures['featureid']."'");
    if(mysql_num_rows($getFeatureVideo) != 0){

        $rowVid = mysql_fetch_assoc($getFeatureVideo);
        echo "<iframe class='feature-video' width='48%'' height='304' src='//www.youtube.com/embed/".$rowVid['video']."' frameborder='0' allowfullscreen></iframe>";

    }else{

        echo "<div class='video-soon'>New video coming soon!</div>";

    }

    echo "<div class='drop-images'>";
    while($images = mysql_fetch_assoc($getImages)){
    echo "<a href='".$images['image']."' data-lightbox='".$rowfeatures['featurename']."'><img alt='".ucwords(escape($rowfeatures['featurename']))."' class='feature-drop-main-image' src='".$images['image']."' width='48%'; /></a>"; }
    echo "</div>";

}else{ 

    echo "<a href='".$rowfeatures['featureimg']."' data-lightbox='".$rowfeatures['featurename']."'><img alt='".ucwords(escape($rowfeatures['featurename']))."' class='feature-drop-main-image' src='".$rowfeatures['featureimg']."' width='23%' /></a>";
    
}


echo "</div></div>";}else{}}} ?>