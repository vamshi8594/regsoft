<?php
//initialising the connection.
echo"
<style>
body
{
font-family: Lucida Sans Unicode;
}
</style>
";
$con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
//connecting to database.
  mysql_select_db("registrations", $con);
  //selecting events,no of participants from database.
        $order = "SELECT * FROM events ";
      $result = mysql_query($order);
	  echo"</br></br>";

echo"<center>";
$total_no_participants=0;
$total_amount=0;
echo "<table border='1' width='512px' text-align='center'>
<tr>
<th>EVENT_NAME</th>
<th>NO_PARTICIPANTS</th>
<th>AMOUNT</th>
</tr>";
//displaying the values.
while($row = mysql_fetch_array($result))
{
   echo "<tr >";
echo "<td>" . $row['EVENT_NAME'] . "</td>";
echo "<td>" . $row['NO_PARTICIPANTS'] . "</td>";
$total_no_participants=$total_no_participants+$row['NO_PARTICIPANTS'];
$money=($row['NO_PARTICIPANTS']*$row['fee']);
if($money!=0){echo "<td>" . $money . "&#8377</td>";}
else{echo "<td>" . $money . "</td>";}
$total_amount=$total_amount+$money;
echo "</tr>";
}
if($total_amount!=0)
{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."&#8377</th></tr>";}
else{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."</th></tr>";}
echo "</table>";
//end of the table.


echo "</center>"
?>