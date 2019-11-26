<?php include'connection.php'?> 


<?php 

if(isset($_SESSION['adult']))
{ 
echo "logged in"
header("location:ticketbookingtest2.php");
}
else
{
	header("location:login.html");
	echo "you need to log in or register to view this page";
}













?>