<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
<?php if(!$_GET['p']){ $p = $_GET['p']; $pageTitle = "Pavati Marine - Search"; }else{ $p = $_GET['p']; $pageTitle = "Pavati Marine - ".ucfirst($p).""; } ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head> <!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
</head>

<body>
<div class='scroll-top'></div>
<!-- include the main page navigation -->
<header><div class="container"><?php include("../navigation.php"); ?></div></header>
<!-- include the mobile navigation -->
<div class="mobile-menu"><?php include("../m.navigation.php"); ?></div>
<!-- include drop down of all boat models -->
<ul class="boat-models-drop-menu"><?php include("../boat-models.php"); ?></ul>

<div class="main-page"><div class="container search-form-container">

<div class="sixteen columns search-container">

	<?php if($_POST['searchbtn']){ /* user has submitted a search query */
	/* the search query was empty - retun an error */
	if(!$_POST['searchtext']){ echo "<span class='error search-error'>error : please enter a valid search term</span>"; }else{
	$search = strtolower(str_replace(" ","-",$_POST['searchtext']));
	session_unset($_SESSION['search']); $_SESSION['search'] = $search;
	
	}}else{ } if($p){ echo"
	<form class='search-form' method='post' action=''>
		<input type='text' class='searchfield' name='searchtext' value='' placeholder='".$p."' />
		<input name='searchbtn' class='search-button' type='submit' value='search' />
	</form>"; }else{echo"
	<form class='search-form' method='post' action=''>
		<input type='text' class='searchfield' name='searchtext' value='' placeholder='Search for something here' />
		<input name='searchbtn' class='search-button' type='submit' value='search' />
	</form>"; } ?>

</div>

<?php if($p){ $search = str_replace("-"," ", $p);

/* return search results from news posts */
$news = mysql_query("SELECT * FROM news WHERE  newstitle LIKE '%" . $search . "%' OR newsbody LIKE '%" . $search  ."%'");
$newsnum = mysql_num_rows($news);
echo "<h3 class='sixteen columns result-header'>news post search results : ".$newsnum."</h3>";
if($newsnum > 0){while($rownews = mysql_fetch_assoc($news)){
/* at least one result is returned */
echo "<div class='sixteen columns search-result'><h2>".$rownews['newstitle']."</h2>".$rownews['newsbody']."</div>"; }}else{}

/* return search results from boat models */
$boats = mysql_query("SELECT * FROM boatmodels WHERE  boatname LIKE '%" . $search . "%' OR boatdesc LIKE '%" . $search  ."%'");
$boatsnum = mysql_num_rows($boats);
echo "<h3 class='sixteen columns result-header'>boat models search results : ".$boatsnum."</h3>";
if($boatsnum > 0){while($rowboats = mysql_fetch_assoc($boats)){
/* at least one result is returned */
echo "<div class='sixteen columns search-result'><h2>".$rowboats['boatname']."</h2>".$rowboats['boatdesc']."</div>"; }}else{}

}else{ } ?>

</div>
<?php include("../footer.php"); ?>
</div>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/functions.js'></script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->

</body></html>