<div class="header">
	<h1>Set Featured Image</h1>
	<div class="close-admin-dialog"><i class="fa fa-lg fa-times"></i></div>

	<div class="author-dropper">
		Supported file types: <b>.jpg</b> <b>.png</b> <b>.gif</b>
	</div>

</div>

<div class="post-container">

	<form action="save-image.php" enctype="multipart/form-data" method="post" target="uploadframe">
		<input class="upload-input" type="file" name="image" />
		<input class="upload-button" type="submit" value="upload" />
		<div class="up-indicate"></div>
	</form>

	<div class="file-dropper">

		<iframe class="uploadframe" name="uploadframe" width="100%" height="300"></iframe>

	</div>

</div>

<aside class="post-sidebar">

	<ul class="image-list">

		<?php include("./image-list.php"); ?>

	</ul>

</aside>