<?php
session_start();

include('app/oop/db.php');


if (isset($_POST['adduser'])) {
	
		$u_email = $_POST['u_email'];
		$u_password = $_POST['u_password'];
		$u_username = $_POST['u_username'];
		$u_type = $_POST['u_type'];

		$data = [
			'u_email' => $u_email,
			'u_username' => $u_username,
			'u_password' => $u_password,
			'u_type' => $u_type
		];

		$ref = "users";
		$postdata = $database->getReference('$ref')->push($data);


		if ($postdata) {
			$_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
			header("Location: user.php");
		}
		else{
			$_SESSION['status'] = "DATA NOT INSERTED, SOMETHING WENT WRONG!";
			header("Location: user.php");
		}

}

?>