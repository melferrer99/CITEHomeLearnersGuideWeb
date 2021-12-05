<?php include 'orientationflexProcess.php'?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Orientation</title>

	<script src="jquery/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="SweetAlert/sweetalert.min.js"></script>
	<script type="text/javascript" src="SweetAlert2/sweetalert2.min.js"></script>

	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="styleORIENT.css">

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
				<li class="nav-item active" >
					<a class="nav-link" href="orientation.php">ORIENTATION</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="connect.php">CONNECT</a>
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






<!-----------------------------------CONTAINER--------------------------------->

<div class="container-fluid">
	<div class="row no-gutters">

<div class="col-12">			
	<div class="all col-sm-12 col-md-10 col-lg-10 col-xl-7">
		<div class="row LScontent col-12">

	<div class="but col-12">
		<div class="row col-12">
		<div class=" col-6">
			<a href="orientation.php"><button class="btn btn-lg form-control">RAD</button></a>
		</div>
		<div class=" col-6">
			<a href="orientationflex.php"><button class="btn btn-lg form-control" style="background: #fff;">FLEX</button></a>
		</div>
		</div>
		<hr>
	</div>

					
				<div class="col-12">
					<form method="post" action="orientationflex.php">
					<div class="col-12">

					<label>Title</label>
					<input name="title" class="form-control" autocomplete="off">
				
					<label>Content</label>
					<textarea  name="content"></textarea>

					<input type="hidden" name="L_system" value="FLEX">
					</div>

					<div class="col-12">
					<div class="row col-12">
						<div class="col-2" style="margin: auto;">
							<button class="btn btn-primary btn-lg form-control" type="submit" name="save2">Save</button>
						</div>
					</div>
					</div>
					</form>
				</div>
			

		</div>
	</div>
</div>

<div class="row col-12">
		<div class="col-12">
			<div class="display col-9">
				<?php while ($row = mysqli_fetch_array($all2)) { ?>

					<div class="content col-12 text-center">

						<div class="col-12">
							<h2><?php echo $row['title'] ?></h2>
						</div>

						<div class="col-12">
							<div class="col-12">
								<?php echo $row['content'] ?>		
							</div>
						</div>

						</div>

					<div class="col-12">
						<div class="down row col-4">
							<div class="col-6">
								<a type="button" class="btn btn-primary btn-lg form-control" data-toggle="modal" data-target="#editmodalorient<?php echo $row['id']?>">EDIT</a>

							</div>
							<div class="col-6">
								<a type="button" class="btn btn-primary btn-lg form-control" name="del2" href="orientationflexProcess.php?del2=<?php echo $row['id']; ?>">DELETE</a>
							</div>
						</div>
					</div>
					<hr>

					<!----------------------------------MODAL------------------>
					<div class="modal fade" id="editmodalorient<?php echo $row['id']?>">
						<div class="modal-dialog">
							<?php include 'editorientmodal2.php' ?>
						</div>
					</div>
					<!--------------------------END MODAL----------------------->

				<?php } ?>
			</div>
		</div>
</div>

	</div>
</div>

</body>
</html>