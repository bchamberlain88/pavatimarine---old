<?php /* get the posted variables from the comment form */
$name = $_POST['name']; $email = $_POST['email']; $comment = $_POST['comment']; $date = date("F d, Y");

$getPost = mysql_query("SELECT * FROM blogposts WHERE blogpostnumber = '".$p."'");
$post = mysql_fetch_assoc($getPost); $ip = getUserIP();

/* return errors */
if(!$name){ commenterror("Please enter your full name before posting your comment."); }
if(!$email){ commenterror("Please enter a valid email address before posting your comment."); }
if(!$comment){ commenterror("The comment field can not be left blank."); }

/* comment posted successfully */
if($name && $email && $comment){
commentsuccess("Your comment has been posted successfully and is awaiting approval."); 
mysql_query("INSERT INTO blogcomments (blogpostid, comment, author, email, ipAddress, dateposted) VALUES ('".$post['blogpostid']."','".$comment."','".$name."','".$email."','".$ip."','".$date."')"); }?>

<!-- include necessary javascript files -->
<script type='text/javascript' src='../js/jquery.min.js'></script>
<script type='text/javascript'>$('html, body').animate({ scrollTop: $(".blog-comments").offset().top }, 'slow');</script>