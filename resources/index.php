<?php error_reporting(E_ALL^E_NOTICE); session_start(); include("../connect.php"); include("../functions.php"); ?>
<?php if(!$_GET['p']){ $p = $_GET['p']; $pageTitle = "Pavati Marine - Fishing Resources"; }else{ $p = $_GET['p']; $pageTitle = "Pavati Marine - ".ucfirst($p).""; } ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    
<head> <!-- basic page needs -->
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="author" content="Sebastian Inman">
<meta name="copyright" content="Pavati Marine">
<meta name="description" content="The Pavati Marine Pro Shop is currently under construction.">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 day">
<!-- mobile specific metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- include necessary stylesheets -->
<link rel="stylesheet" href="../css/master.css" class="rs-file">
<link rel="stylesheet" href="../css/droppable.css">
</head><body>
<?php include("../headers.php"); ?>
<div class="main-page">
<?php  /* check to see if the page being viewed even exists */
$exists = checkpage("abouttabs", "abouttaburl", $p);
if($exists != 1){ include("../404.php"); }else{ ?>

	<div class="resource-wrapper">

		<div class="container">

			<div class="resource-intro">
			<h1 class="content-title">Pavati Marine : Fishing Resources</h1>
			<p>Welcome to the Northwest’s best and most comprehensive fishing resource page. 
			Here you will find: Fish weight calculator, Weather Forecasts, River levels, fishing reports, fishing tips and tricks, how-to videos and more. 
			Whether you’re just a novice getting into the sport or a seasoned veteran these tools will help you catch more fish! Pavati wants to add more 
			features to this page so if you need info we don’t have or have suggestions please let us know.  If you are looking for a local guide in your 
			area feel free to give us a call and we can point you in the right direction. Need a fishing report? Give us a call or facebook/email us and 
			we will “hook” you up. Bookmark this page so you can find it in the future! Tight lines from the Pavati crew.</p>
			</div>

		</div>

	</div>


	<div class="container resource-container">

		<div class="fish-calc">

			<form class="calc-form">

				<h1 class="content-title">Fish Weight Calculator</h1>

				<input checked class="fish" id="trout" name="fish" type="radio" value="trout" />
				<label for="trout">Steelhead / Trout</label>
				<input class="fish" id="salmon" name="fish" type="radio" value="salmon" />
				<label for="salmon">Salmon</label>
				<input class="fish" id="sturgeon" name="fish" type="radio" value="sturgeon" />
				<label for="sturgeon">Sturgeon</label>
				<div class="calc-sep"></div>
				<div class="spec-input">
					<input class="fishweight" name="length" placeholder="Fish Length" type="text" />
					<span class="input-spec">in.</span>
				</div>
				<div class="spec-input">
					<input class="fishweight" name="girth" placeholder="Fish Girth" type="text" />
					<span class="input-spec">in.</span>
				</div>
				<br><br><span class="calc-output">Approximate Weight<span class="output"></span></span>

			</form>

		</div>

		<div class="weather-wrapper">
			<h1 class="content-title">Weather Forecast</h1>
			<p>Enter your ZIP code in the field below to check the weather in your area.</p>
			<div class="spec-input">
				<input class="getweather" name="zipcode" placeholder="ZIP Code" type="text" />
			</div>
			<div class="forecast">
				<script src="http://netweather.accuweather.com/adcbin/netweather_v2/netweatherV2ex.asp?partner=netweather&amp;zipcode=97501&amp;size=11&amp;target=_blank"></script>
			</div>
		</div>

		<div class="weather-wrapper">
			<h1 class="content-title">Oregon River Water Levels</h1>
			<p>The USGS is an agency within the Department of the Interior. Their Water Resources Division collects and publishes stream flow data. 
			It also provides other hydrologic information to enable better use and management of water resources. The USGS owns and maintains many 
			river gauges which provide us with data needed to accomplish our mission: catching bigger fish! Below is the flow data charts for the
			main rivers in Oregon, as well as the links to the data for Washington and California.<br><br>
			<a href="http://waterdata.usgs.gov/wa/nwis/current?type=flow" target="new">Washington River Levels</a><a href="http://waterdata.usgs.gov/ca/nwis/current?type=flow" target="new">California River Levels</a></p>

			<!-- OREGON RIVER LEVELS -->
			<div class="main-tab-container active" id="maincont-1">

				<div class="level-sub-tabs">
					<div class="level-tab-sub active" id="subtab-1">North West</div>
					<div class="level-tab-sub" id="subtab-2">Willamette</div>
					<div class="level-tab-sub" id="subtab-3">South West</div>
				</div>

				<div class="sub-content active" id="sub-con-1">

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/tido3_hg.png" />
						<span class="level-stats-span">Alsea River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/fsso3_hg.png" />
						<span class="level-stats-span">Nehalem River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/beao3_hg.png" />
						<span class="level-stats-span">Nestucca River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/silo3_hg.png" />
						<span class="level-stats-span">Siletz River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/mplo3_hg.png" />
						<span class="level-stats-span">Siuslaw River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/trao3_hg.png" />
						<span class="level-stats-span">Trask River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/tlmo3_hg.png" />
						<span class="level-stats-span">Wilson River</span>
					</div>

				</div>

				<div class="sub-content" id="sub-con-2">

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/esto3_hg.png" />
						<span class="level-stats-span">Clackamas River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/mklo3_hg.png" />
						<span class="level-stats-span">McKenzie River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/cano3_hg.png" />
						<span class="level-stats-span">Molalla River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/meho3_hg.png" />
						<span class="level-stats-span">North Santiam River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/wtlo3_hg.png" />
						<span class="level-stats-span">South Santiam River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/sndo3_hg.png" />
						<span class="level-stats-span">Sandy River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/jaso3_hg.png" />
						<span class="level-stats-span">Willamette River</span>
					</div>

				</div>

				<div class="sub-content" id="sub-con-3">

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/arwo3_hg.png" />
						<span class="level-stats-span">Applegate River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/chto3_hg.png" />
						<span class="level-stats-span">Chetco River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/coqo3_hg.png" />
						<span class="level-stats-span">Coquille River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/krbo3_hg.png" />
						<span class="level-stats-span">Illinois River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/eglo3_hg.png" />
						<span class="level-stats-span">Rogue River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/ekto3_hg.png" />
						<span class="level-stats-span">Umpqua River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/wnro3_hg.png" />
						<span class="level-stats-span">North Umpqua River</span>
					</div>

					<div class="level-stats">
						<img src="http://water.weather.gov/resources/hydrographs/tilo3_hg.png" />
						<span class="level-stats-span">South Umpqua River</span>
					</div>

				</div>


			</div>

		</div>


		<div class="weather-wrapper">
			<h1 class="content-title">2014 Sport Fishing Regulations</h1>
			<p>Federal Fishing Regulations are not always the same as state fishing regulations. For species that are not managed by federal regulations, 
			states have the authority to extend state rules into federal waters for residents of that state or vessels landing a catch in that state.<br><br>
			<a href="http://www.dfw.state.or.us/fish/docs/2014/Oregon_Sport_Fishing_Regs_v12-31-13.pdf" target="new">Oregon Sport Fishing Regulations</a>
			<a href="http://wdfw.wa.gov/publications/01500/wdfw01500.pdf" target="new">Washington Sport Fishing Regulations</a>
			<a href="https://nrm.dfg.ca.gov/FileHandler.ashx?DocumentID=77722&inline=true" target="new">California Sport Fishing Regulations</a></p>
		</div>

		<div class="weather-wrapper">
			<h1 class="content-title">Video Tutorials</h1><br>

			<iframe style="float:left; margin:0px 30px 30px 0px; width:calc(50% - 15px);" height="315" src="//www.youtube.com/embed/uRcMHvZVP1c?rel=0" frameborder="0" allowfullscreen></iframe>
			<iframe style="float:left; margin:0px 0px 30px 0px; width:calc(50% - 15px);" height="315" src="//www.youtube.com/embed/P3yhlhucHTc?rel=0" frameborder="0" allowfullscreen></iframe>

			<iframe style="float:left; margin:0px 30px 30px 0px; width:calc(50% - 15px);" height="315" src="//www.youtube.com/embed/sWa7z04Yj1M?rel=0" frameborder="0" allowfullscreen></iframe>
			<iframe style="float:left; margin:0px 0px 30px 0px; width:calc(50% - 15px);" height="315" src="//www.youtube.com/embed/tANLq58z9cY?rel=0" frameborder="0" allowfullscreen></iframe>

		</div>

	</div>


<?php } ?>
<?php include("../footer2.php"); ?></div>

<!-- include necessary javascript files -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src='../js/master.js'></script>
<script type='text/javascript' src='../js/droppable.js'></script>
<script type='text/javascript' src='../js/functions.js'></script>
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20346168-1']); _gaq.push(['_trackPageview']);
(function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
<!-- [if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif] -->
<script tpye="text/javascript"> a = 0.00; b = 0.00; c = 0.00; t = 800;
$(".fish").click(function(){ var s = $(this).prop("value");
if(s == "trout"){ t = 800; } if(s == "salmon"){ t = 775; }
if(s == "sturgeon"){ t = 825; }}); $(".fishweight").keyup(function(){
if($("input[name='length']").val() == ""){ a = 0; }else{ a = $("input[name='length']").val() }
if($("input[name='girth']").val() == "") { b = 0; }else{ b = $("input[name='girth']").val() } });
$(function(){ weight(); function weight(){ setTimeout(weight, 100); 
c = ((a * Math.pow(b, 2)) / t).toFixed(2); $(".output").empty().html(c+" lbs."); }}); </script>

<script type="text/javascript">

	$(".getweather").keyup(function(){

		var a = $(".getweather").val(),
			b = a.length;


		if(b < 5){}else{

			$(".forecast").empty().load("http://www.pavatimarine.com/resources/forecast.php?z="+a);

		}

	});

	$(".level-tab-sub").click(function(){

		$(".sub-content, .level-tab-sub").removeClass("active");
		$(".sub-content").hide();
		var sub = $(this).attr("id").replace("subtab-","");
		$("#sub-con-"+sub).addClass("active").show();
		$(this).addClass("active");

	});


	$(".level-stats").click(function(){

		var chart = $(this).find("img").attr("src");
		if($(".chart").length > 0){}else{

			$("body").append("<div class='chart'/>");
			$(".chart").append("<div class='chart-close'/>");
			$(".chart").append("<img src='"+chart+"'/>");

			$(".chart").fadeIn(300);

			$(".chart-close, .chart").click(function(){

				$(".chart").fadeOut(300, function(){
					$(this).remove();
				});

			});

		}

	});

</script>

</body></html>