
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="app/oop/functions.php">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="u_id" value="<?php echo $key?>">

					<div class="col-md-12" style="padding-top: 10px;">
						<label>Full Name</label>
						<input class="form-control" type="text" name="newfname" autocomplete="off" value="<?=$data['FullName']?>">
					</div>

					<div class="col-md-12" style="padding-top: 10px;">
						<label>Employee No.</label>
						<input class="form-control" type="text" name="newusername" autocomplete="off" value="<?=$data['userName']?>">
					</div>

				</div>

				<div class="mod col-12 padding">
					<label>Email</label>
					<input class="form-control" type="email" name="newemail" placeholder="Email" autocomplete="off" value="<?=$data['email']?>">
				</div>

				<div class="mod col-12 padding">
					<label>Password</label>
					<input class="form-control" type="" name="newpassword" placeholder="Password" autocomplete="off" value="<?=$data['password']?>">
				</div>
					
			</div>

			<div class="modal-footer">
				<input type="submit" name="update" class="btn btn-success btn-lg">
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>