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
	<link rel="stylesheet" type="text/css" href="stylePRO.css">

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
				<li class="nav-item ">
					<a class="nav-link" data-toggle="modal" data-target="#modalselect">CONNECT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="TCuserStudent.php">USER</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="TCprofile.php">PROFILE</a>
				</li>	
				<li class="nav-item">
					<a href="logout.php" type="submit" name="logout" class="btn btn-primary" onclick="javascript:confirmationLogout($(this));return false;">LogOut</a>
				</li>

		<script type="text/javascript">
            function confirmationLogout(anchor){
              var conf = confirm('Are you sure want to LogOut?');
            if(conf)
              window.location=anchor.attr("href");
              }
		</script>


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

    <!----------------------------------MODAL------------------>
    <div class="modal fade" id="modalselectuser">
        <div class="modal-dialog">
            <?php include 'TCmodaluser.php' ?> 
        </div>
    </div>
    <!--------------------------END MODAL----------------------->

<!--------------------------------------CONTAINER---------------------------------------------->
<div class="container-fluid">
	<div class="row profile">


<!--------------------------------------PROFILE BODY---------------------------------------------->

		<div class="col-12 procontent padding">
			<div class="col-xs-12 col-sm-9 col-md-7 col-lg-4 col-xl-4 usernamecon">

<!--------------------------------------HEADER---------------------------------------------->
				<div class="col-12 profile-head text-center">
					<div class="col-12 text-center">
						<label><h2>

					<?php 
	    				if (isset($_SESSION['userName'])) { 
	    					echo $_SESSION['FullName'];
	    				}
	    				
	    				else{
	    					header("location:login.php");
	    					}
	    			?>
	    				
	    				</h2></label>

					</div>
				</div>
				<hr>

<!--------------------------------------EMAIL---------------------------------------------->
				<div class="row col-12 padding">
					<div class="col-12">
						<div class="col-12">
						<input class="form-control" type="hidden" name="username" value="<?php echo $_SESSION['userName'];?>" disabled="true">
						</div>
					</div>

				</div>
<!--------------------------------------END EMAIL---------------------------------------------->

<!--------------------------------------EMAIL---------------------------------------------->
				<div class="row col-12 padding">
					<div class="col-12">
						<div class="col-12">
						<label>EMAIL</label>
						<input class="form-control" type="email" name="username" value="<?php echo $_SESSION['email'];?>" disabled="true">
						</div>
					</div>

				</div>
<!--------------------------------------END EMAIL---------------------------------------------->

<!--------------------------------------PASSWORD---------------------------------------------->
				<div class="row col-12 padding">
				<div class="col-12">
					<div class="col-12">
					<label>PASSWORD</label>
					<input class="form-control" type="password" name="password" value="<?php echo $_SESSION['password'];?>" disabled="true">
					<button class="btn btn-primary" style="margin: 3px;" data-toggle="modal" data-target="#modalEDITpass">change password</button>
					<hr>
					<a type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#modalEDIT">EDIT</a>
					</div>
				</div>

				</div>
<!--------------------------------------END PASSWORD---------------------------------------------->
			</div>

		</div>
<!--------------------------------------END PROF BODY---------------------------------------------->


<!----------------------------------MODAL------------------>
<div class="modal fade" id="modalEDIT">
	<div class="modal-dialog">
		<?php include 'profilemodal.php' ?> 
	</div>
</div>
<!--------------------------END MODAL----------------------->


<!----------------------------------MODAL------------------>
<div class="modal fade" id="modalEDITpass">
	<div class="modal-dialog">
		<?php include 'changePassModal.php' ?> 
	</div>
</div>
<!--------------------------END MODAL----------------------->


	</div>
</div>


    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>

    <script type="text/javascript" src="js/TCchangePassFunction.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>
</html>