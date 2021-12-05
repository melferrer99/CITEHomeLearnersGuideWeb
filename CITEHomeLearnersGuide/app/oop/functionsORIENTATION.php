<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsORIENTATION.php');

	$obj = new Actions();

	if (isset($_POST['add'])) {

		$ref = 'PDFs';
		$name = $_POST['name'];
		$url = $_POST['url'];

			$fields = [
						'name' => $_POST['name'],
						'url' => $_POST['url']
					  ];
					  
	$obj->insert($ref,$fields,$name);

	}


	if (isset($_GET['delete'])) {

		$key = $_GET['delete'];
		$ref = 'PDFs';

		$obj->delete($ref,$key);
	}



	if (isset($_POST['update'])) {

		$key = $_POST['u_id'];
		$ref = 'PDFs';

		$fields = [
					'name' => $_POST['name'],
					'url' => $_POST['url']
				  ];

	$obj->update($ref,$key,$fields);

	}


?>