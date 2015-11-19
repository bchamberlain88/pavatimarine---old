var window_y = $(window).height(),
	window_x = $(window).width(),
	current_section = 0;

$(document).ready(function(){

	$(".scroll-down").click(function(){
		$("body").animate({scrollTop: window_y}, 600);
	});

	$("section").each(function(){

		var section_name = $(this).attr("data-name"),
			section_id = $(this).attr("id");

		$(".navigation").append("<li class='nav-item' id='nav-"+section_id+"'><i class='fa fa-circle-o'></i>"+section_name+"</li>");

	});

	$(".nav-item").click(function(){

		var this_item = $(this).attr("id").replace("nav-",""),
			this_pos = $("#"+this_item).position().top;

		$("html, body").animate({scrollTop: this_pos}, 500);

	});

	url = window.location.hash.replace("#/","").replace("/","");

	$(".video").each(function(){
	var video_x = $(this).width(),
		video_y = video_x * 9/16;
	$(this).attr("height", video_y); });

	current_slide = 0; min_slider_pos = 0;
	slide_pos = 0; max_slider_pos = $(".slide").length - 1;

	$(".quick-lock-item").draggable({
	distance: 20, grid: [20, 20], 
	snap: ".quick-lock-floor", 
	containment: ".quick-lock-floor" });

	$(".switch-slider").draggable({
	axis: "x", containment: ".before-after", 
	drag: function(){ var drag_x = $(this).position().left;
	$(".before").css("width",drag_x); var max = parseInt($(".before-after").css("width").replace("px",""))*0.75;

	if( parseInt($(".before").css("width").replace("px","")) >= max){

		$(".color-option").each(function(){
			var color = $(this).attr("data-color");
			$(this).css("background",color);
			$(this).click(function(){

				$(".before").stop().animate({"backgroundColor": color}, 200);

			});
		});

		$(".before-after-options").show();

	}else{

		$(".before-after-options").hide();

	}

	}});

	$(".nav-btn, .nav-close-btn").click(function(){
	$(this).removeClass("invert");
	$("aside, body").toggleClass("open"); });

	$(window).scroll(function(){

		var scrolled = $(this).scrollTop();

		$("section").each(function(i){
		var section_top = window_y * i,
			section_bot = section_top + window_y;

		if(scrolled >= (section_top - (window_y/2))){
		current_section = i + 1; }});

		var section = $("section:nth-of-type("+current_section+")").attr("class").split(" ")[0],
			section_id = $("section:nth-of-type("+current_section+")").attr("id");

		$("."+section+" .velocity").each(function(){
		var velocity = $(this).attr("data-velocity"),
			movement = scrolled * velocity;
		$(this).css("marginTop", movement); });

		$(".nav-btn").removeClass("invert");
		if($("."+section).hasClass("invert")){
		if($("aside").hasClass("open")){}else{
		$(".nav-btn").addClass("invert"); }}

		if($("."+section).hasClass("parallax")){

			var velocity = $(this).attr("data-velocity"),
				movement =scrolled * velocity;
			$(this).css("background-position", movement+"px");

		}

		window.location.hash = "#/"+section+"/";

		$(".nav-item").removeClass("active").children().removeClass("fa-dot-circle-o").addClass("fa-circle-o");
		$("#nav-"+section_id).addClass("active").children().removeClass("fa-circle-o").addClass("fa-dot-circle-o");

		$(".hilight").removeClass("active");
		$("."+section+" .hilight").each(function(){
		$(this).addClass("active"); });

		$("."+section+" .mouse-velocity").each(function(){
		var velocity = $(this).attr("data-velocity"),
			origin = $(this).attr("data-velocity-origin");
		$("."+section).mousemove(function(event){
		var mouse_x = event.pageX,
			mouse_y = event.pageY,
			trans_x = mouse_x * velocity,
			trans_y = (mouse_y * velocity) * -1;
		$("."+section+" .mouse-velocity").each(function(){
		$(this).css("margin"+origin, trans_x);
		$(this).css("marginTop", trans_y); }); }); });

		$("."+section+" .hidden").each(function(){
		var pause = $(this).attr("data-delay");
		$(this).delay(pause).queue(function(){
		$(this).addClass("visible").clearQueue();});});
	
	}); /* end window scroll function */

var slides = $(".slide").length,
	slider_x = window_x*slides;

$(".slide").each(function(i){
slides++; var slide_x = window_x*i,
image_src = $(this).children(":first").attr("src");
$(this).css("left",slide_x); $(".slider").css("width", slider_x);
$(this).css("width", window_x); });

$(".slider-nav-right").click(function(){
if(current_slide < min_slider_pos){
current_slide = min_slider_pos; }else{
if(current_slide >= max_slider_pos){}else{
current_slide++; slide_pos = window_x * current_slide;
$(".slider").animate({left: "-"+slide_pos+"px"}); }}});

$(".slider-nav-left").click(function(){
if(current_slide > max_slider_pos){
current_slide = max_slider_pos; }else{
if(current_slide <= min_slider_pos){}else{
current_slide--; slide_pos = window_x * current_slide;
$(".slider").animate({left: "-"+slide_pos+"px"}); }}});

$(".slider-nav-right").mouseover(function(){
if(current_slide >= max_slider_pos){}else{
$(".slider").animate({marginLeft: "-180px"}, 400); }});

$(".slider-nav-left").mouseover(function(){
if(current_slide <= min_slider_pos){}else{
$(".slider").animate({marginLeft: "180px"}, 400); }});

$(".slider-nav-right, .slider-nav-left").mouseout(function(){
$(".slider").animate({marginLeft: "0px"}, 400); });

$(window).resize(function(){

	$(".video").each(function(){
	var video_x = $(this).width(),
		video_y = video_x * 9/16;
	$(this).attr("height", video_y); });

});


if(url){ url_position = $("."+url).position().top;
$(window).scrollTop(url_position); }

/* if(window_x > 1280){ $(".nav-btn").click(); }
$(".nav-item:first-child").addClass("active"); */


}); /* end document ready function */