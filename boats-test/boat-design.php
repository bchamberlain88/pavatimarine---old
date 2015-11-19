<?php /* get feature information for the current boat model */
$designrow = mysql_fetch_assoc(mysql_query("SELECT * FROM boatmodels WHERE boatname = '".$p."'"));
$designid = $designrow['boatid'];

$getdesign = mysql_query("SELECT * FROM boat_design ORDER BY order_id");
while($rowdesign = mysql_fetch_assoc($getdesign)){

$boats = explode("," , $rowdesign['boats_id']);

foreach($boats as $boat){
if($boat == $designid){


$design_name = $rowdesign['name'];
$design_text = $rowdesign['text'];
$design_img1 = $rowdesign['img_1'];
$design_img2 = $rowdesign['img_2'];
$design_img3 = $rowdesign['img_3'];
$design_img4 = $rowdesign['img_4'];
$design_video = $rowdesign['video'];
$design_video_type = $rowdesign['video_type'];

echo "<div class='sixteen columns feature feature-".$designid."'>
<div class='feature-info'>
<h2>".escape($design_name)."</h2><br>
<p class='feature-text feature-info-".$designid."' id='feature-info-".$designid."'>".htmlspecialchars_decode($design_text)."</p><br><br>
</div>";

if( $design_img1 != "" && $design_img2 != "" && $design_img3 != "" && $design_img4 != "" ){

echo "<div class='feature-drop'>";

    if($design_video == "null"){}
    elseif($design_video == ""){ echo "<div class='video-soon'>New video coming soon!</div>"; }
    else{

        if($design_video_type == "youtube"){
        echo "<iframe class='feature-video' width='48%'' height='304' src='//www.youtube.com/embed/".$design_video."' frameborder='0' allowfullscreen></iframe>"; }elseif($design_video_type == "vimeo"){
        echo "<iframe class='feature-video' src='//player.vimeo.com/video/".$design_video."?title=0&amp;byline=0&amp;portrait=0' width='48%' height='304' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"; }

    }

    echo "<div class='drop-images'>";
    echo "<a href='".$design_img1."' data-lightbox='".$design_name."'><img alt='".ucwords(escape($design_name))."' class='feature-drop-main-image' src='".$design_img1."' width='48%'; /></a>";
    echo "<a href='".$design_img2."' data-lightbox='".$design_name."'><img alt='".ucwords(escape($design_name))."' class='feature-drop-main-image' src='".$design_img2."' width='48%'; /></a>";
    echo "<a href='".$design_img3."' data-lightbox='".$design_name."'><img alt='".ucwords(escape($design_name))."' class='feature-drop-main-image' src='".$design_img3."' width='48%'; /></a>";
    echo "<a href='".$design_img4."' data-lightbox='".$design_name."'><img alt='".ucwords(escape($design_name))."' class='feature-drop-main-image' src='".$design_img4."' width='48%'; /></a>";
    echo "</div>";

echo "</div>";

}else{ echo "<div class='feature-spacer'></div>"; }

echo "</div>";


}else{}}} ?>
