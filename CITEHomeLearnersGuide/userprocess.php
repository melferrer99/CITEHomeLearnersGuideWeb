<?php

//CREATE CONNECTION
$connect = mysqli_connect("localhost","root","","capstone_db");

//CHECK CONNECTION
// <!----if ($connect->connect_error) {
//   die("Connection failed: " . $connect->connect_error);
// }
// echo "Connected successfully";-->


$u_Fname = "";
$u_Lname = "";
$u_email = "";
$u_password = "";
$u_type = "";


//----------------------ADD USER-------------------------

	if (isset($_POST['adduser'])){

	$u_Fname = mysqli_real_escape_string($connect,$_POST['u_Fname']);
	$u_Lname = mysqli_real_escape_string($connect,$_POST['u_Lname']);
	$u_email = mysqli_real_escape_string($connect,$_POST['u_email']);
  $u_password = password_hash($_POST['u_password'], PASSWORD_DEFAULT);
	$u_type = mysqli_real_escape_string($connect,$_POST['u_type']);


$add = mysqli_query($connect,"INSERT INTO tbl_user (u_Fname,u_Lname,u_email,u_password,u_type) 
	VALUES ('$u_Fname','$u_Lname','$u_email','$u_password','$u_type')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Created an Account!');
    window.location.href='user.php';
    </script>";

}
$admin = mysqli_query($connect,"SELECT * FROM tbl_user WHERE u_type='Admin'");
$teacher = mysqli_query($connect,"SELECT * FROM tbl_user WHERE u_type='Teacher'");
$student = mysqli_query($connect,"SELECT * FROM tbl_user WHERE u_type='Student'");
$all = mysqli_query($connect, "SELECT * FROM tbl_user");

//----------------------DELETE USER-------------------------

  if (isset($_GET['del_user'])) {
  $u_id = $_GET['del_user'];
  mysqli_query($connect,"DELETE FROM tbl_user WHERE u_id = $u_id");
  header('location: user.php');

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted an Account!');
    window.location.href='user.php';
    </script>";

  }

//--------------------UPDATE USER-----------------------------

  if (isset($_POST['update'])) {
    $u_id = $_POST['u_id'];
    $u_Fname = $_POST['u_Fname'];
    $u_Lname = $_POST['u_Lname'];
    $u_email = $_POST['u_email'];
    $u_password = $_POST['u_password'];

   $update_record = "UPDATE tbl_user SET u_Fname='$u_Fname', u_Lname='$u_Lname', u_email='$u_email', u_password='$u_password' WHERE u_id='$u_id' ";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: user.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }


mysqli_close($connect);
?>