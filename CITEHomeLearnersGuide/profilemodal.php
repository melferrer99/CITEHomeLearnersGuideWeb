
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" id="PFuserName" name="userName" value="<?php echo $_SESSION['userName'];?>">
					<input type="hidden" id="PFuserType" name="userType" value="<?php echo $_SESSION['userType'];?>">

					<div class="col-md-12" style="padding-top: 10px;">
						<label>Full Name</label>
						<input class="form-control" type="text" id="PFFullName" name="FullName" placeholder="" autocomplete="off" value="<?php echo $_SESSION['FullName'];?>">
					</div>

					<div class="col-md-12" style="padding-top: 10px;">
						<label>EMAIL</label>
						<input class="form-control" type="text" id="PFemail" name="email" placeholder="" autocomplete="off" value="<?php echo $_SESSION['email'];?>">
					</div>
					<div class="col-md-12" style="padding-top: 10px;">
						<input class="form-control" type="hidden" id="PFpassword" name="password" placeholder="" autocomplete="off" value="<?php echo $_SESSION['password'];?>">
					</div>
				</div>	
			</div>

			
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-lg" name="updateProfile" id="updateProfile">Save</button>
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>