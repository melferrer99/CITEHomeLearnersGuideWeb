<?php

session_start();
if (!isset($_SESSION['userName'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";

	}
    elseif ($_SESSION['userType'] == 'Admin'){
	   echo "<script>alert('FOR TEACHER ONLY'); location.href='home.php';</script>";
	 }
	
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>ADD USER</title>

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
					<a class="nav-link" href="home2.php"><i class="fas fa-home"></i></a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" data-toggle="modal" data-target="#modalselect">CONNECT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="TCuserStudent.php">USER</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="TCprofile.php">PROFILE</a>
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

<!------------------------------------->

    <div class="container-fluid" style="margin-top: 10px;">

        <div class="row rightside-input text-center jumbotron padding col-7" style="margin: auto;">	

            <div class="col-12">
            	<h4>ADD STUDENT</h4>
                <form id="addUser" class="form-inline" method="POST" action="">

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 subcode padding">

                        <label for="fname" class="sr-only">FIRST NAME</label>
                        <label>FIRST NAME</label>
                        <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name"
                               required autofocus>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 subcode padding">

                        <label for="lname" class="sr-only">LAST NAME</label>
                        <label>LAST NAME</label>
                        <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name"
                               required autofocus>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 subcode padding">
                        <label for="userName" class="sr-only">STUDENT NO.</label>
                        <label>STUDENT NO.</label>
                        <input id="userName" type="text" class="form-control" name="userName" placeholder="Student No."
                               required autofocus>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 subcode padding">
                        <label for="email" class="sr-only">EMAIL</label>
                        <label>EMAIL</label>
                        <input id="email" type="email" class="form-control" name="email" placeholder="email"
                               required autofocus>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 subcode padding">
                        <label for="year" class="sr-only">YEAR</label>
                        <label>YEAR</label>
                        <select id="year" type="text" class="form-control" name="year" required="" autofocus="">
                                <option disabled="true" selected="">Select</option>
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 subcode padding">
                        <label for="section" class="sr-only">SECTION</label>
                        <label>SECTION</label>
                        <input id="section" type="text" class="form-control" name="section" placeholder="section"
                               required autofocus onkeyup="btnActivation()">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 subcode padding">
                        <label for="learningSystem" class="sr-only">LEARNING SYSTEM</label>
                        <label>LEARNING SYSTEM</label>
                        <select id="learningSystem" type="text" class="form-control" name="learningSystem" required="" autofocus="">
                                <option disabled="true" selected="">Select</option>
                                <option>FLEX</option>
                                <option>RAD</option>
                        </select>
                    </div>

                    <input type="hidden" id="userType" name="userType" value="Student">
                   
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-1 ">
                        <div class="col-12">
                            <button id="submitUser" type="button" class="btn btn-primary mb-2" disabled="">Submit</button>
                        </div>
                    </div>

                    <div class="row col-sm-12 col-md-6 col-lg-6 col-xl-4 ml-auto">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                            <div class="col-12 padding">
                                <input type="file" id="uploadfile" onchange="readImage(this)">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                            <div class="col-12">
                                <button id="submitSTUDENT" type="button" class="btn btn-primary mb-2" disabled="">Import</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <br>

        <div class="col-10" style="margin: auto;">

            <div class="col-7" style="margin: auto;">
                <div class="col-12 padding">
                    <div class="row col-11 text-center jumbotron padding" style="margin: auto;">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2  padding">
                            <select id="SORTlearningSystem" type="text" class="form-control" name="SORTlearningSystem" required="" autofocus="" onchange="SelecLearningSystem()">
                                    <option disabled="true" selected="">Learning System</option>
                                    <option>FLEX</option>
                                    <option>RAD</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3  padding">
                            <select id="SORTyear" type="text" class="form-control" name="SORTyear" required="" autofocus="" onchange="OnSelectionChange()">
                                    <option disabled="true" selected="">Year</option>
                                    <option>1st Year</option>
                                    <option>2nd Year</option>
                                    <option>3rd Year</option>
                                    <option>4th Year</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3  padding">
    <!--                           <select id="SORTsection" type="text" class="form-control" name="SORTsection" required="" autofocus="">
                                    <option disabled="true" selected="">Section</option>
                              </select>
     -->                           <input id="SORTsection" type="text" class="form-control" name="SORTsection" placeholder="Section" required autofocus>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 padding">
                                <div class="col-12">
                                    <button id="getData" type="button" class="btn btn-primary form-control">Sort</button>
                                </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2 padding">
                                <div class="col-12">
                                    <a href="TCuserStudent.php"><button type="button" class="btn btn-primary form-control">View all</button></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <h5>Students</h5>
            <table class="table table-bordered text-center">
                <tr>
                    <th>NAME</th>
                    <th>STUDENT NO.</th>
                    <th>EMAIL</th>
                    <th>YEAR</th>
                    <th>SECTION</th>
                    <th>LEARNING SYSTEM</th>
                    <th width="180" class="text-center">Action</th>
                </tr>
                <tbody id="tbody">
                </tbody>
            </table>
        </div>

    </div>

    <!-- Update Model -->
    <form action="" method="POST" class="users-update-record-model form-horizontal">
        <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                <div class="modal-content" style="overflow: hidden;">
                    <div class="modal-header">
                        <h4 class="modal-title" id="custom-width-modalLabel">Update</h4>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body" id="updateBody">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light"
                                data-dismiss="modal">Close
                        </button>
                        <button type="button" class="btn btn-success updateUser">Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

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



    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>

    <script type="text/javascript" src="js/TCaddStudentFunction.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>