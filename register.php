<?php include 'connection.php';?>
<?php
//user input
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$phon_number = $_POST['phone number'];
$usertype = $_POST['usertype'];

//set variable
$sql="INSERT INTO Member (Username, Password, first_name, surname, phone_number, usertype)
VALUES ('$Username', '$Password', '$first_name', '$surname', '$phone_number' , '$usertype')";

//if data not inserted into table show error or "1 record added" if successful.
if (!mysqli_query($con,$sql)) {
  die('Error:no joy ' . mysqli_error($con));
}
echo "1 record added click <a href='login.html'> here to login</a>";

?>