<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
<?php if(!$_GET['p']){ 

	$pageTitle = "Pavati Marine Blog - Drift Boats & Power Boats"; 
	$pageDesc = "Pavat Marine Discussions. Keep up with updates, news, and events.";
	$pageImg = "http://www.pavatimarine.com/imgs/pavati-dark.png";

}else{ 

	$p = $_GET['p']; $pageTitle = "Pavati Marine - ".ucwords(str_replace("-"," ",$p)).""; 
	$getPostRow = mysql_query("SELECT * FROM blogposts WHERE blogpostnumber = '".$p."'");
	$getPost = mysql_fetch_assoc($getPostRow);
	$pageDesc = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i",'<$1$2>', strip_tags($getPost['blogpostcontent']));
	if( $getPost['blogpostimg'] != "" ){
		$pageImg = "http://www.pavatimarine/com/imgs/blog/headers/".$getPost['blogpostimg'];
	}else{
		$pageImg = "http://www.pavatimarine.com/imgs/pavati-dark.png";
	}

} $pageUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"> <!--<![endif]-->
    
<head> <!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta property="og:url" content="<?php echo $pageUrl; ?>"/>
<meta property="og:title" content="<?php echo $pageTitle; ?>"/>
<meta property="og:description" content="<?php echo $pageDesc; ?>"/>
<meta property="og:image" content="http://www.pavatimarine.com/imgs/pavati-dark.png"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="<?php echo $pageDesc; ?>">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
<!-- include necessary stylesheets -->
<link rel="image_src" href="http://www.pavatimarine.com//imgs/pavati-dark.png" />
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="../files/fancybox/jquery.fancybox.css">
<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="../imgs/favicon.ico" type="image/x-icon">
</head><body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=614140675272373";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- include the main page navigation -->
<?php include("../headers.php"); ?>
<!-- include the mobile navigation -->
<div class="mobile-menu"><?php include("../m.navigation.php"); ?></div>

<div class="main-page"><div class="container blog-container">

<div class="eleven columns blog-content">

<?php if($_SESSION['admin']){ echo "<a class='admin-btn add-blog-post'>Add New Blog Post</a>"; }else{} ?>

<?php /* get blog posts */
if(!$p){ /* visitor is viewing all blog posts */
$allposts = mysql_query("SELECT * FROM blogposts ORDER BY blogpostid DESC");
while($rowposts = mysql_fetch_assoc($allposts)){
$getcomments = mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$rowposts['blogpostid']."' AND approved = 1");
$numcomments = mysql_num_rows($getcomments);
$getblogcat = mysql_query("SELECT * FROM blogcategories WHERE blogcatid = '".$rowposts['blogcatid']."'");
$rowblogcat = mysql_fetch_assoc($getblogcat);

echo "<div class='blog-post' id='".$rowposts['blogpostnumber']."' itemscope itemtype='http://schema.org/Blog'>";
if($rowposts['blogpostimg'] != "" || $rowposts['blogpostimg'] != NULL){ echo "<img alt='Pavati Marine Blog Post - ".ucwords($rowposts['blogpostname'])."' src='../imgs/blog/headers/".$rowposts['blogpostimg']."' class='blog-main-image' itemprop='image' />"; }else{}
echo "<a class='blog-post-title' href='./".$rowposts['blogpostnumber']."' itemprop='headline'>".$rowposts['blogpostname'].""?> <?php 
if($_SESSION['admin']){ echo "<a class='admin-edit edit-blog-post' id='editPost".$rowposts['blogpostid']."' alt='Edit this blog post' title='Edit this blog post'></a>"; }else{} echo"</a>"; 
if($rowposts['blogpostedited'] == 0){ echo "<span><b>Posted: </b><div itemprop='datePublished'>".$rowposts['blogpostdate']."</div></span>"; }else{ echo "<span><b>Last Edited: </b><div itemprop='dateModified'>".$rowposts['blogpostdate']."</div></span>"; }
echo "<span><b>Author: </b><div itemprop='author'>".$rowposts['blogpostauthor']."</div></span>";
echo "<span><b>Category: </b><div itemprop='keywords'>".$rowblogcat['blogcatname']."</div></span>";

echo "<span><b>Comments: </b>"; if($rowposts['blogpostlocked'] == 1){ echo"Locked"; }else{ 
echo "<div itemprop='comment'>".$numcomments."</div>"; if($_SESSION['admin']){ $pending = mysql_num_rows(mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$rowposts['blogpostid']."' AND approved = 0")); 
echo " ( <label class='pendingComments' id='comments".$rowposts['blogpostid']."'>Pending: ".$pending."</label> )"; }else{}} echo "</span>";

echo "<p itemprop='text'>".string_limit(htmlspecialchars_decode($rowposts['blogpostcontent']), 60)." ...</p>";
echo "<a class='blog-post-read-more' href='./".$rowposts['blogpostnumber']."' itemprop='contentLocation'>Continue reading</a>";
echo "</div>";

}}else{ /* visitor is viewing a specific category or blog post */

/* check if the page exists */
$blogcatexists = checkpage("blogcategories", "blogcaturl", $p);
if($blogcatexists != 1){ 
$blogpageexists = checkpage("blogposts", "blogpostnumber", $p);
if($blogpageexists != 1){ /* page doesnt exist */
include("../404.php"); }else{ /* the page does exist */

/* show the entire single blog post selected */
$thisblog = mysql_query("SELECT * FROM blogposts WHERE blogpostnumber = '".$p."'");
$rowblog = mysql_fetch_assoc($thisblog);
$getcomments = mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$rowblog['blogpostid']."' AND approved = 1");
$numcomments = mysql_num_rows($getcomments);
$getblogcat = mysql_query("SELECT * FROM blogcategories WHERE blogcatid = '".$rowblog['blogcatid']."'");
$rowblogcat = mysql_fetch_assoc($getblogcat);

echo "<div class='blog-post' id='".$rowblog['blogpostnumber']."' itemscope itemtype='http://schema.org/BlogPosting'>";
if($_SESSION['admin']){ echo "<a class='admin-edit edit-blog-post' id='editPost".$rowblog['blogpostid']."' alt='Edit this blog post' title='Edit this blog post'></a>"; }else{}
if($rowposts['blogpostimg'] != "" || $rowblog['blogpostimg'] != NULL){ echo "<img src='../imgs/blog/headers/".$rowblog['blogpostimg']."' class='blog-main-image' itemprop='image' />"; }else{}
echo "<h2 itemprop='headline'>".$rowblog['blogpostname']."</h2>";
if($rowblog['blogpostedited'] == 0){ echo "<span><b>Posted: </b><div itemprop='datePublished'>".$rowblog['blogpostdate']."</div></span>"; }else{ echo "<span><b>Last Edited: </b><div itemprop='dateModified'>".$rowblog['blogpostdate']."</div></span>"; }
echo "<span><b>Author: </b><div itemprop='author'>".$rowblog['blogpostauthor']."</div></span>";
echo "<span><b>Category: </b><div itemprop='keywords'>".$rowblogcat['blogcatname']."</div></span>";

echo "<span><b>Comments: </b>"; if($rowblog['blogpostlocked'] == 1){ echo"Locked"; }else{ 
echo "<div itemprop='comment'>".$numcomments."</div>"; if($_SESSION['admin']){ $pending = mysql_num_rows(mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$rowblog['blogpostid']."' AND approved = 0")); 
echo " ( <label class='pendingComments' id='comments".$rowblog['blogpostid']."'>Pending: ".$pending."</label> )"; }else{}} echo "</span>";

echo "<div class='fb-like like-long' data-href='http://www.pavatimarine.com/blog/".$p."' data-width='450' data-show-faces='false' data-send='true'></div>";
echo "<p itemprop='text' style='height:auto; margin-top:10px;'>".htmlspecialchars_decode($rowblog['blogpostcontent'])."</p>";
echo "</div>";

include("./blog-comments.php");

}}else{ /* list all blog posts from the specific category */

$blogcatidRow = mysql_fetch_assoc(mysql_query("SELECT * FROM blogcategories WHERE blogcaturl = '".$p."'"));
$blogcatid = $blogcatidRow['blogcatid'];

$blogcatRow = mysql_fetch_assoc(mysql_query("SELECT * FROM blogcategories WHERE blogcaturl = '".$p."'"));
$blogcat = $blogcatRow['blogcatname'];

$getcat = mysql_query("SELECT * FROM blogposts WHERE blogcatid = '".$blogcatid."' ORDER BY blogpostid DESC");
$numposts = mysql_num_rows($getcat);
echo "<div class='eleven columns'><h2 class='blog-cat-name'>".$blogcat."</h2></div>";
if($numposts != 0){
while($rowcat = mysql_fetch_assoc($getcat)){
$getcomments = mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$rowcat['blogpostid']."' AND approved = 1");
$numcomments = mysql_num_rows($getcomments);
echo "<div class='blog-post' id='".$rowcat['blogpostnumber']."'>";
if($rowcat['blogpostimg'] != "" || $rowcat['blogpostimg'] != NULL){ echo "<img src='../imgs/blog/headers/".$rowcat['blogpostimg']."' class='blog-main-image' />"; }else{}
echo "<a class='blog-post-title' href='./".$rowcat['blogpostnumber']."'>".$rowcat['blogpostname']."</a>";
if($rowcat['blogpostedited'] == 0){ echo "<span><b>Posted: </b>".$rowcat['blogpostdate']."</span>"; }else{ echo "<span><b>Last Edited: </b>".$rowcat['blogpostdate']."</span>"; }
echo "<span><b>Author: </b>".$rowcat['blogpostauthor']."</span>";
echo "<span><b>Category: </b>".$blogcat."</span>";

echo "<span><b>Comments: </b>"; if($rowcat['blogpostlocked'] == 1){ echo"Locked"; }else{ 
echo $numcomments; if($_SESSION['admin']){ $pending = mysql_num_rows(mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$rowcat['blogpostid']."' AND approved = 0")); 
echo " ( <label class='pendingComments' id='comments".$rowcat['blogpostid']."'>Pending: ".$pending."</label> )"; }else{}} echo "</span>";

echo "<p>".string_limit(htmlspecialchars_decode($rowcat['blogpostcontent']), 60)." ...</p>";
echo "<a class='blog-post-read-more' href='./".$rowcat['blogpostnumber']."'>Continue reading</a>";
echo "</div>";
}}else{

echo "<div class='blog-post empty-blog'><p>This discussion category doesn't have any posts right now.</p></div>";

}}}?>

</div>
<div class="one columns blog-seperator"></div>
<div class="four columns blog-sidebar">

	<!-- blog categories -->
	<div class="blog-widget">
		<?php echo "<h2>discussion categories</h2>";
		if($_SESSION['admin']){ echo "<a class='admin-btn add-blog-cat'>Add New Category</a>"; }else{}
		echo "<a href='./' class='blog-cat-link'>All Discussions</a>";
		$getblogcats = mysql_query("SELECT * FROM blogcategories ORDER BY orderid ASC");
		while($rowcats = mysql_fetch_assoc($getblogcats)){
		echo "<a href='./".$rowcats['blogcaturl']."' class='blog-cat-link'>".$rowcats['blogcatname'].""; 
		if($_SESSION['admin']){ echo "<a class='admin-edit edit-blog-cat' id='editCat".$rowcats['blogcatid']."' alt='Edit this category' title='Edit this category'></a>"; }else{} echo"</a>"; }?>
	</div>

</div>

</div><?php include("../footer2.php"); ?></div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/functions-test.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>
<script type='text/javascript' src='../files/fancybox/jquery.fancybox.pack.js'></script>
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->

</body></html>