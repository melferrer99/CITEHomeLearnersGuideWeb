
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="app/oop/functionsCLASS.php">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="u_id" value="<?php echo $key?>">
					<input type="hidden" name="subjectYear" value="<?=$data['subjectYear']?>">
					<input type="hidden" name="subjectSection" value="<?=$data['subjectSection']?>">
					<input type="hidden" name="learningSystem" value="<?=$data['learningSystem']?>">

					<div class="col-md-6" style="padding-top: 10px;">
						<label>Subject Code</label>
						<input class="form-control" type="text" name="subjectCode" autocomplete="off" value="<?=$data['subjectCode']?>">
					</div>
					<div class="col-md-6" style="padding-top: 10px;">
						<label>Subject Name</label>
						<input class="form-control" type="text" name="subjectTitle" placeholder="Sub. Name" autocomplete="off" value="<?=$data['subjectTitle']?>">
					</div>
				</div>

				<div class="mod col-12 padding">
					<label>Subject Link</label>
					<input class="form-control" type="Link" name="subjectLink" placeholder="Sub. Link" autocomplete="off" value="<?=$data['subjectLink']?>">
				</div>		
			</div>

			
			<div class="modal-footer">
				<input type="submit" name="update" class="btn btn-success btn-lg">
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>