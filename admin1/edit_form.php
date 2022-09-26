	<!DOCTYPE HTML >
	<!--this page creates a table of registered participants details who want to change the details-->
<html>
<head>
<title>Edit Data</title>
</head>
<body>
</br></br>

<center>
<!--starting the table-->
<table border=1>
  <tr>
    <td align=center>Edit Participants Data</td>
  </tr>
  <tr>
   <td>
      <table>
      <?php

  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("tarang_registrations", $con);
     $id=$_GET ['id'];
      $order = "SELECT * FROM participants where `REG ID`=$id";
      $result = mysql_query($order);
      $row = mysql_fetch_array($result);
      ?>
	  <!--starting the form that displays data-->
      <form method="post" action="edit_data.php">
     <input type="hidden" name="id" value="<?php
  if($row['REG ID']<10)
	 echo "VITS00".$row['REG ID'];
  else
     if($row['REG ID']<100)
	   echo "VITS0".$row['REG ID'];
	 else
	   echo "VITS".$row['REG ID'];
	 ?>">
        <tr>        
         <td>NAME</td>
          <td>
            <input type="text" name="name"
        size="20" value="<?php echo $row['NAME']?>">
          </td>
        </tr>
        <tr>
          <td>COLLEGE</td>
          <td>
            <input type="text" name="college" size="20"
          value="<?php echo $row['COLLEGE']?>">
          </td>
        </tr>
		        <tr>
          <td>MAIL ID</td>
          <td>
            <input type="text" name="mailId" size="20"
          value="<?php echo $row['MAIL ID']?>">
          </td>
        </tr>
		        <tr>
          <td>PHONE NO</td>
          <td>
            <input type="text" name="phoneNo" size="20"
          value="<?php echo $row['PHONE NO']?>">
          </td>
        </tr>
		        <tr>
          <td>EVENT NAME</td>
          <td>
		  <select id="EventName" name="EventName" >
  <option selected value="<?php echo $row['EVENT ID']?>"><?php echo $row['EVENT ID']?></option>
  <option class="specialColor" slected value="PAPER_PRESENTATION">PAPER PRESENTATION</option>
  <option class="specialColor" value="PROJECT_EXPO">PROJECT_EXPO </option>
  <option class="specialColor" value="CODE_EX">CODE_EX</option>
  <option class="specialColor" value="CODE_HUNT_WITH_C">CODE_HUNT_WITH_C </option>
  <option class="specialColor" value="PIXEL_PLAY">PIXEL_PLAY</option>
  <option class="specialColor" value="COMBO">COMBO</option>
		  </select>
          </td>
        </tr>
        <tr>
          <td align="right">
		  <input type="hidden" name="eventold" value="<?php  echo $row['EVENT ID'] ?>">
            <input type="submit"
          name="submit value" value="Save">
          </td>
        </tr>
      </form><!--end of the form-->
      </table><!--end of the table-->
    </td>
  </tr>
</table></center>
</body>
</html>
