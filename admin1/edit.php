<?php
//initialising the connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarang_registrations";
echo "<center>";
echo "<style> td {text-align: center;} table {    border-color:green;} #button{ width: 80px;} </style>   ";
// Create connection
$con =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//after submit for search this selects based on the key value from participants table in database(registrations).
$result = mysqli_query($con,"SELECT * FROM participants");
echo"<h3>PARTICIPANTS LIST</h3>";
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
while($row = mysqli_fetch_array($result))
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
echo "<td> <a href='edit_form.php?id=".$row['REG ID']."'>&#9998;</a> </td>";
echo "<td> <a  href='delete.php?id=".$row['REG ID']."'><img src='images/closed.jpg'></a> </td>";
echo "</tr>";
}
echo "</table>";
echo "</center>";
echo"
<center><p class='print' ><button onclick='myFunction()'>Print</button></p></center>
<script>
//generating print button.
function myFunction() {
    window.print();
} 
</script>";
mysqli_close($con);
//end of displaying in first opening the null value from search box is taken and as null is present in every record gives overall records.
?>