<?php

session_start();
if (!isset($_SESSION['userName'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 }
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Profile</title>

	<script src="jquery/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="SweetAlert/sweetalert.min.js"></script>
	<script type="text/javascript" src="SweetAlert2/sweetalert2.min.js"></script>

	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="styleHOME.css">


</head>
<body>

<!------------------------------------------START-------------------------------------------------->

<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			
			<div class="content row col-12 padding">
				<div class="header col-11 text-center">

				<div class="navbar-brand col-12">
					<img src="img/LOGO.png">
					<label>CITE HOME LEARNERS GUIDE</label>		
				</div>

				</div>
			</div>
				
			<div class="row content col-11 text-center">
				
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 padbot">
					<div class="homeorient col-12">
					<div class="col-12">
						<i class="fas fa-book"></i>
						<h5>ORIENTATION</h5>
					</div>
					<a type="button" class="btn btn-success form-control" href="orientation.php">GO</a>
					</div>
				</div>
	
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 padbot">
					<div class="homeconnect col-12">
					<div class="col-12">
						<i class="fas fa-link"></i>
						<h5>CONNECT</h5>
					</div>
					<a type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#modalselect">GO</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 padbot">
					<div class="homeuser col-12">
					<div class="col-12">
						<i class="fas fa-users"></i>
						<h5>USER</h5>
					</div>
					<a type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#modaluser">GO</a>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 padbot">
					<div class="homeprofile col-12">
					<div class="col-12">
						<i class="fas fa-id-card"></i>
						<h5>PROFILE</h5>
					</div>
					<a type="button" class="btn btn-success form-control" href="profile.php">GO</a>
					</div>
				</div>

			</div>

<!----------------------------------MODAL------------------>
<div class="modal fade" id="modalselect">
	<div class="modal-dialog">
		<?php include 'modalselect.php' ?> 
	</div>
</div>
<!--------------------------END MODAL----------------------->

    <!----------------------------------MODAL------------------>
    <div class="modal fade" id="modaluser">
        <div class="modal-dialog">
            <?php include 'modaluser.php' ?> 
        </div>
    </div>
    <!--------------------------END MODAL----------------------->



		</div>	
	</div>
</div>


	
</body>
</html>