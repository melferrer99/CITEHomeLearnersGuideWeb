
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="secondyear-class-process.php">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="class_id" value="<?php echo $row['class_id']; ?>">

					<div class="col-md-6" style="padding-top: 10px;">
						<label>Subject Code</label>
						<input class="form-control" type="text" name="sub_code" autocomplete="off" value="<?php echo $row['sub_code'];?>">
					</div>
					<div class="col-md-6" style="padding-top: 10px;">
						<label>Subject Name</label>
						<input class="form-control" type="text" name="sub_name" placeholder="Sub. Name" autocomplete="off" value="<?php echo $row['sub_name'];?>">
					</div>
				</div>

				<div class="mod col-12 padding">
					<label>Subject Link</label>
					<input class="form-control" type="Link" name="sub_link" placeholder="Sub. Link" autocomplete="off" value="<?php echo $row['sub_link'];?>">
				</div>		
			</div>

			
			<div class="modal-footer">
				<input type="submit" value="Update" name="update_sub2" class="btn btn-success btn-lg">
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>