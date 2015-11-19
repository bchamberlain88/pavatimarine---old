<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("./connect.php"); include("./functions.php"); $pageTitle = "Pavati Marine - Press"; ?>

<?php $states = array("alabama","alaska","arizona","arkansas","california","colorado","connecticut","delaware",
"florida","georgia","hawaii","idaho","illinois","indiana","iowa","kansas","kentucky","louisiana","maine",
"maryland","massachusetts","michigan","minnesota","mississippi","missouri","montana","nebraska","nevada",
"new hampshire","new jersey","new mexico","new york","north carolina","north dakota","ohio","oklahoma",
"oregon","pennsylvania","rhode island","south carolina","south dakota","tennessee","texas","utah","vermont",
"virginia","washington","west virginia","wisconsin","wyoming"); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head> <!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="Ask for a quote, request a test row, or just say hello.">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="./css/master.css" class="rs-file">
<link rel="stylesheet" href="./css/droppable.css">
<link rel="shortcut icon" href="./imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="./imgs/favicon.ico" type="image/x-icon">
</head><body>
<!-- include the main page navigation -->
<?php include("./headers.php"); ?>
<!-- include the mobile navigation -->
<div class="mobile-menu"><?php include("./m.navigation.php"); ?></div>

<div class="main-page">

        <div class="container blog-container">

            <ul class="four columns about-sidebar">
                <a><li class="about-nav press-tab about-current-slide" id="press-tab-1">Press Releases</li></a>
                <a><li class="about-nav press-tab" id="press-tab-2">Media Downloads</li></a>
                <a><li class="about-nav press-tab" id="press-tab-3">Techincal Specs</li></a>
                <a><li class="about-nav press-tab" id="press-tab-4">Downloadable PDFs</li></a>
            </ul>

            <!-- PRESS RELEASES CONTENT -->
            <div class="twelve columns press-content" id="press-content-1" style="display:none;">

                <?php $getPress = mysql_query("SELECT * FROM blogposts WHERE blogcatid = 4"); // CHANGE TO 27 
                      if(mysql_num_rows($getPress) == 0){ echo "<h1>We haven't published any press releases yet.</h1>"; }else{
                      while($blog = mysql_fetch_assoc($getPress)){

                        echo "<div class='blog-post' id='".$blog['blogpostnumber']."'>";
                        if($blog['blogpostimg'] != "" || $blog['blogpostimg'] != NULL){ echo "<img src='../imgs/blog/headers/".$blog['blogpostimg']."' class='blog-main-image' />"; }else{}
                        echo "<a class='blog-post-title' href='./blog/".$blog['blogpostnumber']."'>".$blog['blogpostname'].""?> <?php 
                        if($_SESSION['admin']){ echo "<a class='admin-edit edit-blog-post' id='editPost".$blog['blogpostid']."' alt='Edit this blog post' title='Edit this blog post'></a>"; }else{} echo"</a>"; 
                        if($blog['blogpostedited'] == 0){ echo "<span><b>Posted: </b>".$blog['blogpostdate']."</span>"; }else{ echo "<span><b>Last Edited: </b>".$blog['blogpostdate']."</span>"; }
                        echo "<span><b>Author: </b>".$blog['blogpostauthor']."</span>";
                        echo "<span><b>Category: </b>".$rowblogcat['blogcatname']."</span>";

                        echo "<span><b>Comments: </b>"; if($blog['blogpostlocked'] == 1){ echo"Locked"; }else{ 
                        echo $numcomments; if($_SESSION['admin']){ $pending = mysql_num_rows(mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$blog['blogpostid']."' AND approved = 0")); 
                        echo " ( <label class='pendingComments' id='comments".$blog['blogpostid']."'>Pending: ".$pending."</label> )"; }else{}} echo "</span>";

                        echo "<p>".string_limit(htmlspecialchars_decode($blog['blogpostcontent']), 60)." ...</p>";
                        echo "<a class='blog-post-read-more' href='./blog/".$blog['blogpostnumber']."'>Continue reading</a>";
                        echo "</div>";

                      }}?>

            </div> <!-- END PRESS RELEASES CONTENT -->



            <!-- MEDIA DOWNLOADS CONTENT -->
            <div class="twelve columns press-content" id="press-content-2" style="display:none;">
                <!-- DOWNLOAD PAVATI LOGOS -->
                <a class="animate2 border3 five columns zip">
                    <div class="zip-icon"></div>
                    <div class="zip-sep"></div>
                    <span class="zip-info"><b>Download</b>
                    <i>Pavati Marine Logos</i></span>
                </a>
                <!-- DOWNLOAD WARRIOR PICTURES -->
                <a class="animate2 border3 five columns zip">
                    <div class="zip-icon"></div>
                    <div class="zip-sep"></div>
                    <span class="zip-info"><b>Download</b>
                    <i>Warrior Photos</i></span>
                </a>
                <!-- DOWNLOAD LEGACY PICTURES -->
                <a class="animate2 border3 five columns zip">
                    <div class="zip-icon"></div>
                    <div class="zip-sep"></div>
                    <span class="zip-info"><b>Download</b>
                    <i>Legacy Photos</i></span>
                </a>
                <!-- DOWNLOAD GUARDIAN PICTURES -->
                <a class="animate2 border3 five columns zip">
                    <div class="zip-icon"></div>
                    <div class="zip-sep"></div>
                    <span class="zip-info"><b>Download</b>
                    <i>Guardian Photos</i></span>
                </a>
                <!-- DOWNLOAD DESTROYER PICTURES -->
                <a class="animate2 border3 five columns zip">
                    <div class="zip-icon"></div>
                    <div class="zip-sep"></div>
                    <span class="zip-info"><b>Download</b>
                    <i>Destroyer Photos</i></span>
                </a>
                <!-- DOWNLOAD WILDCAT PICTURES -->
                <a class="animate2 border3 five columns zip">
                    <div class="zip-icon"></div>
                    <div class="zip-sep"></div>
                    <span class="zip-info"><b>Download</b>
                    <i>Wildcat Photos</i></span>
                </a>
                <!-- DOWNLOAD MANUFACTURING PICTURES -->
                <a class="animate2 border3 five columns zip">
                    <div class="zip-icon"></div>
                    <div class="zip-sep"></div>
                    <span class="zip-info"><b>Download</b>
                    <i>Manufacturing Photos</i></span>
                </a>
            </div> <!-- END MEDIA DOWNLOADS CONTENT -->

        </div>

<?php include("./footer2.php"); ?>
</div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='./js/master.js'></script>
<script type='text/javascript' src='./js/functions-test.js'></script>
<script type='text/javascript' src='./js/droppable.js'></script>
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
</body></html>