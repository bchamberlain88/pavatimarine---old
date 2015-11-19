function checksize(){

    windowWidth = $(window).width();
    windowHeight = $(window).height();
    contentWidth = windowWidth*0.8;
    fullscreenHeight = contentWidth-70;
    margin = windowWidth*0.02;
    thumbHeight = $(".m-thumb").width()/6*4;
    videoHeight = contentWidth/6*4;
    footerHeight = $(".m-footer").height() + 50;
    mcontentWidth = $(".m-content").width();
    controlMargin = windowWidth*0.01;
    $(".m-thumb").css("height",thumbHeight);
    $(".m-video").attr("height",videoHeight);
    $(".m-thumbnails").css("height",thumbHeight);
    $(".m-slides").css("width",mcontentWidth);
    $(".m-error-container,.m-sale").css("min-height",windowHeight - footerHeight - 61);
    $(".m-blog").css("min-height",windowHeight - footerHeight - 131);
    //$(".m-slide-left").css("left",windowWidth-100);
    //$(".m-slide-right").css("right",windowWidth+100);

}


$(document).ready(function(){

    checksize();
    $("#slides-1").show();
    $(".m-slide-right").show();

    $(".m-nav-btn").click(function(){
        var menuPos = $(".m-nav").css("right").replace("px","");
        var menuWidth = $(".m-nav").width();

        if($(".m-nav").css("display") == "none"){
            $(".m-nav").css("right","-"+menuWidth).show(function(){
                $(this).animate({right: 0}, 250);
            });
            $(".m-nav-btn").addClass("m-nav-btn-open");
        }else{
            $(".m-nav").animate({right: "-"+menuWidth}, 250, function(){
               $(this).hide(); 
            });
            $(".m-nav-btn").removeClass("m-nav-btn-open");
        }
        

    });

    $(".fullscreen").css("height",fullscreenHeight);

    $(".m-thumbnails").swipe( { swipeLeft:swipe1, swipeRight:swipe1, allowPageScroll:"auto"} );
    function swipe1(event, direction) {

        if(direction == "left"){
            $(".m-thumbnails").animate({left: "-"+(mcontentWidth + margin)},500);
            $(".m-slide-right").fadeOut(250);
            $(".m-slide-left").fadeIn(250);
        }

        if(direction == "right"){
            $(".m-thumbnails").animate({left: 0},500);
            $(".m-slide-left").fadeOut(250);
            $(".m-slide-right").fadeIn(250);
        }

      }


      $(".m-nav-swiper").swipe({swipeLeft:toggleNav});
      $(".m-nav, .m-nav-link").swipe({swipeRight:toggleNav});
      function toggleNav(event, direction){
        
        $(".m-nav-btn").click();
        
      }

      $(".feature-tab").click(function(){
        var featureid = $(this).attr("id").replace("feature-","");
        $(".m-feature-content").slideUp(250);
        $(".feature-tab").removeClass("open-tab");
        if($("#feature-content-"+featureid).css("display") == "none"){
            $("#feature-content-"+featureid).delay(250).slideDown(250);
            $("#feature-"+featureid).addClass("open-tab");
        }else{
            $("#feature-content-"+featureid).slideUp(250);
        }});


      $(".custom-tab").click(function(){
        var customid = $(this).attr("id").replace("custom-","");
        $(".m-custom-content").slideUp(250);
        $(".custom-tab").removeClass("open-tab");
        if($("#custom-content-"+customid).css("display") == "none"){
            $("#custom-content-"+customid).delay(250).slideDown(250);
            $("#custom-"+customid).addClass("open-tab");
        }else{
            $("#custom-content-"+customid).slideUp(250);
        }});


      $(".sale-tab").click(function(){
        var saleid = $(this).attr("id").replace("sale-","");
        $(".sale-content").slideUp(250);
        $(".sale-tab").removeClass("open-tab");
        if($("#sale-content-"+saleid).css("display") == "none"){
            $("#sale-content-"+saleid).delay(250).slideDown(250);
            $("#sale-"+saleid).addClass("open-tab");
        }else{
            $("#sale-content-"+saleid).slideUp(250);
        }});

      $(".sale-tab:first").click();


      $(".blog-tab").click(function(){
        var blogid = $(this).attr("id").replace("blog-","");
        $(".blog-content").slideUp(250);
        $(".blog-tab").removeClass("open-tab");
        if($("#blog-content-"+blogid).css("display") == "none"){
            $("#blog-content-"+blogid).delay(250).slideDown(250);
            $("#blog-"+blogid).addClass("open-tab");
        }else{
            $("#blog-content-"+blogid).slideUp(250);
        }});


      $(".m-map").html("<img class='m-map-image' src='http://maps.google.com/maps/api/staticmap?markers=color:red|Pavati+Marine, White City, OR&amp;size="+windowWidth+"x400&amp;sensor=false'>");

      $(".m-home-thumb").click(function(){
        var thumb = $(this).attr("id").replace("thumb-","");
        var newpath = "/gallery/"+thumb;
        window.location = newpath;
      });

});

$(window).load(checksize); $(window).resize(checksize);