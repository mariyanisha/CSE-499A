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
  <p>Add a student</p>
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
      <label class="sr-only" for="email"> Student's Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email">
    </div>
    <div class="form-group">
      <label class="sr-only" for="email">Student name</label>
      <input type="email" class="form-control" id="email" placeholder="Student name"  name="email">
    </div>
    <div class="form-group">
      <label class="sr-only" for="email">father name</label>
      <input type="email" class="form-control" id="email" placeholder="Student name"  name="email">
    </div>

    <div class="form-group">
      <label class="sr-only" for="email">Student Age</label>
      <input type="email" class="form-control" id="email" placeholder="Student age"  name="email">
    </div>
<div class="form-group">
      <label class="sr-only" for="email">Student Nationality</label>
      <input type="email" class="form-control" id="email" placeholder="Student Nationality"  name="email">
    </div>
<div class="form-group">
      <label class="sr-only" for="email">address</label>
      <input type="email" class="form-control" id="email" placeholder="Student name"  name="email">
    </div>
    <div class="Z">
      <form action="">
  <label for="cars">Education:</label>
  <select name="cars" id="cars">
    <option value="volvo">Masters</option>
    <option value="saab">Graduation</option>
    <option value="opel">A level</option>
    <option value="audi">O level</option>
    <option value="audi">below O level</option>
  </select>
  <br><br>
  
</form></div>


   
    <button type="button" class="btn btn-success">Add student</button>
  </form>
</div>


<div class="container">
  <h2 class="text-primary">Number of students</h2>
  
  <!-- Blue -->
  <div class="progress">
    <div class="progress-bar" style="width:90%"></div>
  </div><br>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>