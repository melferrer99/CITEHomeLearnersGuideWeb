<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('FLEXactionsCLASS_1_02.php');

	$obj = new Actions();

	if (isset($_POST['addsub'])) {

		$ref = 'GoogleClassroom';

		$year = $_POST['subjectYear'];
		$section = $_POST['subjectSection'];
		$title = $_POST['subjectTitle'];
		$learning = $_POST['learningSystem'];

			$fields = [
						'learningSystem' => $_POST['learningSystem'],
						'subjectYear' => $_POST['subjectYear'],
						'subjectSection' => $_POST['subjectSection'],
						'subjectCode' => $_POST['subjectCode'],
						'subjectTitle' => $_POST['subjectTitle'],
						'subjectTitle' => $_POST['subjectTitle'],
						'subjectLink' => $_POST['subjectLink']
					  ];
					  
	$obj->insert($ref,$learning,$year,$section,$title,$fields);

	}


	if (isset($_GET['deleteSUB'])) {

		$key = $_GET['deleteSUB'];
		$ref = 'GoogleClassroom/FLEX/1st Year/BSIT 02';

		$obj->delete($ref,$key);
	}



	if (isset($_POST['update'])) {

		$key = $_POST['u_id'];
		$ref = 'GoogleClassroom';

		$year = $_POST['subjectYear'];
		$section = $_POST['subjectSection'];
		$title = $_POST['subjectTitle'];
		$learning = $_POST['learningSystem'];

		$fields = [
					'learningSystem' => $_POST['learningSystem'],
					'subjectYear' => $_POST['subjectYear'],
					'subjectSection' => $_POST['subjectSection'],
					'subjectCode' => $_POST['subjectCode'],
					'subjectTitle' => $_POST['subjectTitle'],
					'subjectLink' => $_POST['subjectLink']
				  ];

	$obj->update($ref,$learning,$key,$year,$section,$title,$fields);

	}


?>