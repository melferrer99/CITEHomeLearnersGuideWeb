<?php
session_start();

if (isset($_SESSION['userName'])) {
	$session_user = $_SESSION['userName'];
}
else{
	header('Location:login.php');
}
session_destroy();
header('Location:login.php');
?>