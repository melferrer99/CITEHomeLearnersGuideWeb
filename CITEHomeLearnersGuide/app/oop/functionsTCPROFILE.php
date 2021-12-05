<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsTCPROFILE.php');

	$obj = new Actions();
	
	if (isset($_POST['update'])) {

		$key = $_POST['userName'];
		$ref = 'users';
		$fields = [	
					'FullName' => $_POST['FullName'],
					'email' => $_POST['email'],
					'password' => $_POST['password'],
				  ];

	$obj->update($ref,$key,$fields);

	}


?>