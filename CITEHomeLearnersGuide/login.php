<?php include 'app/oop/signIn.php'?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>

	<script src="jquery/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<!--  -->
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">

				<div class="col-12 user-logo">
					<img src="img/LOGO2.png">
				</div>

				<form method="post" class="col-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="userName" required="" autocomplete="off">
					</div>

					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" required="" autocomplete="off">				
					</div>
		
					<input type="submit" class="btn padding" name="login" value="Log in">
				</form>
				
			</div><!--END CONTENT-->
		</div>
	</div>
	
</body>
</html>