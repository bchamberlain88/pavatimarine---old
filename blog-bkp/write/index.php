<html><head>
<title>Pavati Marine Authors</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="./assets/css/write.css">
</head><body>
<?php session_start(); require_once("./functions.php"); require_once("../../connect.php");
if($_SESSION['author']){ login_true(); }else{ login_false(); } ?>
</body></html>