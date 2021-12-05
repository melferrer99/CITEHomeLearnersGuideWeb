<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsStudent.php');

	$obj = new Actions();

	if (isset($_POST['adduser'])) {
		$ref = 'users';
		$user = $_POST['userName'];

		$fields = [
					'email' => $_POST['email'],
					'learningSystem' => $_POST['learningSystem'],
					'password' => $_POST['userName'],
					'section' => $_POST['section'],
					'studentFullName' => $_POST['studentFullName'],
					'userName' => $_POST['userName'],
					'userType' => $_POST['userType'],
					'year' => $_POST['year']
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
					'learningSystem' => $_POST['newlearningSystem'],
					'password' => $_POST['newpassword'],
					'section' => $_POST['newsection'],
					'studentFullName' => $_POST['newstudentFullName'],
					'userName' => $_POST['newuserName'],
					'userType' => $_POST['newuserType'],
					'year' => $_POST['newyear']
				  ];

	$obj->update($ref,$key,$fields);

	}


?>