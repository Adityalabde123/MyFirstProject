<?php
$host = "localhost";
$dbname = "myproject";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$nm=$_POST["t1"];
$ph=$_POST["t2"];
$add=$_POST["t3"];
$pass=$_POST["t4"];

$sql="INSERT INTO project values('$nm','$ph','$add','$pass')";
if(mysqli_query($conn,$sql))
{
       
     echo '<script>alert("Hello Tourist..Register successfully"); window.location="login2.php";</script>';
}       
else{
     echo '<script>alert("Put information properly"); window.location="login1.php";</script>';
}
mysqli_close($conn);
?>