<?php include 'connection.php';?>
<?php
//user input
$username = $_POST['username'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];

//set variable
$sql="INSERT INTO Member (Username, Password, usertype)
VALUES ('$username', '$password','$usertype')";

//if data not inserted into table show error or "1 record added" if successful.
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header("location:ticketbookinghome.html");
echo "you are now registered Click <a style='color:red;' href='index.html'> here </a> to return to homepage";


if($usertype == 'junior') 
{
	$_SESSION['junior']="junior";
	header("location:games.html");
	echo "logged in as junior member";
}
if($usertype == 'general_user')
{
$_SESSION['general_user'];
header("location:ticketbookinghome.html");
echo "logged in as general user";
}
elseif($usertype == 'staff')
{
	$_SESSION['staff'];
	header("location:staffhq.html");
	echo "logged in as staff member";
}

?>