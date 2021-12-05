<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actions.php');

	$obj = new Actions();

	if (isset($_POST['adduser'])) {

		$ref = 'users';
		$user = $_POST['userName'];

			$fields = [
						'email' => $_POST['email'],
						'FullName' => $_POST['fname'],
						'password' => $_POST['userName'],
						'userName' => $_POST['userName'],
						'userType' => $_POST['userType']
					  ];
					  
	$obj->insert($ref,$user,$fields);

	}


	if (isset($_GET['deleteuser'])) {

		$key = $_GET['deleteuser'];
		$ref = 'users';
		$obj->delete($ref,$key);
	}



	if (isset($_POST['update'])) {

		$key = $_POST['u_id'];
		$ref = 'users';
		$fields = [
					'email' => $_POST['newemail'],
					'FullName' => $_POST['newfname'],
					'password' => $_POST['newpassword'],
					'userName' => $_POST['newusername']
				  ];

	$obj->update($ref,$key,$fields);

	}


?>