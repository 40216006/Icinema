<?php include "connection.php"; ?>

<title> Admin login</title>
<div class="container">
<div class="container">
  <div style="border-radius:4px;
     background-image:
    radial-gradient(
          #ccc,
      #505050 50%
    );" class="jumbotron">








<div class="row" class="adminlogin">

<div class="col-md-2">
</div>

<div class="col-md-8 admin">

<h6>Admin Login</h6>  

  <form action="login_form_setsession.php" method="POST">
   <div class="form-group adminform">
 <div class="col-xs-2 heading">  < </div>
 <div class="col-xs-6 c1">     <label for="Username">username:</label>
      <input type="text" class="form-control" required name="Username" id="Username" placeholder="Enter username">
    <label for="Password">Password:</label>
      <input type="password" class="form-control" required name="Password" id="Password" placeholder="Enter password">
  <button type="submit" class="btn btn-default">Submit</button>
  </form>	</div>
	
	<div class="col-xs-4"> <img class="img-rounded" width="200px" height="400px" src="images/admin.svg" alt="image of administrator logo"></div>
	</div>
	

   </div>

  
  </div>
  </div>
  
  
  <div class="col-md-2">
  
  </div>
  
  <div class="row">
  <div class="col-md-12 ">
  <?php include'footer.php'?>
  </div>
  
  
  </div>


</div>