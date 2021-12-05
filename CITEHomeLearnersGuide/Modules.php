<!DOCTYPE html>
<html>
<head>
	<title>Modules</title>

	<script src="jquery/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="SweetAlert/sweetalert.min.js"></script>
	<script type="text/javascript" src="SweetAlert2/sweetalert2.min.js"></script>

	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="styleCON.css">
	<link rel="stylesheet" type="text/css" href="ModuleStyle.css">

	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-storage.js"></script>
	
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
							<li class="nav-item">
								<a class="nav-link" data-toggle="modal" data-target="#modalselect">CONNECT</a>
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
<!----------------------------------MODAL------------------>
<div class="modal fade" id="modalselect">
	<div class="modal-dialog">
		<?php include 'modalselect.php' ?> 
	</div>
</div>
<!--------------------------END MODAL----------------------->

	<div class="container-fluid">
		<div class="row no-gutters">


			<!----------------------------------ADD------------------------------------------->

			<div class="col-sm-12 col-md-6 col-lg-8	col-xl-10 rightside padding" style="margin: auto;">

				<div class="row rightside-input text-center jumbotron padding">
					<div class="col-12 padding">
							<h3>MODULES</h3>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 subcode ">
						
						<div class="col-12">
							<label>Learning System</label>
							<select id="learnSystem" required="" class="form-control">
								<option disabled="true" >Select</option>
								<option>RAD</option>
								<option>FLEX</option>
							</select>
						</div>
	
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 sub ">
						
						<div class="col-12">
							<label>Year</label>
							<select id="subYear" required="" class="form-control">
								<option disabled="true" >Select</option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd Year</option>
								<option>4th Year</option>
							</select>
						</div>
	
					</div>
					<div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 sublink ">
						
						<div class="col-12">
							<label>Section</label>
							<select id="subSection" required="" class="form-control">
								<option disabled="true">Select</option>
								<option>BSIT 01</option>
								<option>BSIT 02</option>
								<option>BSIT 03</option>
								<option>BSIT 04</option>
								<option>BSIT 05</option>
								<option>BSIT 06</option>
							</select>
						</div>

					</div>

					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 sublink ">
						
						<div class="col-12">
							<label>Subject Name</label>
							<input class="form-control" type="" id="subTitle" autocomplete="off" required="">
						</div>

					</div>

					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 sublink ">
						
						<div class="col-12">
							<label>File</label>
							<input class="form-control" type="File" id="file" autocomplete="off" required="">
						</div>

					</div>


					<div class="col-sm-12 col-md-6 col-lg-4 col-xl-2 sublink ">
						
						<div class="col-12">
							<label>File Title</label>
							<input class="form-control" type="text" id="caption" placeholder="title" autocomplete="off" required="" >
						</div>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 " >
						<div class="col-12 padding">
						<button type="submit" class="btn btn-primary btn-lg form-control" onclick="uploadFile()">ADD</button>
						</div>
					</div>

					<div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 " >
						<div class="col-12 padding">
						<button type="submit" class="btn btn-primary btn-lg form-control" onclick="getData()">RELOAD</button>
						</div>
					</div>

				</div>

				
<!-------------------------------------END ADD--------------------------------------------------->
		</div>
	</div>

	<div class="container" id="contentHolder">
		
	</div>


		<div class="col-12">
			<div class="col-10" style="margin: auto;">

				<table>
				<thead>
					<tr>
						<td>DAY</td>
						<td>URL</td>
						<td>ACTION</td>
					</tr>
				</thead>
				<tbody id="table_body">
					
				</tbody>
			</table>

			</div>
		</div>
	



<script type="text/javascript" src="js/Modules2.js"></script>

</body>
</html>