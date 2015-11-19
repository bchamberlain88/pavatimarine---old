<?php $pagelink = "http://www.pavatimarine.com/blog/";

if($_GET['p']){
$getPost = mysql_query("SELECT * FROM newblog_posts WHERE post_link = '".$_GET['p']."'");
$post = mysql_fetch_assoc($getPost); } ?>

<div class="b2-sb">

    <?php if($_SESSION['author']){ ?>
    <button class="add-post"><i class="fa fa-lg fa-plus"></i> Write New Post</button>
    <?php }else{} ?>

    <h1 class="b2-sb-h1">Search</h1>
    <form action="<?php echo $pagelink; ?>search/" class="b2-sb-search" method="post">
        <input class="b2-sb-search-txt" name="search" placeholder="Search blog posts" type="text" value="<?php echo $_POST['search']; ?>" />
    </form>

    <h1 class="b2-sb-h1">Share this page</h1>
    <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
    </div>

    <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52eaabba6313636d"></script>

    <h1 class="b2-sb-h1">Popular Posts</h1>
    <ul class="b2-sb-pop">

        <?php $getPopular = mysql_query("SELECT * FROM newblog_posts WHERE post_draft = 0 AND post_deleted = 0 ORDER BY post_views DESC LIMIT 3");
        while($popular = mysql_fetch_assoc($getPopular)){ ?>

        <li class="b2-sb-pop-li">
            <div class="b2-sb-pop-li-thmb">
                <img class="b2-sb-pop-li-thmb-img" src="<?php echo $popular['post_thumb']; ?>" />
            </div>
            <h2 class="b2-sb-pop-h2">
                <a class="b2-sb-pop-h2-a" href="<?php echo $pagelink.$popular['post_link']; ?>"><?php echo $popular['post_title']; ?></a>
            </h2>
            <label class="b2-sb-pop-lbl"><i class="fa fa-lg fa-clock-o"></i><?php echo $popular['post_date']; ?></label>
        </li>

        <?php } ?>

    </ul>

    <h1 class="b2-sb-h1">

        Categories

        <?php if($_SESSION['author']){ ?>
        <button class="btn-edit" id="edit-cats"><i class="fa fa-lg fa-pencil"></i></button>
        <?php }else{} ?>

    </h1>

    <ul class="b2-sb-cats">

        <li class="b2-sb-cats-li">
            <a class="b2-sb-cats-li-a" href="<?php echo $pagelink; ?>">All Categories</a>
        </li>

        <?php $getCats = mysql_query("SELECT * FROM newblog_cats");
        while($cat = mysql_fetch_assoc($getCats)){ ?>

        <li class="b2-sb-cats-li">
            <a class="b2-sb-cats-li-a" href="<?php echo $pagelink; ?>categories/<?php echo $cat['cat_link']; ?>"><?php echo $cat['cat_name']; ?></a>
        </li>

        <?php } ?>

    </ul>

    <?php if($_GET['p']){
    $tags = explode(",", $post['post_tags']);

    if(count($tags) < 2){}else{

    ?>

    <h1 class="b2-sb-h1">Tags</h1>
    <ul class="b2-sb-tags">

        <?php foreach($tags as $tag){ $tag_link = strtolower(preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', str_replace(" ", "-", $tag))); ?>

        <li class="b2-sb-tags-li">
            <a class="b2-sb-tags-li-a" href="<?php echo $pagelink; ?>tagged/<?php echo $tag_link; ?>"><?php echo $tag; ?></a>
        </li>

        <?php } ?>

    </ul>

    <?php }} ?>

</div>
