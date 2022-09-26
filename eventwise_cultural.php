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

        $query = "select * from `participants`, `cultural` where `EVENT ID`=`EVENT_NAME` and `EVENT_NAME` like '%%';";
 //creating the database.
$result = mysqli_query($con,$query);
echo"<center>";
echo"<h3>PARTICIPANTS LIST</h3>";
echo "<table id='culturalevents' border='1' width='840px' text-align='center'>
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
echo "</tr>";
}
echo "</table>";
echo "</center>";
echo"
<p class='print' ><button onclick='myFunction()'>Print</button></p>
<script>
//generating print button.
function myFunction() {
    window.print();
} 
</script>";
mysqli_close($con);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script type="text/javascript" src="jss/jquery.battatech.excelexport.js"></script>
</head>
<body>
    <div id="dvxml">
    </div>
    <div>
        <button id="btnExport">Export</button>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $("#btnExport").click(function () {
            var dataobj = "<root><row id='1' fname='Mark' lname='Otto' uname='@mdo'></row><row id='2' fname='Jacob' lname='Thornton' uname='@fat'></row><row id='3' fname='Larry' lname='the Bird' uname='@twitter'></row></root>";

            $("#dvxml").battatech_excelexport({
                containerid: "dvxml"
                , datatype: 'xml'
                , dataset: dataobj
                , columns: [
                    { headertext: "S.No.", datatype: "string", datafield: "id", ishidden: false, width: "50px" }
                    , { headertext: "First Name", datatype: "string", datafield: "fname", ishidden: false, width: "50px" }
                    , { headertext: "Last Name", datatype: "string", datafield: "lname", ishidden: true, width: "50px" }
                    , { headertext: "Username", datatype: "string", datafield: "uname", ishidden: false, width: "50px" }
                ]
            });
        });
    });
</script>