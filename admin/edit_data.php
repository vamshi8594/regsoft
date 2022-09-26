<?php
//creating the connection.
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
  //selecting database.
    mysql_select_db("tarang_registrations", $con);
//getting record values based on the previoues page(edit_form.php).
	  $name = $_POST['name'];
  $college = $_POST['college'];
  $mailId = $_POST['mailId'];
  $phoneNo = $_POST['phoneNo'];
  $event = $_POST['EventName'];  
	global $id;
	$id=$_POST['id'];
	$old_event=$_POST['eventold'];
	//updating the values to database.
$order = "UPDATE participants 
    SET `NAME`='$name', 
	  `COLLEGE`='$college',
    `MAIL ID`='$mailId',
	`PHONE NO`=$phoneNo,
	`EVENT ID`='$event'
    WHERE 
    `REG ID`='$id'";
//getting fee for the event.
mysql_query($order);
$rate=mysql_query("select FEE from events where event_name='$event';");
$amount=mysql_fetch_assoc($rate);
$amount_rate=$amount['FEE'];
//updating the no of participants.
$events_event=mysql_query("select NO_PARTICIPANTS from events where event_name='$old_event';");
  $events_event_fetch=mysql_fetch_assoc($events_event);
  $events_event_fetch=$events_event_fetch['NO_PARTICIPANTS']-1;
  mysql_query("update events set NO_PARTICIPANTS=($events_event_fetch) where event_name='$old_event' ;");

$events_event=mysql_query("select NO_PARTICIPANTS from events where event_name='$event';");
  $events_event_fetch=mysql_fetch_assoc($events_event);
  $events_event_fetch=$events_event_fetch['NO_PARTICIPANTS']+1;
  mysql_query("update events set NO_PARTICIPANTS=($events_event_fetch) where event_name='$event' ;");
//end of updating the no of participants.
mysql_query("update participants set `EVENT ID`=('$event') where `EVENT ID`='$old_event' ;");

?>
<html>
<!--this page generates the receipt for the event.-->
<style>table{text-align:center;}</style>
<center>
<fieldset >
<legend>RECEIPT	</legend>
<table  width="1024px" > 
<tr>
<th>REG ID</th>
<th>NAME</th>
<th>COLLEGE</th>
<th>MAIL ID</th>
<th>PHONE NO</th>
<th>EVENT</th>
<th>AMOUNT</th>
</tr>
 <tr>
<td><?php echo $id;	 ?></td>
<td><?php echo $name?></td>
<td><?php echo $college ?></td>
<td><?php echo $mailId ?></td>
<td><?php echo $phoneNo?></td>
<td><?php echo $event?></td>
<td><?php echo $amount_rate ?></td>
</tr>
</table>
</fieldset>
<p>-------------------------------------------------------------------------------------------------------</p>
</br>
<!--generating copy of receipt-->
<fieldset >
<legend>RECEIPT	</legend>
<table  width="1024px" > 
<tr>
<th>REG ID</th>
<th>NAME</th>
<th>COLLEGE</th>
<th>MAIL ID</th>
<th>PHONE NO</th>
<th>EVENT</th>
<th>AMOUNT</th>
</tr>
 <tr>
<td><?php  echo $id; ?></td>
<td><?php echo $name?></td>
<td><?php echo $college ?></td>
<td><?php echo $mailId ?></td>
<td><?php echo $phoneNo?></td>
<td><?php echo $event?></td>
<td><?php echo $amount_rate ?></td>
</tr>
</table>
</fieldset>
</center>


<p class="print" ><button onclick="myFunction()">Print</button></p>
<script>
//generating print button.
function myFunction() {
    window.print();
}
</script>
</html>