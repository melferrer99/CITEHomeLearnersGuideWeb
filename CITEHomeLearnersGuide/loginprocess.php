
<?php
session_start();
 
$con = mysqli_connect('localhost', 'root');

$db = mysqli_select_db($con, 'capstone_db');

if(isset($_POST['login'])){
    $u_email = mysqli_escape_string($con,$_POST['u_email']);
    $u_password = mysqli_escape_string($con,$_POST['u_password']); 
    
    
    $sql = " SELECT * from tbl_user where u_email = '$u_email'";
    $query = mysqli_query($con,$sql);
    $admin = mysqli_fetch_array($query);

    $hashedPASS = password_verify($u_password, $admin['u_password']);

    if ($hashedPASS) {
        $_SESSION['u_email'] = $admin['u_email'];
         $_SESSION['u_type'] = $admin['u_type'];  

         if ($_SESSION['u_type'] == 'Admin') {
                header('location:home.php');
           }

           if ($_SESSION['u_type'] == 'Teacher') {
                header('location:home2.php');
           } 
           else{
            echo '<script>alert("Incorect CRIDENTIALS!"); location.href="login.php";</script>';
           }
           
    }
    else{
            echo '<script>alert("Incorect CRIDENTIALS!"); location.href="login.php";</script>';
           }

    $_SESSION['u_id'] = $admin['u_id'];
    $_SESSION['u_Fname'] = $admin['u_Fname'];
    $_SESSION['u_Lname'] = $admin['u_Lname'];
    $_SESSION['u_email'] = $admin['u_email'];
    $_SESSION['u_password'] = $admin['u_password'];
    $_SESSION['u_type'] = $admin['u_type'];    
} 
?>