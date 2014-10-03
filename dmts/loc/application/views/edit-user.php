<div class="row">
  <div class="modal-dialog" style ="width:1000px">
  	<div class="modal-content" >
  		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h4 class="modal-title"><i class ="fa fa-plus-circle"></i> &nbsp; Edit User</h4>
	</div>
	<?php 
		foreach($iulo as $row){
	?>
	<form id="edit_userForm">
			<input type ="hidden" name="rowID" value="<?php echo $row->tbl_num ?>">
        <div class ="row">
            <div class ="col-lg-12">
              <div class ="col-lg-5">
                  <div class ="form-group">
                      <label>Username</label>
                      <input type ="name" name="username" class ="form-control" value="<?php echo $row->user_name ?>" placeholder = "Enter Username here">
                  </div>
                  <div class ="form-group">
                      <label>Firstname</label>
                      <input type ="name" name="fname" class ="form-control" value="<?php echo $row->first_name ?>" placeholder = "Enter Firstname here">
                  </div>
                  <div class ="form-group">
                      <label>Lastname</label>
                      <input type ="name" name="lname" class ="form-control" value="<?php echo $row->last_name ?>" placeholder = "Enter Lastname here">
                  </div>
                  <div class ="form-group">
                      <label>Password</label>
                      <input type ="password" name="pword" class ="form-control" value="<?php echo $row->user_pword ?>" placeholder = "Password">
                  </div>
                  <div class ="form-group">
                      <label>Employee ID</label>
                      <input type ="text" class ="form-control" name="empId" value="<?php echo $row->user_ID ?>" placeholder = "Employee ID">
                  </div>
              </div>
              <div class ="col-lg-5">
                  <div class ="form-group">
                      <label>User Privilege</label>
                      <select class ="form-control" name="privilage">
                          <option>-Enter privilege -</option>
                          <option <?php if($row->user_type == "Staff") echo "selected" ?> >Staff</option>
                          <option <?php if($row->user_type == "Admin") echo "selected" ?> >Admin </option>
                      </select>
                  </div>
                  <div class ="form-group">
                      <label>Position</label>
                      <input type ="text" name="position" value="<?php echo $row->position ?>" class ="form-control"placeholder = "User Position">
                  </div>
                  <div class ="form-group">
                      <label>Complete Address</label>
                      <textarea class ="form-control"  name="address" style ="height:100px" placeholder =""><?php echo $row->address ?></textarea>
                  </div>
                  <div class ="form-group">
                      <label>Contact number</label>
                      <input type ="text" name="contact_num" value="<?php echo $row->contact_num ?>" class ="form-control"placeholder = "Contact Number">
                  </div>
                  <div class ="form-group">
                      <label>Email Address</label>
                      <input type ="email" name="email" value="<?php echo $row->email_add ?>" class ="form-control"placeholder = "Email Address">
                  </div>
                  <div class ="input-group">
                    <div class ="col-lg-3">
                      <div class ="input-group-btn ">
                        <button type="submit" class ="btn btn-sm btn-success btn-rect " ><i class ="fa fa-save"></i>&nbsp; Save Changes</button>
                      </div>
                      <div class ="input-group-btn ">
                         <button class ="btn btn-sm btn-primary btn-rect "><i class ="fa fa-times"></i>&nbsp; Cancel</button>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
    </form>
	<?php
		}
	?>
  		
  	</div>
	
</div>
</div>
<script>
	$("form#edit_userForm").submit(function(event){
		event.preventDefault();
		var form_data = $(this).serialize();
		
		if(confirm("Changing any data on user profile might cause error. Kindly continue if you know what your doing")){
			setTimeout(function(){
				$.ajax({
					url: base_url + 'index.php/home/saveEdit_user',
					data: form_data,
					type: 'post',
					success: function(data){
						console.log(data);
						alert("User is now updated");
						$("#edit-user").modal('hide');
					}
				});
				
			}, 200);
		}
	});
</script>
     