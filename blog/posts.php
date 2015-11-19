<?php include("sidebar.php"); ?>

<div class="b2-cn">

	<ul class="b2-cn-posts">

		<?php 

		if($_SESSION['author']){ $getPosts = mysql_query("SELECT * FROM newblog_posts WHERE post_deleted = 0 ORDER BY post_id DESC");
		}else{ $getPosts = mysql_query("SELECT * FROM newblog_posts WHERE post_draft = 0 AND post_deleted = 0 ORDER BY post_id DESC"); }

		while($post = mysql_fetch_assoc($getPosts)){ ?>

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
				<span><i class="fa fa-lg fa-eye"></i><?php echo $post['post_views']; ?> Views</span>
				<?php if($post['post_draft'] == 1){ ?>
				<span><i class="fa fa-lg fa-file-text"></i>Saved as draft</span>
				<?php }else{} ?>
			</label>

			<div class="copy-limit">
				<?php echo $post['post_copy']; ?>
			</div>

			<a class="b2-cn-post-rm" href="<?php echo $post['post_link']; ?>">Continue Reading →</a>

		</li>

		<?php } ?>

	</ul>

</div>

<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'm-ixr'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
var s = document.createElement('script'); s.async = true;
s.type = 'text/javascript';
s.src = '//' + disqus_shortname + '.disqus.com/count.js';
(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>