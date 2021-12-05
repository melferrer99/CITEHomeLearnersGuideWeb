
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="app/oop/functionsStudent.php">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="u_id" value="<?php echo $key?>">

					<input type="hidden" name="newuserType" value="<?=$data['userType']?>">


					<div class="col-md-12" style="padding-top: 10px;">
						<label>Full Name</label>
						<input class="form-control" type="text" name="newstudentFullName" autocomplete="off" value="<?=$data['studentFullName']?>">
					</div>

					<div class="col-md-12" style="padding-top: 10px;">
						<label>Student No.</label>
						<input class="form-control" type="text" name="newuserName" autocomplete="off" value="<?=$data['userName']?>">
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

				<div class="row col-12">
					<div class="mod col-6">
						<label>Year</label>
							<select name="newyear" required="" class="form-control">
								<option selected="true"><?=$data['year']?></option>
								<option>1st Year</option>
								<option>2nd Year</option>
								<option>3rd Year</option>
								<option>4th Year</option>
							</select>
					</div>

					<div class="mod col-6">
						<label>Section</label>
							<input class="form-control" type="" name="newsection" placeholder="" autocomplete="off" value="<?=$data['section']?>">

					</div>
				</div>

				<div class="mod col-12 padding">
					<label>Learning System</label>
					<select name="newlearningSystem" required="" class="form-control">
						<option selected="true"><?=$data['learningSystem']?></option>
						<option>FLEX</option>
						<option>RAD</option>
					</select>
				</div>

					
			</div>

			<div class="modal-footer">
				<input type="submit" name="update" class="btn btn-success btn-lg">
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>	