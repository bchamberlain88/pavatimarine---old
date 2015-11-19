<!-- get the sites root directory -->
<?php $path = "http://www.pavatimarine.com/"; ?>

<div class='fullscreen-image fs-boat'>
<div class="landing-fish parallax" data-velocity="0.2"></div>

<?php if($_SESSION['admin']){

echo "<div class='slideUploadArea'>"; 

if($_POST['upload']){ 

$extensions = array("gif","jpeg","JPEG","jpg","JPG","png","bmp");

if($p){ $page = $p; $dir = "../imgs/slides/boats/"; $location = "imgs/slides/boats/"; }else{ $page = "home"; $dir = "./imgs/slides/"; $location = "imgs/slides/"; }

$limit = count($_FILES['slide']['name']);
for($i = 0; $i < $limit; $i++){
$temp = explode(".",$_FILES['slide']['name'][$i]);
$extension = end($temp);

$numSlides = mysql_num_rows(mysql_query("SELECT * FROM slides WHERE slidetype = '".$page."'"));

	if(!in_array($extension, $extensions)){
		
		// INCORRECT FILE TYPE
		echo "<div class='adminResults imageError'><div class='adminError'>";
		echo "<b>".$_FILES['slide']['name'][$i]."</b> is not the right file format. Please upload an image file.";
		echo "</div></div>";

	}else{

	if(file_exists($location . $_FILES['slide']['name'][$i])){

		// FILE ALREADY EXISTS
		echo "<div class='adminError'>";
		echo "<b>".$_FILES['slide']['name'][$i]."</b> already exists on the server. Please upload another image.";
		echo "</div>";

	}else{

	if(move_uploaded_file($_FILES['slide']['tmp_name'][$i], $dir.$_FILES['slide']['name'][$i])){
		
		// SUCCESSFULLY UPLOADED IMAGE AND CREATED THUMBNAIL
		echo "<div class='adminThumbReturn'>";
		echo "<img src='".$dir.$_FILES['slide']['name'][$i]."' />";
		echo "<p>".$_FILES['slide']['name'][$i]."</p>";
		echo "</div>";

		$url = $location.$_FILES['slide']['name'][$i];

		mysql_query("INSERT INTO slides (slidetype, slideimg) VALUES (\"$page\", \"$url\")");

	}else{

		// IMAGE IS TOO LARGE
		echo "<div class='adminResults imageError'><div class='adminError'>";
		echo "<b>".$_FILES['slide']['name'][$i]."</b> is too large of a file. Please resize the image to be less than 2MB.<br>Recommended image size is 1,920 pixels by 460 pixels.";
		echo "</div></div>";

	}}}}

}else{}

echo "<form method='post' action='".$_SERVER['PATH_INFO']."' enctype='multipart/form-data' class='slideForm'>
<input id='file_upload' name='slide[]' type='file' multiple='true'>
<input type='submit' name='upload' value='Upload' />
</form>"; 

echo "</div>";

 }else{} ?>

<noscript><div class="container"><div class="sixteen columns java">
please enable javascript before viewing this page
</div></div></noscript><div class="sliderContainer fullWidth clearfix">
<div id="full-width-slider" class="royalSlider heroSlider rsMinW">
<?php if($p){ $page = $p; }else{ $page = "home"; }
slideshow($page, $path); ?></div></div></div>

<script type='text/javascript' src=<?php echo "'".$path."js/master.js'"; ?>></script>

<?php if($_SESSION['admin']){ ?> <script type="text/javascript">
$(".adminResults").hide().slideDown(300);
</script> <?php }else{} ?>

<script id="addJS">jQuery(document).ready(function($) {
$('#full-width-slider').royalSlider({ arrowsNav: true, loop: true, keyboardNavEnabled: true, imageAlignCenter: true,
controlsInside: true, imageScaleMode: 'fill', arrowsNavAutoHide: true, allowCSS3: true,
autoScaleSlider: true, controlNavigation: 'bullets', thumbsFitInViewport: false, slidesOrientation : 'horizontal',
navigateByClick: false, startSlideId: 0, transitionType:'move', globalCaption: false, autoPlay: { enabled: true, pauseOnHover: false, delay: 6000 },
arrowsNavHideOnTouch: true, slidesSpacing: 5, deeplinking: { enabled: true, change: false }, imgWidth: 1920 }); }); </script>