<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>








  <?php include'connection.php'?>  
	  
<?php 

$Event_title = $_POST['Event_title'];
$event_date = $_POST['event_date'];
$Tickets = $_POST['Tickets'];
$age_rating = $_POST['age_rating'];


//set variable
$sql="INSERT INTO Events (Event_title, Tickets, event_date, age_rating)
VALUES ('$Event_title', '$Tickets', '$event_date', '$age_rating')";

//if data not inserted into table show error or "1 record added" if successful.
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 film added  click <a href='controlpanel.php'> here </a> to add more films" ;

?>




</body>
</html>