<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=614140675272373";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php $getPost = mysql_query("SELECT * FROM blogposts WHERE blogpostnumber = '".$p."'"); $post = mysql_fetch_assoc($getPost);
if($post['blogpostlocked'] == 1){ echo "<div class='blog-comments'><p class='locked'>This blog post is locked.</p></div>"; }else{

echo "<div class='blog-comments'>";
$getcomments = mysql_query("SELECT * FROM blogcomments WHERE blogpostid = '".$post['blogpostid']."' AND approved = 1 ORDER BY commentid DESC");
while($rowcomment = mysql_fetch_assoc($getcomments)){
echo "<div class='blog-comment'>";
echo "<img src='../imgs/avatars/default.png' class='comment-avatar' />";
echo "<div class='comment-area'>";
echo "<b>".$rowcomment['author']."</b>";
echo "<span>".$rowcomment['dateposted']."</span>";
echo "<p>".$rowcomment['comment']."</p>";
echo "</div>";
echo "</div>"; }
echo "</div>"; 

if($_POST['post']){ include("./comment-post.php"); }?>

<form class="comment-form" method="post" action=<?php echo "./".$p.""; ?>>
	<div class="eleven columns input-container"><h2>leave your comment</h2><a class="fb-comment-link">Comment with Facebook</a></div>
	<div class="five columns input-container"><input class="text-input" type="text" name="name" placeholder="Name" /></div>
	<div class="five columns input-container"><input class="text-input" type="text" name="email" placeholder="Email Address" /></div>
	<div class="ten columns input-container"><textarea class="text-input textbox" name="comment" placeholder="Write your comment here..."></textarea></div>
	<div class="ten columns input-container"><input class="submit-input" type="submit" name="post" value="Post Comment" /></div>
</form>

<?php echo "<div class='fb-comments' style='display:none;' data-href='http://pavatimarine.com/blog/".$p."' data-width='640'></div>"; }?>