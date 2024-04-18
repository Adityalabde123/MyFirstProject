<?php

$con=mysqli_connect("localhost","root","");
if($con==false)
{
     die("error in database connection");
}
$nm=$_POST["t1"];
$pass=$_POST["t2"];
mysqli_select_db($con,"myproject");
$res=mysqli_query($con,"select *from project where name='$nm' and pass='$pass'");

if($row=mysqli_fetch_row($res))
{
     
     
     echo '<script>alert("Login successfully.."); window.location="project.php";</script>';
}
else {
      echo("<h1>OOP's you have not register yourself OR Invalid data or password</h1>");
      echo '<button onclick="window.location.href=\'login.php\'">register yourself</button>';
        
     }
mysqli_close($con);

?>

