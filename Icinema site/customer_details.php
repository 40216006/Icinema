<?php include'connection.php'?>


<?php session_start();
?>
<?php




if(isset($_SESSION['admin']))
{ 
echo "logged in";
}
else
{
	header("location:login.html");
	echo "you need to log in or register to view this page";
}







?>

<!DOCTYPE html>
<html lang="en">
<head><link href='custom.css' rel='stylesheet' type='text/css'>
  <title>Icinema</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
 
<!-- TITLE FONT -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

    <link href='css/Icinema_style.css' rel='stylesheet' type='text/css'>
<!-- script-->
<script src="scripts/font.js"></script>
<!-->


 <!-- font style -->
  <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
<!--close-->
  <!--custom stylesheet-->
  <link href='css/custom.css' rel='stylesheet' type='text/css'>
  <!--close-->
  <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Cabin::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
</head>
<body style=" background: url('images/background.png'); 
    background-position:center center;
    background-repeat:no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;background-attachment: fixed;">


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Icinema</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="bookingtest2.php">book tickets</a></li>
        <li><a href="games.html">games</a></li>
     <li><a href="junior_films.php">Junior films</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <div style="border-radius:4px;
     background-image:
    radial-gradient(
          #ccc,
      #505050 50%
    );" class="jumbotron">
  
<h1 style="color:#ff8040;text-shadow: 20px 4px 40px #ff8040;"> Icinema </h1>
  
    
    <p>
	
	<!--twitter follow button-->
	
	<a href="https://twitter.com/intent/tweet?screen_name=Icinema" class="twitter-mention-button" data-size="large">Tweet to @Icinema</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  </script>
  
  <!--close-->
  
  
  
 

   <!-- -->
   <a class="btn btn-warning pull-right" href="login.html">Login</a><a href="register.html" class="btn btn-warning pull-right">register</a>
  
  </p>
  
  
  </div><div class="container">
  <div class="row">
  <div class="col-md-5">
  

<?php include 'connection.php';


mysql_set_charset( 'utf8', $con );
$sql = "SELECT * FROM Member";
$result= mysqli_query ($con, $sql);

if(mysqli_num_rows($result) > 0)
{
	echo'<div class="container"> 
      

  
   ';

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	echo  '<table class=" remove_user""><tr><td> Username</td><td>First name</td></tr><tr><td>'.$row['Username'].'</td></strong><td>'.$row['first_name'].'</strong></td></tr>
	
	
	
	
	
	

	
	
	
	
	<tr><td><a class="remove_user" href="delete_user.php?id=' . $row['Username'].'"><button class=" btn btn-default remove_user">Remove user</a></button><td></tr></div>
	';
	}
	echo'</div></div> </table>';
	mysqli_close($con);
	}
	else
	{
	echo '<p>There are no users in the database.</p>';
	}
	
	?>
	</div>
	
	<div class="col-md-7">
	</div>
	
	

	</div>
	</div>
	<div class="row">
	<?php include'footer.php'?>
	
	</div>