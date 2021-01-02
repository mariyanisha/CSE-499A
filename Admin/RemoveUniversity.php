<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin panel</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
     

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>



<div class="jumbotron text-center a">
  <h1>Admin panel</h1>
  <p>Remove a University</p>
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
  


<div class="container">
  
  <form class="form-inline" action="">
    <div class="form-group">
      <label class="sr-only" for="email"> University Name:</label>
      <input type="email" class="form-control" id="email" placeholder="Remove University"  name="email">
    </div>
    


   
    <button type="button" class="btn btn-danger">remove University</button>
  </form>
</div>

<div class="container">
<h2 class="text-success">Number of universities</h2>
  <!-- Green -->
  <div class="progress">
    <div class="progress-bar bg-success" style="width:20%"></div>
  </div><br>
</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>