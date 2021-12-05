<?php

session_start();
if (!isset($_SESSION['userName'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";

	}elseif ($_SESSION['userType'] == 'Teacher'){
	   echo "<script>alert('FOR ADMIN ONLY'); location.href='home.php';</script>";
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
	<link rel="stylesheet" type="text/css" href="styleUSER.css">

</head>
<body>

<?php include ('app/oop/actions.php');

	$obj = new Actions();
	$result = $obj->select('users');

 ?>

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
				<li class="nav-item ">
					<a class="nav-link" data-toggle="modal" data-target="#modalselect">CONNECT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="user.php">USER</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="profile.php">PROFILE</a>
					<div class="animation start-home"></div>
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
		<?php include 'modalselect.php' ?> 
	</div>
</div>
<!--------------------------END MODAL----------------------->

<!-------------------------------------CONTAINER------------------------------------------->




<div class="container-fluid">
	<div class="row ">



<!-------------------------------------ADD USER------------------------------------------->
		<div class="col-12 adduser padding">
			<div class="col-12 adduser-content jumbotron padding">
				<form action="app/oop/functions.php" method="post" >

				<div class="col-12 text-center">
					<h2>Add User</h2>
				</div>

				<div class="row" >

					<div class="col-sm-12 col-md-6 col-lg-2 col-xl-2">
						<div class="col-12">
							<label>Full Name</label>
							<input name="fname" autocomplete="off" required="" class="form-control" type="text" placeholder="Full Name">
						</div>
					</div>
					
					<div class="col-sm-12 col-md-6 col-lg-2 col-xl-2">
						<div class="col-12">
							<label>Employee No.</label>
							<input name="userName" autocomplete="off" required="" class="form-control" type="text" placeholder="Employee No.">
						</div>
					</div>	

					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
						<div class="col-12">
							<label>Email</label>
							<input name="email" autocomplete="off" required="" class="form-control" type="email" placeholder="Gmail">
						</div>
					</div>

<!-- 					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2">
						<div class="col-12">
							<label>Password</label>
							<input name="password" autocomplete="off" required="" class="form-control" type="password" placeholder="Password">
						</div>
					</div> -->

					<div class="col-sm-12 col-md-6 col-lg-2 col-xl-2">
						<div class="col-12">
							<label>User Type</label>
							<select name="userType" required="" class="form-control">
								<option disabled="true" selected="true">Select</option>
								<option>Admin</option>
								<option>Teacher</option>
							</select>
						</div>
					</div>	

					<div class="col-sm-12 col-md-2 col-lg-2 col-xl-1 addbutton">
						<div class="col-12 ">
							<button name="adduser" type="submit" class="btn btn-primary btn-lg form-control"><i class="fas fa-plus addlogo"></i>
							</button>
						</div>
					</div>

					</form>

					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 addbutton">
						<div class="col-12 ">
							<a href="userstudents.php" class="btn btn-primary btn-lg form-control">ADD STUDENT</a>
						</div>
					</div>		

				</div>

			
			</div>
		</div>
<!----------------------------------END ADD USER-------------------------------------------->

		<div class="col-12 ">
			<div class="row col-11 userlist">

<!----------------------------------ADMIN-------------------------------------------->
			<!-- <div id="admin" class="col-6 admincontainer padding">

				<div class="col-12">
				<div class="col-12"><h3>Admin</h3></div>

				<?php foreach($result as $key => $data): if($data['userType'] == "Admin"):?>

				
					<div class="col-12 padding">
						<div class="col-12 user-content padding">

							<div id=<?=$key?> >
								<div class="row col-12">

									<div class="col-sm-12 col-md-6 col-lg-2 col-xl-4"><label>Name: <?=$data['userName']?> </label></div>
									<div class="col-sm-12 col-md-6 col-lg-2 col-xl-5"><label>Email: <?=$data['email']?></label></div>

									<div class="col-sm-12 col-md-6 col-lg-2 col-xl-3">
										<a class="btn btn-primary" type="button" data-toggle="modal" data-target="#editmodaladmin<?php echo $key?>"><i class="editbutton far fa-edit"></i></a>

										<a class="btn btn-primary" onclick="javascript:confirmationDelete($(this));return false;" href="app/oop/functions.php?deleteuser=<?=$key?>"><div data-id=<?=$key?>><i class="deletebutton far fa-trash-alt"></i></div></a>
									
									<script type="text/javascript">
							            function confirmationDelete(anchor){
							              var conf = confirm('Are you sure want to Delete?');
							            if(conf)
							              window.location=anchor.attr("href");
							              }
									</script>

									</div>

								</div>
							</div>

						</div>
					</div> -->
			
<!----------------------------------MODAL------------------>
<div class="modal fade" id="editmodaladmin<?php echo $key?>">
	<div class="modal-dialog">
		<?php include 'usermodal.php' ?>
	</div>
</div>
<!--------------------------END MODAL----------------------->

<!-- 				<?php endif; endforeach; ?>
	
				</div>	
			</div>
 -->

<!----------------------------------TEACHER------------------------------------------->

			<div class="col-6 teachercontainer padding" style="margin: auto;">

			<div class="col-12 ">

				<div class="col-12"><h3>Teacher</h3></div>

				<?php foreach($result as $key => $data): if($data['userType'] == "Teacher"):?>

				
					<div class="col-12 padding">
						<div class="col-12 user-content padding">

							<div id=<?=$key?> >
								<div class="row col-12">
							
									<div class="col-sm-12 col-md-6 col-lg-2 col-xl-4"><label>Name: <?=$data['FullName']?></label></div>
									<div class="col-sm-12 col-md-6 col-lg-2 col-xl-5"><label>Email: <?=$data['email']?></label></div>
									
									<div class="col-sm-12 col-md-6 col-lg-2 col-xl-3">
										<a class="btn btn-primary" type="button" data-toggle="modal" data-target="#editmodaladmin<?php echo $key?>"><i class="editbutton far fa-edit"></i></a>
										
										<a class="btn btn-primary" onclick="javascript:confirmationDelete($(this));return false;" href="app/oop/functions.php?deleteuser=<?=$key?>"><div data-id=<?=$key?>><i class="deletebutton far fa-trash-alt"></i></div></a>

									<script type="text/javascript">
							            function confirmationDelete(anchor){
							              var conf = confirm('Are you sure want to Delete?');
							            if(conf)
							              window.location=anchor.attr("href");
							              }
									</script>

									</div>
								</div>
							</div>

						</div>
					</div>

<!----------------------------------MODAL------------------>
<div class="modal fade" id="editmodaladmin<?php echo $key?>">
	<div class="modal-dialog">
		<?php include 'usermodal.php' ?>

	</div>
</div>
<!--------------------------END MODAL----------------------->

				<?php endif; endforeach; ?>

			</div>

			</div>

		</div>

		</div>
	</div>
</div>




</body>
</html>