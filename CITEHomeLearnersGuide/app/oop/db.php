<?php

	require ('C:/xampp/htdocs/CITEHomeLearnersGuide/vendor/autoload.php');

	use Kreait\Firebase\Factory;
	use Kreait\Firebase\ServiceAccount;

	$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/cite-home-learner-s-guide-firebase-adminsdk-agm5p-f7ef1ce627.json');

	$firebase = (new Factory)
		->withServiceAccount($serviceAccount)
		->withDatabaseUri('https://cite-home-learner-s-guide.firebaseio.com/')
		->create();

	$database = $firebase->getDatabase();
	
?>