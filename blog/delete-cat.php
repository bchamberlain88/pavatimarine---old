<?php include("../connect.php"); $cat = $_GET['cat']; 
mysql_query("DELETE FROM newblog_cats WHERE cat_num = '$cat'"); ?> 