<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin panel</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>



 <div class="jumbotron text-center a">
  <h1>Admin panel</h1>
  <p>welcome to admin panel</p>
  <div class="spinner-grow text-muted c"></div>
  <div class="spinner-grow text-primary c"></div>
  <div class="spinner-grow text-success c"></div>
  <div class="spinner-grow text-info c"></div>
  <div class="spinner-grow text-light c"></div> 
  <div class="spinner-grow text-warning c"></div>
  <div class="spinner-grow text-danger c"></div>
  <div class="spinner-grow text-secondary c"></div>
  <div class="spinner-grow text-dark c"></div>
  
</div>


	


<div class="alert alert-danger ">
  <strong>Need log in first to get access</strong> 
</div>
 
<?php 

if(isset($_POST['submit'])){
    $password=$_POST['pass'];

    $host = $_SERVER['HTTP_HOST'];  
    // Put in here the conditional that the request need to accomplish to redirect.
    if( $password=='shafin'){            
        header("Location: http://{$host}/499A/adminpanel.php");
    }

else{
	echo '<div class="alert alert-danger ">
  <strong>Wrong password!!!!</strong> 
</div>';
}
}
 ?>
}

<form action="adminlogin.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Admin Email ID</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admin Email ID" value="www.admin@admin.com">
    <small id="emailHelp" class="form-text text-muted">never share Admin Email ID with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Not a Robot </label>
  </div>


 


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>




