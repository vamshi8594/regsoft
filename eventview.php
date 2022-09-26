<?php
//initialising the connection.
$con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
//connecting to database.
  mysql_select_db("tarang_registrations", $con);
  //selecting events,no of participants from database.
        $order = "SELECT * FROM events";
      $result = mysql_query($order);
	  echo"</br></br>";
$total_no_participants=0;
$total_amount=0;
$finalnoparticipants=0;
$finalamount=0;
echo "<table><tr><th>TECHNICAL EVENTS</th></tr></table>
<center><table border='1' width='512px' text-align='center'>
  <col width='205'><col width='200'>
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
$money=($row['NO_PARTICIPANTS']*$row['FEE']);
if($money!=0){echo "<td>" . $money . "&#8377</td>";}
else{echo "<td>" . $money . "</td>";}
$total_amount=$total_amount+$money;
echo "</tr>";
}
if($total_amount!=0)
{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."&#8377</th></tr>";}
else{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."</th></tr>";}
echo "</table>";
$finalnoparticipants=$finalnoparticipants+$total_no_participants;
$finalamount=$finalamount+$total_amount;
//end of the table.
/*echo "</center>";

       $order = "SELECT * FROM cultural ";
      $result = mysql_query($order);

$total_no_participants=0;
$total_amount=0;
echo "<table><tr><th>CULTURAL EVENTS</th></tr></table>
<center><table border='1' width='512px' text-align='center'>
  <col width='205'><col width='200'>
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
$money=($row['NO_PARTICIPANTS']*$row['FEE']);
if($money!=0){echo "<td>" . $money . "&#8377</td>";}
else{echo "<td>" . $money . "</td>";}
$total_amount=$total_amount+$money;
echo "</tr>";
}
if($total_amount!=0)
{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."&#8377</th></tr>";}
else{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."</th></tr>";}
echo "</table>";
$finalnoparticipants=$finalnoparticipants+$total_no_participants;
$finalamount=$finalamount+$total_amount;
//end of the table.
echo "</center>";

       $order = "SELECT * FROM art ";
      $result = mysql_query($order);

$total_no_participants=0;
$total_amount=0;
echo "<table><tr><th>ART EVENTS</th></tr></table>
<center><table border='1' width='512px' text-align='center'>
  <col width='205'><col width='200'>
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
$money=($row['NO_PARTICIPANTS']*$row['FEE']);
if($money!=0){echo "<td>" . $money . "&#8377</td>";}
else{echo "<td>" . $money . "</td>";}
$total_amount=$total_amount+$money;
echo "</tr>";
}
if($total_amount!=0)
{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."&#8377</th></tr>";}
else{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."</th></tr>";}
echo "</table>";
$finalnoparticipants=$finalnoparticipants+$total_no_participants;
$finalamount=$finalamount+$total_amount;
//end of the table.
echo "</center>";

       $order = "SELECT * FROM literary ";
      $result = mysql_query($order);

$total_no_participants=0;
$total_amount=0;
echo "<table><tr><th>LITERARY EVENTS</th></tr></table>
<center><table border='1' width='512px' text-align='center'>
  <col width='205'><col width='200'>
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
$money=($row['NO_PARTICIPANTS']*$row['FEE']);
if($money!=0){echo "<td>" . $money . "&#8377</td>";}
else{echo "<td>" . $money . "</td>";}
$total_amount=$total_amount+$money;
echo "</tr>";
}
if($total_amount!=0)
{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."&#8377</th></tr>";}
else{echo"<tr><th>TOTAL</th><th>".$total_no_participants."</th><th>".$total_amount."</th></tr>";}
echo "</table>";
$finalnoparticipants=$finalnoparticipants+$total_no_participants;
$finalamount=$finalamount+$total_amount;
//end of the table.
echo "</center>";

echo"<table><tr><th>TOTAL</th></tr></table>
<center><table border='1' width='512px' text-align='center'>
  <col width='205'><col width='200'>
<tr><th>TOTAL</th><th>".$finalnoparticipants."</th><th>";
if($finalamount!=0)
{
echo $finalamount."&#8377";
}
else
echo $finalamount;*/
echo"</th></tr>
</table></center>";
echo"
<p class='print' ><button onclick='myFunction()'>Print</button></p>
<script>
//generating print button.
function myFunction() {
    window.print();
}
</script>";
?>