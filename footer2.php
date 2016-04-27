

<div class="animate2 side-contact-tab">Click for a free quote</div>
<div class="contact-shadow"></div>
<div class="border4 contact-overlay">
    <div class="close-overlay">x</div>
    <h1>Complete this form for a free quote now!</h1>
    <script type="text/javascript" src="http://forms.aweber.com/form/14/1519998814.js"></script>
</div>

<div class='animate2 bordersTop3 scrollTop'>Top</div>

<div class="footer">
    <div class="container">

        <ul class="fifth-container footer-list">
            <h1>Boat Models</h1>
            <li class="animate2"><a href="http://www.pavatimarine.com/boats/">All Boat Models</a></li>
            <?php foreach(query("boatmodels", 5) AS $model){
            echo "<li class='animate2'><a href='http://www.pavatimarine.com/boats/".$model['boatname']."'>The Pavati ". ucwords($model['boatname'])."</a></li>"; }?>
        </ul>

        <ul class="fifth-container footer-list">
            <h1>About Pavati</h1>
            <?php foreach(query("abouttabs", 5) AS $about){
            echo "<li class='animate2'><a href='http://www.pavatimarine.com/about/".$about['abouttaburl']."'>". ucwords($about['abouttab'])."</a></li>"; }?>
        </ul>

        <ul class="fifth-container footer-list">
            <h1>Contact</h1>
            <li class="animate2"><a href="http://www.pavatimarine.com/contact">Send Us A Message</a></li>
            <li class="animate2"><a target="new" href="http://maps.google.com/maps?ie=UTF-8&gl=us&daddr=7905+Agate+Rd,+White+City,+OR+97503&saddr=&panel=1&f=d&fb=1&dirflg=d&geocode=%3BKXOrh6nCYs9UMaMV4poQp7gq&ei=38vNUb2-IaLTiwK7z4HQBw&ved=0CCsQ-A8wAA">Visit Our Location</a></li>
            <li class="animate2"><a href="tel:18008665269">Call Our Main Office</a></li>
            <li class="animate2"><a target="new" href="http://www.facebook.com/pavatifishingboats">Like Us On Facebook</a></li>
        </ul>

        <ul class="fifth-container footer-list">
            <h1>Links</h1>
            <li class="animate2"><a target="_blank" href="http://www.pavati.com/">Pavati Wakeboats</a></li>
            <li class="animate2"><a target="_blank" href="http://www.highwayproducts.com/">Highway Products</a></li>
            <li class="animate2"><a target="_blank" href="http://www.800toolbox.com/">1-800-TOOLBOX</a></li>
            <li class="animate2"><a target="_blank" href="http://www.pavatimarine.com/resources/">Fishing Resources</a></li>
            <li class="animate2"><a target="_blank" href="http://www.pavatimarine.com/gallery/">Photo Gallery</a></li>
            <li class="animate2"><a target="_blank" href="http://www.pavatimarine.com/test-row">Take A Test Row</a></li>
            <li class="animate2"><a target="_blank" class="privacy-policy">Privacy Policy</a></li>
        </ul>

    </div>
    <div class="footer-copyright">
        <div class="container">
            Copyright &copy; 2003 - <?php echo date("Y"); ?> Pavati Marine. All rights reserved.

            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
            <a href="http://www.pavatimarine.com/pdf/pm-buyers-guide-2014.pdf" target="new"><img class="footer-pdf" src="http://www.pavatimarine.com/pdf/pdf-32.png"/></a>
            <a class="addthis_button_preferred_1"></a>
            <a class="addthis_button_preferred_2"></a>
            <a class="addthis_button_preferred_3"></a>
            <a class="addthis_button_preferred_4"></a>
            <a class="addthis_button_compact"></a>
            </div>
            <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52eaabba6313636d"></script>
            <!-- AddThis Button END -->

        </div>
    </div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type='text/javascript' src='./js/master.js'></script>
<script type='text/javascript' src='./js/functions-test.js'></script>

<!-- LIVECHAT -->
<script type="text/javascript">
var __lc = {};
__lc.license = 3147512;
__lc.group = 2;

(function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>

<!-- ADD ROLL -->
<script type="text/javascript">
adroll_adv_id = "CHWMVY57HJHXRLNEKC37SR";
adroll_pix_id = "LFC6PZFFCFDMJGKL3JOYZK";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>
