<div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    <h4 class="modal-title">Requested Date</h4>
	  </div>
	  <div class="modal-body">
	    <p>
	    	Please input the date this student file application.<br>
	    	<i>Please refer to the online application system</i>
	    </p>
	    <?php 
				foreach($srch_reslt as $row){
			?>
	    
	    <form role="form" id="crequest_form" action="#" >
	    	
	    	<input type="hidden" id="cert_type" name="cert_type" value="<?php echo $row->type_of_certificate ?>" class ="form-control" />
	    	<input type="hidden" id="cars" name="cars" value="<?php echo $row->cars ?>" class ="form-control" />
	    	<input type="hidden" id="fname" name="fname" value="<?php echo $row->first_name ?>" class ="form-control" />
	    	<input type="hidden" id="mname" name="mname" value="<?php echo $row->middle_name ?>" class ="form-control" />
	    	<input type="hidden" id="lname" name="lname" value="<?php echo $row->last_name ?>" class ="form-control" />
	    	<input type="hidden" id="acenter" name="acenter" value="<?php echo $row->assessment_center ?>" class ="form-control" />
	    	<input type="hidden" id="title" name="title" value="<?php echo $row->nc_title ?>" class ="form-control" />
	    	<input type="hidden" id="dte_asst" name="dte_asst" value="<?php echo $row->date_of_certification ?>" class ="form-control" />
	    	<div class ="form-group">
					<label class ="control-label">Date Requested </label>
					<input type ="date" id="dte_reqstd" name="date_req" class ="form-control" />
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" >Save</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			 </form>
			<?php 
				}
			?>
			 	
	  </div>
	</div>
</div>
<script>
	//var base_url = "http://localhost/dmts_loc/";
	$(document).ready(function(){
		$("form#crequest_form").on("submit",function(event){
			event.preventDefault();
			console.log($( this ).serialize());
			var inpdata = $("form#crequest_form").serialize();
			var dte = $("#dte_reqstd").val();
			
			if(dte.length > 0){
				$.ajax({
					url: base_url + 'index.php/home/new_req',
					data: inpdata,
					type: 'post',
					success: function(svr_res){
						console.log(svr_res);
						alert("NC Request is now verified.");
						$("div#crequest_modal").modal('hide');
					}
				});
			}else{
				alert("Please provide the date of requisition for this NC.");	
			}
			
		});
			
	});	
</script>
