

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
		<a class="navbar-brand" href="#"><img src="img/LOGO.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>	
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" >
					<a class="nav-link" href="home.php"><i class="fas fa-home"></i></a>
				</li>
				<li class="nav-item" >
					<a class="nav-link" href="orientation.php">ORIENTATION</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="connectselect.php">CONNECT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="user.php">USER</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">PROFILE</a>
				</li>
				<li class="nav-item">
					<a href="logout.php" type="submit" name="logout" class="btn btn-primary" onclick="javascript:confirmationLogout($(this));return false;">LogOut</a>
				</li>	
			</ul>
		</div>		
	</div>
</nav>

<!-----------------------------------CONTAINER--------------------------------->

<div class="container-fluid">
	<div class="row no-gutters">

<!-----------------------------------HEADER--------------------------------->

		<div class="col-12 padding">
			<div class="row text-center">
				<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">

					<h1>SELECT FIRST</h1>

					<a href="connect.php"><button class="btn btn-primary btn-lg"><h3>RAD</h3></button></a>
					<a href=""><button class="btn btn-primary btn-lg"><h3>FLEX</h3></button></a>

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