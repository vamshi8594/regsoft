 <?php session_start();?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/tarang.ico" />
<title>REGISTRATIONS</title>
<style>
#logoutmenu{
    border: 0px solid;
float:right;
    color:black;
	text-transform:uppercase;
	background: transparent;
}
.specialColor { 
   background-color: lightgrey;
}
body
{
font-family: Lucida Sans Unicode;
}

::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,1); 

}

iframe
{
border:none;
}

</style>
<?php
{
//if the user is not authenticated then redirecting to login page.
 if(!isset($_SESSION['userName']))
 {
    echo"<script> top.window.location='login.php';</script>";   
 }
}
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<img src="images/header.JPG" class="imgup" alt="header" style=" width:100%;">

</head>
<body style="background-color:lightgrey;">
<div id="nav">
<ul>
  <li><a class="current" id="home" href="javascript:home()">HOME</a></li>
  <li><a class="menu"  id="view" href="javascript:view()">OVERVIEW</a></li>
  
</ul>

<select id="logoutmenu" onchange="logoutpage(this.id)" style="color:brown;" >
<option class="specialColor" style="display:none;" selected value="<?php echo$_SESSION['userName']; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"><?php echo$_SESSION['userName']; ?></option>
<option class="specialColor" value="SIGN OUT" >SIGN OUT</option>
</select>
<div><script>
function logoutpage(s1)
{
//if the user pressed logout then redirecting page to login.php.

   top.window.location="login.php";
      session_destroy();
}
function view()
{
 document.getElementById('frames').src = "edit.php";
 document.getElementById("home").className = "menu";
  document.getElementById("view").className = "current";
}
function home()
{
 document.getElementById('frames').src = "homeframe.php";
 document.getElementById("home").className = "current";
   document.getElementById("view").className = "menu";
}
</script>
</br></br></br>
<!--creating the iframe -->
<iframe id="frames" src="homeframe.php" class="frameleft" width="100%" height="400px">
</iframe>
</body>
</html>
