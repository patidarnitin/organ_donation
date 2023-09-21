<?php
	session_start();
	echo'
<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
 crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<html>

<head>
	<title>Organ Donation</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark justify-content-between">
		
		
	</nav>
	<div class="jumbotron">
		<center>
			<h1 class="display-4">Organ Donation </h1>
		</center>
	</div>

	<div id="accordion">
		
		</div>
		<div class="card">
			<div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
				<h5 class="mb-0">
					<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
					 aria-controls="collapseThree">
						<strong>Data</strong>
					</a>
				</h5>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body">
					
        
					<center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="Show_Book.php">
                                    Show Bookings</a >
							</form>
						</div>
					</center>
					<br>
				</div>
			</div>
		</div>
        
		
		
    <div class="card">
      <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
				<h5 class="mb-0">
					<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
					 aria-controls="collapseFour">
						<strong>Hospital </strong>
					</a>
				</h5>
			</div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				<div class="card-body">
					
				<center>
				<div>
					<form action="" method="POST">
						<a class="btn btn-primary" style="width: 25%;" type="submit" href="hospital_list.php">
							Hospital List</a >
					</form>
				</div>
			    </center>	
					<br>
                    <center>
						<div>
							<form action="" method="POST">
								<a class="btn btn-primary" style="width: 25%;" type="submit" href="searchhospital_byname.php">
                                    Search Hospital by name</a >
							</form>
						</div>
					</center>
					
					
					<br>
                    
                   
					
                    
        </div>
      </div>
    </div>
		
		
</div>
</body>

</html>';
?>
