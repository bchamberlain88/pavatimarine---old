<?php include("../connect.php"); ?>

<dialog class="dialog admin addpost">

	<form class="post-form" method="post">

	<?php $digits = 8;
	$verify = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT); ?>

	<input name="post-verify" type="hidden" value="<?php echo $verify; ?>" />

	<div class="header">
		<h1>Write New Blog Post</h1>
		<div class="close-admin-dialog"><i class="fa fa-lg fa-times"></i></div>

		<div class="author-dropper">

			Posting as: <label class="post-author"><?php echo $_SESSION['author']; ?></label>

		</div>

	</div>

	<div class="post-container">

		<input class="post-title" name="post-title" placeholder="Blog post title" type="text" />

		<label class="post-url"><i class="fa fa-lg fa-globe"></i>www.pavatimarine.com/blog/<span class="post-link"></span></label>

		<textarea class="post-copy" id="post-copy" name="post-copy" spellcheck="false"></textarea>

		<input class="publish-post" name="post-publish" type="submit" value="Publish This Post">

	</div>

	<aside class="post-sidebar">


		<h1 class="b2-sb-h1">Post Settings</h1>

		<ul class="post-settings">

			<li><label>Allow user comments</label>
			<input checked="checked" class="settings-checkbox" id="settings-comments" name="settings-comments" type="checkbox" />
			<div class="toggle">
				<div class="toggler on" id="toggle-comments"></div>
			</div></li>

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
			<input class="settings-checkbox" id="settings-draft" name="settings-draft" type="checkbox" />
			<div class="toggle">
				<div class="toggler off" id="toggle-draft"></div>
			</div></li>

		</ul>

		<h1 class="b2-sb-h1">Categories<div class="btn-edit" id="edit-cats" style="right:15px;"><i class="fa fa-lg fa-pencil"></i></div></h1>

		<ul class="post-categories">

			<?php $getCats = mysql_query("SELECT * FROM newblog_cats");
			while($cat = mysql_fetch_assoc($getCats)){ ?>

			<li>
				<input id="cat-check-<?php echo $cat['cat_id']; ?>" name="post-cat[]" type="checkbox" value="<?php echo $cat['cat_name']; ?>" />
				<label for="cat-check-<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></label>
			</li>

			<?php } ?>

		</ul>

		<h1 class="b2-sb-h1">Tags<span class="sub-head">Seperate each tag with a comma</span></h1>
		<textarea class="post-tags" name="post-tags" spellcheck="false"></textarea>

		<span class="sidebar-sep"></span>

		<h1 class="b2-sb-h1">Featured Image</h1>
		<a class="set-image">Set featured image</a>

		<div class="post-featured-image">
			<img class="featured-image" src="" />
			<input class="post-thumb" name="post-thumb" type="hidden" value="" />
			<div class="remove-thumb"><i class="fa fa-lg fa-times"></i></div>
		</div>

		<span class="sidebar-sep"></span>

	</aside>
</form>

</dialog>