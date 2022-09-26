<html>
EVENT TYPE:<select  id="event" name="event" >
			 <option  selected value="cultural">CULTURAL</option>
			 <option  value="technical">TECHNICAL</option>
			 <option  value="art">ART</option>
			 <option  value="literary">LITERARY</option>
		</select>
<iframe id="eventwise" src="eventwise_cultural.php" width="920px" height="920px">
</iframe>
<script>
function test()
{
 var check=document.getElementById("event").value;
if(check=="cultural")
 document.getElementById("eventwise").src = "eventwise_cultural.php";
else
if(check=="technical")
      document.getElementById("eventwise").src = "eventwise_technical.php";
else
if(check=="art")
      document.getElementById('eventwise').src = "eventwise_art.php";
else
if(check=="literary")
      document.getElementById('eventwise').src = "eventwise_literary.php";
}
document.getElementById("event").addEventListener("change", test);
</script>
</html>