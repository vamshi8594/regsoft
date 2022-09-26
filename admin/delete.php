<?php
//initialising the connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarang_registrations";
echo "<center>";
echo "<style> td {text-align: center;} table {    border-color:green;} #button{ width: 80px;} </style>   ";
// Creating connection
mysql_connect($servername, $username, $password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
if(isset($_GET['id'])){
$record=$_GET ['id'];
//selectiong the targeted record.
$event=mysql_query("select `event id` from participants where `reg id`=$record;");
$old_event=mysql_fetch_assoc($event);
$old_event=$old_event['event id'];
//selecting the no of participants of target record.
$events_event=mysql_query("select no_participants from events where event_name='$old_event';");
  $events_event_fetch=mysql_fetch_assoc($events_event);
  $events_event_fetch=$events_event_fetch['no_participants']-1;
//updating the no of participants i.e reducing the deleted record.
  mysql_query("update events set no_participants=($events_event_fetch) where event_name='$old_event' ;");
//finally deleting the record from database.
mysql_query("DELETE FROM `participants` WHERE `REG ID`='$record'");
echo"<script> window.location='edit.php';</script>";
}
mysql_close();
?>
</fieldset>
</br>
</body>
</html>