<?php include "connection.php"; ?>
<?php

$username = $_POST['Username'];
$password = $_POST['Password'];

//$tblname = 'Member';

//create SQL query to check user input against database enteries
$sql="SELECT * FROM Member WHERE Username= '$username' AND Password='$password'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $Username and $Password, table row must be 1 row

if($count==1){
	session_start();
	$_SESSION['adult']="adult";
	header("location:controlpanel.php");
echo"logged in as admin";
}
else {
echo "Wrong Username or Password <html>click <a href='adminlogin.php'> here </a> to return to login page</html>";
}
?>