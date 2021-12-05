<?php

//CREATE CONNECTION
$connect = mysqli_connect("localhost","root","","capstone_db");


//-------------------------------------------START 01-------------------------------------------------------
//----------------------ADD SUB-----------------------
if (isset($_POST['addsub'])){

  $sub_code = mysqli_real_escape_string($connect,$_POST['sub_code']);
  $sub_name = mysqli_real_escape_string($connect,$_POST['sub_name']);
  $sub_link = mysqli_real_escape_string($connect,$_POST['sub_link']);
  $u_year = mysqli_real_escape_string($connect,$_POST['u_year']);
  $u_section = mysqli_real_escape_string($connect,$_POST['u_section']);

$add = mysqli_query($connect,"INSERT INTO tbl_4th_01_fb (sub_code,sub_name,sub_link,u_year,u_section) 
  VALUES ('$sub_code','$sub_name','$sub_link','$u_year','$u_section')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='connect_4th_01_fb.php';
    </script>";
}
$all = mysqli_query($connect, "SELECT * FROM tbl_4th_01_fb");

//----------------------DELETE sub-------------------------

  if (isset($_GET['del_sub'])) {
  $class_id = $_GET['del_sub'];
  mysqli_query($connect,"DELETE FROM tbl_4th_01_fb WHERE class_id = $class_id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='connect_4th_01_fb.php';
    </script>";
  }

//--------------------UPDATE USER-----------------------------

  if (isset($_POST['update_sub'])) {
    $class_id = $_POST['class_id'];
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $sub_link = $_POST['sub_link'];

   $update_record = "UPDATE tbl_4th_01_fb SET sub_code='$sub_code', sub_name='$sub_name', sub_link='$sub_link' WHERE class_id='$class_id' ";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: connect_4th_01_fb.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 01-------------------------------------------------------




//-------------------------------------------START 02-------------------------------------------------------
//----------------------ADD SUB-----------------------
if (isset($_POST['addsub02'])){

  $sub_code = mysqli_real_escape_string($connect,$_POST['sub_code']);
  $sub_name = mysqli_real_escape_string($connect,$_POST['sub_name']);
  $sub_link = mysqli_real_escape_string($connect,$_POST['sub_link']);
  $u_year = mysqli_real_escape_string($connect,$_POST['u_year']);
  $u_section = mysqli_real_escape_string($connect,$_POST['u_section']);

$add = mysqli_query($connect,"INSERT INTO tbl_4th_02_fb (sub_code,sub_name,sub_link,u_year,u_section) 
  VALUES ('$sub_code','$sub_name','$sub_link','$u_year','$u_section')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='connect_4th_02_fb.php';
    </script>";
}
$all2 = mysqli_query($connect, "SELECT * FROM tbl_4th_02_fb");

//----------------------DELETE sub-------------------------

  if (isset($_GET['del_sub2'])) {
  $class_id = $_GET['del_sub2'];
  mysqli_query($connect,"DELETE FROM tbl_4th_02_fb WHERE class_id = $class_id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='connect_4th_02_fb.php';
    </script>";
  }

//--------------------UPDATE USER-----------------------------

  if (isset($_POST['update_sub2'])) {
    $class_id = $_POST['class_id'];
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $sub_link = $_POST['sub_link'];

   $update_record = "UPDATE tbl_4th_02_fb SET sub_code='$sub_code', sub_name='$sub_name', sub_link='$sub_link' WHERE class_id='$class_id' ";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: connect_4th_02_fb.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 02-------------------------------------------------------




  //-------------------------------------------START 03-------------------------------------------------------
//----------------------ADD SUB-----------------------
if (isset($_POST['addsub03'])){

  $sub_code = mysqli_real_escape_string($connect,$_POST['sub_code']);
  $sub_name = mysqli_real_escape_string($connect,$_POST['sub_name']);
  $sub_link = mysqli_real_escape_string($connect,$_POST['sub_link']);
  $u_year = mysqli_real_escape_string($connect,$_POST['u_year']);
  $u_section = mysqli_real_escape_string($connect,$_POST['u_section']);

$add = mysqli_query($connect,"INSERT INTO tbl_4th_03_fb (sub_code,sub_name,sub_link,u_year,u_section) 
  VALUES ('$sub_code','$sub_name','$sub_link','$u_year','$u_section')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='connect_4th_03_fb.php';
    </script>";
}
$all3 = mysqli_query($connect, "SELECT * FROM tbl_4th_03_fb");

//----------------------DELETE sub-------------------------

  if (isset($_GET['del_sub3'])) {
  $class_id = $_GET['del_sub3'];
  mysqli_query($connect,"DELETE FROM tbl_4th_03_fb WHERE class_id = $class_id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='connect_4th_03_fb.php';
    </script>";
  }

//--------------------UPDATE USER-----------------------------

  if (isset($_POST['update_sub3'])) {
    $class_id = $_POST['class_id'];
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $sub_link = $_POST['sub_link'];

   $update_record = "UPDATE tbl_4th_03_fb SET sub_code='$sub_code', sub_name='$sub_name', sub_link='$sub_link' WHERE class_id='$class_id' ";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: connect_4th_03_fb.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 03-------------------------------------------------------





  //-------------------------------------------START 04-------------------------------------------------------
//----------------------ADD SUB-----------------------
if (isset($_POST['addsub04'])){

  $sub_code = mysqli_real_escape_string($connect,$_POST['sub_code']);
  $sub_name = mysqli_real_escape_string($connect,$_POST['sub_name']);
  $sub_link = mysqli_real_escape_string($connect,$_POST['sub_link']);
  $u_year = mysqli_real_escape_string($connect,$_POST['u_year']);
  $u_section = mysqli_real_escape_string($connect,$_POST['u_section']);

$add = mysqli_query($connect,"INSERT INTO tbl_4th_04_fb (sub_code,sub_name,sub_link,u_year,u_section) 
  VALUES ('$sub_code','$sub_name','$sub_link','$u_year','$u_section')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='connect_4th_04_fb.php';
    </script>";
}
$all4 = mysqli_query($connect, "SELECT * FROM tbl_4th_04_fb");

//----------------------DELETE sub-------------------------

  if (isset($_GET['del_sub4'])) {
  $class_id = $_GET['del_sub4'];
  mysqli_query($connect,"DELETE FROM tbl_4th_04_fb WHERE class_id = $class_id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='connect_4th_04_fb.php';
    </script>";
  }

//--------------------UPDATE USER-----------------------------

  if (isset($_POST['update_sub4'])) {
    $class_id = $_POST['class_id'];
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $sub_link = $_POST['sub_link'];

   $update_record = "UPDATE tbl_4th_04_fb SET sub_code='$sub_code', sub_name='$sub_name', sub_link='$sub_link' WHERE class_id='$class_id' ";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: connect_4th_04_fb.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 04-------------------------------------------------------




  //-------------------------------------------START 05-------------------------------------------------------
//----------------------ADD SUB-----------------------
if (isset($_POST['addsub05'])){

  $sub_code = mysqli_real_escape_string($connect,$_POST['sub_code']);
  $sub_name = mysqli_real_escape_string($connect,$_POST['sub_name']);
  $sub_link = mysqli_real_escape_string($connect,$_POST['sub_link']);
  $u_year = mysqli_real_escape_string($connect,$_POST['u_year']);
  $u_section = mysqli_real_escape_string($connect,$_POST['u_section']);

$add = mysqli_query($connect,"INSERT INTO tbl_4th_05_fb (sub_code,sub_name,sub_link,u_year,u_section) 
  VALUES ('$sub_code','$sub_name','$sub_link','$u_year','$u_section')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='connect_4th_05_fb.php';
    </script>";
}
$all5 = mysqli_query($connect, "SELECT * FROM tbl_4th_05_fb");

//----------------------DELETE sub-------------------------

  if (isset($_GET['del_sub5'])) {
  $class_id = $_GET['del_sub5'];
  mysqli_query($connect,"DELETE FROM tbl_4th_05_fb WHERE class_id = $class_id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='connect_4th_05_fb.php';
    </script>";
  }

//--------------------UPDATE USER-----------------------------

  if (isset($_POST['update_sub5'])) {
    $class_id = $_POST['class_id'];
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $sub_link = $_POST['sub_link'];

   $update_record = "UPDATE tbl_4th_05_fb SET sub_code='$sub_code', sub_name='$sub_name', sub_link='$sub_link' WHERE class_id='$class_id' ";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: connect_4th_05_fb.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 05-------------------------------------------------------




  //-------------------------------------------START 06-------------------------------------------------------
//----------------------ADD SUB-----------------------
if (isset($_POST['addsub06'])){

  $sub_code = mysqli_real_escape_string($connect,$_POST['sub_code']);
  $sub_name = mysqli_real_escape_string($connect,$_POST['sub_name']);
  $sub_link = mysqli_real_escape_string($connect,$_POST['sub_link']);
  $u_year = mysqli_real_escape_string($connect,$_POST['u_year']);
  $u_section = mysqli_real_escape_string($connect,$_POST['u_section']);

$add = mysqli_query($connect,"INSERT INTO tbl_4th_06_fb (sub_code,sub_name,sub_link,u_year,u_section) 
  VALUES ('$sub_code','$sub_name','$sub_link','$u_year','$u_section')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='connect_4th_06_fb.php';
    </script>";
}
$all6 = mysqli_query($connect, "SELECT * FROM tbl_4th_06_fb");

//----------------------DELETE sub-------------------------

  if (isset($_GET['del_sub6'])) {
  $class_id = $_GET['del_sub6'];
  mysqli_query($connect,"DELETE FROM tbl_4th_06_fb WHERE class_id = $class_id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='connect_4th_06_fb.php';
    </script>";
  }

//--------------------UPDATE USER-----------------------------

  if (isset($_POST['update_sub6'])) {
    $class_id = $_POST['class_id'];
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $sub_link = $_POST['sub_link'];

   $update_record = "UPDATE tbl_4th_06_fb SET sub_code='$sub_code', sub_name='$sub_name', sub_link='$sub_link' WHERE class_id='$class_id' ";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: connect_4th_06_fb.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 06-------------------------------------------------------

mysqli_close($connect);



?>