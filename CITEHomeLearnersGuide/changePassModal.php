
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>Change Password</h2>
				</div>
			</div>
			<form method="POST" action="">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" id="userName" name="userName" value="<?php echo $_SESSION['userName'];?>">
					<input type="hidden" id="userType" name="userType" value="<?php echo $_SESSION['userType'];?>">
					<input type="hidden" id="FullName" name="FullName" value="<?php echo $_SESSION['FullName'];?>">
					<input type="hidden" id="email" name="FullName" value="<?php echo $_SESSION['email'];?>">
					<input id="currentPass" type="hidden" name="FullName" value="<?php echo $_SESSION['password'];?>">

					<div class="col-md-12" style="padding-top: 10px;">
						<label>Old Password</label>
						<input class="form-control" type="text" name="oldPass" id="oldPass" placeholder="" autocomplete="off" onkeyup ="newPassActivation()">
					</div>

					<div class="col-md-12" style="padding-top: 10px;">
						<label>New Password</label>
						<input class="form-control" type="text" name="newPass" id="newPass" placeholder="" autocomplete="off" disabled="" onkeyup ="ConfirmPassActivation()">
					</div>
					<div class="col-md-12" style="padding-top: 10px;">
						<label>Confirm New Password</label>
						<input class="form-control" type="text" name="confirmPass" id="confirmPass" placeholder="" autocomplete="off" disabled="" onkeyup ="saveButtonActivation()">
					</div>
				</div>	
			</div>

			
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-lg" name="updatePass" id="updatePass" disabled="">Save</button>      
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>