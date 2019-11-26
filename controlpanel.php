<html>

<?php session_start();?>

<?php





if(isset($_SESSION['admin'])){

echo "logged in";
}
else
{
	header("location:adminlogin.html");
	echo "you need to log in or register to view this page";
}







?>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

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
  
  <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>


<style>
h1{font-family: 'Cabin', sans-serif;}
p{font-family: 'Cabin', sans-serif;}
a{font-family: 'Cabin', sans-serif;}
</style>







<style>

a{color:#fff;   vertical-align: middle;
    display: inline-block;}

.navbar1{box-shadow:inset #fff 0px 0px 10px;}

ul{display:inline;}

li{display:inline;padding-right:50px;text-align:center;}

.navbar1{width:100%;background-color:#000;padding-bottom:0px;margin-bottom:0px;border-radius:4px;box-shadow:inset 0 0 10px #000000;height: 0px;
  line-height: 0px;
}


.jumbotron{background-image:url(..film.png);background-repeat:no-repeat;box-shadow: inset #666 0px 0px 20px ;margin-top:0px;}

.wrapper{width:100%;height:100%;background-color:#D8D8D8;position:relative;top:px;}

p{size:auto;font-family: 'Cabin', sans-serif;}

blue{color:#09C;}

h1{font-family: 'Cabin', sans-serif; }

@import url(http://fonts.googleapis.com/css?family=Cabin);

html, body {
  height: 100%;
}

#wrap {
  min-height: 100%;
}

#main {
  overflow:auto;
  padding-bottom:150px; /* this needs to be bigger than footer height*/
}

#footer{width:80%;height:20%;background-color:#333;bottom:-300px;position:absolute;left:143px;border-radius:5px;

h2{
    margin: 0;     
    color: #fff;
    padding-top: 90px;
    font-size: 52px;
   font-family: 'Cabin', sans-serif;    
}
.item{
    background: #333;    
    text-align: center;
    height: 300px !important;
}
.carousel{
    margin-top: 20px;
}
.bs-example{
	margin: 20px;
}
#footer{width:80%;height:20%;background-color:#333;bottom:-200px;position:absolute;left:143px;border-radius:5px;




</style>

<link rel="stylesheet" href="css/Icinema_style.css" type="css/text">




</head>


<body style=" background: url('background.png'); 
    background-position:center center;
    background-repeat:no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;background-attachment: fixed;">



<br><br>

  

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
	 <li><a href="customer_details.php">Customer details</a></li>
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
  <h2>control panel</h2><a class="remove_user" href="customer_details.php"><button type="btn btn-default remove_user">Remove user from database</a></button> 
  
 


<form action="addfilm.php" class="form-horizontal" method="POST" role="form">

 
  <div class="form-group">
    <label class="control-label col-sm-2" for="Event_date">bookdate</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Event_date" placeholder="Enter date of showing">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="Tickets">tickets</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="Tickets" placeholder="enter number of tickets available">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Event_title">film title</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="Event_title" placeholder="enter title of film">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="age_rating">age rating</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="age_rating" placeholder="enter the age rating of the film ">
    </div>
  </div>
  
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Add film to database</button>
    </div>
  </div>
</form>












</div>
</div>

        
    </div>  
        
        
        
        
         
       
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
              
          <p></p>      
        </div>
        <div class="col-md-3"> 


<?php include'connection.php'?>
<?php

//set sql query to a variable
$sql = "SELECT * FROM Events";

//use query function to get data from database and set to variable
$result = mysqli_query($con, $sql);

//if statement - number of rows greater then 0
if (mysqli_num_rows($result) > 0) 
{
    
	// output data of each row using associative array and while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br> <table class='table junior_films'><td> film title:</td> <tr><td> <b>". $row["Event_title"]. " </b></td></tr> <td> Tickets</td><tr><td>  <b>" . $row["Tickets"]. "</b></td></tr></table>";
											}
} else {
    echo "0 results";
}

//mysqli_close($con);
 ?> 



















		
          <p></p>      
        </div>
        <div class="col-md-3">        
          <p><strong></strong></p>
        </div>
      </div>
    </div>











<br>

<br>

<footer class="footer"></footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</nav>

</div>
 
 
 

 <div class="footer"><ol style="display:block"><li style="color: #999; display: block"></li><li style="color: #999"></li><li style="color: #999; display: block;"><a href="controlpanel.html">Admin Control Panel</a></li></ol>
  					
  
  
  
   </div>

</body>
















</html