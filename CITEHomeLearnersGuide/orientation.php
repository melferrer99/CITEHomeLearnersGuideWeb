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

	<title>Orientation</title>

	<script src="jquery/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="SweetAlert/sweetalert.min.js"></script>
	<script type="text/javascript" src="SweetAlert2/sweetalert2.min.js"></script>

	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="styleORIENT.css">

	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-storage.js"></script>

</head>
<body>

<?php include ('app/oop/actionsORIENTATION.php');

	$obj = new Actions();
	$result = $obj->select('PDFs');

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
				<li class="nav-item active" >
					<a class="nav-link" href="orientation.php">ORIENTATION</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" data-toggle="modal" data-target="#modalselect">CONNECT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#modaluser">USER</a>
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

    <!----------------------------------MODAL------------------>
    <div class="modal fade" id="modaluser">
        <div class="modal-dialog">
            <?php include 'modaluser.php' ?> 
        </div>
    </div>
    <!--------------------------END MODAL----------------------->




<!-----------------------------------CONTAINER--------------------------------->

<div class="container-fluid">
	<div class="row no-gutters">

			<div class="row col-12 rightside mt-3" style="margin: auto;">

				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-5" style="margin: auto;">
					
						<h5>ADD PDF</h5>
						<div class="row rightside-input jumbotron padding">
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-5 sub padding">
								<div class="col-12">
								<input class="form-control" type="text" id="caption" name="name" placeholder="PDF Title" autocomplete="off" required="" onkeyup="btnActivation()">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 col-xl-5 sublink padding">
								<div class="col-12">
								<input class="form-control" type="File" id="file" placeholder="File" autocomplete="off" required="">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 add">
								<div class="col-12">
								<button type="btn" id="add" class="btn btn-primary btn-lg form-control mt-1" onclick="uploadFile()" disabled="">ADD</button>
								</div>
							</div>
						</div>
					
				</div>

			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-5" style="margin: auto;">
				
					<h5>ADD VIDEO</h5>
					<div class="row rightside-input jumbotron padding">
							<div class="col-sm-12 col-md-6 col-lg-4 col-xl-5 sub padding">
								<div class="col-12">
								<input class="form-control" type="text" id="VIDEOcaption" name="name" placeholder="VIDEO Title" autocomplete="off" required="" onkeyup="btnVIDEOActivation()">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 col-xl-5 sublink padding">
								<div class="col-12">
								<input class="form-control" type="File" id="VIDEOfile" placeholder="File" autocomplete="off" required="">
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-3 col-xl-2 add">
								<div class="col-12">
								<button type="btn" id="addVIDEO" class="btn btn-primary btn-lg form-control mt-1" onclick="uploadVideoFile()" disabled="">ADD</button>
								</div>
							</div>

					</div>
				
			</div>

<!-------------------------------------DISPLAY--------------------------------------------------->
<div class="col-12 rightside mt-3" style="margin: auto;"> 		

		<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin: auto;">  
			<div class="col-12">
	            <h5>PDF</h5>
	            <table class="table table-bordered text-center">
	                <tr>
	                    <th>NAME</th>
	                    <th width="180" class="text-center">Action</th>
	                </tr>
	                <tbody id="tbody">
	                </tbody>
	            </table>
       		 </div>
        </div>

        <hr>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6" style="margin: auto;">  
        	<div class="col-12">
	            <h5>VIDEOS</h5>
	            <table class="table table-bordered text-center">
	                <tr>
	                    <th>NAME</th>
	                    <th>VIDEO</th>
	                    <th width="180" class="text-center">Action</th>
	                </tr>
	                <tbody id="Vidbody">
	                </tbody>
	            </table>
        	</div>
        </div>
</div>

         <!-- Delete Model -->
    <form action="" method="POST" class="users-remove-record-model">
        <div id="remove-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="custom-width-modalLabel">Delete</h4>
                        <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Do you want to delete this record?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form"
                                data-dismiss="modal">Close
                        </button>
                        <button type="button" class="btn btn-danger waves-effect waves-light deleteRecord">Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


         <!-- Delete VIDEO Model -->
    <form action="" method="POST" class="users-removeVIDEO-record-model">
        <div id="removeVIDEO-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
             aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="custom-width-modalLabel">Delete</h4>
                        <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Do you want to delete this record?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form"
                                data-dismiss="modal">Close
                        </button>
                        <button type="button" class="btn btn-danger waves-effect waves-light deleteVIDEO">Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


	</div>
</div>

<script type="text/javascript" src="js/orientation.js"></script>

</body>
</html>