 <?php
  session_start();
 //initialising the connection.
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'tarang_registrations');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 //creating the connection.
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) 
or
 die("Failed to connect to MySQL: " . mysql_error()); 
 //creating the database.
$db=mysql_select_db(DB_NAME,$con) 
or 
die("Failed to connect to MySQL: " . mysql_error());
function login() 
{
global $user;
$user=$_POST['user'];
 //starting the session for user profile page 
if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{
 $user=$_POST['user'];
$password=$_POST['pass'];
//validating the username and password by getting them from database.
 $query = mysql_query("SELECT * FROM username where userName = '$user'
 AND 
 pass = '$password'")
 or 
die(mysql_error());
 $row = mysql_fetch_array($query) or die(mysql_error());
 if(!empty($row['userName']) AND !empty($row['pass']))
 {
      if($row['pass']==$password)
     {
     $_SESSION['userName']=$user;
      echo"<script> top.window.location='registrations.php';</script>";
     } 
}
 else 
{
 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
 }
 }
 }
 if(isset($_POST['submit']))
 { 
login();

 }
 
 ?>