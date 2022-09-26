<html>
<center style="vertical-align:top;">
EVENT TYPE:<select  id="event" name="event" >
			 <option  selected value="all">ALL YEARS</option>
			 <option  value="cultural">I</option>
			 <option  value="technical">II</option>
			 <option  value="art">III</option>
			 <option  value="literary">IV</option>
</select>
</center>
<center>
<iframe style="display: inline-block;" id="eventwise" src="edit.php" width="920px" height="920px">
</iframe>
</center>
<script>
function test()
{
 var check=document.getElementById("event").value;
if(check=="all")
      document.getElementById('eventwise').src = "edit.php";
else
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