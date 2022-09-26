<?php
global $eventvariable;

 //initialising the connection.
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'tarang_registrations');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 //creating the connection.
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) 
or
 die("Failed to connect to MySQL: " . mysql_error()); 

global $query;

        $query = "select * from `participants` where `COLLEGE`=2;";
 //creating the database.
$result = mysqli_query($con,$query);
echo"<center>";
echo"<h3>PARTICIPANTS LIST</h3>";
echo "<table border='1' width='840px' text-align='center'>
<tr>
<th>S.NO</th>
<th>REG ID</th>
<th>NAME</th>
<th>YEAR</th>
<th>ID NO</th>
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

?>