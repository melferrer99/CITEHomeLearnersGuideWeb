
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="app/oop/functionsTCPROFILE.php">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="userName" value="<?php echo $_SESSION['userName'];?>">
					<input type="hidden" name="userType" value="<?php echo $_SESSION['userType'];?>">

					<div class="col-md-12" style="padding-top: 10px;">
						<label>Full Name</label>
						<input class="form-control" type="text" name="FullName" placeholder="EMAIL" autocomplete="off" value="<?php echo $_SESSION['FullName'];?>">
					</div>

					<div class="col-md-12" style="padding-top: 10px;">
						<label>EMAIL</label>
						<input class="form-control" type="text" name="email" placeholder="EMAIL" autocomplete="off" value="<?php echo $_SESSION['email'];?>">
					</div>
					<div class="col-md-12" style="padding-top: 10px;">
						<label>PASSWORD</label>
						<input class="form-control" type="Link" name="password" placeholder="PASSWORD" autocomplete="off" value="<?php echo $_SESSION['password'];?>">
					</div>
				</div>	
			</div>

			
			<div class="modal-footer">
				<input type="submit" name="update" class="btn btn-success btn-lg">
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>