function resize(){

    screenWidth = $(window).width();
    screenHeight = $(window).height();

    if( screenWidth > 700 ) {

        if($('.royalSlider').length > 0){
            var sliderHeight = $(window).width() * 9/16 - 300;
            $(".royalSlider").css("height", sliderHeight);
            $('.bottom-content, .bc').animate({top: sliderHeight},250);
        }else{}

        $(".fullscreen").css("width",screenWidth + 2);
        $(".test-row-container").css("height",screenHeight/2);

        $(".thumb-container, .video, .cinema-video").each(function(){

            var tw = $(this).width(),
                th = tw*9/16;
            $(this).css("height", th);

        });

    }

}

$(".testimonial-page").append("<div class='testimonial-container' />");
$(".testimonial-container").load("../add-testimonial.php");

$(document).ready(function(){

    $('.toggle-mobile-nav-button').click(function(){
        $('.m-menu').toggleClass('open');
    });

    $(".thumb-container").each(function(){

        var tw = $(this).width(),
            th = tw*16/9;
        $(this).css("height", th);

    });

    parameters = window.location.hash.replace("#/","").split("/#/");

    var video = 0;
    $(".video-thumb").each(function(){

        video++;
        var source = $(this).attr("data-video"),
            title = $(this).attr("id");

        $(this).append("<div class='video-button' id='video-"+video+"'/>");
        $("#video-"+video).click(function(){

            window.location.hash = "#/video/#/"+title+"/";

            $("body").append("<div class='cinema'/>");
            $(".cinema").hide().delay(100).fadeIn(200, function(){

                $(this).append("<div class='close-cinema'/>");

                $("body").append(source);
                var cin_x = $(window).width() / 2,
                    cin_y = cin_x * 9/16;
                $(".cinema-video").attr("width",cin_x).attr("height",cin_y).css("margin","-"+cin_y/2+"px 0px 0px -25%").delay(100).fadeIn(200);

                $(".cinema, .close-cinema").click(function(){

                    window.location.hash = window.location.hash.replace("#/video/#/"+title+"/","/");

                    $(".cinema-video").delay(100).fadeOut(200, function(){

                        $(this).remove();
                        $(".cinema").delay(100).fadeOut(200, function(){

                            $(this).remove();

                        });

                    });

                });

            });

        });

    });

    resize();

    $(".side-contact-tab").click(function(){
        $(".contact-shadow").delay(150).fadeIn(300);
        $(".contact-overlay").delay(500).fadeIn(300);

        $(".contact-shadow, .close-overlay").click(function(){
           $(".contact-overlay").delay(150).fadeOut(300);
           $(".contact-shadow").delay(500).fadeOut(300);
        });

    });


    /* NAVIGATION LINK MOUSE OVER */
    $(".navlink").click(function(){
        $(".navlink").removeClass("curnav");
        $(this).addClass("curnav");
        var dropper = $(this).attr("id").replace("navlink-","");
        var dropperPos = $("#dropper-" + dropper).css("top").replace("px","");

        /* CREATE DROPPER CLOSE DIV */
        $("body").append("<div class='dropperCloser' />");
        $(".dropperCloser").delay(250).animate({top: 0},500);


         /* SUB LINK CLICK */
        $(".sublink").click(function(){
            $(".sublink").removeClass("cursubnav");
            $(this).addClass("cursubnav");
            items = $(this).attr("id").replace("sublink-","");
            $(".item").hide(); if(items == 1){ $(".item").show();
            }else{ $(".items-" + items).show(); }});


        var firstSublink = $("#subs-" + dropper + " li:first").attr("id").replace("sublink-","");
        $("#sublink-" + firstSublink).click();

        if(dropperPos == -300){
            /* NO DROPPER OPEN - SLIDE DROPPER DOWN */
            $(".dropper").animate({top: "70px"});
            $(".dropper").css("z-index",10);
            $("#dropper-" + dropper).css("z-index",15);
        }else{
            /* DROPPER OPEN - REPLACE OPEN DROPPER */
            $(".dropper").css("z-index",10);
            $("#dropper-" + dropper).css("z-index",15);
        }

        /* CLOSE THE DROPPERS */
        $(".dropperCloser").hover(function(){
            $(".navlink").removeClass("curnav");
            $(".dropper").animate({top: "-300px"}, 350, function(){
            $(".dropperCloser").remove(); }); });
    });

        /* CLOSE THE DROPPERS */
        $(".dropper-close, .logo, .nav-link, .item").click(function(){
            $(".navlink").removeClass("curnav");
            $(".dropper").animate({top: "-300px"}, 350, function(){
            $(".dropperCloser").remove(); }); });


        /* CALLOUT FEATURE CLICK */
        $(".callout-feature").click(function(){
           feature = $(this).attr("id").replace("callout-","");
           $(".callout-feature").removeClass("current-feature");
           $(this).addClass("current-feature");
           $(".callout-info").hide();
           $("#info-" + feature).fadeToggle(500);
        });


        /* LOAD CALLOUT FEATURES */
        $(".callout-feature").each(function(e){
           $(this).hide().delay(e * 250).fadeIn(500); });
        window.setTimeout(clickFeature, 1500);
        function clickFeature(){
            $("#callout-3").click();
            var minHi = 1; var curHi = feature;
            var maxHi = $(".callout-feature").length;
            var hlInterval = setInterval(nextHiLite, 5000);
            function nextHiLite(){
                curHi++;
                if(curHi > maxHi){ curHi = minHi;
                }else{ curHi = curHi; }
                $("#callout-" + curHi).click();
            $(".callout-model").hover(function(){
                clearInterval(hlInterval); }); }}


        // TESTOMINALS
        var testHead = ["Mike Pollard", "Littleleaf Guide Service, Oregon",
                        "Brad, Oregon", "Cody, Utah", "Rich, Idaho", "Geoff, Oregon", "Rich, Canada"];

        var testBody = ["I've put my 17 foot Warrior into some of the most difficult water that exists in Washington. I live in Selah, Washington and my river of choice is the Klickitat by Goldendale. This river is the toughest on boats since it is riddled with large rocks, steep chutes, and often lower water. This can be a recipe for disaster and the main reason I believe many boaters stay away. I ran this river for 20 years in a fiberglass boat (name witheld) and was amazed that it still held water after hitting so many rocks! The bottom didn't fare very well and had many battle scars and missing gelcoat. The gelcoat was almost completely gone on the chines despite many recoats. The greatest thing is now I FLOAT over those same rocks I used to hit!I'm delighted that the only new driftboat I've purchased in my life was a Pavati.  Since I'm 46, I believe it will be my last!",
                        "The doors are a blessing for the elders, children and tight waders. We love our Paviti Warrior, spendy and worth it 100%. Now we have to practice opening doors for our clients, like a chauffeur limo driver. Lol! Thanks Chuck and Steve and the Paviti crew.",
                        "A friend just got his Pavati and I'm impressed. After my knee replacement and soon to be hip replacement surgery (at 50) those doors are looking really good.",
                        "I've been looking into getting a good drift boat, I've looked at Hyde and few others but the ideas you guys have come up with are the best I've seen. Thank you for your inovative ideas.",
                        "Love your creations. All class and great design!", "I am currently working on getting my wife to see the need for a different boat, the doors on your drift boats are so far the biggest selling point for her.", "I am a proud owner of a Pavati Warrior 17x60 for about a year now. I would recommend Pavati to anyone interested in a drift boat. My boat is the hottest boat on the Skagit. I even have sled owners turning their heads. Chuck and the Pavati team treat you like family during the purchase & sell. I still keep in touch with them on a regular basis."];

        var minTest = 0;
        var maxTest = testHead.length - 1;
        var currTest = 0;
        var testTime = setInterval(nextTest, 12000);
        function nextTest(){

            currTest++;
            if(currTest > maxTest){ currTest = minTest; }else{ currTest = currTest; }

            $(".test-head").fadeOut(250, function(){
               $(this).empty().html(testHead[currTest]).fadeIn(250);
            });

            $(".test-body").fadeOut(250, function(){
               $(this).empty().html(testBody[currTest]).fadeIn(250);
            });

            var el = $('.box'),
                curHeight = el.height(),
                autoHeight = el.css('height', 'auto').height();

            if( el.length > 0 ) {
            el.height(curHeight).animate({height: autoHeight}, 1000);
            } else {}

        }


        var feature = 3;
        $(".features-row").each(function(){
            $("#feature-" + feature).css("margin",0);
            feature = feature + 3;
        });

        $(".feature").click(function(){
            var clicked = $(this).attr("id").replace("feature-","");
            var row = $(this).closest("ul").attr("id");
            $(".feature-indicator").remove();
            $(".close-feat-dropper").remove();
            $(this).append("<div class='feature-indicator'/>");
            $(".feature-dropper").hide();
            $("#feat-dropper-" + clicked).append("<div class='close-feat-dropper'/>").slideDown();
            $('html,body').animate({scrollTop:$(this).offset().top}, 500);

            $(".close-feat-dropper").click(function(){
                $(".feature-dropper").slideUp(500);
                $(".feature-indicator").fadeOut(500, function(){
                    $(this).remove();
                });
                $(".close-feat-dropper").remove();
            });

        });


        $(".shop-cat-header").click(function(){
            var shopcat = $(this).attr("id").replace("shop-head-","");
            $(".shop-cat-header").removeClass("bordersTop3").addClass("border3");
            $(this).removeClass("border3").addClass("bordersTop3");
            $(".open-indicator").removeClass("shop-cat-open").addClass("shop-cat-closed");
            $("#shop-indicator-" + shopcat).removeClass("shop-cat-closed").addClass("shop-cat-open");
            $(".shop-cat").slideUp(250); $("#shop-cat-" + shopcat).slideDown(250); });


        $(".item-tab").click(function(){
            var item = $(this).attr("id").replace("item-tab-","");
            $(".item-tab").removeClass("current-item-tab");
            $(this).addClass("current-item-tab");
            $(".item-content").hide();
            $("#item-content-" + item).fadeIn(250); });

        $(".item-thumb").click(function(){
            var thumb = $(this).attr("id").replace("thumb-","");
            var image = thumb + "330.jpg";
            $(".item-thumb").removeClass("current-item-thumb");
            $(this).addClass("current-item-thumb");
            $(".item-image").attr("id", "image-" + thumb);
            $(".item-image").css("background","url(http://m-ixr.com/pavatimarine/files/images/products/" + image + ") center center no-repeat");
        });

        $(".item-image").mouseover(function(){
            var image = $(this).attr("id").replace("image-","");
            var small = image + "330.jpg"; var large = image + "990.jpg";
            $(this).css("background","url(http://m-ixr.com/pavatimarine/files/images/products/" + large + ") center center no-repeat");
            $(this).mousemove(function(e){
                var x = Math.ceil(e.pageX - $(this).offset().left);
                var y = Math.ceil(e.pageY - $(this).offset().top);
                $(this).css("background-position", -x*2 + "px " + -y*2 + "px"); });
            $(this).mouseout(function(){
                $(this).css("background","url(http://m-ixr.com/pavatimarine/files/images/products/" + small + ") center center no-repeat"); }); });

        $(".item-thumb:first").click();
        $(".item-tab:first").click();


        // GALLERY THUMBNAILS SLIDER
        currThumbs = 0;
        $(".gallery-slider-navigation").click(function(){
            var direction = $(this).attr("id").replace("slide-","");
            var minSlides = 1;
            var maxSlides = $(".gallery-slides").length;

            // SLIDE GALLERY THUMBNAILS TO THE LEFT
            if(direction == "left"){ if(currThumbs >= maxSlides){ currThumbs = minSlides; }else{ currThumbs++; }

            // SLIDE GALLERY THUMBNAILS TO THE RIGHT
            }else{ if(currThumbs <= minSlides){ currThumbs = maxSlides; }else{ currThumbs--; } }

            $(".gallery-slides").hide();
            $("#slides-container-" + currThumbs).fadeIn(500);

        });

        $(".press-tab").click(function(){
            $(".press-content").hide();
            var press = $(this).attr("id").replace("press-tab-","");
            $(".press-tab").removeClass("about-current-slide");
            $(this).addClass("about-current-slide");
            $("#press-content-"+press).show();
        });

        $(".press-tab:first").click();




if(parameters[0]){

    if(parameters[0] == "video"){

        if(parameters[1]){

            var video = parameters[1].replace("/","");
            $("#"+video+" .video-button").click();

        }

    }

}


$(".sale-sort").click(function(){

    if($(this).hasClass("active")){}else{

    $(".sale-sort").removeClass("active");
    $(this).addClass("active");

    var sort = $(this).attr("id").replace("sort-","");
    if(sort === "all"){

      $(".sale-thumb").show();

    }else{

        $(".sale-thumb").each(function(){

            var thumb = $(this).attr("data-sort");
            if(thumb === sort){ $(this).show(); }else{

                $(this).hide();

            }

        });

    }}

});


$(".sale-thumb").click(function(){

    var saleImg = $(this).find("img").attr("src"),
        saleTit = $(this).find(".sale-title").html(),
        saleTyp = $(this).attr("data-sort"),
        saleTxt = $(this).find(".sale-text").html(),
        saleURL = $(this).attr("id");

    window.location.hash = "/"+saleURL+"/";

    if($(".sale-dialog").length > 0){}else{
    $("body").append("<div class='sale-dialog'/>");

        $(".sale-dialog").append("<div class='dialog-img'><img src='"+saleImg+"' /></div>");
        $(".dialog-img").append("<button class='close-sale'/>");
        $(".sale-dialog").append("<h1>"+saleTit+" For Sale</h1>");
        $(".sale-dialog").append("<label>"+saleTyp+"</label>");
        $(".sale-dialog").append("<div class='dialog-txt'>"+saleTxt+"</div>");
        $(".sale-dialog").append("<a class='dialog-contact'>Call 1-800-866-5269 For Pricing & Availability</a>");
        $(".sale-dialog").delay(200).fadeIn(300);

        $(".close-sale").click(function(){
        $(".sale-dialog").delay(200).fadeOut(300, function(){
        window.location.hash = "/";
        $(this).remove(); }); });

        $(window).keyup(function(event){
        var code = event.keyCode || even.which;
        if(code === 27){ $(".close-sale").click(); }});

    }

});

$(".gallery-thumb").click(function(){

    var min = 1, max = $(".gallery-thumb").length,
        cat = $(this).attr("data-cat"),
        img = $(this).attr("data-img"),
        src = $(this).attr("src").replace("thumbs/","");

        if($(".gallery-big").length > 0){}else{
        $(".side-contact-tab, .scrollTop").addClass("active");
        $("body").append("<img class='gallery-big' src='"+src+"' />");

        window.setTimeout(function(){

            var imgw = $(".gallery-big").width()/2,
                imgl = $(window).width()/2 - imgw - 50,
                imgr = $(window).width()/2 + imgw;

            $(".gallery-big").delay(300).fadeIn(300, function(){

                $("body").append("<div class='prev-img-big' />");
                $("body").append("<div class='next-img-big' />");
                $("body").append("<div class='exit-img-big' />");
                $(".prev-img-big, .next-img-big").delay(600).fadeIn(300);

                $(".next-img-big").click(function(){

                    img--;

                    if(img < min){ img = max; }else{}
                    var next = $(".gallery-thumb[data-img='"+img+"']").attr("src").replace("thumbs/","");
                    $(".gallery-big").stop().attr("src", next);

                });

                $(".prev-img-big").click(function(){

                    img++;

                    if(img > max){ img = min; }else{}
                    var prev = $(".gallery-thumb[data-img='"+img+"']").attr("src").replace("thumbs/","");
                    $(".gallery-big").stop().attr("src", prev);

                });

                $(".exit-img-big").click(function(){
                    img = "";
                    $(".gallery-big, .prev-img-big, .next-img-big").fadeOut(300, function(){ $(this).remove(); });
                    $(".side-contact-tab, .scrollTop").removeClass("active");
                    $(".prev-img-big").remove(); $(".next-img-big").remove(); $(".exit-img-big").remove();
                });

                $(window).keyup(function(event){

                    event.preventDefault();
                    var key = event.keyCode || event.which;

                    if(key === 27){

                    $(".gallery-big, .prev-img-big, .next-img-big").fadeOut(300, function(){ $(this).remove(); });
                    $(".side-contact-tab, .scrollTop").removeClass("active");
                    $(".prev-img-big").remove(); $(".next-img-big").remove(); $(".exit-img-big").remove();

                    }

                    if(key === 39){ $(".prev-img-big").click(); }
                    if(key === 37){ $(".next-img-big").click(); }

                });

            });

        }, 300);

        }

});

$(".toggle-thumbs").click(function(){

    $(".toggle-thumbs").removeClass("active");
    $(this).addClass("active");

    $(".thumb-container").hide();
    var toggle = $(this).attr("id").replace("toggle-","");
    window.location.hash = "/"+toggle+"/";
    if(toggle === "all"){

        $(".thumb-container").delay(250).fadeIn(500);

    }else{

        $(".thumb-container[data-cat='"+toggle+"']").delay(250).fadeIn(500);

    }

});


    $(".value").each(function(i){

        var vals = $(this).attr("data-value");
        $(this).css("width",0).delay(i*250).animate({width: vals+"%"}, 250);

    });


}); /* END DOCUMENT READY FUNCTION */

// CREATE PARALLAX EFFECT
function lax(){ var scrolled = $(window).scrollTop();
$('.lax').css('top', (scrolled * 0.3) + 'px'); }
$(window).scroll(function(){ lax(); });

// SCROLL TO TOP BUTTON
$(".scrollTop").click(function(){
$("html, body").animate({scrollTop:0}, "slow");
return false; }); $(window).scroll(function(){
if( $(this).scrollTop() >= $(this).height() ){
$(".scrollTop").css("bottom",0);
}else{ $(".scrollTop").css("bottom","-60px"); }});


$(window).resize(resize);