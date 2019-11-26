


<?php session_start();?>

<?php





if(isset($_SESSION['admin'])){

echo "logged in as admin";
}
else
{
	header("location:adminlogin.php");
	echo "you need to log in or register to view this page";
}







?>
<?php include'header.php'?>

<div class="row">
<div class="container">
<div class="col-md-3 sidenav">

<?php include'sidenav.php'?>
</div>

<div class="col-md-2">





<?php include 'connection.php';


mysql_set_charset( 'utf8', $con );
$sql = "SELECT * FROM shop ";
$result= mysqli_query ($con, $sql);

if(mysqli_num_rows($result) > 0)
{
	echo'<div class="container "> 
      

  
   ';

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	echo  '<table class=" remove_product_table""><tr><td>Product name</td><td>Price</td></tr><tr><td>'.$row['item_name'].'</td></strong><td>£'.$row['item_price'].'</strong></td></tr>
	
	
	
	
	
	

	
	
	
	
	<tr><td><a href="delete_product.php?id=' . $row['item_id'].'"><button class=" btn btn-default">Remove item</a></button><td></tr></div>
	';
	}
	echo'</div></div> </table>';
	mysqli_close($con);
	}
	else
	{
	echo '<p>There are no goods for sale.</p>';
	}
	
	?>
	
	</div>
	
	<div class="col-md-5">
	
	</div>
	</div>
	
	
	<div class="row">
	<?php include'footer.php'?>
	
	</div>