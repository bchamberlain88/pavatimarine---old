<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: blog.php
// | Author: Sebastian Inman (stiffnasty)
// | Last Modified: October 22, 2013
// +------------------------------------------------+
// | HANDLE ERRORS AND START SESSIONS
// +------------------------------------------------+

    error_reporting(E_ALL^E_NOTICE);
    session_start();

// +------------------------------------------------+
// | INCLUDE NECESSARY FILES
// +------------------------------------------------+

    require_once("./includes/connect.php");
    require_once("./includes/functions.php");
    include_once("./includes/headers.php")

// +------------------------------------------------+
// | INITIALIZE THE SITE
// +------------------------------------------------+

?>

    <body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=614140675272373";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- BLOG PAGE CONTENT -->
        <!-- VIEWING SINGLE BLOG POST -->
        <?php if($_GET['b']){
            $getBlog = mysql_query("SELECT * FROM blogposts WHERE blogpostnumber = '".$_GET['b']."'");
            $blog = mysql_fetch_assoc($getBlog);
            // BLOG POST DOES NOT EXISTS - RETURN ERROR
            if(mysql_num_rows($getBlog) < 1){ ?>

                <div class="m-content">
                    <div class="m-error-container">
                        <?php returnError("Sorry, the blog post you're looking for doesn't exist."); ?>
                        <a class="animate2 border3 m-button-large" href="../blog">View Blog Posts</a>
                    </div>
                </div>

            <?php // BLOG POST EXISTS - CONTINUE
            }else{ ?>

                <div class="m-content m-blog">
                    <div class="fb-like" data-href="http://www.pavatimarine.com/blog/<?php echo $_GET['b']; ?>" data-width="45" data-height="" data-colorscheme="light" data-layout="box_count" data-action="like" data-show-faces="false" data-send="false"></div>
                    <h1 class="blog-header"><?php echo $blog['blogpostname']; ?></h1>
                    <div class="blog-post">
                        <?php if($blog['blogpostimg'] != ""){ ?>
                            <img src="http://www.pavatimarine.com/imgs/blog/headers/<?php echo $blog['blogpostimg']; ?>" />
                        <?php }else{}?>
                        <p><?php echo htmlspecialchars_decode($blog['blogpostcontent']); ?></p>
                    </div>
                </div>

            <?php }}else{?>

        <!-- VIEWING ALL BLOG POSTS AND CATEGORIES -->
        <div class="m-content m-blog">
        <h1>Pavati Marine Discussions</h1>
        <ul class="m-blog-tabs">
        <?php // GET LIST OF ALL BLOG CATEGORIES
        $getCats = mysql_query("SELECT * FROM blogcategories");
        while($cat = mysql_fetch_assoc($getCats)){ ?>

            <!-- TAB AND CONTENT FOR EACH BLOG CATEGORY -->
            <li class="blog-tab" id="blog-<?php echo $cat['blogcatid']; ?>"><?php echo $cat['blogcatname']; ?></li>
            <div class="blog-content" id="blog-content-<?php echo $cat['blogcatid']; ?>">

            <?php // GET BLOG CONTENT FOR EACH CATEGORY
            $getPosts = mysql_query("SELECT * FROM blogposts WHERE blogcatid = '".$cat['blogcatid']."'");
            while($post = mysql_fetch_assoc($getPosts)){ ?>

                <div class="blog-post">
                    <h2><?php echo $post['blogpostname']; ?></h2>

                    <?php if($post['blogpostimg'] != ""){ ?>
                        <img src="http://www.pavatimarine.com/imgs/blog/headers/<?php echo $post['blogpostimg']; ?>" />
                    <?php }else{}?>

                    <p><?php echo string_limit(htmlspecialchars_decode($post['blogpostcontent']), 46); ?>
                    <br><a href="./blog/<?php echo $post['blogpostnumber']; ?>">Continue Reading</a></p>

                </div>

            <?php }?>

            </div>

        <?php }?>

        </ul>
        </div>

        <?php }?>

    <!-- PAGE FOOTER -->
    <div class="m-footer">
        Copyright &copy; 2003 - <?php echo date("Y"); ?> Pavati Marine. All rights reserved.
    </div>

    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript"> var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
    (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>

    </body>