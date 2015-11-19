<?php


function post_cats($string){

    $cats = explode(",", $string);
    foreach($cats as $cat){

        $cat_link = strtolower(preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', str_replace(" ", "-", $cat)));
        echo "<a class='post-cat' href='http://www.pavatimarine.com/blog/categories/".$cat_link."'>".ucfirst($cat)."</a>";

    }

}

function posts_nav($page, $limit){

    $getPosts = mysql_query("SELECT * FROM newblog_posts WHERE post_draft = 0 AND post_deleted = 0");
    $numPosts = mysql_num_rows($getPosts);

    if($numPosts <= $limit){ /* not enough posts - no need for navigation */}else{

    echo "

    <ul class='b2-cn-ft'>

        <li class='b2-cn-ft-li current'>
            <a class='b2-cn-ft-li-a'>1</a>
        </li>

        <li class='b2-cn-ft-li'>
            <a class='b2-cn-ft-li-a'>2</a>
        </li>

        <li class='b2-cn-ft-li'>
            <a class='b2-cn-ft-li-a'>3</a>
        </li>

        <li class='b2-cn-ft-li'>
            <a class='b2-cn-ft-li-a'>4</a>
        </li>

        <li class='b2-cn-ft-li'>
            <a class='b2-cn-ft-li-a'>5</a>
        </li>

        <li class='b2-cn-ft-dot'>…</li>

        <li class='b2-cn-ft-li'>
            <a class='b2-cn-ft-li-a'>26</a>
        </li>

        <li class='b2-cn-ft-li gf'>
            <a class='b2-cn-ft-li-a'><i class='fa fa-lg fa-chevron-right'></i></a>
        </li>

    </ul>

    ";

    }

}

function posters(){

    if($_POST['post-publish']){

            $post_verify = $_POST['post-verify'];
            $post_title = mysql_real_escape_string($_POST['post-title']);
            $post_link = strtolower(preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', str_replace(" ", "-", $post_title)));
            $post_copy = mysql_real_escape_string($_POST['post-copy']);
            $post_author = $_SESSION['author'];
            $post_date = date("F d, Y");
            $post_cats = $_POST['post-cat'];
            $post_thumb = $_POST['post-thumb'];

            if(empty($post_cats)){$post_categories = NULL; }else{
            foreach($post_cats as $post_cat){
            $post_categories .= strtolower($post_cat).","; }
            $post_categories = substr($post_categories, 0, -1); }

            $post_tags = strtolower(str_replace(", ", ",", $_POST['post-tags']));

            if(isset($_POST['settings-comments'])){ $post_setting_comments = 0; }else{ $post_setting_comments = 1; }
            if(isset($_POST['settings-facebook'])){ $post_setting_facebook = 1; }else{ $post_setting_facebook = 0; }
            if(isset($_POST['settings-twitter'])){ $post_setting_twitter = 1; }else{ $post_setting_twitter = 0; }
            if(isset($_POST['settings-draft'])){ $post_setting_draft = 1; }else{ $post_setting_draft = 0; }


            $checkPost = mysql_query("SELECT * FROM newblog_posts WHERE post_verify = '$post_verify'");
            if(mysql_num_rows($checkPost) > 0){}else{

            mysql_query("INSERT INTO newblog_posts (post_verify, post_title, post_link, post_copy, post_author, post_date, post_cats, post_tags, post_thumb, post_lock, post_draft) VALUES ('$post_verify', '$post_title', '$post_link', '$post_copy', '$post_author', '$post_date', '$post_categories', '$post_tags', '$post_thumb', '$post_setting_comments', '$post_setting_draft')");

            }

        }

        if($_POST['post-changes']){

            $post_verify = $_POST['post-verify'];
            $post_title = mysql_real_escape_string($_POST['post-title']);
            $post_link = strtolower(preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', str_replace(" ", "-", $post_title)));
            $post_copy = mysql_real_escape_string($_POST['post-copy']);
            $post_author = $_SESSION['author'];
            $post_date = date("F d, Y");
            $post_cats = $_POST['post-cat'];
            $post_thumb = $_POST['post-thumb'];

            if(empty($post_cats)){$post_categories = NULL; }else{
            foreach($post_cats as $post_cat){
            $post_categories .= strtolower($post_cat).","; }
            $post_categories = substr($post_categories, 0, -1); }

            $post_tags = strtolower(str_replace(", ", ",", $_POST['post-tags']));

            if(isset($_POST['settings-comments'])){ $post_setting_comments = 0; }else{ $post_setting_comments = 1; }
            if(isset($_POST['settings-facebook'])){ $post_setting_facebook = 1; }else{ $post_setting_facebook = 0; }
            if(isset($_POST['settings-twitter'])){ $post_setting_twitter = 1; }else{ $post_setting_twitter = 0; }
            if(isset($_POST['settings-draft'])){ $post_setting_draft = 1; }else{ $post_setting_draft = 0; }


            $checkPost = mysql_query("SELECT * FROM newblog_posts WHERE post_verify = '$post_verify'");
            if(mysql_num_rows($checkPost) > 0){
            mysql_query("UPDATE newblog_posts SET post_title = '$post_title', post_link = '$post_link', post_copy = '$post_copy', post_author_edit = '$post_author', post_date_edit = '$post_date', post_cats = '$post_categories', post_tags = '$post_tags', post_thumb = '$post_thumb', post_edit = 1, post_lock = '$post_setting_comments', post_draft = '$post_setting_draft' WHERE post_verify = '$post_verify'");
            }else{}

        }

}

?>
