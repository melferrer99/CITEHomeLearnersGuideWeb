<?php

session_start();
if (!isset($_SESSION['userName'])){
   echo "<script>alert('Login First!'); location.href='login.php';</script>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="SweetAlert/sweetalert.min.js"></script>
    <script type="text/javascript" src="SweetAlert2/sweetalert2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="font.css">
    <link rel="stylesheet" type="text/css" href="styleCON.css">
    <link rel="stylesheet" type="text/css" href="ModuleStyle.css">


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
                        <a class="nav-link" data-toggle="modal" data-target="#modalselect">CONNECT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userAdmin.php">USER</a>
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



    <div class="col-12 padding">
        <div class="col-2" style="margin: auto;">
            <h2>FACEBOOK FLEX</h2>
        </div>
    </div>

<!--------------------------LEFT TABLE----------------------->

    <div class="col-12 padding">
        <input type="hidden" id="SORTlearningSystem" value="FLEX" class="form-control">
        <input id="username" type="hidden" name="username" class="form-control" value="<?php echo $_SESSION['userName'];?>">
    </div>

    <div class="row col-12">
        <div class="col-5" style="margin: auto;">
            
            <div class="col-12 padding">
                <div class="row col-9 text-center jumbotron padding" style="margin: auto;">

                    
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4  padding">
                        <select id="SORTyear" type="text" class="form-control" name="SORTyear" required="" autofocus="">
                                <option disabled="true" selected="">Year</option>
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>
                        </select>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-5  padding">
                         <input id="SORTsection" type="text" class="form-control" name="SORTsection" placeholder="Section"
                                   required autofocus>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 padding">
                            <div class="col-12">
                                <button id="sortData" type="button" class="btn btn-primary form-control">Sort</button>
                            </div>
                    </div>
                </div>
            </div>

            <h5>Students</h5>
            <table class="table table-bordered">
                <tr>
                    <th>NAME</th>
                    <th>STUDENT NO.</th>
                    <th>YEAR</th>
                    <th>SECTION</th>
                    <th>LEARNING SYSTEM</th>
                    <th width="180" class="text-center">Action</th>
                </tr>
                <tbody id="tbody1">
                </tbody>
            </table>
        </div>



<!--------------------------RIGHT TABLE----------------------->
        <div class="col-5" style="margin: auto;">

            <div class="col-12 padding">
                <div class="row col-9 text-center jumbotron padding" style="margin: auto;">

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-8  padding">
                        <input id="specialCode" type="text" class="form-control" name="specialCode" placeholder="Code"
                               required autofocus>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 padding">
                            <div class="col-12">
                                <button id="getData" type="button" class="btn btn-primary form-control">Enter</button>
                            </div>
                    </div>

                </div>
            </div>

            <h5>Students Joined</h5>

            <table class="table table-bordered">
                <tr>
                    <th>NAME</th>
                    <th>STUDENT NO.</th>
                    <th>YEAR</th>
                    <th>SECTION</th>
                    <th>LEARNING SYSTEM</th>
                    <th width="180" class="text-center">Action</th>
                </tr>
                <tbody id="tbody2">
                </tbody>
            </table>
        </div>

    </div>




    <!-- ADD STUDENTS Model -->
    <form action="" method="POST" class="users-update-record-model form-horizontal">
        <div id="update-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="width:55%;">
                <div class="modal-content" style="overflow: hidden;">
                    <div class="modal-header">
                        <h4 class="modal-title" id="custom-width-modalLabel">Do you want to Add this Student?</h4>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×
                        </button>
                    </div>
                    <div class="modal-body" id="addBody">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light"
                                data-dismiss="modal">Cancel
                        </button>
                        <button type="button" class="btn btn-success ADDUser">Add
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

    <script type="text/javascript" src="js/FBJoinedFunction.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>