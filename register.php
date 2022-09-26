<?php
//checking previous submit button and initialising connection.
  if( $_POST ) 
  {
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
//connecting to database.
  mysql_select_db("tarang_registrations", $con);


  // PDO class represents the connection


  $users_name = $_POST['name'];
  $users_college = $_POST['college'];
  $users_mailId = $_POST['mailId'];
  $users_phoneNo = $_POST['phoneNo'];
  $users_eventname = $_POST['EventName'];
  $users_college=$_POST['college']  ;
  $amount=$_POST['amount'];

  $users_name =           mysql_real_escape_string($users_name);
  $users_college =     mysql_real_escape_string($users_college);
  $users_mailId =       mysql_real_escape_string($users_mailId);
  $users_phoneNo =     mysql_real_escape_string($users_phoneNo);
  $users_eventname = mysql_real_escape_string($users_eventname);
  $users_college = mysql_real_escape_string($users_college);
//inserting into table in databse.
  $query="INSERT INTO `tarang_registrations`.`participants` (`REG ID`, `NAME`, `COLLEGE`, `MAIL ID`, `PHONE NO`, `EVENT ID`) VALUES (NULL, '$users_name', '$users_college', '$users_mailId', '$users_phoneNo', '$users_eventname');";
  mysql_query($query);
  $idquery=mysql_query("SELECT `REG ID` FROM `tarang_registrations`.`participants` WHERE NAME='$users_name' and `PHONE NO`=$users_phoneNo;");
  $id=mysql_fetch_assoc($idquery);
  $regid=$id['REG ID'];
  $events_event=mysql_query("select no_participants from events where event_name='$users_eventname';");
  $events_event_fetch=mysql_fetch_assoc($events_event);
  $events_event_fetch=$events_event_fetch['no_participants']+1;
  mysql_query("update events set no_participants=($events_event_fetch) where event_name='$users_eventname' ;");
  $amount_select_fetch=($amount*$events_event_fetch);
  mysql_query("update events set amount=($amount_select_fetch) where event_name='$users_eventname' ;");
}
?>
<html>
<!--generating 2 receipts for user and administrator-->
<head>
<script>
//generating print button.
    function myFunction() {
    window.print();
} ;

</script>
<style>
.print{
text-align:right;
}
table{text-align:center;}
</style></head>
<a href="register_iframe.html">Back</a>
</br>
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
<td><?php
  if($regid<10)
	 echo "VITS00".$regid;
  else
     if($regid<100)
	   echo "VITS0".$regid;
	 else
	   echo "VITS".$regid;
	 ?></td>
<td><?php echo $users_name?></td>
<td><?php echo $users_college ?></td>
<td><?php echo $users_mailId ?></td>
<td><?php echo $users_phoneNo?></td>
<td><?php echo $users_eventname?></td>
<td><?php echo $amount?></td>
</tr>
</table>
</fieldset>
<p>-------------------------------------------------------------------------------------------------------</p>
</br>
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
<td><?php
  if($regid<10)
	 echo "VITS00".$regid;
  else
     if($regid<100)
	   echo "VITS0".$regid;
	 else
	   echo "VITS".$regid;
	 ?></td>
<td><?php echo $users_name?></td>
<td><?php echo $users_college ?></td>
<td><?php echo $users_mailId ?></td>
<td><?php echo $users_phoneNo?></td>
<td><?php echo $users_eventname?></td>
<td><?php echo $amount?></td>
</tr>
</table>
</fieldset>
</center>
<p class='print' ><button onclick='myFunction()'>Print</button></p>




</html>