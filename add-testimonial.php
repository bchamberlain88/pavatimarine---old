<?php session_start(); include("./connect.php");
$random = substr( "abcdefghijklmnopqrstuvwxyz", mt_rand(0, 32) , 1) .substr( md5( time() ), 1);
$_SESSION['testimonial'] = $random;  ?>

<h1 class="your-story">Share your testimonial</h1>

<form class="post-testimonial" method="post">

    <div class="left-post">
        <input class="testimonial-input input-half" id="post-name" name="name" placeholder="Full Name" type="text" />
        <input class="testimonial-input input-half" id="post-location" name="location" placeholder="Location" type="text" />
        <input class="testimonial-input input-full" id="post-email" name="email" placeholder="Email Address" type="text" />
        
        <div class="test-check-area">
            <input id="check-service" name="guide" type="checkbox" value="0" />
            <label class="check-label" for="check-service">Write this testimonial as a guide service</label>
        </div>
        
        <input class="testimonial-input input-half" id="post-service" name="service" placeholder="Guide Service Name" style="display:none;" type="text" />
        <input class="testimonial-input input-half" id="post-website" name="website" placeholder="Website URL" style="display:none;" type="text" />
        
        <textarea class="testimonial-textarea input-full" id="post-text" name="testimonial" placeholder="Write your testimonial"></textarea>
        <input class="add-testimonial-btn" name="submit" type="submit" value="Submit Testimonial" />
    </div>
    
</form>
    
    <div class="right-post">
        
        <form action="../upload-testimonial-images.php" class="image-form" enctype="multipart/form-data" method="post" target="uploaded">   
            <input class="file-uploader" multiple name="images[]" type="file" />
            <div class="animate2 test-file-uploader">Click here to upload photos (Optional)</div>
        </form>
        
        <iframe class="uploaded-test-images" id="uploaded" name="uploaded" scrolling="no" style="background-color:transparent;"></iframe>
    </div>

<script type="text/javascript">
    
    $(".close-test-add").click(function(){   
    $(".add-testimonial-btn").delay(250).fadeIn(250);
    $(".testimonial-container").delay(250).slideUp(300, function(){
    $(this).remove(); }); });
    
    $(".test-file-uploader").click(function(){
    $(".file-uploader").click(); });
    
    $(".file-uploader").change(function(){
        
        $(".uploaded-test-images").empty().addClass("uploading");
        
        
    $(".image-form").submit(); });
    
    $("#check-service").change(function(){
       
        $("#post-website, #post-service").toggle();
        
    });
    
    $(".post-testimonial").submit(function(e){
        
        $(".return-error").remove();

        var name = $("#post-name");
        var location = $("#post-location");
        var email = $("#post-email");
        var text = $("#post-text");
        
        if(name.val() == "" || location.val() == "" || email.val() == "" || text.val() == ""){
            
            e.preventDefault();
            
            $(".left-post").append("<span class='return-error'>* Please fill out all of the required fields</span>");
            
        }else{
         
            $(".return-error").remove();
            
        }
            
        if(name.val() == ""){
        $(name).css("border","1px solid red");   
        }else{ $(name).css("border","1px solid #ccc"); }
        
        if(location.val() == ""){
        $(location).css("border","1px solid red");   
        }else{ $(location).css("border","1px solid #ccc"); }
        
        if(email.val() == ""){
        $(email).css("border","1px solid red");   
        }else{ $(email).css("border","1px solid #ccc"); }
        
        if(text.val() == ""){
        $(text).css("border","1px solid red");   
        }else{ $(text).css("border","1px solid #ccc"); }
        
    });
    
</script>