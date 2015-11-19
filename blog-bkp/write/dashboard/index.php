<html><head>
<title>Pavati Marine Authors</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../assets/css/dashboard.css">
</head><body>
<?php session_start(); require_once("../functions.php"); require_once("../../../connect.php");
if($_SESSION['author']){ ?>

<header></header>


<?php }else{ login_prompt(); } ?>
</body></html>