<?php


//CREATE CONNECTION
$connect = mysqli_connect("localhost","root","","capstone_db");

//-------------------------------------------START 02-------------------------------------------------------
//----------------------ADD-----------------------
if (isset($_POST['save2'])){

  $title = mysqli_real_escape_string($connect,$_POST['title']);
  $content = mysqli_real_escape_string($connect,$_POST['content']);
  $L_system = mysqli_real_escape_string($connect,$_POST['L_system']);

$add = mysqli_query($connect,"INSERT INTO tbl_orientationflex (title,content,L_system) 
  VALUES ('$title','$content','$L_system')");

echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Added a Record!');
    window.location.href='orientationflex.php';
    </script>";
}
$all2 = mysqli_query($connect, "SELECT * FROM tbl_orientationflex");

//----------------------DELETE-------------------------
  
  if (isset($_GET['del2'])) {
  $id = $_GET['del2'];
  mysqli_query($connect,"DELETE FROM tbl_orientationflex WHERE id = $id");
  
echo "<script LANGUAGE='JavaScript'>
    window.alert('You Have Successfully Deleted a Record!');
    window.location.href='orientationflex.php';
    </script>";
  }


//--------------------UPDATE-----------------------------

  if (isset($_POST['update1'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

   $update_record = "UPDATE tbl_orientationflex SET title='$title', content='$content' WHERE id='$id'";

   $query = mysqli_query($connect, $update_record);
    if($query){

      header('location: orientationflex.php');
      
    }
    else{
      echo "Error: " . $update_record . "<br>" . mysqli_error($connect);
    }

  }
//-------------------------------------------END 01-------------------------------------------------------

?>