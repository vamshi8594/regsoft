<!-- This document is used in iframe of registrations.php file which is activated on clicking register menu option  -->
<!DOCTYPE html>
<html>
<style>
}</style>
<script>
</script>
<body style="color:white;">
</br>
<!--giving the title-->
<center><h2>REGISTRATIONS</h2></center>
</br>
<!--starting of the form whoose name is registration  -->
<form style="color:white;" name="registration" method="post" action="register.php">
  <center><!--staring of center tag which displays entire content in the center of form -->
<!--starting of paragraph which keeps all event related dropdown list in a single row -->
    <p style="color:white;">EVENT TYPE:
<!-- starting of select of event type only after selecting it the next select options are revealed-->
        <select style="color:white; background: transparent;" id="slct1" name="slct1" onchange="populate(this.id,'EventName')">
			 <option class="specialColor" selected>Select...</option>
			 <option class="specialColor" value="CULTURAL">CULTURAL</option>
			 <option class="specialColor" value="TECHNICAL">TECHNICAL</option>
			 <option class="specialColor" value="ART">ART</option>
			 <option class="specialColor" value="LITERARY">LITERARY</option>
		</select><!--end of event type select tag -->
	   EVENT NAME:<!--starting of event name select tag -->
		<select style="color:white; background: transparent;" id="EventName" name="EventName" onchange="pop(this.id,'amount')">
		</select><!--end of event name select tag -->
	   AMOUNT:<!--start of amount select tag -->
	   <select style="color:white; background: transparent;" id="amount" name="amount" >
	   </select><!--end of amount select tag -->
	</p><!--end of paragraph containing all select tags -->
	<!-- start of table which contains name,college,mailid and phone no-->
	<table style="color:white;">
		<tr>
			<td>NAME</td>
			<td><input style="color:white; background: transparent;" type="text" name="name" value=""></td>
		</tr>	
		<tr> 
			<td></td>
		</tr>	
		<tr>	
			<td>MAIL ID</td>
			<td><input style="color:white; background: transparent;" id="mail" type="text" name="mailId" value=""></td>
		</tr>
		<tr> 
			<td></td>
		</tr>	
		<tr>
			<td>COLLEGE</td>    
			<td><input style="color:white; background: transparent;" type="text" name="college" value=""></td>	
		</tr>
		<tr> 
			<td></td>
		</tr>	
		<tr>	
			<td>PHONE NO</td>
			<td><input style="color:white; background: transparent;" type="text" name="phoneNo" value=""></td>
		</tr>
	</table>
<!--end of the table-->
	</br>
<!--submit button takes the control to page mentioned in action property -->
	<input style="color:white; background: transparent;" type="submit" onclick="mailevalve();" value="submit">
</form>
<!--end of the form. -->
</body>
</html>
