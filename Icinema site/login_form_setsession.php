<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include "connection.php"; ?>
<?php

$Username = $_POST['Username'];
$Password = $_POST['Password'];
$usertype = $_POST['usertype'];


//$tblname = 'Member';

//create SQL query to check user input against database enteries
$sql="SELECT * FROM Member WHERE Username = '$Username' AND Password ='$Password' AND usertype = 'a'";
$result=mysqli_query($con,$sql);




// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $Username and $Password, table row must be 1 row




if($count==1){
	session_start();
	$_SESSION['adult']="adult";
	header("location:bookingtest2.php");
echo"logged in as adult";
}
else {
echo "Wrong Username or Password <html>click <a href='login.html'> here </a> to return to login page</html>";
}






// set child session 

$sql="SELECT * FROM Member WHERE Username = '$Username' AND Password ='$Password' AND usertype = 'c'";
$result=mysqli_query($con,$sql);




// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $Username and $Password, table row must be 1 row




if($count==1){
	session_start();
	$_SESSION['child']="child";
	header("location:games.html");
echo"logged in as adult";
}
else {
echo "Wrong Username or Password <html>click <a href='login.php'> here </a> to return to login page</html>";
}
?>






</body>
</html>