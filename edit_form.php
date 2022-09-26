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

  mysql_select_db("registrations", $con);
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
  <option value="PAPER_PRESENTATION">PAPER_PRESENTATION</option>
  <option value="POSTER_PRESENTATION">POSTER_PRESENTATION</option>
  <option value="AIRCRAFT_ASSEMBLY">AIRCRAFT_ASSEMBLY</option>
  <option value="SAVE_THE_SOLIDIER">SAVE_THE_SOLIDIER</option>
  <option value="BOOMERANG">BOOMERANG</option>
  <option value="AERO_QUIZ">AERO_QUIZ</option>
  <option value="PHARMA_QUIZ">PHARMA_QUIZ</option>
  <option value="ROBO_COMPETITION">ROBO_COMPETITION</option>
  <option value="PROJECT_EXPO">PROJECT_EXPO</option>
  <option value="CODE_AMINE">CODE_AMINE</option>
  <option value="CAD_DESIGN">CAD_DESIGN</option>
  <option value="NAIL_ART">NAIL_ART</option>
  <option value="FACE_ART">FACE_ART</option>
  <option value="GENERAL_QUIZ">GENERAL_QUIZ</option>
  <option value="CINE_QUIZ">CINE_QUIZ</option>
  <option value="RANGOLI">RANGOLI</option>
  <option value="ART_EXHIBITION">ART_EXHIBITION</option>
  <option value="MEHANDI">MEHANDI</option>
  <option value="SINGING_GROUP">SINGING_GROUP</option>
  <option value="SINGING_SOLO">SINGING_SOLO</option>
  <option value="DANCE_GROUP">DANCE_GROUP</option>
  <option value="DANCE_SOLO">DANCE_SOLO</option>
  <option value="SKIT_GROUP">SKIT_GROUP</option>
  <option value="CULTURAL_COCKTAIL">CULTURAL_COCKTAIL</option>
  <option value="ETHNIC_WEAR">ETHNIC_WEAR</option>
  <option value="DEBATE">DEBATE</option>
  <option value="JAM">JAM</option>
  <option value="CREATIVE_WRITING">CREATIVE_WRITING</option>
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
