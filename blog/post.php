<?php include("./sidebar.php"); 

$getPost = mysql_query("SELECT * FROM newblog_posts WHERE post_link = '".$_GET['p']."'");
$post = mysql_fetch_assoc($getPost); if(mysql_num_rows($getPost) > 0){ 

$view_count = $post['post_views'] + 1;

mysql_query("UPDATE newblog_posts SET post_views = '$view_count' WHERE post_verify = '".$post['post_verify']."'");

?>

<div class="b2-cn">
<div class="b2-cn-post" id="post-<?php echo $post['post_verify']; ?>">

	<?php if($post['post_thumb']){ ?>

	<div class="post-cover">

		<img class="post-cover-img" src="<?php echo $post['post_thumb']; ?>" />
		<div class="post-cover-shadow">
			<?php if($_SESSION['author']){ ?>
			<button style="top:15px; right:15px;" class="btn-edit post-edit" id="edit-post-<?php echo $post['post_verify']; ?>" data-post="<?php echo $post['post_verify']; ?>"><i class="fa fa-lg fa-pencil"></i></button>
			<?php }else{} ?>
		</div>

		<div class="post-cover-info">

			<h1 class="b2-cn-post-h1"><?php echo $post['post_title']; ?></h1>

			<label class="b2-cn-post-lbl">
				<span><i class="fa fa-lg fa-clock-o"></i><?php echo $post['post_date']; ?></span>
				<span><i class="fa fa-lg fa-user"></i><a href="./authors/<?php echo strtolower($post['post_author']); ?>"><?php echo $post['post_author']; ?></a></span>
				<span><i class="fa fa-lg fa-tags"></i><?php post_cats($post['post_cats']); ?></span>
				<span><?php if($post['post_lock'] == 1){ ?><i class="fa fa-lg fa-lock"></i>Locked <?php }else{ ?><i class="fa fa-lg fa-comments-o"></i><a href="<?php echo $post['post_link']; ?>#disqus_thread">0 Comments</a><?php } ?></span>
				<span><i class="fa fa-lg fa-eye"></i><?php echo $post['post_views']; ?> Views</span>
				<?php if($post['post_draft'] == 1){ ?>
				<span><i class="fa fa-lg fa-file-text"></i>Saved as draft</span>
				<?php }else{} ?>
			</label>

		</div>

	</div>

	<?php }else{ ?>

	<h1 class="b2-cn-post-h1">

		<?php echo $post['post_title']; ?>

		<?php if($_SESSION['author']){ ?>
		<button class="btn-edit post-edit" id="edit-post-<?php echo $post['post_verify']; ?>" data-post="<?php echo $post['post_verify']; ?>"><i class="fa fa-lg fa-pencil"></i></button>
		<?php }else{} ?>

	</h1>

	<label class="b2-cn-post-lbl">
		<span><i class="fa fa-lg fa-clock-o"></i><?php echo $post['post_date']; ?></span>
		<span><i class="fa fa-lg fa-user"></i><a href="./authors/<?php echo strtolower($post['post_author']); ?>"><?php echo $post['post_author']; ?></a></span>
		<span><i class="fa fa-lg fa-tags"></i><?php post_cats($post['post_cats']); ?></span>
		<span><?php if($post['post_lock'] == 1){ ?><i class="fa fa-lg fa-lock"></i>Locked <?php }else{ ?><i class="fa fa-lg fa-comments-o"></i><a href="<?php echo $post['post_link']; ?>#disqus_thread">0 Comments</a><?php } ?></span>
		<span><i class="fa fa-lg fa-eye"></i><?php echo $post['post_views']; ?> Views</span>
		<?php if($post['post_draft'] == 1){ ?>
		<span><i class="fa fa-lg fa-file-text"></i>Saved as draft</span>
		<?php }else{} ?>
	</label>

	<?php } ?>

	<?php echo $post['post_copy']; ?>

</div>

<div class="post-about-author" id="post-author-<?php echo $post['post_verify']; ?>">
<h1 class="b2-sb-h1">About the Author</h1>
<?php $getAuthor = mysql_query("SELECT * FROM newblog_authors WHERE author_alias = '".$post['post_author']."'");
$author = mysql_fetch_assoc($getAuthor); ?>

<div class="b2-cn-author">
	<div class="b2-cn-author-img">
		<img class="b2-cn-author-img-img" src="<?php echo $author['author_thumb']; ?>" />
		<a class="b2-cn-author-social social facebook" href="http://www.facebook.com/<?php echo $author['author_facebook']; ?>/" target="new"><i class="fa fa-lg fa-facebook"></i></a>
		<a class="b2-cn-author-social social twitter" href="http://www.twitter.com/<?php echo $author['author_twitter']; ?>/" target="new"><i class="fa fa-lg fa-twitter"></i></a>
		<a class="b2-cn-author-social social instagram" href="http://www.instagram.com/<?php echo $author['author_instagram']; ?>/" target="new"><i class="fa fa-lg fa-instagram"></i></a>
	</div>
	<a class="b2-cn-author-a" href="./authors/<?php echo strtolower($author['author_alias']); ?>"><?php echo $author['author_name']; ?></a>
	<p class="b2-cn-author-p"><?php echo $author['author_bio']; ?></p>

</div>
</div>

<?php if($post['post_lock'] == 1){ ?>

	<h2 class="post-locked"><i class="fa fa-lg fa-lock"></i> This blog post is locked and can not be commented on</h2>

<?php }else{ ?>

<div class="post-comments" id="post-comments-<?php echo $post['post_verify']; ?>">
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'pavatidriftboats'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'pavatidriftboats'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
    var s = document.createElement('script'); s.async = true;
    s.type = 'text/javascript';
    s.src = '//' + disqus_shortname + '.disqus.com/count.js';
    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>

</div>

<?php } ?>

</div>

<?php }else{ echo "<h2 style='color:#333; float:left; padding-top:80px'>The blog post you are looking for does not exist</h2>"; /* blog post does not exist in database - return 404 error */} ?>