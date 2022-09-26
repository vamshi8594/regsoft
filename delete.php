<?php
//initialising the connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrations";
echo "<center>";
echo "<style> td {text-align: center;} table {    border-color:green;} #button{ width: 80px;} </style>   ";
// Creating connection
mysql_connect($servername, $username, $password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
if(isset($_GET['record'])){
$record=$_GET ['record'];
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
}
//creating a search box.
echo"<h3>Search Registered Records</h3> 
	    <p>You  may search with any column value</p> 
        <form  method='post' action='edit.php'  id='searchform'> 
	      <input  type='text' name='name'> 
	      <input  type='submit' name='submit' value='Search'> 
	    </form> ";
if(isset($_POST['submit'])){
$search_value=$_POST['name'];}
else{$search_value="";}
//after submit for search this selects based on the key value from participants table in database(registrations).
$result =mysql_query("SELECT * FROM participants where `REG ID` LIKE '%" . $search_value . "%' OR `NAME` LIKE '%" . $search_value . "%' OR `COLLEGE` LIKE '%" . $search_value . "%' OR `MAIL ID` LIKE '%" . $search_value . "%' OR `PHONE NO` LIKE '%" . $search_value . "%' ");


echo "<table border='1' width='840px' text-align='center'>
<tr>
<th>S.NO</th>
<th>REG ID</th>
<th>NAME</th>
<th>COLLEGE</th>
<th>MAIL ID</th>
<th>PHONE NO</th>
<th>EVENT ID</th>
</tr>";
$s_no=0;
while($row = mysql_fetch_array($result))
{
echo "<tr >";
$s_no++;
echo "<td>".$s_no."</td>";
  if($row['REG ID']<10)
  {	 echo "<td>VITS00".$row['REG ID']."</td>";}
  else
    if($row['REG ID']<100)
	   echo "<td>VITS0".$row['REG ID']."</td>";
	 else
	   echo "<td>VITS".$row['REG ID']."</td>";
  
echo "<td>" . $row['NAME'] . "</td>";
echo "<td>" . $row['COLLEGE'] . "</td>";
echo "<td>" . $row['MAIL ID'] . "</td>";
echo "<td>" . $row['PHONE NO'] . "</td>";
echo "<td>" . $row['EVENT ID'] . "</td>";
echo "<td><a href='delete.php?record=". $row['REG ID']."'>DELETE</a></td>";
echo "</tr>";
}
echo "</table>";
echo "</center>";
mysql_close();
//end of displaying in first opening the null value from search box is taken and as null is present in every record gives overall records.
?>
</fieldset>
</br>
</body>
</html>