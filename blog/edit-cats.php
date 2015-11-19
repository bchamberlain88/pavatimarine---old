<?php include("../connect.php"); ?>

<dialog class="dialog admin cats">

	<div class="header">
		<h1>Edit Categories</h1>
		<button class="close-admin-dialog"><i class="fa fa-lg fa-times"></i></button>
	</div>

	<form class="add-cat">
		<input class="add-cat-text" placeholder="Category name" type="text" />
		<button class="add-cat-button">Add Category</button>
	</form>

	<div class="results"></div>

	<ul class="cat-list">

		<?php $getCats = mysql_query("SELECT * FROM newblog_cats ORDER BY cat_id DESC"); 
		while($cat = mysql_fetch_assoc($getCats)){ ?>

			<li id="cat-<?php echo $cat['cat_id']; ?>">
				<?php echo $cat['cat_name']; ?>
				<button class="confirm-delete" id="delete-cat-conf-<?php echo $cat['cat_id']; ?>">Delete</button>
				<button class="li-button delete-btn delete-cat" id="delete-cat-<?php echo $cat['cat_id']; ?>"><i class="fa fa-lg fa-trash-o"></i></button>
			</li>

		<?php } ?>

	</ul>

</dialog>

<script type="text/javascript">

	var current_cat;

	$(".add-cat").submit(function(event){

		event.preventDefault();
		var catName = $(".add-cat-text").val();

		if(catName === ""){ 

			$(".add-cat-text").addClass("txt-error"); 

		}else{ 

			$(".add-cat-text").removeClass("txt-error");
			$.post("add-cat.php?cat="+catName, $(".add-cat").serialize(), function(addCat){
			$(".cat-list").prepend(addCat); $(".add-cat-text").val(""); }); 

		}

	});

	$(".delete-cat").click(function(){

		var cat = $(this).attr("id").replace("delete-cat-","");

		current_cat = cat;

		$("#delete-cat-conf-"+current_cat).addClass("visible");

		$(".confirm-delete").mouseout(function(){
		$(this).removeClass("visible"); });

		$(".confirm-delete").mouseup(function(){

			$("#cat-"+current_cat).addClass("hidden").load("http://www.pavatimarine.com/blog-test/delete-cat.php?cat="+current_cat);

		});

	});

</script>