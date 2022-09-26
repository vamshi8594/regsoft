<!DOCTYPE HTML> 
<!--login page contains form to login-->
<html> 
<style>

</style>
<head> 
<link rel="shortcut icon" type="image/x-icon" href="images/tarang.ico" />
<title>Sign-In</title>
</head> 
<body style="background-image: url( images/tarang.ico); background-repeat: no-repeat; background-position:center;"> 
<div id="Sign-In"> 
</br></br></br></br></br></br></br></br></br></br></br>
<center>
<!--begining of fieldset.-->
<fieldset style="width:30%;  position:relative; top:100px;" >
<legend>LOGIN
</legend>
</br>
 <form method="POST" action="validate.php">
 Username:
<input type="text" name="user" size="20">
<br>
 Password:
<input type="password" name="pass" size="20">
<br>
</br>
<input id="button" type="submit" name="submit" value="log in"> 
</form>
</br>
 </fieldset> <!--end of the fieldset.-->
 </center>
</div>
 </body>
 </html> 

