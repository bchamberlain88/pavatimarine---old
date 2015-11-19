<!-- get the sites root directory -->
<?php $path = "http://www.pavatimarine.com/" ?>

<div class="boat-models-wrapper model-wrapper-first">
<div class="container"><div class="boat-model-nav model-nav-right" alt="Power Boats" title="Power Boats"></div>
<h1>Pavati Drift Boats</h1>
<?php /* get all boat models from database */
$getmodels = mysql_query("SELECT * FROM boatmodels ORDER BY boatid LIMIT 0,3");
$nummodels = mysql_num_rows($getmodels);
while($rowmodels = mysql_fetch_assoc($getmodels)){
echo "<a href='".$path."boats/".$rowmodels['boatname']."'>
<li class=\"four columns boat-model\" id=\"model-".$rowmodels['boatid']."\" style=\"background:url('".$path."imgs/boats/pavatimarine-boat-model-".$rowmodels['boatname'].".png') center center no-repeat;\">
<span class='boat-model-info'>".$rowmodels['boatname']."<p class=\"model-desc model-desc-".$rowmodels['boatid']."\">".htmlspecialchars_decode($rowmodels['boatdesc'])."</p></span>
</li></a>"; } if($nummodels < 4){
echo "<li class=\"four columns boat-model model-coming-soon\">
<span class='boat-model-info'>coming soon</span>
</li>"; }else{}?></div></div>

<div class="boat-models-wrapper model-wrapper-last">
<div class="container"><div class="boat-model-nav model-nav-left" alt="Drift Boats" title="Drift Boats"></div>
<h1>Pavati Power Boats</h1>
<?php /* get all boat models from database */
$getmodels = mysql_query("SELECT * FROM boatmodels WHERE boatid > 3");
$nummodels = mysql_num_rows($getmodels);
while($rowmodels = mysql_fetch_assoc($getmodels)){
echo "<a href='".$path."boats/".$rowmodels['boatname']."'>
<li class=\"four columns boat-model\" id=\"model-".$rowmodels['boatid']."\" style=\"background:url('".$path."imgs/boats/pavatimarine-boat-model-".$rowmodels['boatname'].".png') center center no-repeat;\">
<span class='boat-model-info'>".$rowmodels['boatname']."<p class=\"model-desc model-desc-".$rowmodels['boatid']."\">".$rowmodels['boatdesc']."</p></span>
</li></a>"; }
echo "<li class=\"four columns boat-model model-coming-soon\">
<span class='boat-model-info'>coming soon</span>
</li>";
echo "<li class=\"four columns boat-model model-coming-soon\">
<span class='boat-model-info'>coming soon</span>
</li>";?></div></div>