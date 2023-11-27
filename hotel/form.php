<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <form method="post" action="homepage.html">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username"  name="username"required >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required >
  </div>

  <input type="submit" class="btn" value="Login">
  <table style="float:right" border="10" BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=BLUE>
      <tr>
        <td style="color:black"> Don't have a  account<br> <br><a href="register.php"><center>Sign Up </center></a></td>
      </tr>
    </table>
</div>
</form>
<?php
 $conn=new mysqli("localhost","root","","formdatabase");
if($conn === false){
    die("ERROR: Could not connect to databse. " . mysqli_connect_error());
}
$a=$_POST['username'];
$b=$_POST['password'];
$sql="SELECT * FROM loginformtable WHERE Username= '$a' AND Password='$b'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1){
  echo "welcome";
}else{
echo "Error";
}
?>
</body>
</html>