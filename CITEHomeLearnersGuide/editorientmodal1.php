
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>EDIT</h2>
				</div>
			</div>
			<form method="POST" action="app/oop/functionsORIENTATION.php">

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="u_id" value="<?php echo $key?>">

				<div class="col-md-6" style="padding-top: 10px;">
						<label>Name</label>
						<input class="form-control" type="text" name="name" placeholder="Name" autocomplete="off" value="<?=$data['name']?>">
					</div>
				</div>

				<div class="mod col-12 padding">
					<label>File</label>
					<input class="form-control" type="File" name="url" placeholder="File" autocomplete="off" value="<?=$data['url']?>">
				</div>		
			</div>

			
			<div class="modal-footer">
				<input type="submit" name="update" class="btn btn-success btn-lg">
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Cancel</a>
			</div>
			</form>
			

		</div>