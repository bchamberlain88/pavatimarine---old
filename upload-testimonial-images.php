<script type='text/javascript' src='./js/master.js'></script>

<?php session_start(); include("./connect.php");

$allowed = array("jpg","jpeg","JPG","JPEG","png","gif", "bmp");

$getTestimonials = mysql_query("SELECT * FROM testimonials");
$count = mysql_num_rows($getTestimonials);

$verify = $_SESSION['testimonial'];

echo "<div class='thumb-container' style='background:#f6f5f1; display:none; height:auto; min-height:100%; position:absolute; width:100%;'>";

foreach ($_FILES as $file) {
    
    $names = $file['name'];
    
    foreach($names as $key => $name){
        
        $tmp_name = $file['tmp_name'];
        $size = $file['size'];
        $random = substr( "abcdefghijklmnopqrstuvwxyz", mt_rand(0, 32) , 1) .substr( md5( time() ), 1);
        $ext = end(explode(".", $name));
        
        $filename = $random.".".$ext;
        
        if(in_array($ext, $allowed)){
            
            move_uploaded_file($tmp_name[$key], "./imgs/testimonials/".$filename);
            echo "<div class='testimonial-image' id='image-$filename' style='float:left; height:104px; margin:0 5px 5px 0; position:relative; width:auto;'>
            <button class='delete-test-image' id='delete-$filename' style='position:absolute; top:0; right:0;'>x</button>
            <img class='uploaded-thumb' height='104' src='./imgs/testimonials/".$filename."' style='float:left; height:104px; width:auto;' />
            </div>";
            
            mysql_query("INSERT INTO testimonial_img (verify, image) VALUES (\"$verify\", \"$filename\")")or die(mysql_error());
            
        }else{
            
         echo "<span style='color:#c55e41; float:left; font-size:13px; font-style:italic; margin:0;'>Error: Only images may be uploaded</span>";  
            
        }
        
        
    }
    
}

echo "</div>";

?>

<script type="text/javascript">
    
    $(".uploaded-thumb").ready(function(){
        $(".thumb-container").fadeIn(300);
    });
    
    $(".test-file-uploader").removeClass("uploading");

    $(".delete-test-image").click(function(){
        var image = $(this).attr("id").replace("delete-", "");
        var imageDiv = $(this).parent();
        imageDiv.load("../delete-testimonial-image.php?del="+image);
    });
    
</script>