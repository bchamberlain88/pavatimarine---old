<?php $site = "http://www.pavatimarine.com/"; ?>

<header class="header"><div class="container">
<nav class="navigation">
    <a class="logo" href="<?php echo $site; ?>"></a><?php // GENERATE NAVIGATION LINKS
    foreach(query("nav_links", "ALL") as $link){
    if($link['id'] == 2){}else{ // TEMPORARILY HIDE THE ONLINE SHOP
    echo "<li class='animate2 navlink' id='navlink-".$link['id']."'>".$link['name']."</li>"; }} ?>
    <a href="http://www.pavatimarine.com/for-sale/"><li class="nav-link">Boats For Sale</li></a>
    <a href="http://www.pavatimarine.com/about/"><li class="nav-link">About Pavati</li></a>
    <a href="http://www.pavatimarine.com/blog/"><li class="nav-link">Discussions</li></a>
    <a href="http://www.pavatimarine.com/contact"><li class="nav-link">Contact</li></a>

    <div class="header-right-links">
        <a class="top-right-nav-link" href="<?php echo $site; ?>test-row">Take A Test Row</a>
        <div class="nav-lnk-vert-sep"></div>
        <a class="top-right-nav-link" href="<?php echo $site; ?>contact">Call A Sales Rep</a>
        <span class="border3 phone">1-877-402-2388</span>
        <a class="border3 header-fb-like" href="https://www.facebook.com/pavatifishingboats" target="new"></a>
    </div>

</nav>

<nav class="mobile-navigation"><ul>
    <a class="logo" href="http://pavatimarine.com/"></a>
    <div class="toggle-mobile-nav-button">Menu</div>
</nav>
</div></header>

<?php // GENERATE DROP MENUS FOR EACH NAVIGATION LINK
foreach(query("nav_links", "ALL") as $link){
echo "<div class='dropper' id='dropper-".$link['id']."'>";
    echo "<div class='sub-nav'><div class='container'>";
        echo "<div class='animate2 dropper-close'></div>";
        echo "<ul class='sublinks' id='subs-".$link['id']."'>";
            $sublinknum = 0;
            $subLinks = mysql_query("SELECT * FROM sub_links WHERE nav_link = '".$link['id']."' ORDER BY order_id");
            while($sublink = mysql_fetch_assoc($subLinks)){
                // MAKE AN EXCEPTION FOR "ALL BOAT MODELS"
                if($sublink['id'] == 1){
                $sublinknum = $sublinknum + 1;
                echo "<li class='animate2 sublink sublink-".$sublinknum."' id='sublink-".$sublink['id']."'>".$sublink['name']."</li>";
                }else{ // SUB LINK CONTAINS NO ITEMS, TREAT AS DIRECT LINK RATHER THAN TAB
                $countItems = mysql_query("SELECT * FROM sub_items WHERE sub_link = '".$sublink['id']."'");
                if(mysql_num_rows($countItems) == 0){
                echo "<a href='".$sublink['link']."' target='new'><li class='animate2 sublink sublink-".$sublinknum."'>".$sublink['name']."</li></a>";
                }else{ // SUB LINK HAS ITEMS, TREAT AS TAB
                $sublinknum = $sublinknum + 1;
                echo "<li class='animate2 sublink sublink-".$sublinknum."' id='sublink-".$sublink['id']."'>".$sublink['name']."</li>";
                }}}
        echo "</ul>";
        echo "<ul class='itemlist'>";
            $getItems = mysql_query("SELECT * FROM sub_items WHERE nav_link = '".$link['id']."'");
            while($item = mysql_fetch_assoc($getItems)){
                $getsub = mysql_query("SELECT * FROM sub_links WHERE id ='".$item['sub_link']."'");
                $rowsub = mysql_fetch_assoc($getsub);
                $sub = strtolower(str_replace(" ","-",$rowsub['name']));
                $page = strtolower(str_replace(" ","-",$item['name']));
                echo "<li class='animate2 item items-".$item['sub_link']."' id='item-".$item['id']."'>";
                echo "<a href='".$site.$link['link']."/".$page."'><span class='animate2 iteminfo'>";
                    echo "<h1 class='animate2'>".$item['name']."</h1>";
                    echo "<p>".$item['text']."</p>";
                echo "</span></a>";
                echo "<img alt='The Pavati Marine ".ucwords($item['name'])." Boat Model' src='".$site."files/images/".$item['image']."' />";
                echo "</li>"; }
        echo "</ul>";
    echo "</div></div>";
echo "</div>"; } ?>