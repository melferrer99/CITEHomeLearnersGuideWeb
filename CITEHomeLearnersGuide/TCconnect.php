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

	<title>Connect</title>

	<script src="jquery/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="SweetAlert/sweetalert.min.js"></script>
	<script type="text/javascript" src="SweetAlert2/sweetalert2.min.js"></script>

	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="styleCON.css">

</head>
<body>

<!-----------------------------------NAVBAR--------------------------------->

<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
	<div class="container-fluid">
		<a class="navbar-brand" href="home2.php"><img src="img/LOGO.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>	
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" >
					<a class="nav-link" href="home2.php"><i class="fas fa-home"></i></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" data-toggle="modal" data-target="#modalselect">CONNECT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="TCprofile.php">PROFILE</a>
				</li>
				<li class="nav-item">
					<a href="logout.php" type="submit" name="logout" class="btn btn-primary" onclick="javascript:confirmationLogout($(this));return false;">LogOut</a>
				</li>	
			</ul>
		</div>		
	</div>
</nav>
<!----------------------------------MODAL------------------>
<div class="modal fade" id="modalselect">
	<div class="modal-dialog">
		<?php include 'TCmodalselect.php' ?> 
	</div>
</div>
<!--------------------------END MODAL----------------------->
<!-----------------------------------CONTAINER--------------------------------->

<div class="container-fluid">
	<div class="row no-gutters">

<!-----------------------------------HEADER--------------------------------->

		<div class="col-12 padding">
			<div class="row text-center">
				<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					
					
				</div>	
			</div>
		</div>

<!-----------------------------------1st class--------------------------------->
<div class="container-fluid">
	<div class="row">
			
		<div class="container col-4">	
			<div class="col-12 text-center"><h1>RAD</h1></div>

			<div class="body-content col-12 text-center">
				<div class="col-12">
					<a href="TCRADclassroom.php"> <button type="button" class="btn btn-lg" style="background: lightgreen; color: #fff;">CLASSROOM</button> </a>
					<a href="TCRADfacebook.php"><button type="button" class="btn btn-primary btn-lg">FACEBOOK</button></div></a>
				</div>
			</div>
		</div>

	</div>
</div>

	</div>
</div>


</body>
</html>


<script type="text/javascript">
            function confirmationLogout(anchor){
              var conf = confirm('Are you sure want to LogOut?');
            if(conf)
              window.location=anchor.attr("href");
              }
</script>