<?php /* declare global php functions */

// PERFORM MYSQL QUERY WITH LIMITS
function query($table, $limit){
    $row = array();
    if ($limit != "ALL")
        $query = mysql_query("SELECT * FROM $table LIMIT $limit");
    else
        $query = mysql_query("SELECT * FROM $table");
    while($return = mysql_fetch_assoc($query)){
        $row[] = $return;
    } return $row; }


/* list images from directory */
    function listImages($dir, $class, $id){
        $i = 0; $handle = opendir($dir);
        while($image = readdir($handle)){
        if ($image != "." && $image != ".." && $image != "Thumbs.db") { $i++; $ext = '.'.end(explode('.', $image));
        $alt = 'Pavati Marine - '.ucwords(str_replace($ext,'', str_replace('-',' ', $image)));
        echo "<img alt='".$alt."' class='".$class."' id='".$id.$i."' itemprop='image' src='".$dir.$image."'/>";
        }} closedir($handle); }


function limitdesc($string){
    $limit = 160; if(strlen($string) > $limit){
    $summary = substr($string, 0, strrpos(substr($string, 0, $limit), ' '));
    return $summary; }}

function emailApproval($verify){

    $getTest = mysql_query("SELECT * FROM testimonials WHERE verify = '$verify'");
    $testimonial = mysql_fetch_assoc($getTest);
    $id = $testimonial['id'];
    $email = $testimonial['email'];
    $person = $testimonial['person'];
    $subject = "Your Pavati Marine Testimonial Has Been Approved!";
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: Pavati Marine <no-reply@pavatimarine.com>" . "\r\n";

    $message = "<html><head><title>Your Pavati Marine Testimonial Has Been Approved!</title></head>
    <body><h2>Your Pavati Marine Testimonial Has Been Approved!</h2>
    <p>Dear $person,<br>
    Thank you for submitting your testimonial to us, we appreciate your feedback!<br>We just had a human check out your testimonial, to ensure that it didn’t get mixed up with a spammer trying to take advantage of the system. Everything looks good, so we’ve approved what you've written! <a href='http://www.pavatimarine.com/about/index.php?p=testimonials#testimonial-$id'>Check it out</a>, and show all your friends!<br><br>Happy Fishing,<br>Pavati Marine</p></body></html>";

    mail($email, $subject, $message, $headers);

}

function emailTestimonial($verify, $email, $person, $service, $website, $location, $ipaddress, $date, $text){

    $subject = "Pavati Marine - New Testimonial Awaiting Approval!";

    $to = "sebastian@highwayproducts.com, ";
    $to .= "barrett.chamberlain@highwayproducts.com, ";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: ".$person." <".$email.">" . "\r\n";

    $message = "<html><head><title>New Testimonial from $person</title></head>
    <body><h2>New Testimonial Awaiting Approval!</h2>
    <i>$verify</i><br><p>Written By: $person on $date<br>
    $email<br><br>Service: $service<br>Website: <a href='".$website."'>$website</a><br><br>Location: $location<br>IP Address: $ipaddress</p><p>$text</p>";

    $checkImages = mysql_query("SELECT * FROM testimonial_img WHERE verify = '$verify'");
    if(mysql_num_rows($checkImages) > 0){

        while($image = mysql_fetch_assoc($checkImages)){

            $picture = $image['image'];

            $message .= "<img src='http://www.pavatimarine.com/imgs/testimonials/$picture' style='margin:0 10px 10px 0;' width='300' />";

        }

    }else{}

    $message .= "<br><a href='http://www.pavatimarine.com/about/index.php?p=testimonials&approve=$verify'>Click here to approve this testimonial</a>, otherwise just ignore this email.</body></html>";

    mail($to, $subject, $message, $headers);

}


function checkpage($tbl, $row, $p){
$getpage = mysql_query("SELECT * FROM ".$tbl." WHERE ".$row." = '".$p."'");
$numpage = mysql_num_rows($getpage); return $numpage; }

function string_limit($string, $limit){$words = explode(" ", $string);
return implode(" ", array_slice($words, 0, $limit)); }

function checknum($num){ return ($num%2) ? 0 : 1; }

function randomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

/** function imagesize($image){
    $dimensions = getimagesize($image)[3];
    $dimensions = str_replace("\"", "", $dimensions);
    $dimensions = str_replace("width=", "", $dimensions);
    $dimensions = str_replace(" height=", ",", $dimensions);
    $size = explode(",",$dimensions);
    $dimensions = array("width" => $size[0], "height" => $size[1]);
    return $dimensions;
} **/

/** function imageresize($image, $output, $thumbWidth, $thumbHeight){

$temp = explode(".",$image);
$extension = end($temp);
$width  = imagesize($image)['width'];
$height  = imagesize($image)['height'];
$newImage = imagecreatetruecolor($thumbWidth, $thumbHeight);

switch ($extension){

    case "jpeg":
    case "jpg":
        $imageCreateFrom = "imagecreatefromjpeg";
        $store = "imagejpeg";
        break;

    case "png":
        $imageCreateFrom = "imagecreatefrompng";
        $store = "imagepng";
        break;

    case "gif":
        $imageCreateFrom = "imagecreatefromgif";
        $store = "imagegif";
        break;

    default:
        return false;

}

$container = $imageCreateFrom($image);
imagecopyresampled($newImage, $container, 0,0,0,0, $thumbWidth, $thumbHeight, $width, $height);
return $store($newImage, $output);

} **/

function commenterror($string){echo "<div class='note error'>".$string."</div>";}
function commentsuccess($string){echo "<div class='note success'>".$string."</div>";}

function newsreel($limit){ echo "<div class='eight columns home-content'>
<h3>news & announcements</h3> <h4>the latest updates from pavati marine</h4>
<ul class='news-reel'>"; $getnews = mysql_query("SELECT * FROM news ORDER BY newsid DESC LIMIT 0,".$limit."");
while($rownews = mysql_fetch_assoc($getnews)){ echo"<li class='news' id='news-".$rownews['newsid']."'>
<div class='news-date'><h3>".$rownews['newsmonth']."</h3><h2>".$rownews['newsday']."</h2>
</div><h4>".$rownews['newstitle']."</h4><p class='news-story news-story-".$rownews['newsid']."'>".$rownews['newsbody']."<br><a href='./'>Read more &rarr;</a></p></li>"; }
echo "</ul></div>"; }

function blogposts($limit){ echo "<div class='eight columns home-content'>
<h3>recent discussions</h3><h4>the latest updates from pavati marine</h4>
<ul class='news-reel'>";$getposts = mysql_query("SELECT * FROM blogposts ORDER BY blogpostid DESC LIMIT 0,".$limit."");
while($rowposts = mysql_fetch_assoc($getposts)){ echo"<li class='news' id='news-".$rowposts['blogpostid']."'>
<div class='news-date'><h3>".$rowposts['month']."</h3><h2>".$rowposts['day']."</h2>
</div><h4>".$rowposts['blogpostname']."</h4><p class='news-story news-story-".$rowposts['blogpostid']."'>".htmlspecialchars_decode(string_limit($rowposts['blogpostcontent'], 50))." ...<br>
<a href='./blog/".$rowposts['blogpostnumber']."'>Continue reading</a></p></li>"; }echo "</ul></div>"; }

function slideshow($page, $url){
$gslide = mysql_query("SELECT * FROM slides WHERE slidetype = '".$page."' ORDER BY orderid ASC");
while($rslide = mysql_fetch_assoc($gslide)){

echo "<div class='rsContent parallax' data-velocity='-.4' style=\"background:url('".$url.$rslide['slideimg']."') no-repeat bottom center;
-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-size: 100%;\"></div>"; }

}

function getUserIP(){ $client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR']; $remote  = $_SERVER['REMOTE_ADDR'];
if(filter_var($client, FILTER_VALIDATE_IP)){ $ip = $client; } elseif(filter_var($forward, FILTER_VALIDATE_IP))
{ $ip = $forward; }else{ $ip = $remote; } return $ip; }


function homecontent($url){
$ghomecontent = mysql_query("SELECT * FROM homecontent LIMIT 0,3"); while($rhomecontent = mysql_fetch_assoc($ghomecontent)){ echo"
<a href='".$url.$rhomecontent['homecontenturl']."'><div class='one-third column home-content' id='home-content-".$rhomecontent['homecontentid']."'>
<img src='".$url.$rhomecontent['homecontentimg']."' /> <span class='home-span home-span-".$rhomecontent['homecontentid']."'>".$rhomecontent['homecontenttitle']."</span></div></a>"; }}

function escape($string){ $string = str_replace("\\", "", mysql_real_escape_string($string)); return $string; }

function gallery($page){ $path = "http://www.pavatimarine.com/"; $image = 0; $getimages = mysql_query("SELECT * FROM galleryimages WHERE galleryimgcats = '".$page."'");
while($rowimages = mysql_fetch_assoc($getimages)){ $image = $image + 1;
echo "<img class='cat-".$rowimages['galleryimgcats']." image-".$image." gallery-image four columns' id='".$rowimages['galleryimg']."' src='".$path."imgs/gallery/thumbs/".$rowimages['galleryimg']."' />";
}}


/* function galleryTest($page){ $path = "http://www.pavatimarine.com/"; $image = 0; $getimages = mysql_query("SELECT * FROM galleryimages WHERE galleryimgcats = '".$page."'");
while($rowimages = mysql_fetch_assoc($getimages)){ $image = $image + 1;
echo "<img class='gallery-thumb four columns' data-cat='".$rowimages['galleryimgcats']."' data-img='".$image."' id='".$rowimages['galleryimg']."' src='".$path."imgs/gallery/thumbs/".$rowimages['galleryimg']."' />";
}} */

function galleryTest($page){

    if($page === 0 || !$page){

        $c = 0;

        $path2 = "../imgs/gallery/fishing/";
        $images2 = array_diff(scandir($path2), array('..', '.'));

        if(empty($images2)){}else{
        foreach($images2 as $image2){

            $c++;
            echo "<div class='thumb-container four columns' data-cat='fishing'><img class='gallery-thumb' data-img='".$c."' src='".$path2.$image2."' /></div>";

        }}

        $a = mysql_query("SELECT * FROM boatmodels");
        while($b = mysql_fetch_assoc($a)){

            $path = "../imgs/gallery/".$b['boatname']."/";
            $images = array_diff(scandir($path), array('..', '.'));

            if(empty($images)){}else{
            foreach($images as $image){

                $c++;
                echo "<div class='thumb-container four columns' data-cat='".$b['boatname']."'><img class='gallery-thumb' data-img='".$c."' src='".$path.$image."' /></div>";

            }}

        }

        ?>

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="standard-row-seat" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/90909868?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Standard Row Seat</h3>
                <img alt="Pavati Marine Video: Standard Row Seat" src="http://i.vimeocdn.com/video/470248775_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="removable-floors" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/90899124?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Removable Floors</h3>
                <img alt="Pavati Marine Video: Removable Floors" src="http://i.vimeocdn.com/video/470234226_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="quick-lock-floor-system" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/90895615?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Quick-Lock Floors System</h3>
                <img alt="Pavati Marine Video: Quick-Lock Floor System" src="http://i.vimeocdn.com/video/470229532_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="rowing-the-boat" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/88454764?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Rowing the Boat</h3>
                <img alt="Pavati Marine Video: Rowing The Boat" src="http://i.vimeocdn.com/video/466927932_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="scissor-and-scolling" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/sWa7z04Yj1M?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Scissor and Scolling</h3>
                <img alt="Pavati Marine Video: Scissor and Scolling" src="//i.ytimg.com/vi/sWa7z04Yj1M/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="prepping-your-boat" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/87886056?title=0&amp;byline=0&amp;portrait=0&amp;color=3AA1BE&amp;autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Prepping your boat</h3>
                <img alt="Pavati Marine Video: Prepping your boat" src="http://i.vimeocdn.com/video/466155238_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="setting-up-the-seats" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/ISc_YneaJgM?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Setting Up the Seats</h3>
                <img alt="Pavati Marine Video: Setting Up the Seats" src="//i.ytimg.com/vi/ISc_YneaJgM/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="launching-your-boat" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/87882750?title=0&amp;byline=0&amp;portrait=0&amp;color=3AA1BE&amp;autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Launching your boat</h3>
                <img alt="Pavati Marine Video: Launching your boat" src="http://i.vimeocdn.com/video/466155360_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="deluxe-trailers" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/87879621?title=0&amp;byline=0&amp;portrait=0&amp;color=3AA1BE&amp;autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Deluxe Trailers</h3>
                <img alt="Pavati Marine Video: Deluxe Trailers" src="http://i.vimeocdn.com/video/466117006_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="12-position-oar-lock" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/90894279?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>12 Position Oar Lock</h3>
                <img alt="Pavati Marine Video: 12-Position Oar Lock" src="http://i.vimeocdn.com/video/470227268_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="the-truth" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/98571950?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>The Truth</h3>
                <img alt="Pavati Marine Video: The Truth Scale" src="https://i.vimeocdn.com/video/479332714_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="warrior-wavecutter-bow" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/98571794?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Warrior Wavecutter Bow</h3>
                <img alt="Pavati Marine Video: Warrior Wavecutter Bow" src="https://i.vimeocdn.com/video/479332827_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="hex-floor-ribs" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/98571470?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Hex Floor Ribs</h3>
                <img alt="Pavati Marine Video: Hex Floor Ribs" src="https://i.vimeocdn.com/video/479332031_295x166.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <!-- <div class="thumb-container four columns video-thumb" data-cat='videos' id="stainless-steel-oarlocks" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/95534118?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Stainless Steel Oarlocks</h3>
                <img alt="Pavati Marine Video: Warrior Wavecutter Bow" src="https://i.vimeocdn.com/video/475478679_295x166.webp" />
            </div>
        </div>  --><!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="12-posistion-oar-lock-block" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/95531335?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>12 Posistion Oar Lock Block</h3>
                <img alt="Pavati Marine Video: 12 Posistion Oar Lock Block" src="https://i.vimeocdn.com/video/475475795_295x166.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="side-storage" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/95531331?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Side Storage</h3>
                <img alt="Pavati Marine Video: Side Storage" src="https://i.vimeocdn.com/video/475474622_295x166.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="grab-handles" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/95527141?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Grab Handles</h3>
                <img alt="Pavati Marine Video: Grab Handles" src="https://i.vimeocdn.com/video/475471069_295x166.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="anchor-nest" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/95527137?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Anchor Nest</h3>
                <img alt="Pavati Marine Video: Anchor Nest" src="https://i.vimeocdn.com/video/475469230_295x166.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="magnets" data-video="<iframe class='cinema-video' src='//player.vimeo.com/video/90897647?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Magnets</h3>
                <img alt="Pavati Marine Video: Magnets" src="https://i.vimeocdn.com/video/470231976_295x166.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="salmon-filet" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/sgRiHX9sd_c?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Salmon Filet</h3>
                <img alt="Pavati Marine Video: Salmon Filet" src="//i.ytimg.com/vi_webp/sgRiHX9sd_c/mqdefault.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="diversity" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/nKmFK2T7Z2Q?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Diversity</h3>
                <img alt="Pavati Marine Video: Diversity" src="//i.ytimg.com/vi_webp/nKmFK2T7Z2Q/mqdefault.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="a-day-in-the-life" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/2a9tQRN3Bn8?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>A Day In The Life</h3>
                <img alt="Pavati Marine Video: A Day In The Life" src="//i.ytimg.com/vi_webp/2a9tQRN3Bn8/mqdefault.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="destroyer" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/5fuWtip65mw?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Destroyer</h3>
                <img alt="Pavati Marine Video: Destroyer" src="//i.ytimg.com/vi_webp/5fuWtip65mw/mqdefault.webp" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="down-the-rapids" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/NlJQfr-5W1s?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Down the Rapids</h3>
                <img alt="Pavati Marine Video: Down the Rapids" src="//i.ytimg.com/vi/NlJQfr-5W1s/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="the-revolution-has-begun" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/cj8W86XZqtE?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>The Revolution Has Begun</h3>
                <img alt="Pavati Marine Video: The Revolution Has Begun" src="//i.ytimg.com/vi/cj8W86XZqtE/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="curing-eggs-for-fishing" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/xmJgJNDvv0A?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Curing Eggs for Fishing</h3>
                <img alt="Pavati Marine Video: Curing Eggs for Fishing" src="//i.ytimg.com/vi/xmJgJNDvv0A/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="deluxe-trailer-review" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/duwZ6Hsw26I?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Deluxe Trailer Review</h3>
                <img alt="Pavati Marine Video: Deluxe Trailer Review" src="//i.ytimg.com/vi/duwZ6Hsw26I/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="rounded-transom" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/oi_lROoE480?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Rounded Transom</h3>
                <img alt="Pavati Marine Video: Rounded Transom" src="//i.ytimg.com/vi/oi_lROoE480/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="pizza-oven" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/s9zBf6-wg_g?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Pizza Oven</h3>
                <img alt="Pavati Marine Video: Pizza Oven" src="//i.ytimg.com/vi/s9zBf6-wg_g/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="boat-bottoms" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/w3-66aRPE3E?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Boat Bottoms</h3>
                <img alt="Pavati Marine Video: Boat Bottoms" src="//i.ytimg.com/vi/w3-66aRPE3E/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="motor-ready-transom" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/zAZSMFFACHo?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Motor Ready Transom</h3>
                <img alt="Pavati Marine Video: Motor Ready Transom" src="//i.ytimg.com/vi/zAZSMFFACHo/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="flycasting-stand" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/5wc2sJ_hX5w?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Flycasting Stand</h3>
                <img alt="Pavati Marine Video: Flycasting Stand" src="//i.ytimg.com/vi/5wc2sJ_hX5w/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="cupholders" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/Wnr-6gkbZ4M?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Cupholders</h3>
                <img alt="Pavati Marine Video: Cupholders" src="//i.ytimg.com/vi/Wnr-6gkbZ4M/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="fishing-boats-in-action" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/ErWKkf8I2jY?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Fishing Boats In Action</h3>
                <img alt="Pavati Marine Video: Fishing Boats In Action" src="//i.ytimg.com/vi/ErWKkf8I2jY/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="winter-steelhead" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/BOF1T-HX5CM?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Winter Steelhead</h3>
                <img alt="Pavati Marine Video: Winter Steelhead" src="//i.ytimg.com/vi/BOF1T-HX5CM/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="mans-best-friend" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/MZsRquqYiiI?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Man's Best Friend</h3>
                <img alt="Pavati Marine Video: Man's Best Friend" src="//i.ytimg.com/vi/MZsRquqYiiI/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="drifting-rogue-river" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/tJpMeNsTJFA?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3 style="font-size: 12px;">Drifting down the Rogue</h3>
                <img alt="Pavati Marine Video: Drifting down the Rogue" src="//i.ytimg.com/vi/tJpMeNsTJFA/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="wave-cutter-bow" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/BSn5ZUagV5c?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Wave Cutter Bow</h3>
                <img alt="Pavati Marine Video: Wave Cutter Bow" src="//i.ytimg.com/vi/BSn5ZUagV5c/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="stepping-out" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/Tnx_mSySU04?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Stepping Out</h3>
                <img alt="Pavati Marine Video: Stepping Out" src="//i.ytimg.com/vi/Tnx_mSySU04/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="gunnel-grabber" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/hOfUOdEY0bo?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3>Gunnel Grabber</h3>
                <img alt="Pavati Marine Video: Gunnel Grabber" src="//i.ytimg.com/vi/hOfUOdEY0bo/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="leak-doors" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/hYcRKUa1oFg?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3 style="font-size: 10px;">Do Pavati Drift Boat doors leak?</h3>
                <img alt="Pavati Marine Video: Do Pavati Drift Boat Doors Leak?" src="//i.ytimg.com/vi/hYcRKUa1oFg/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->

        <div class="thumb-container four columns video-thumb" data-cat='videos' id="pavati-chine" data-video="<iframe class='cinema-video' src='https://www.youtube.com/embed/di9djNtc39g?autoplay=1' width='0' height='0' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>">
            <div class="video-box">
                <h3 style="font-size: 12px;">Benefits of the Pavati Chine</h3>
                <img alt="Pavati Marine Video: Benefits of the Pavati Chine" src="//i.ytimg.com/vi/di9djNtc39g/mqdefault.jpg" />
            </div>
        </div> <!-- end .thumb-container four columns -->
    <?php }else{

        $a = mysql_query("SELECT * FROM boatmodels WHERE boatid = '".$page."'");
        $b = mysql_fetch_assoc($a);
        $c = 0;

        $path = "../imgs/gallery/".$b['boatname']."/";
        $images = array_diff(scandir($path), array('..', '.'));

        if(empty($images)){}else{
        foreach($images as $image){

            $c++;
            echo "<div class='thumb-container four columns'><img class='gallery-thumb' data-img='".$c."' src='".$path.$image."' /></div>";

        }}

    }

}

?>
