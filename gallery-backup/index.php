<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); $pageTitle = "Pavati Marine - Gallery"; ?>
<?php if(!$_GET['p']){ $p = $_GET['p']; 
$pageTitle = "Drift Boat Photos – Pavati Marine"; 
$pageDesc = "Browse photos of custom and standard drift boats by Pavati Marine. Includes features and patented options only available at Pavati.";
}else{ 
$p = $_GET['p']; 
$pageTitle = ucfirst($p)." Drift Boat Photos – Pavati Marine"; 
$pageDesc = "Browse photos of custom and standard ".ucfirst($p)." drift boats by Pavati Marine. Includes features and patented options only available at Pavati.";
} ?>

<!-- get the sites root directory -->
<?php $path = "http://www.pavatimarine.com/" ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head><!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="<?php echo $pageDesc; ?>">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="../files/fancybox/jquery.fancybox.css">
</head><body>
<?php include("../headers.php"); ?>

<div class="main-page"><div class="container gallery-container">
<?php /* initialize the gallery page */
echo "<h2>Browse images by :</h2>";
echo "<div class='sixteen columns gallery-cats'>";

$getcats = mysql_query("SELECT * FROM gallerycategories");
while($rowcats = mysql_fetch_assoc($getcats)){
if($p == $rowcats['gallerycatname']){ echo "<a href='./".$rowcats['gallerycatname']."' class='gallery-cat current-gallery-cat'>".$rowcats['gallerycatname']."</a>"; 
}else{ echo "<a href='./".$rowcats['gallerycatname']."' class='gallery-cat'>".$rowcats['gallerycatname']."</a>"; }} echo "</div>";

if($_SESSION['admin']){
$check = randomString();

echo "<form method='post' action='".$_SERVER['PATH_INFO']."' enctype='multipart/form-data' class='imageForm'>
<input id='file_upload' name='image[]' type='file' multiple='true'>
<input type='hidden' name='check' value='".$check."' />
<input type='submit' name='upload' value='Upload' />
</form>"; 

if($p){$getModel = mysql_query("SELECT * FROM boatmodels WHERE boatname ='".$p."'");
$modelrow = mysql_fetch_assoc($getModel); $model = $modelrow['boatid']; }else{$model = 0;}


if($_POST['upload']){
$extensions = array("gif","jpeg","JPEG","jpg","JPG","png","bmp");
$location = "../imgs/gallery/"; $thumbLocation = "../imgs/gallery/thumbs/";

$limit = count($_FILES['image']['name']);
for($i = 0; $i < $limit; $i++){
$temp = explode(".",$_FILES['image']['name'][$i]);
$extension = end($temp);

	if(!in_array($extension, $extensions)){
		
		// INCORRECT FILE TYPE
		echo "<div class='adminResults imageError'><div class='adminError'>";
		echo "<b>".$_FILES['image']['name'][$i]."</b> is not the right file format. Please upload an image file.";
		echo "</div></div>";

	}else{

	if(file_exists($location . $_FILES['image']['name'][$i])){

		// FILE ALREADY EXISTS
		echo "<div class='adminError'>";
		echo "<b>".$_FILES['image']['name'][$i]."</b> already exists on the server. Please upload another image.";
		echo "</div>";

	}else{

	if(move_uploaded_file($_FILES['image']['tmp_name'][$i], $location."pavati-marine-gallery-image-".$_FILES['image']['name'][$i])){
		
		// SUCCESSFULLY UPLOADED IMAGE AND CREATED THUMBNAIL
		echo "<div class='adminThumbReturn'>";
		echo "<img src='".$thumbLocation."pavati-marine-gallery-image-".$_FILES['image']['name'][$i]."' />";
		echo "<p>".$_FILES['image']['name'][$i]."</p>";
		echo "</div>";

		$url = "pavati-marine-gallery-image-".$_FILES['image']['name'][$i];
		imageresize($location."pavati-marine-gallery-image-".$_FILES['image']['name'][$i], $thumbLocation."pavati-marine-gallery-image-".$_FILES['image']['name'][$i], 300, 200);

		mysql_query("INSERT INTO galleryimages (galleryimgcats, galleryimg) VALUES (\"$model\", \"$url\")");

	}else{

		// IMAGE IS TOO LARGE
		echo "<div class='adminResults imageError'><div class='adminError'>";
		echo "<b>".$_FILES['image']['name'][$i]."</b> is too large of a file. Please resize the image to be less than 2MB.<br>Recommended image size is 2,200 pixels by 1,650 pixels.";
		echo "</div></div>";

	}}}}}else{}

}else{}



if($_SESSION['admin']){ 

if($_POST['delete']){ 

$toDelete = count($_POST['delImage']);

if($toDelete == 0){

	// NO IMAGES SELECTED FOR DELETION
	echo "<div class='adminResults imageError'><div class='adminError'>";
	echo "No images were selected.";
	echo "</div></div>";

}else{

for($i = 0; $i < $toDelete; $i++){
	$delete = $_POST['delImage'][$i];
	$getThumb = mysql_query("SELECT * FROM galleryimages WHERE galleryimgid = \"$delete\"");
	$thumb = mysql_fetch_assoc($getThumb);
	mysql_query("DELETE FROM galleryimages WHERE galleryimgid = \"$delete\"");
	unlink("../imgs/gallery/".$thumb['galleryimg']);
	unlink("../imgs/gallery/thumbs/".$thumb['galleryimg']);
	echo "<div class='adminResults imageError'><div class='adminSuccess'>";
	echo "Successfully deleted <b>".$thumb['galleryimg']."</b>";
	echo "</div></div>";
}}

 }else{}

echo "<form method='post' action='".$_SERVER['PATH_INFO']."'>"; }else{}

if(!$p || $p == "all"){ // show all images

$getimages = mysql_query("SELECT * FROM galleryimages");
while($rowimages = mysql_fetch_assoc($getimages)){ $image = $image + 1;
if($_SESSION['admin']){ echo "<div class='thumbEdit'><div class='delThumb'><input type='checkbox' name='delImage[]' value='".$rowimages['galleryimgid']."' /></div>"; }else{}
echo "<a class='fancybox' href='".$path."imgs/gallery/".$rowimages['galleryimg']."' rel='group'><img alt='Pavati Marine Gallery Thumbnail ".$image."' style='display:none;' class='cat-".$rowimages['galleryimgcats']." image-".$image." gallery-image four columns' id='".$rowimages['galleryimg']."' src='".$path."imgs/gallery/thumbs/".$rowimages['galleryimg']."' /></a>"; if($_SESSION['admin']){ echo "</div>"; }else{} }

}else{ // show images from category chosen

$getimg = mysql_query("SELECT * FROM gallerycategories WHERE gallerycatname = '".$p."'");
$imgrow = mysql_fetch_assoc($getimg);
$imgcat = $imgrow['gallerycatid'];
    

$getimages = mysql_query("SELECT * FROM galleryimages WHERE galleryimgcats = '".$imgcat."'");
while($rowimages = mysql_fetch_assoc($getimages)){ $image = $image + 1;
	if($_SESSION['admin']){ echo "<div class='thumbEdit'><div class='delThumb'><input type='checkbox' name='delImage[]' value='".$rowimages['galleryimgid']."' /></div>"; }else{}
echo "<img alt='Pavati Marine Gallery Thumbnail ".$image."' style='display:block;' class='cat-".$rowimages['galleryimgcats']." image-".$image." gallery-image four columns' id='".$rowimages['galleryimg']."' 
src='".$path."imgs/gallery/thumbs/".$rowimages['galleryimg']."' />"; if($_SESSION['admin']){ echo "</div>"; }else{} }

} if($_SESSION['admin']){ echo "<input type='submit' name='delete' value='Delete Selected Images' class='adminFormBtn' /></form>"; }else{} ?></div> <?php include("../footer2.php"); ?> </div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../files/fancybox/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='../js/functions-test.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>

<?php if($_SESSION['admin']){ ?>

<script type="text/javascript">
$(".adminResults").hide().slideDown(300);

$(".adminThumbReturn").each(function(i){
	$(this).hide().delay(300 * i).fadeIn(300);
});

</script>

<?php }else{} ?>

<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>