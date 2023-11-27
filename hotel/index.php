<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bstyle.css">
  </head>
  <body>
   <form method="POST">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username"  name="name" required >
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password"name="password" required >
  </div>

  <input type="submit" name="submit" class="btn" value="Login">
  <table style="float:right" border="10" BORDERCOLORLIGHT=YELLOW BORDERCOLORDARK=BLUE>
      <tr>
        <td style="color:#0000ff"> Don't have a  account<br> <br><a href="register.php"><center>Sign Up </center></a></td>
      </tr>
    </table>
</div>
</form>
<?php
$conn=new mysqli("localhost","root","","insertt");
$user=$_POST['name'];
$pass=$_POST['password'];
$sql="SELECT * FROM inserting WHERE Username='$user' AND Password='$pass'";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1){
  isset($_POST['submit']);
  header("location:homepage.html");
}
else{
  isset($_POST['submit']);
    echo"Plese fill  Right information";
}
 ?>
</body>
</html>

