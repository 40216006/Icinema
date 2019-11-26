<?php include'connection.php'?>
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


<!-- script-->
<script src="scripts/font.js"></script>
<!-->


 <!-- font style -->
  <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
<!--close-->
  <!--custom stylesheet-->
  <link href='css/custom.css' rel='stylesheet' type='text/css'>
    <link href='css/Icinema_style.css' rel='stylesheet' type='text/css'>
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

<body style=" background: url('background.png'); 
    background-position:center center;
    background-repeat:no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;background-attachment: fixed;">



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Icinema</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
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
	<h1 style="color:#ff8040;text-shadow: 20px 4px 40px #ff8040;">Icinema </h1>
  </div>
  
  
  <div class="row">
  <div class="col-md-12">
  <h2>Junior films</h2>
  

<?php
//set sql query to a variable
$sql = "SELECT Event_title, event_date FROM Events WHERE age_rating < 15";

//use query function to get data from database and set to variable
$result = mysqli_query($con, $sql);

//if statement - number of rows greater then 0
if (mysqli_num_rows($result) > 0) 
{
    
	// output data of each row using associative array and while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> <table class='table junior_films'><td> film title:</td> <tr><td> <b>". $row["Event_title"]. " </b></td></tr> <td> event date:</td><tr><td>  <b>" . $row["event_date"]. "</b></td></tr></table>";
											}
} else {
    echo "0 results";
}

//mysqli_close($con);
 ?> 
 </div>
 </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <div class="row">
 <div class="div-col-12 footer">
 
 <?php include'footer.php'?>
 
 </div>
 
 </div>
 
 
 
 
 
 
 </div>