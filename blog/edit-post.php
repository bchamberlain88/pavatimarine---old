<?php include("../connect.php"); $post_verify = $_GET['post'];
$get_post = mysql_query("SELECT * FROM newblog_posts WHERE post_verify = '$post_verify'");
$post = mysql_fetch_assoc($get_post); ?>

<dialog class="dialog admin addpost">

	<form class="post-form" method="post">

	<input name="post-verify" type="hidden" value="<?php echo $post_verify; ?>" />

	<div class="delete-post-container">
		<div class="confirm-delete" id="delete-post-conf-<?php echo $post['post_verify']; ?>">Delete</div>
		<div class="li-button delete-btn delete-post" data-title="<?php echo $post['post_title']; ?>" id="delete-post-<?php echo $post['post_verify']; ?>"><i class="fa fa-lg fa-trash-o"></i></div>
	</div>

	<div class="header">
		<h1>Edit Blog Post</h1>
		<div class="close-admin-dialog"><i class="fa fa-lg fa-times"></i></div>

		<div class="author-dropper">

			Editing as: <label class="post-author"><?php echo $_SESSION['author']; ?></label>

		</div>

	</div>

	<div class="post-container">

		<input class="post-title" name="post-title" placeholder="Blog post title" type="text" value="<?php echo $post['post_title']; ?>" />

		<label class="post-url"><i class="fa fa-lg fa-globe"></i>www.pavatimarine.com/blog/<span class="post-link"><?php echo $post['post_link']; ?></span></label>

		<textarea class="post-copy" id="post-copy" name="post-copy" spellcheck="false"><?php echo $post['post_copy']; ?></textarea>

		<input class="publish-post" name="post-changes" type="submit" value="Publish Changes">

	</div>

	<aside class="post-sidebar">


		<h1 class="b2-sb-h1">Post Settings</h1>

		<ul class="post-settings">

			<?php if($post['post_lock'] == 0){ ?>

			<li><label>Allow user comments</label>
			<input checked="checked" class="settings-checkbox" id="settings-comments" name="settings-comments" type="checkbox" />
			<div class="toggle">
				<div class="toggler on" id="toggle-comments"></div>
			</div></li>

			<?php }else{ ?>

			<li><label>Allow user comments</label>
			<input class="settings-checkbox" id="settings-comments" name="settings-comments" type="checkbox" />
			<div class="toggle">
				<div class="toggler off" id="toggle-comments"></div>
			</div></li>

			<?php } ?>

			<!--

			<li><label>Post to Facebook</label>
			<input class="settings-checkbox" id="settings-facebook" name="settings-facebook" type="checkbox" />
			<div class="toggle">
				<div class="toggler off" id="toggle-facebook"></div>
			</div></li>

			<li><label>Post to Twitter</label>
			<input class="settings-checkbox" id="settings-twitter" name="settings-twitter" type="checkbox" />
			<div class="toggle">
				<div class="toggler off" id="toggle-twitter"></div>
			</div></li>

			-->

			<li><label>Publish as draft</label>

			<?php if($post['post_draft'] == 0){ ?>

			<input class="settings-checkbox" id="settings-draft" name="settings-draft" type="checkbox" />
			<div class="toggle">
				<div class="toggler off" id="toggle-draft"></div>
			</div></li>

			<?php }else{ ?>

			<input checked="checked" class="settings-checkbox" id="settings-draft" name="settings-draft" type="checkbox" />
			<div class="toggle">
				<div class="toggler on" id="toggle-draft"></div>
			</div></li>

			<?php } ?>

		</ul>

		<h1 class="b2-sb-h1">Categories<div class="btn-edit" id="edit-cats" style="right:15px;"><i class="fa fa-lg fa-pencil"></i></div></h1>

		<ul class="post-categories">

			<?php $getCats = mysql_query("SELECT * FROM newblog_cats");

			$post_cats = explode(",", $post['post_cats']);

			while($cat = mysql_fetch_assoc($getCats)){ 

				if(in_array(strtolower($cat['cat_name']), $post_cats)){ ?>

				<li>
					<input checked="checked" id="cat-check-<?php echo $cat['cat_id']; ?>" name="post-cat[]" type="checkbox" value="<?php echo $cat['cat_name']; ?>" />
					<label for="cat-check-<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></label>
				</li>

				<?php }else{ ?>

				<li>
					<input id="cat-check-<?php echo $cat['cat_id']; ?>" name="post-cat[]" type="checkbox" value="<?php echo $cat['cat_name']; ?>" />
					<label for="cat-check-<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></label>
				</li>

				<?php } ?>


			<?php } ?>

		</ul>

		<h1 class="b2-sb-h1">Tags<span class="sub-head">Seperate each tag with a comma</span></h1>
		<textarea class="post-tags" name="post-tags" spellcheck="false"><?php echo str_replace(",",", ",$post['post_tags']); ?></textarea>

		<span class="sidebar-sep"></span>

		<h1 class="b2-sb-h1">Featured Image</h1>
		<a class="set-image">Set featured image</a>

		<?php if($post['post_thumb']){ ?> <div class='post-featured-image visible'> <?php }else{ ?> <div class='post-featured-image'> <?php } ?>
			<img class="featured-image" src="<?php echo $post['post_thumb']; ?>" />
			<input class="post-thumb" name="post-thumb" type="hidden" value="<?php echo $post['post_thumb']; ?>" />
			<div class="remove-thumb"><i class="fa fa-lg fa-times"></i></div>
		</div>

		<span class="sidebar-sep"></span>

	</aside>
</form>

</dialog>