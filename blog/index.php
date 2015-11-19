<?php error_reporting(E_ALL^E_NOTICE); session_start();
include("../connect.php"); include("../functions.php");
$site = $_SESSION['site'] = "http://$_SERVER[HTTP_HOST]/blog-test/";
if($_GET['p']){ $page = $_GET['p'];

$getTitle = mysql_query("SELECT * FROM newblog_posts WHERE post_link = '".$page."'");
$rowTitle = mysql_fetch_assoc($getTitle);
$title = $rowTitle['post_title']; } ?>

<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title><?php if($page){ echo $title."  - Pavati Marine Blog"; }else{ echo "Pavati Marine Blog"; } ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="<?php if($page){ echo $rowTitle['post_cats'].','.$rowTitle['post_tags']; }else{} ?>">
<meta name="description" content="<?php if($page){ echo limitdesc(strip_tags($rowTitle['post_copy']).'\r\n'); }else{} ?>">
<link rel="image_src" href="<?php if($page){ echo $rowTitle['post_thumb']; }else{ echo 'http://www.pavatimarine.com//imgs/pavati-dark.png'; } ?>" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
<link rel="stylesheet" href="./assets/css/blog.css">
<link rel="stylesheet" href="../css/mobile.css">
<link rel="stylesheet" href="./assets/css/fa.min.css">
<link rel="stylesheet" href="../files/fancybox/jquery.fancybox.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<?php if($_SESSION['author']){ ?>
<link rel="stylesheet" href="./assets/css/summernote.css">
<link rel="stylesheet" href="./assets/css/summernote-bs2.css">
<link rel="stylesheet" href="./assets/css/summernote-bs3.css">
<?php }else{} ?>
<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="../imgs/favicon.ico" type="image/x-icon">
</head><body>

<?php include("../headers.php"); ?>

<div class="main-page">

    <div class="container">

        <?php include("./functions.php");

        posters();

        if($_GET['p']){

            // check if viewing post
            include("./post.php");

        }else{

            // show all blog posts
            include("./posts.php");

        } ?>

    </div>

    <?php include("../footer2.php"); ?>

</div>

<!-- include necessary javascript files -->
<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/functions-test.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>
<script type='text/javascript' src='../files/fancybox/jquery.fancybox.pack.js'></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>

<?php if($_SESSION['author']){ ?>
<script type='text/javascript' src='./assets/js/admin.js'></script>
<script type='text/javascript' src='./assets/js/summernote.min.js'></script>
<?php }else{} ?>

<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
