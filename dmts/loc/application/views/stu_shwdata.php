<div class="modal-dialog" style ="width:1000px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title"><i class ="fa fa-plus-circle"></i> &nbsp; Student Information</h4>
	</div>
	<?php 
		foreach($srch_reslt as $row){
	?>
	<form role ="form">
		<div class="modal-body">
			<div class ="row">
				<div class ="col-lg-4">
					<div class ="form-group">
						<label class ="control-label">Reference Number: </label>
						<span ><input type ="text" id="" value="<?php echo $row->cars ?>" class ="form-control" ></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Region / Province:  <sub> (e.g Region VII , Cebu) </sub></label>
						<span ><input type ="text" value="<?php echo $row->region . "," . $row->province  ?>" class ="form-control" ></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Fullname: <sub> (Lastname/ Firstname / Middle Initial) </sub></label>
						<span ><input type ="text" value="<?php echo $row->last_name . " " .$row->first_name . " " .$row->middle_name ?>" class ="form-control" ></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Date of Birth: </label>
						<span ><input type ="text" value="<?php echo date('m-d-y', strtotime($row->date_of_birth)) ?>" class ="form-control" ></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Modality <sub> (Regular / FAST / TWSP , etc.)  </sub></label>
						<span ><input type ="text" value="<?php echo $row->modality ?>" class ="form-control" ></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Complete Address </label>
						<span ><textarea style="height: 110px;" value="" class ="form-control" ><?php echo $row->complete_address ?></textarea></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Contact Number <sub> (+639 - xxxxxxxxx)</sub></label>
						<span ><input type ="text" value="<?php echo $row->gender ?>" class ="form-control" ></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Gender  </label>
						<div class ="input-btn-group">
							<input type ="radio" name ="gender" class="<?php echo strtolower($row->gender) ?>" id="male" /> &nbsp; <strong>Male </strong>
							&nbsp;&nbsp; &nbsp;
							<input type ="radio" name ="gender" class="<?php echo strtolower($row->gender) ?>" id="female"/> &nbsp; <strong>Female</strong>
						</div>
					</div>
				</div>
				<div class ="col-lg-4">
					<div class ="form-group">
						<label class ="control-label">Client Type</label>
						<span><input type ="text" value="<?php echo $row->client_type ?>" name ="client_type" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Educational Attainment </label>
						<span><input type ="text" value="<?php echo $row->educational_attainment ?>" name ="education" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Training Completed </label>
						<span ><input type ="text" value="<?php echo $row->training_completed ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Institution /School </label>
						<span ><input type ="text" value="<?php echo $row->institution_school ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Company </label>
						<span ><input type ="text" value="<?php echo $row->company ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Assessment Center </label>
						<span ><input type ="text" value="<?php echo $row->assessment_center ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Company Assessor's Name </label>
						<span ><input type ="text" value="<?php echo $row->comp_assessor ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">  Assessor's Accreditation Number </label>
						<span ><input type ="text" value="<?php echo $row->acridatation_num ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">  Sector </label>
						<span ><input type ="text"value="<?php echo $row->sector ?>" class ="form-control"></span>
					</div>
				</div>
				<div class ="col-lg-4">
					<div class ="form-group">
						<label class ="control-label">  Type of Certificate <sub>(NC / COC </sub> </label>
						<span ><input type ="text" value="<?php echo $row->type_of_certificate ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> NC Title </label>
						<span ><input type ="text" value="<?php echo $row->nc_title ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> COC Title </label>
						<span ><input type ="text" value="<?php echo $row->coc_title ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Certification Number </label>
						<span ><input type ="text" value="<?php echo $row->certificate_num ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label">Assessment Results</label>
						<span ><input type ="text" value="<?php echo $row->assessment_results ?>" class ="form-control"></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Date of Certification </label>
						<span ><input type ="text" value="<?php echo date('m-d-y', strtotime($row->date_of_certification)) ?>" class ="form-control" /></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Expiration Date </label>
						<span ><input type ="text" value="<?php echo date('m-d-y', strtotime($row->expiry_of_certificate)) ?>" class ="form-control" /></span>
					</div>
					<div class ="form-group">
						<label class ="control-label"> Notes: </label>
						<textarea class ="form-control"  style ="height:100px;" ></textarea>
					</div>
				</div> 
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</form>
	<?php
		}
	?>
</div>

<script>
	$(document).ready(function(){
		$("input#male.male").prop('checked', true);
		$("input#female.female").prop('checked', true);
	});	
	
</script>
	