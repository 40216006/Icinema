<?php
include'connection.php';

$id = $_GET['id']; 
echo "<h1>Hello " . $_GET["id"] . "</h1>";


$sql = "DELETE FROM Member WHERE Username = '$id'";
$result=mysqli_query($con,$sql);	

if  (mysqli_num_rows($result) < 1)
	{
	header ('location:controlpanel.php');
	} 
	else 
	{
	header ('location: send user somewhere');
}


?>