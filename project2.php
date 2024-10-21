<?php
$conn=new mysqli("localhost","root","","project1");

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>project1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
  
   <a class="navbar-brand text-white" href="project1.php">project cabinet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="project1.php">Home</a>
        </li>
        </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </head>
  <body>
  
  
 
    <h2>answer to the following questions</h2>
	<?php  
if(isset($_post["add"])){
	                    $pri=$_POST["pricepoint"];
                        $prr=$_POST["pre-time"];
                        $con=$_POST["construction"];
                        $sty=$_POST["style"];
                        $cus=$_POST["customizable"];
	$sql='insert into cabinet(pricepoint,pre_time,construction,style,customizable)values("$pri","$prr","$con","$sty","$cus")';
	
	$conn->query($sql);
	

}



?>

        <form action="" method="post">
		
            <div class="container">
			
				 <labe>1.what is your budget?</label><br>
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="pricepoint" id="pricepoint">
                  <label class="form-check-label">(i)$</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="pricepoint" id="pricepoint">
                  <label class="form-check-label">(ii)$$</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="pricepoint" id="pricepoint">
                  <label class="form-check-label">(iii)$$$-$$$$</label><br>
				  
				  
				  <labe>2.what lead time in business days is preferred?</label><br>
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="pre-time" id="pre-time">
                  <label class="form-check-label">(i)5-10</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="pre-time" id="pre-time">
                  <label class="form-check-label">(ii)20-40</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="pre-time" id="pre-time">
                  <label class="form-check-label">(iii)20-45</label><br>
				  
				  
				  <labe>3.what type of construction?</label><br>
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="construction" id="construction">
                  <label class="form-check-label">(i)all-plywood</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="construction" id="construction">
                  <label class="form-check-label">(ii)all-plywood or furniture board<</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="construction" id="construction">
                  <label class="form-check-label">(ii)all-plywood or furniture board<</label><br>
				  
				  <labe>4.what style are you looking for?</label><br>
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="style" id="style">
                  <label class="form-check-label">(i)partial overlay or full overla</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="style" id="style">
                  <label class="form-check-label">(ii)partial overlay , full overlay or framele</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="style" id="style">
                  <label class="form-check-label">(iii)partial overlay,full overlay,flush inset,beaded inset or frameless</label><br>
				  
				  <labe>5.what level of construction?</label><br>
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="customizable" id="customizable">
                  <label class="form-check-label">(i)none</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="customizable" id="customizable">
                  <label class="form-check-label">(i)semi</label>
				  
				  <div class="form-check">
                  <input class="form-check-input" type="radio" name="customizable" id="customizable">
                  <label class="form-check-label">(i)full</label><br>
				  
				  <button type="submit" class="btn btn-primary" name="add">Submit</button>
				  


</div>
</form>







<footer class="bg-dark" style="height:30px;line-height:20px;">
   <div class="container">
      <div class="row">
	     <div class="col-md-12">
		    <p class="text-center text-white" style="margin-bottom:0px;">Design & Develop By SOBUJ</p>
	     </div>
      </div>
   </div>
</footer>

	
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  

    
  </body>
</html>

               
