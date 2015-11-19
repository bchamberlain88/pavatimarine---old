<?php include("../connect.php"); $post = $_GET['post']; 
mysql_query("UPDATE newblog_posts SET post_deleted = 1 WHERE post_verify = '$post'"); ?> 