<?php error_reporting(E_ALL^E_NOTICE); session_start();
include("../../connect.php"); include("../../functions.php");
$site = $_SESSION['site'] = "http://$_SERVER[HTTP_HOST]/blog-test/"; ?>

<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<title>Pavati Marine Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="image_src" href="http://www.pavatimarine.com//imgs/pavati-dark.png" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="../../css/master.css" class="rs-file">
<link rel="stylesheet" href="../../css/droppable.css">
<link rel="stylesheet" href="../assets/css/blog.css">
<link rel="stylesheet" href="../assets/css/fa.min.css">
<link rel="stylesheet" href="../../files/fancybox/jquery.fancybox.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<?php if($_SESSION['author']){ ?>
<link rel="stylesheet" href="../assets/css/summernote.css">
<link rel="stylesheet" href="../assets/css/summernote-bs2.css">
<link rel="stylesheet" href="../assets/css/summernote-bs3.css">
<?php }else{} ?>
<link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
<link rel="icon" href="../../imgs/favicon.ico" type="image/x-icon">
</head><body>

<?php include("../../headers.php"); 
$search = $_POST['search']; ?>

<div class="main-page">

	<div class="container">

		<?php include("../functions.php");

		posters();

		include("../sidebar.php"); ?>

		<div class="b2-cn">
		<ul class="b2-cn-posts">

			<?php if($search){

			$searchresults = array();

			$searchwords = explode(" ", $search);
			foreach($searchwords as $searchword){

				if($_SESSION['author']){ $checkCats = mysql_query("SELECT * FROM newblog_posts WHERE post_cats LIKE '%$searchword%' AND post_deleted = 0"); }else{
				$checkCats = mysql_query("SELECT * FROM newblog_posts WHERE post_cats LIKE '%$searchword%' AND post_draft = 0 AND post_deleted = 0"); }

				if(mysql_num_rows($checkCats) > 0){

					while($catresult = mysql_fetch_assoc($checkCats)){

						if(in_array($catresult['post_verify'], $searchresults)){}else{ array_push($searchresults, $catresult['post_verify']); }

					}

				}

				if($_SESSION['author']){ $checkTags = mysql_query("SELECT * FROM newblog_posts WHERE post_tags LIKE '%$searchword%' AND post_deleted = 0"); }else{
				$checkTags = mysql_query("SELECT * FROM newblog_posts WHERE post_tags LIKE '%$searchword%' AND post_draft = 0 AND post_deleted = 0"); }
				
				if(mysql_num_rows($checkTags) > 0){

					while($tagresult = mysql_fetch_assoc($checkTags)){

						if(in_array($tagresult['post_verify'], $searchresults)){}else{ array_push($searchresults, $tagresult['post_verify']); }

					}

				}

			}

			$numresults = count($searchresults);

			echo "<h1 class='result-returns'>Search: $search <span>$numresults Results</span></h1>"; 
			if($numresults > 0){

				foreach($searchresults as $result){

					if($_SESSION['author']){ $getresult = mysql_query("SELECT * FROM newblog_posts WHERE post_verify = '$result' AND post_deleted = 0"); }else{
					$getresult = mysql_query("SELECT * FROM newblog_posts WHERE post_verify = '$result' AND post_draft = 0 AND post_deleted = 0"); }

					$post = mysql_fetch_assoc($getresult); ?>


					<li class="b2-cn-post" id="post-<?php echo $post['post_verify']; ?>">

						<h1 class="b2-cn-post-h1">
							
							<a class="b2-cn-post-h1-a" href="<?php echo $post['post_link']; ?>"><?php echo $post['post_title']; ?></a>

							<?php if($_SESSION['author']){ ?>
							<button class="btn-edit post-edit" id="edit-post-<?php echo $post['post_verify']; ?>" data-post="<?php echo $post['post_verify']; ?>"><i class="fa fa-lg fa-pencil"></i></button>
							<?php }else{} ?>

						</h1>

						<label class="b2-cn-post-lbl">
							<span><i class="fa fa-lg fa-clock-o"></i><?php echo $post['post_date']; ?></span>
							<span><i class="fa fa-lg fa-user"></i><a href="./authors/<?php echo strtolower($post['post_author']); ?>"><?php echo $post['post_author']; ?></a></span>
							<span><i class="fa fa-lg fa-tags"></i><?php post_cats($post['post_cats']); ?></span>
							<span><?php if($post['post_lock'] == 1){ ?><i class="fa fa-lg fa-lock"></i>Locked <?php }else{ ?><i class="fa fa-lg fa-comments-o"></i><a href="<?php echo $post['post_link']; ?>#disqus_thread">0 Comments</a><?php } ?></span>
							<?php if($post['post_draft'] == 1){ ?>
							<span><i class="fa fa-lg fa-file-text"></i>Saved as draft</span>
							<?php }else{} ?>
						</label>

						<div class="copy-limit">
							<?php echo $post['post_copy']; ?>
						</div>

						<a class="b2-cn-post-rm" href="<?php echo $post['post_link']; ?>">Continue Reading →</a>

					</li>
					

			<?php }

			}

			}else{}

			?>


		</ul>
		</div>

	</div>

	<?php include("../../footer2.php"); ?>

</div>

<!-- include necessary javascript files -->
<script src="//code.jquery.com/jquery-1.9.1.min.js"></script> 
<script type='text/javascript' src='../../js/master.js'></script>
<script type='text/javascript' src='../../js/functions-test.js'></script>
<script type='text/javascript' src='../../js/droppable.js'></script>
<script type='text/javascript' src='../../files/fancybox/jquery.fancybox.pack.js'></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script> 

<?php if($_SESSION['author']){ ?>
<script type='text/javascript' src='../assets/js/admin.js'></script>
<script type='text/javascript' src='../assets/js/summernote.min.js'></script>
<?php }else{} ?>

<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
