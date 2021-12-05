<?php include 'thirdyear-fb-process.php'?>

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
					<a class="nav-link" href="connect.php">CONNECT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="user.php">USER</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">PROFILE</a>
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
					<button type="button" class="btn btn-primary btn-lg" style="color: #fff;">FACEBOOK</button>
				</div>	
			</div>
		</div>

<!-----------------------------------SIDE BAR--------------------------------->	

	<div class="col-sm-12 col-md-5 col-lg-3 col-xl-2 sidebar">

		<div class="col-12 sidebar-content text-center">

			<div class="col-11 year-form">
				
				<div class="col-12 sectionfb">
						
						<div class="section-content">
							<a href="connect_3rd_01_fb.php"><button style="margin-top: 7px;"><label>3RD Year <h5>(BSIT-01)</h5></label></button></a>
						</div>

						<div class="section-content">
							<a href="connect_3rd_02_fb.php"><button ><label>3RD Year <h5>(BSIT-02)</h5></label></button></a>
						</div>

						<div class="section-content">
							<a href="connect_3rd_03_fb.php"><button><label>3RD Year <h5>(BSIT-03)</h5></label></button></a>
						</div>

						<div class="section-content">
							<a href="connect_3rd_04_fb.php"><button><label>3RD Year <h5>(BSIT-04)</h5></label></button></a>
						</div>

						<div class="section-content">
							<a href="connect_3rd_05_fb.php"><button style="background: blue;"><label>3RD Year <h5>(BSIT-05)</h5></label></button></a>
						</div>

						<div class="section-content">
							<a href="connect_3rd_06_fb.php"><button><label>3RD Year <h5>(BSIT-06)</h5></label></button></a>
						</div>				
				</div>
				

			</div>	

		</div>
	</div>

<!-----------------------------------RIGHTSIDE---------ADD------------------------>

			<div class="col-sm-12 col-md-6 col-lg-8	col-xl-9 rightside">

				<form method="post" action="connect_3rd_05_fb.php">

				<div class="row rightside-input text-center jumbotron padding">
					<div class="col-12 padding">
							<h3>3RD YEAR BSIT-O5</h3>
							<input type="hidden" name="u_year" value="1st Year">
							<input type="hidden" name="u_section" value="BSIT-O1">
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 subcode padding">
						<div class="col-12">
						<label>SUB. CODE</label>
						<input class="form-control" type="text" name="sub_code" placeholder="Subject Code" autocomplete="off" required="">
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 sub padding">
						<div class="col-12">
						<label>SUBJECT NAME</label>
						<input class="form-control" type="text" name="sub_name" placeholder="Subject Name" autocomplete="off" required="">
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-4 sublink padding">
						<div class="col-12">
						<label>SUBJECT LINK</label>
						<input class="form-control" type="text" name="sub_link" placeholder="Subject Link" autocomplete="off" required="">
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 add">
						<div class="col-12">
						<button type="submit" name="addsub05" class="btn btn-primary btn-lg form-control">ADD</button>
						</div>
					</div>

					</form>
				</div>

				
<!-------------------------------------END ADD--------------------------------------------------->

<!-------------------------------------DISPLAY--------------------------------------------------->
			<?php while ($row = mysqli_fetch_array($all5)) { ?>
				<div class="row rightside-content">
				
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8 col-xl-8 rightcon">
						<a target='_blank' href="<?php echo $row['sub_link'] ?>">
						<div class="col-12 sub-content padding">
							<div class="col-12">
								<label><?php echo $row['sub_code'] ?> <?php echo $row['sub_name'] ?></label>
							</div>
							<div class="col-9">
								<label><?php echo $row['u_section'] ?></label>
							</div>
						</div>
						</a>
						<hr>
					</div>
				
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
						<div class="col-12 admin-button">
							<div class="col-12">
								<a type="button" class="btn btn-primary btn-lg form-control" data-toggle="modal" data-target="#editmodaladmin<?php echo $row['class_id']?>">EDIT</a>

							</div>

							<div class="col-12">
								<a type="button" class="btn btn-primary btn-lg form-control" name="del_sub" href="thirdyear-fb-process.php?del_sub5=<?php echo $row['class_id']; ?>">DELETE</a>
							</div>

						</div>
					</div>
				</div>


<!----------------------------------MODAL------------------>
<div class="modal fade" id="editmodaladmin<?php echo $row['class_id']?>">
	<div class="modal-dialog">
		<?php include 'editfbmodal3_05.php' ?>
	</div>
</div>
<!--------------------------END MODAL----------------------->

			<?php } ?>

<!-------------------------------------END DISPLAY--------------------------------------------------->


			</div>

	</div>
</div>


</body>
</html>