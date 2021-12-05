<?php

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'capstone_db');

	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if(mysqli_connect_errno()){
		die('Unable to connect to database' . mysqli_connect_error());
	}

	$stmt = $conn->prepare("SELECT class_id, sub_code, sub_name, sub_link, u_section FROM tbl_1st_01_fb;");

	$stmt->execute();

	$stmt->bind_result($id, $subcode, $subname, $sublink, $usection);

	$fb1_01 = array();

	while ($stmt->fetch()) {
		
		$temp = array();
		$temp['class_id'] = $id;
		$temp['sub_code'] = $subcode;
		$temp['sub_name'] = $subname;
		$temp['sub_link'] = $sublink;
		$temp['u_section'] = $usection;

		array_push($fb1_01, $temp);
	}

	echo json_encode($fb1_01);

?>