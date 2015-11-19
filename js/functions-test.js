// PAVATI MARINE FUNCTIONS /////////////////////////////////////////////////////////////////////

var host = "http://www.pavatimarine.com/";

function checkmobile(){

if ( $(window).width() < 768) { /** is a mobile device **/
var sliderHeight = $(window).width() * 9/16 + 35;

// $(".sliderTitle").hide();

$(".royalSlider").css("height", sliderHeight).css("margin-top", "70px");
$(".main-container").css("margin-top", sliderHeight);
$(".lrg-about-container").hide(); $(".top100").addClass("top0");
$(".top100").removeClass("top100");
$(".like-short").show();
$(".like-long").hide();
$(".gallery-preview-container").remove(); $(".navigation").hide();
$(".mobile-navigation").show(); $(".main-tabs").hide();
$(".newsletter-notification").css("position", "absolute");
$(".newsletter-notification").remove();
$("header").css("top", 0);
$(".toggle-mobile-nav-button").click(function(){ $(".mobile-menu").toggle(); });
$(".mobile-link-boat-models").click(function(){ $(".boat-models-mobile-links").slideDown(); });
$(window).scroll(function(){if($(this).scrollTop() > 530){ $(".mobile-menu").hide(); }else{}});

}else{ if ( $(window).width() < 960) {
var sliderHeight = $(window).width() * 9/16;

// $(".sliderTitle").show();

$(".royalSlider").css("height", sliderHeight).css("margin-top", "70px");
$(".main-container").css("margin-top", sliderHeight);

$(".navigation-right-links").hide(); }else{ /* is not a mobile device */
var sliderHeight = $(window).width() * 9/16 - 140;

// $(".sliderTitle").show();

$(".royalSlider").css("height", sliderHeight).css("margin-top", 0);
$(".main-container").css("margin-top", sliderHeight);

if($.cookie("notification") == "false"){}else{ 

	$("body").append("<div class='newsletter-notification'></div>");
	$(".newsletter-notification").load("../subscribe-form.php");
	if($.cookie("notifyOpen") == "true"){
	$(".newsletter-notification").animate({top: 0}, 500);
	$("header").animate({top: "52px"},500);
	}else{ $.cookie("notifyOpen","true", { expires: 2, path: "/" });
	$(".newsletter-notification").delay(4900).animate({top: 0}, 500);
	$("header").delay(5000).animate({top: "52px"},500); }};

$(".lrg-about-container").show(); $(".top0").addClass("top100");
$(".top0").removeClass("top0");
$(".like-short").hide();
$(".like-long").show();
$(".navigation-right-links").hide().fadeIn(300); $(".navigation").hide().fadeIn(300);
$(".mobile-navigation").hide(); $(".mobile-menu").hide();
$(".main-tabs").show(); $("header").css("position", "fixed");
$(".newsletter-notification").css("position", "fixed");
$('.parallax').scrolly({bgParallax: true});}}; 


// $(".sliderTitle").each(function(){
// var alignTitle = "-" + parseInt($(this).css("height").replace("px","") / 2);
// $(this).css("margin-top", (alignTitle - 20) + "px");
// });


}; /* initialze the parallax effect */

// $(window).load(checkmobile); $(window).resize(checkmobile);

$(document).ready(function(){ 

$(".scroll-down").click(function(){
var windowHeight = ($(window).height() - 70);
$("html, body").animate({scrollTop:windowHeight}, 1500); });


$(".model-nav-right").click(function(){
$(this).hide(); $(".model-nav-left").show();
var boatCont = "-" + $(".boat-models-wrapper").width();
$(".model-wrapper-first").animate({ left: boatCont },500);
$(".model-wrapper-last").animate({ left: 0 },500); });

$(".model-nav-left").click(function(){
$(this).hide(); $(".model-nav-right").show();
var boatCont = $(".boat-models-wrapper").width();
$(".model-wrapper-first").animate({ left: 0 },500);
$(".model-wrapper-last").animate({ left: boatCont },500); });

$(".lrg-about-container").ready(function(){
$(".word-1").delay(500).animate({ opacity: '1'},{ duration: 500 });
$(".word-2").delay(1000).animate({ opacity: '1'},{ duration: 500 });
$(".word-3").delay(2000).animate({ opacity: '1'},{ duration: 500 });
$(".word-4").delay(1500).animate({ opacity: '1'},{ duration: 500 }); });

$(".lrg-comingSoon-container").ready(function(){
$(".coming-soon").delay(1000).animate({ opacity: '1'},{ duration: 500 }); });

$(".boat-specs-table").mouseover(function(){
var table = parseInt($(this).attr("id").replace("table-",""));
var price = $("#price-" + table); var priceText = price.text();
price.text("Call For A Quote"); $(".boat-specs-table").mouseout(function(){ price.text(priceText); }); });

$(".privacy-policy").click(function(){
$(".overlay-copy-container").remove();
$("body").append("<div class='overlay-copy-container'></div>");
$(".overlay-copy-container").hide().fadeIn(500);
$(".overlay-copy-container").load(host + "/privacy-policy.php"); });

$(".close-copy-container").click(function(){ $(".overlay-copy-container").remove(); });
$(".gallery-image").hide().delay(500).fadeIn(300);

$(".error, .success, .notification").hide().delay(250).slideDown(250);
$(".about-content").fadeIn(300);

$(".fb-comment-link").click(function(){
$(".comment-form").hide(); $(".fb-comments").show(); });

$(".custom-tab").click(function(){
$(".custom-tab").removeClass("current-custom-tab");
$(this).addClass("current-custom-tab");
var customtab = $(this).attr("id").replace("about-tab-","");
$(".custom-content").hide();
$("#custom-" + customtab).hide().fadeIn(300); });
$(".custom-tab:first").click();

$(".join-newsletter").click(function(){ 
$("html, body").animate({scrollTop:0}, "slow");
$(".join-newsletter-container").slideToggle(300); });

$(".cancel-newsletter").click(function(){
$("#awf_field-46943844").val(""); $("#aweber-name").val("");
$("#awf_field-46943845").val(""); $("#aweber-email").val("");
$("#awf_field-46943846").val(""); $("#aweber-phone").val("");
$("#awf_field-46943847").val(""); $("#aweber-address").val("");
$("#awf_field-46943848").val(""); $("#aweber-found").val("");
$("#awf_field-46943849").val(""); $("#aweber-message").val("");
$(".join-newsletter-container").slideToggle(300); });

var images = [];
$(".gallery-image").each(function(){ images.push($(this).attr("id")); }); // create array of each image in gallery
var max = images.length - 1; // total number of images in gallery
var img = 0;

$(".gallery-image").click(function(){
if ( $(window).width() > 768) { img = 0;
img = parseInt($(this).attr("class").toString().split(" ")[1].replace("image-", "")) - 1; // get the current image from array
if(img == max){ var next = 0; }else{ var next = img + 1; } // get the next image
if(img == 0){ var prev = max; }else{ var prev = img - 1; } // get the previous image
$("html, body").css("overflow", "hidden");
$("body").append("<div class='gallery-preview-container'></div>");
$(".gallery-preview-container").append("<div class='container gallery-image-container'></div>");
$(".gallery-image-container").append("<div class='gallery-image-text animate-slow'></div>");
$(".gallery-image-container").append("<div class='close-gallery animate-slow'></div>");
$(".gallery-image-container").append("<img class='gallery-full-image' />");
$(".gallery-image-container").append("<div class='gallery-nav prev animate-slow'></div>");
$(".gallery-image-container").append("<div class='gallery-nav next animate-slow'></div>");
$(".gallery-full-image").attr("src", host + "imgs/gallery/" + images[img]);
$(".gallery-full-image").attr("id", img);

$(".gallery-full-image").load(function(){
var maxWidth = $(window).width(); var maxHeight = $(window).height();
var ratio = 0; var width = this.width; var height = this.height;
if(width > maxWidth){ ratio = maxWidth / width; $(this).css("width", maxWidth); 
$(this).css("height", height * ratio); height = height * ratio; }
var width = $(this).width(); var height = $(this).height();
if(height > maxHeight){ ratio = maxHeight / height; $(this).css("height", maxHeight);
$(this).css("width", width * ratio); width = width * ratio; }
$(this).css("margin-left", "-" + (width / 2) + "px"); });


$(".prev").attr("id", prev); $(".next").attr("id", next);
$(".gallery-preview-container").hide().fadeIn(500);
$(".gallery-image-container").hide().delay(1000).fadeIn(500);
$(".gallery-image-text").hide().delay(1500).fadeIn(500);
$(".gallery-image-text").html("Image " + (img+1) + " of " + images.length);
$(".gallery-nav").click(function(){
	$(".gallery-full-image").remove();
	$(".gallery-image-container").append("<img alt='Pavati Marine Image Gallery' class='gallery-full-image' />");
	$(".gallery-full-image").hide().delay(500).fadeIn(500);	
	$(".gallery-image-text").html(""); });
$(".prev").click(function(){
	img = 0;
	img = parseInt($(this).attr("id"));
	if(img == max){ var next = 0; }else{ var next = img + 1; } // get the next image
	if(img == 0){ var prev = max; }else{ var prev = img - 1; } // get the previous image
	$(".gallery-full-image").attr("src", host + "imgs/gallery/" + images[img]);
	$(".gallery-full-image").attr("id", img);
	$(".gallery-full-image").load(function(){
	var maxWidth = $(window).width(); var maxHeight = $(window).height();
	var ratio = 0; var width = this.width; var height = this.height;
	if(width > maxWidth){ ratio = maxWidth / width; $(this).css("width", maxWidth); 
	$(this).css("height", height * ratio); height = height * ratio; }
	var width = $(this).width(); var height = $(this).height();
	if(height > maxHeight){ ratio = maxHeight / height; $(this).css("height", maxHeight);
	$(this).css("width", width * ratio); width = width * ratio; }
	$(this).css("margin-left", "-" + (width / 2) + "px"); });
	$(this).attr("id", prev);
	$(".next").attr("id", next);
	$(".gallery-image-text").html("Image " + (img+1) + " of " + images.length); });
$(".next").click(function(){
	img = 0;
	img = parseInt($(this).attr("id"));
	if(img == max){ var next = 0; }else{ var next = img + 1; } // get the next image
	if(img == 0){ var prev = max; }else{ var prev = img - 1; } // get the previous image
	$(".gallery-full-image").attr("src", host + "imgs/gallery/" + images[img]);
	$(".gallery-full-image").attr("id", img);
	$(".gallery-full-image").load(function(){
	var maxWidth = $(window).width(); var maxHeight = $(window).height();
	var ratio = 0; var width = this.width; var height = this.height;
	if(width > maxWidth){ ratio = maxWidth / width; $(this).css("width", maxWidth); 
	$(this).css("height", height * ratio); height = height * ratio; }
	var width = $(this).width(); var height = $(this).height();
	if(height > maxHeight){ ratio = maxHeight / height; $(this).css("height", maxHeight);
	$(this).css("width", width * ratio); width = width * ratio; }
	$(this).css("margin-left", "-" + (width / 2) + "px"); });
	$(this).attr("id", next);
	$(".prev").attr("id", prev);
	$(".gallery-image-text").html("Image " + (img+1) + " of " + images.length); }); 

$(".close-gallery").click(function(){ img == -1;
$("html, body").css("overflow-y", "scroll");
$(".gallery-preview-container").fadeOut(250);
$(".gallery-preview-container").remove(); });
$(document).keyup(function(e) { if (e.keyCode == 37) { $(".prev").click(); }}); // keyboard previous
$(document).keyup(function(e) { if (e.keyCode == 39) { $(".next").click(); }}); // keyboard next
$(document).keyup(function(e) { if (e.keyCode == 27) { $(".close-gallery").click(); }}); // keyboard close
}else{}});


/* news reel accordian on the home page */
$(".news").click(function(){
var news = $(this).attr("id").replace("news-","");
if ( $(window).width() < 768) {
$(".news-story").hide();
if( $(".news-story-" + news).css("display") == "block" ){
}else{ $(".news-story-" + news).show(); }
}else{ $(".news-story").slideUp(150);
if( $(".news-story-" + news).css("display") == "block" ){
}else{ $(".news-story-" + news).slideDown(150); }}});
$(".news:first").click();

/* boat drop down navigation */
$(".navlink-boats").mouseover(function(){
$(this).addClass("current-nav-link");
$(".navlink-indicator").fadeIn(200);
$(".boat-model").show();
$(".boat-models-drop-menu").css("top", "70px"); });

/* show or hide the feature link depending on how long the text is */
$(".feature-text").each(function(){
var string = $(this).text();
var count = string.split(" ");
var feature = $(this).attr("id").replace("feature-info-","");
var link = $(".feature-link-" + feature);
if(count.length > 80){ link.show(); }else{ link.hide(); }});

/* control the read more action for boat features */
$(".feature-link").click(function(){
var featurelink = $(this).attr("id").replace("feature-link-","");
if( $(".feature-info-" + featurelink).css("height") == "84px" ){
$(".feature-info-" + featurelink).animate({ height: "100%"}, 150);
$(this).text("Show Less"); $(this).addClass("feature-link-open"); }else{
$(".feature-info-" + featurelink).animate({ height: "84px"}, 150);;
$(this).text("Show More"); $(this).removeClass("feature-link-open"); }});

/* scroll to top of page functionality */
$(".scroll-top").click(function(){
$("html, body").animate({scrollTop:0}, "slow");
return false; }); $(window).scroll(function(){
if( $(this).scrollTop() >= $(this).height() ){
$(".scroll-top").show();
}else{ $(".scroll-top").hide(); }});


// $(window).scroll(function(){
// var fadeTitle = ($(window).width() * 9/16) / 5;
// if( $(this).scrollTop() >= fadeTitle ){
// $(".sliderTitle").fadeOut(250);
// }else{ $(".sliderTitle").fadeIn(250); }
// });


function closemenu(){
$(".boat-models-drop-menu").css("top", "-350px");
$(".navlink-boats").removeClass("current-nav-link");
$(".navlink-indicator").fadeOut(200); };
$(".main-page, header a").mouseover(function(){ closemenu(); });
$(".fullscreen-image-slide").hide().delay(2000).fadeIn(500);
$(".boat-top-info").hide().delay(2500).fadeIn(500);

$(".searchfield").keyup(function(){
var words = $(this).val().replace(" ", "-"); $(this).val(words);
$(".search-form").attr("action", "./" + words); });

});

$(".add-blog-cat").click(function(){ /* admin - add new blog category */
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-addBlogCat.php").delay(1000).fadeIn(300); });

$(".edit-blog-cat").click(function(){ /* admin - edit existing blog category */
var catID = $(this).attr("id").replace("editCat","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-editBlogCat.php?id=" + catID).delay(1000).fadeIn(300); });

$(".add-blog-post").click(function(){ /* admin - add new blog post */
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-addBlogPost.php").delay(1000).fadeIn(300); });

$(".edit-blog-post").click(function(){ /* admin - edit existing blog post */
var post = $(this).attr("id").replace("editPost","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-editBlogPost.php?id=" + post).delay(1000).fadeIn(300); });

$(".pendingComments").click(function(){ /* admin - manage blog comments */
var post = $(this).attr("id").replace("comments","");
$("body").append("<div class='shadow'><div class='admin-editor'></div></div>"); $(".admin-editor").drags();
$(".shadow").hide().delay(300).fadeIn(300); $(".admin-editor").hide().load("../admin-manageComments.php?id=" + post).delay(1000).fadeIn(300); });


$(".forSale-content").hide();
$(".forSale-nav").click(function(){
$(".forSale-nav").removeClass("about-current-slide");
$(this).addClass("about-current-slide");
$(".forSale-content").hide();
var saleTab = $(this).attr("id").replace("forsale-","");
var saleContent = $(".content-" + saleTab);
saleContent.hide().delay(300).fadeIn(300);
}); $(".forSale-nav:first").click();