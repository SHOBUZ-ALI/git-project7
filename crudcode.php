<?php

 $conn = new mysqli('localhost','root','','crud');
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Project</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	
  </head>
  <body>
   
<!-- navbar Section -->	
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
  
    <a class="navbar-brand text-white" href="index.php">CRUD</a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	  
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Home</a>
        </li>
		
        <li class="nav-item">
          <a class="nav-link text-white" href="add.php">Add Data</a>
        </li>
		
      </ul>

    </div>
  </div>
</nav>
<!-- navbar Section -->

<section style="min-height:545px; margin-bottom:40px;">
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
	  
<?php

if(isset($_POST['add'])){

     $sname    = $_POST['student_name'];
	 $sclass   = $_POST['student_class'];
	 $ssection = $_POST['student_section']; 
	 $sroll    = $_POST['student_roll']; 
 
 
 
	
}

 


?>

		 
  <div class="card" style="margin-top:40px;"> 
     <div class="card-header">Add Data</div>
	 
     <div class="card-body">  
		<form action="" method="post">	
		
	    <div class="mb-3">
		  <label class="form-label">Student Name</label>
		  <input type="text" class="form-control" placeholder="Enter Name" name="student_name">
		</div>
		
		<div class="mb-3">
		  <label class="form-label">Class</label>
		  <input type="text" class="form-control" placeholder="Enter Class" name="student_class">
		</div>
		
		<div class="mb-3">
		  <label class="form-label">Section</label>
		  <input type="text" class="form-control" placeholder="Enter Section" name="student_section">
		</div>
		
		<div class="mb-3">
		  <label class="form-label">Roll</label>
		  <input type="number" class="form-control" placeholder="Enter Roll" name="student_roll">
		</div>
		
		<div class="mb-3">
		  <button type="submit" class="btn btn-primary" name="add">Send</button>
		</div>
		
	</form>	

   </div>
</div>		 
		 
      </div>
   </div>
</div>
	
</section>	

<footer class="bg-dark" style="height:50px;line-height:50px;">
   <div class="container">
      <div class="row">
	     <div class="col-md-12">
		    <p class="text-center text-white" style="margin-bottom:0px;">Design & Develop By NACTAR</p>
	     </div>
      </div>
   </div>
</footer>

	
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
