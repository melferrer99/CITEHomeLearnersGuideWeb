<?php include ('db.php');	
	
	session_start();
	if (isset($_POST['login'])) {
		
		 $userName = $_POST['userName'];
         $password = $_POST['password'];

         $ref = 'users';
         $getData = $database->getReference($ref)->getChild($userName)->getValue();

		if($_POST['userName'] == $getData['userName'] &&$_POST['password'] == $getData['password']) {



			if ($getData['userType'] == 'Admin') {
                echo "<script LANGUAGE='JavaScript'>
                  window.alert('You Have Successfully Logged In');
                  window.location.href='home.php';
                  </script>";
           }
           if ($getData['userType'] == 'Teacher') {
                echo "<script LANGUAGE='JavaScript'>
                  window.alert('You Have Successfully Logged In');
                  window.location.href='home2.php';
                  </script>";
           }else{
           		echo "<script LANGUAGE='JavaScript'>
                  window.alert('Wrong Credentials!');
                   window.location.href='';
                  </script>";
           }
                 

               }else {
                   echo "<script LANGUAGE='JavaScript'>
                  window.alert('Wrong Credentials!');
                   window.location.href='';
                  </script>";
               }

        $_SESSION['FullName'] = $getData['FullName']; 
        $_SESSION['userName'] = $getData['userName']; 
        $_SESSION['email'] = $getData['email']; 
        $_SESSION['password'] = $getData['password']; 
        $_SESSION['userType'] = $getData['userType']; 

	}

?>