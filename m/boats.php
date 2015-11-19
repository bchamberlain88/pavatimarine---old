<?php

// +------------------------------------------------+
// | Pavati Marine - Drift Boats - Power Boats
// | Copyright (C) 2013 - 2014 Sebastian Inman
// | http://www.pavatimarine.com
// +------------------------------------------------+
// | Filename: boats.php
// | Author: Sebastian Inman (stiffnasty)
// | Last Modified: October 21, 2013
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

    <?php // CHECK IF $_GET EXISTS

        if($_GET['b']){

        // +------------------------------------------------+
        // | GET INFO ON CURRENT BOAT MODEL
        // +------------------------------------------------+

        $modelName = str_replace("boats/","",$_GET['b']);
        // GET BASIC INFO ON CURRENT BOAT MODEL
        $getModel = mysql_query("SELECT * FROM boatmodels WHERE boatname ='$modelName'");
        $model = mysql_fetch_assoc($getModel); 

        // +------------------------------------------------+
        // | CHECK IF BOAT MODEL EXISTS
        // +------------------------------------------------+

        // BOAT MODEL DOES NOT EXISTS - RETURN ERROR
        if(mysql_num_rows($getModel) == 0){ ?>

            <div class="m-content">
                <div class="m-error-container">
                    <?php returnError("Sorry, the page you're looking for doesn't exist."); ?>
                    <a class="animate2 border3 m-button-large" href="../boats">View Boat Models</a>
                </div>
            </div>

        <?php }else{

        // BOAT MODEL EXISTS - CONTINUE
        // GET CURRENT BOAT MODEL SLIDES
        $getSlide = mysql_query("SELECT * FROM slides WHERE slidetype = '$modelName' LIMIT 1");
        $slide = mysql_fetch_assoc($getSlide); 
        $slideimg = str_replace("imgs/slides/boats/","",$slide['slideimg']);
        // GET CURRENT BOAT MODEL OVERVIEW
        $getOverview = mysql_query("SELECT * FROM boatoverview WHERE contenttype = 'text' AND boatid = '".$model['boatid']."'");
        $overview = mysql_fetch_assoc($getOverview);

        ?>

        <!-- FULLSCREEN IMAGE -->
        <div class="m-slider fullscreen" style="background-image: url('../files/images/slides/boats/<?php echo $slideimg; ?>'); -webkit-background-size:cover; background-size:cover; background-position:center center; background-repeat:no-repeat;"></div>
        <!-- BOAT OVERVIEW -->
        <div class="m-content">
            <h1>The Pavati Marine <?php echo $model['boatname']; ?> Overview</h1>
            <p><?php echo $overview['columncontent']; ?></p>
        </div> <!-- END BOAT OVERVIEW -->

        <!-- STANDARD FEATURES -->
        <div class="m-content">
            <h1>Standard Features</h1>
            <ul class="m-features-list">
            <?php // GET CURRENT BOAT MODEL FEATURES
            $getFeatures = mysql_query("SELECT * FROM boatfeatures");
            while($features = mysql_fetch_assoc($getFeatures)){
                $getBetterImg = mysql_query("SELECT * FROM feature_images WHERE featureid = '".$features['featureid']."' LIMIT 1");
                if(mysql_num_rows($getBetterImg) != 0){
                    $betterImg = mysql_fetch_assoc($getBetterImg);
                    $featureimg = str_replace("../imgs/features/","",$betterImg['image']);
                }else{ $featureimg = str_replace("../imgs/boats/features/","",$features['featureimg']); }
                $featBoats = explode(",",$features['featureboats']);
                foreach($featBoats as $featBoat){
                    if($featBoat == $model['boatid']){ ?>
                        <li class="animate2 feature-tab" id="feature-<?php echo $features['featureid']; ?>"><?php echo $features['featurename']; ?></li>
                        <div class="m-feature-content" id="feature-content-<?php echo $features['featureid']; ?>">
                            <img src="../files/images/features/<?php echo $featureimg; ?>" />
                            <p><?php echo $features['featuredesc']; ?></p>
                        </div>
                    <?php }else{}}}?>
            </ul>
        </div> <!-- END STANDARD FEATURES -->

        <!-- DESIGN ELEMENTS -->
        <div class="m-content">
            <h1>Design Elements</h1>
            <?php // GET CURRENT BOAT DESIGN ELEMENTS
            $getDesign = mysql_query("SELECT * FROM boatdesign");
            while($design = mysql_fetch_assoc($getDesign)){
                $designBoats = explode(",",$design['boatid']);
                foreach($designBoats as $designBoat){
                    if($designBoat == $model['boatid']){

                        $formatContent = str_replace("../imgs/boats/design/","../files/images/design/",$design['columncontent']);
                        echo $formatContent;

                    }else{}}}?>
        </div> <!-- END DESIGN ELEMENTS -->

        <!-- CUSTOM OPTIONS -->
        <div class="m-content">
            <h1>Custom Options</h1>
            <ul class="m-custom-tabs">
            <?php // GET CURRENT BOAT CUSTOM OPTIONS
            $getCustomTabs = mysql_query("SELECT * FROM boatcustomtabs");
            while($customTab = mysql_fetch_assoc($getCustomTabs)){
                $customBoats = explode(",",$customTab['boats']);
                foreach($customBoats as $customBoat){
                    if($customBoat == $model['boatid']){ 

                        // GET EACH TABS CUSTOM CONTENT
                        $getCustomContent = mysql_query("SELECT * FROM boatcustomcontent WHERE customtabid = '".$customTab['customtabid']."'");
                        $customContent = mysql_fetch_assoc($getCustomContent); 
                        $formatCustomContent = str_replace("../imgs/boats/custom/","../files/images/custom/",$customContent['customcontent']); ?>

                        <li class="animate2 custom-tab" id="custom-<?php echo $customTab['customtabid']; ?>"><?php echo $customTab['customtab']; ?></li>
                        <div class="m-custom-content" id="custom-content-<?php echo $customTab['customtabid']; ?>">
                            <?php echo $formatCustomContent; ?>
                        </div>

                    <?php }else{}}}?>
            </ul>

            <a class="animate2 border3 m-button-large-green" href="tel:18008665269">Call For Pricing</a>

        </div> <!-- END CUSTOM OPTIONS -->

        <?php }}else{

        // +------------------------------------------------+
        // | GET LIST OF ALL BOAT MODELS
        // +------------------------------------------------+
        
        echo "<div class='m-boat-list'>";
        foreach(query("boatmodels","ALL") as $boat){ ?>

        <a class="m-content m-boat" href="./boats/<?php echo $boat['boatname']; ?>">

            <div class="m-thumb m-boat-thumb">
                <img src="./files/images/boats/boat-model-<?php echo $boat['boatname']; ?>.jpg" />
            </div>

            <div class="m-boat-info">
                <h1>The Pavati Marine <?php echo $boat['boatname']; ?></h1>
                <p><?php echo $boat['boatdesc']; ?></p>
                <button class="animate2 border3 m-button-large">View <?php echo $boat['boatname']; ?></button>
            </div>

        </a>

    <?php } echo "</div>"; } ?>

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
    </html>