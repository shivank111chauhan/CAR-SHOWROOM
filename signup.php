<?php
$con=mysqli_connect("localhost","root","","showroom") or die(mysqli_error());


$name=$_POST['username'];
$email=$_POST['email'];
$number=$_POST['number'];
$pass=$_POST['pass'];

$query="INSERT INTO signup VALUES ('$name', '$email', '$number', '$pass')";
mysqli_query($con,$query);
echo "data inserted successfully";

?>  