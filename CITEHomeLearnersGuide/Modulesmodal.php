
<!-- Modal content-->
		<div class="modal-content">	

			<div class="modal-header">
				<div class="col-12 text-center">
					<h2>MODULES</h2>
				</div>
			</div>
			

			<div class="modal-body">
				<div class="row mod padding">

					<input type="hidden" name="u_id" value="<?php echo $key?>">
					<input type="" name="learnSystem" id="learnSystem" value="<?=$data['learningSystem']?>">
					<input type="" name="subYear" id="subYear" value="<?=$data['subjectYear']?>">
					<input type="" name="subSection" id="subSection" value="<?=$data['subjectSection']?>">
					<input type="" name="subTitle" id="subTitle" value="<?=$data['subjectTitle']?>">

					<div class="col-md-12">
						<center><h3><?=$data['subjectCode']?> &nbsp <?=$data['subjectTitle']?></h3></center>
						
					</div>

					<div class="row" style="padding-top: 10px;">
						<div class="col-6">
							<input class="form-control" type="text" name="moduleTitle" id="caption" placeholder="Title" autocomplete="off" >
						</div>
						<div class="col-6">
							<input class="form-control" type="File" id="file" placeholder="File" autocomplete="off" required="">
						</div>
					</div>

				</div>

				<div class="mod col-12 padding">
					
					
				</div>		
			</div>

			
			<div class="modal-footer">
				<a type="btn" class="btn btn-primary btn-lg mt-1" onclick="uploadFile()">ADD</a>
				<a class="btn btn-danger btn-lg" type="button" data-dismiss="modal">Close</a>
			</div>
			

		
		</div>