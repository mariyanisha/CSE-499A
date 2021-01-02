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
  
<div class="container">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Student panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="viewStudent.php">students list <span class="sr-only">(view)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="AddStudent.php">Add student</a>
          <a class="dropdown-item" href="removeStudent.php">remove Student</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">watch Activity</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Access granted</a>
      </li>
    </ul>
    <div class="X"><form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search student by Email"  aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></div>
    
  </div>
   </div>
  <div class="container">
</nav>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">University panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="viewUniversity.php">University list <span class="sr-only">(view)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="AddUniversity.php">Add University</a>
          <a class="dropdown-item" href="RemoveUniversity.php">remove university</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">watch Activity</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Access granted</a>
      </li>
    </ul>
    <div class="Y"><form class="form-inline my-2 my-lg-0 ">
      <input class="form-control mr-sm-2" type="search" placeholder="Search university" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form></div>
  </div>
</nav>
 </div>








<div class="container">
  <h2 class="text-primary">Number of students</h2>
  
  <!-- Blue -->
  <div class="progress">
    <div class="progress-bar" style="width:90%"></div>
  </div><br>
<h2 class="text-success">Number of universities</h2>
  <!-- Green -->
  <div class="progress">
    <div class="progress-bar bg-success" style="width:20%"></div>
  </div><br>

  </div>



    
    
    <div class="col-sm-12 text-center">
      <a href="adminlogin.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>     
      
    </div>
 




	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>