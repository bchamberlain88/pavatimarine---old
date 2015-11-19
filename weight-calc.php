<input checked class="fish" id="trout" name="fish" type="radio" value="trout" />
<label for="trout">Steelhead / Trout</label>
<input class="fish" id="salmon" name="fish" type="radio" value="salmon" />
<label for="salmon">Salmon</label>
<input class="fish" id="sturgeon" name="fish" type="radio" value="sturgeon" />
<label for="sturgeon">Sturgeon</label><br><br>
<input class="fishweight" name="length" placeholder="Fish Length" type="text" />
<input class="fishweight" name="girth" placeholder="Fish Girth" type="text" />
<br><br><span class="output"></span>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script tpye="text/javascript"> a = 0.00; b = 0.00; c = 0.00; t = 800;
$(".fish").click(function(){ var s = $(this).prop("value");
if(s == "trout"){ t = 800; } if(s == "salmon"){ t = 775; }
if(s == "sturgeon"){ t = 825; }}); $(".fishweight").keyup(function(){
if($("input[name='length']").val() == ""){ a = 0; }else{ a = $("input[name='length']").val() }
if($("input[name='girth']").val() == "") { b = 0; }else{ b = $("input[name='girth']").val() } });
$(function(){ weight(); function weight(){ setTimeout(weight, 100); 
c = ((a * Math.pow(b, 2)) / t).toFixed(2); $(".output").empty().html(c+" lbs."); }}); </script>