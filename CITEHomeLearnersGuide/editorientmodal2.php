
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="orientationflexProcess.php">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

					<div class="col-md-12" style="padding-top: 10px;">
						<label>Title</label>
						<input class="form-control" type="text" name="title" autocomplete="off" value="<?php echo $row['title'];?>">
					</div>
					<div class="col-md-12" style="padding-top: 10px;">
						<label>Content</label>
						<textarea class="editmodal form-control" type="text" name="content" autocomplete="off"><?php echo $row['content'];?></textarea> 
					</div>
				</div>	
			</div>

			
			<div class="modal-footer">
				<input type="submit" value="Update" name="update1" class="btn btn-success btn-lg">
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>