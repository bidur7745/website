<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="designtest.css">
<h1>Welcome</h1>

<div class="div1">

<form action="" method="post">
	<h3>LOGIN Form</h3>
Username:<input type="text" name="username" placeholder="Enter your Name"><br><br>
Password:<input type="password" name="password" placeholder="Enter your Password"><br><br>
Confirm Password:<input type="password" name="repassword" placeholder="Confirm your Password"><br><br>
E-mail add:<input type="text" name="email" placeholder="Enter your Email"><br><br>
Phonenumber:<input type="text" name="phonenumber" placeholder="Enter your Phonenumber"><br><br>
<input type="submit" value="Login">
<input type="reset">
</form>
</div>
<?php 
$conn=new mysqli("localhost","root","","formdatabase");
if($conn === false){
    die("ERROR: Could not connect to databse. " . mysqli_connect_error());
}
$a=$_POST['username'];
$b=$_POST['password'];
$c=$_POST['repassword'];
$d=$_POST['email'];
$e=$_POST['phonenumber'];
if(mysqli_connect_error()){
  die("connection failed".mysqli_connect_error());
}
$sql="INSERT INTO registrationformtable(Username,Password,ConfirmPassword,Email,Phonenumber) VALUES ('$a','$b','$c','$d','$e')";
 mysqli_close($conn);
 ?>
</body>
</html>