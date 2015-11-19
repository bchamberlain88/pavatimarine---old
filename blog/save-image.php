<?php $file = $_FILES['image'];
$extensions = array("jpg","jpeg","JPG","JPEG","gif","png");
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);

if(in_array($extension, $extensions)){

    if(isset($_SESSION['uploaded'])){ unset($_SESSION['uploaded']); }else{
    $_SESSION['uploaded'] = $file['name']; }

    move_uploaded_file($file['tmp_name'], "./assets/images/featured/".$file['name']); ?>
    <img class="uploaded-image" id="<?php echo $file['name']; ?>" style="width: 50%;" src="http://www.pavatimarine.com/blog/assets/images/featured/<?php echo $file['name']; ?>"/>

<?php }else{ ?>

    <img class="uploaded-image" src="Please upload an image file." style="display: none;" />

<?php } ?>
