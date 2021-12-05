<?php

//CREATE CONNECTION
$connect = mysqli_connect("localhost","root","","capstone_db");


//-------------------------------------------START 01-------------------------------------------------------
//----------------------ADD-----------------------
if (isset($_POST['save'])){

	$title = mysqli_real_escape_string($connect,$_POST['title']);
	$content = mysqli_real_escape_string($connect,$_POST['content']);
	$L_system = mysqli_real_escape_string($connect,$_POST['L_system']);

$add = mysqli_query($connect,"INSERT INTO tbl_orientation (title,content,L_system) 
	VALUES ('$title','$content','$L_system')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='orientation.php';
    </script>";
}
$all = mysqli_query($connect, "SELECT * FROM tbl_orientation");

//----------------------DELETE-------------------------
  
  if (isset($_GET['del'])) {
  $id = $_GET['del'];
  mysqli_query($connect,"DELETE FROM tbl_orientation WHERE id = $id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='orientation.php';
    </script>";
  }

//--------------------UPDATE-----------------------------

  if (isset($_POST['update1'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

   $update_record = "UPDATE tbl_orientation SET title='$title', content='$content' WHERE id='$id'";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: orientation.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 01-------------------------------------------------------

?>