<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php include "connection.php"; ?>
<?php

$username = $_POST['Username'];
$password = $_POST['Password'];

//$tblname = 'Member';

//create SQL query to check user input against database enteries
$sql="SELECT * FROM Admin WHERE Username= '$username' AND Password='$password'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $Username and $Password, table row must be 1 row

if($count==1){
	session_start();
	$_SESSION['admin']="admin";
	header("location:controlpanel.php");
echo"logged in as admin";
}
else {
echo "Wrong Username or Password <html>click <a href='adminlogin.php'> here </a> to return to login page</html>";
}
?>






</body>
</html>