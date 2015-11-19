<?php include("../connect.php"); ?>
<?php $cat = $_GET['cat']; 
$link = strtolower(preg_replace("![^a-z0-9]+!i", "-", $cat));
$getCatNum = mysql_query("SELECT * FROM newblog_cats ORDER BY cat_id DESC LIMIT 1");
$cats = mysql_fetch_assoc($getCatNum);
$catNum = $cats['cat_id'] + 1;
mysql_query("INSERT INTO newblog_cats (cat_num, cat_name, cat_link) VALUES ('$catNum', '$cat', '$link')");

?>

<li id="cat-<?php echo $catNum; ?>">
	<?php echo $cat; ?>
	<button class="confirm-delete" id="delete-cat-conf-<?php echo $catNum; ?>">Delete</button>
	<button class="li-button delete-btn delete-cat" id="delete-cat-<?php echo $catNum; ?>"><i class="fa fa-lg fa-trash-o"></i></button>
</li>

<script type="text/javascript">

	var current_cat;

	$(".delete-cat").click(function(){

		var cat = $(this).attr("id").replace("delete-cat-","");

		current_cat = cat;

		$("#delete-cat-conf-"+current_cat).addClass("visible");

		$(".confirm-delete").mouseout(function(){
		$(this).removeClass("visible"); });

		$(".confirm-delete").mouseup(function(){

			$("#cat-"+current_cat).addClass("hidden");

		});

	});

</script>