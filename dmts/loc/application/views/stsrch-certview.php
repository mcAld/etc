<div class ="row">
	<div class ="col-lg-12">
		<div class ="table-responsive">
			<table id ="result" class ="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>Reference #</th>
						<th>Full Name</th>
						<th>Qualification Title</th>
						<th>Assessment Center</th>
						<th>Assessment Result</th>
						<th>Date of Assessment</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						foreach($srch_reslt as $row){
					?>
							<tr>
								
								<?php 
									echo "<td>".$row->cars ."</td>";
									echo "<td>".$row->last_name. ", " . $row->first_name . " ".$row->middle_name ."</td>";
									echo "<td>".$row->nc_title ."</td>";
									echo "<td>".$row->assessment_center ."</td>";
									echo "<td>".$row->assessment_results ."</td>";
									echo "<td>".date('m-d-y', strtotime($row->date_of_certification)) ."</td>";
								?>
								<td>
									<div>
										<a href="#" data-id="<?php echo $row->tbl_num ?>" class="showdetails" title ="View Students Information"><span class ="glyphicon glyphicon-eye-open"></span></a> /
										<a href="#" data-id="<?php echo $row->tbl_num ?>" class="verify" title ="Click to verified certificate request"><span class ="glyphicon glyphicon-check"></span></a>
									</div>
								</td>
							</tr>
					<?php
						}
					?>
						
					</tr> 
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$(".showdetails").on('click', function(event){
			event.preventDefault();
			var xxx = $(this).attr("data-id");
			$("#show_details").load("show_stdetails",{test:xxx});
			$("#show_details").modal();
		});	
		
		$(".verify").on('click', function(event){
			event.preventDefault();
			var xxx = $(this).attr("data-id");
			$("#crequest_modal").load("verify_req",{test:xxx});
			$("#crequest_modal").modal();
		});	
	});	
</script>