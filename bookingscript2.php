<?php

include'connection.php'?>
<?php
//script for checking if enough tickets are available and if so deducting number of tickets reuested by user from ticket stock in database table.
//SQL query to select specific event based on date entered


$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$bookdate = $_POST['film'];
$booktickets = $_POST['booktickets'];

$result=mysqli_query($con, "SELECT Tickets FROM Events WHERE Event_title = '$bookdate';");





//while loop to run through array
while($row=mysqli_fetch_array($result))
{
//checking that the number of tickets requested is available
	if($row['Tickets']<$booktickets)
{
	echo"Sorry, we do not have enough tickets to meet your requirements. We only have ".$row['Tickets']. " tickets left.";
	
}
else
{
	echo "Tickets booked, Please find your order below";
	
//calculation below deducts the amount requested by the user from the amount in the table and set it to a new variable
$ticketsleft=$row['Tickets'] - $booktickets;

//Update the events table, Set the tickets column where the row = bookdate to the value of the variable $ticketsleft
mysqli_query($con, "UPDATE Events SET Tickets = '$ticketsleft' WHERE Event_title = '$bookdate';");


echo "<table border='1'>
<tr>
<th>First Name</th>
<th>Surname</th>
<th>Tickets Ordered</th>
<th>Film title</th>
</tr>";
echo "<tr>";
echo "<td>" . $firstname . "</td>";
echo "<td>" . $surname . "</td>";
echo "<td>" . $booktickets . "</td>";
echo "<td>" . $bookdate . "</td>";

echo "</tr>";
echo "</table>";


}
}

?>


<p>Click the button to print the current page.</p>

<button onclick="myFunction()">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>