<?php $path = "./assets/images/featured/";
$url ="http://www.pavatimarine.com/blog/assets/images/featured/";
$handle = opendir($path); while ($file = readdir($handle)) {
if($file != '.' && $file != '..') { 

// perform function on each file

$extensions = array("jpg","jpeg","JPG","JPEG","gif","png");

list($width, $height, $type, $attr) = getimagesize($path.$file);

$extension = pathinfo($file, PATHINFO_EXTENSION); $file = str_replace(".".$extension, "", $file);

if(in_array($extension, $extensions)){ $link = $url.$file.".".$extension; ?>

<li class="thumb-pick" data-img="<?php echo $link; ?>">
	<div class="thumb-wrap"><img src="<?php echo $link; ?>" /></div>
	<div class="thumb-info"><label><?php echo $file.".".$extension; ?></label></div>
</li>

<?php }else{} if(is_dir($file)) { ?> <li><img src="<?php echo $link; ?>" /></li> <?php }}} closedir($handle); ?>