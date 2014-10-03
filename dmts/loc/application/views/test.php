<div class ="col-lg-12">
	<div class="box dark">
		<header>
			<div class="icons">
				<i class="fa fa-search"></i>
			</div>
			<h5>Search Results</h5>
			<div class ="pull-right col-sm-6 col-md-6" style ="padding:5px;">
				<div class ="input-group">
					<input id="srch_lst" type ="text" class ="form-control btn-rect input-sm" placeholder ="Search Here ." style="margin-top: 1px">
					<div class ="input-group-btn">
						<button id="srchtable" class ="btn btn-sm btn-metis-5 btn-rect" type ="submit"><i class ="fa fa-search"></i></button>
					</div>
					&nbsp;
					<div class ="input-group-btn">
					 	<a id="delete">
					 		<button class ="btn btn-sm btn-danger btn-rect "><i class ="fa fa-times"></i> Delete</button>
					 	</a>
					</div>
					&nbsp;
					<div class ="input-group-btn">
						<a href="#" id="edit">
							<button class ="btn btn-sm btn-primary btn-rect "><i class ="fa fa-edit"></i> Edit</button>
						</a>
					</div>
					&nbsp;
					<div class ="input-group-btn">
						<a href="#" id="excelgen">
						<button class ="btn btn-sm btn-metis-default btn-rect "><img style="height:20px;" src="<?php echo base_url('assets/img/excel.png') ?>"> Export to Excel</button>
						</a>
					</div>
				</div>
			</div>
		</header>
		<div class="body">
			<div class ="row">
				<div class ="col-lg-12">
					<div class ="table-responsive" style ="height:500px!important; overflow:scroll;">
						<table id ="student-search-results" class ="table table-bordered table-striped table-condensed table-sorter table-hover">
							<thead>
								<tr>
									<th><input type ="checkbox" id="tckbox" data-id="uncheck" /></th>
									<th>Region</th>
									<th>Province</th>
									<th>Reference Number</th>
									<th>Last Name</th>
									<th>First Name</th>
									<th>M.I.</th>
									<th>Date of Birth</th>
									<th>Modality</th>
									<th>Client Type</th>
									<th>Complete Address</th>
									<th>Contact No.</th>
									<th>Sex</th>
									<th>Educational Attainment</th>
									<th>Training Completed</th>
									<th>Institution / School</th>
									<th>Company</th>
									<th>Assessment Center</th>
									<th>Competency Assessor's Name</th>
									<th>Assessor's Accreditation Number</th>
									<th>Sector</th>
									<th>Type of Certificate</th>
									<th>NC Title</th>
									<th>COC Title</th>
									<th>Certificate No.</th>
									<th>Assessment Results</th>
									<th>Date of Certification</th>
									<th>Expiration Date</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach($srch_reslt as $row){
								?>
										<tr id = '<?php echo $row->tbl_num ?>'>
											<td class="tckbox"><input name="td" type ="checkbox" value = '<?php echo $row->tbl_num ?>'></td>
											<?php 
												echo "<td>".$row->region ."</td>";
												echo "<td>".$row->province ."</td>";
												echo "<td>".$row->cars ."</td>";
												echo "<td>".$row->last_name ."</td>";
												echo "<td>".$row->first_name ."</td>";
												echo "<td>".$row->middle_name ."</td>";
												echo "<td>".date('M-d-y', strtotime($row->date_of_birth)) ."</td>";
												echo "<td>".$row->modality ."</td>";
												echo "<td>".$row->client_type ."</td>";
												echo "<td>".$row->complete_address ."</td>";
												echo "<td>".$row->telephone_num ."</td>";
												echo "<td>".$row->gender ."</td>";
												echo "<td>".$row->educational_attainment ."</td>";
												echo "<td>".$row->training_completed ."</td>";
												echo "<td>".$row->institution_school ."</td>";
												echo "<td>".$row->company ."</td>";
												echo "<td>".$row->assessment_center ."</td>";
												echo "<td>".$row->comp_assessor ."</td>";
												echo "<td>".$row->acridatation_num ."</td>";
												echo "<td>".$row->sector ."</td>";
												echo "<td>".$row->type_of_certificate ."</td>";
												echo "<td>".$row->nc_title ."</td>";
												echo "<td>".$row->coc_title ."</td>";
												echo "<td>".$row->certificate_num ."</td>";
												echo "<td>".$row->assessment_results ."</td>";
												echo "<td>".date('m-d-y', strtotime($row->date_of_certification)) ."</td>";
												echo "<td>".date('m-d-y', strtotime($row->expiry_of_certificate)) ."</td>";
											?>
										</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<table id ="exceltbl" style="visibility:hidden"></table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$("#tckbox").change(function(){
		var all = $(this);
		$('input:checkbox').each(function() {
			$(this).prop("checked", all.prop("checked"));
		});
	});	
	
	$("#edit").on('click', function(event){
			event.preventDefault();
			if($("input:checkbox[name=td]:checked").length == 1){
				var infokey = $("input:checkbox[name=td]:checked").val();
				$("#edit-student").load("edit_studnt",{test:infokey});
				$("#edit-student").modal('show');
			}else if($("input:checkbox[name=td]:checked").length > 1){
				alert("Only one student details at a time.");	
			}else{
				alert("Select a student that is to edited.");	
			}
	});
	
	$("#delete").click(function(event){
		event.preventDefault();
		var list1 = [];
		$( "input:checkbox[name=td]:checked" ).each(function(){
				list1.push($(this).val());
		});
		if(list1.length > 0){
			alert(list1);
			$.ajax({
				url: base_url + "index.php/home/delete",
				type: "POST",
				data:{ delList: list1 },
				success: function(svr_res){
					console.log(svr_res);
					$.each(list1, function(){
      			$("#" + this).css("background-color","#FF3700");
      			$("#" + this).fadeOut('2000', function(){
          		$("#" + this).remove();
        		});
					});
				}
			});
		}else{
			alert("No student selected!!!");	
		}
	});
	
	$("#excelgen").click(function(){
		var export_lst = [];
		$( "input:checkbox[name=td]:checked" ).each(function(){
			export_lst.push($(this).val());
		}); alert(export_lst);
		if(export_lst.length > 0){
			$.ajax({
				async: false,
				url: base_url + "index.php/home/exceldata",
				type: "POST",
				data:{
					list: export_lst
				},
				success: function(svr_res){
					svr_res = $.parseJSON(svr_res);
					//console.log(svr_res);
					create_table(svr_res);
				}
			})
			tableToExcel('exceltbl', 'Student List');
		}else{
			alert("Please select student/s data to import.");
		}
		$("table#exceltbl").empty();
	});
	
	$("#srchtable").click(function(e){
		e.preventDefault();
		var keyword = $("#srch_lst").val();
		
		if(keyword.length > 0){
			$.ajax({
				url: base_url + "index.php/home/selective_src",
				type: "POST",
				data: {key: keyword},
				success: function(svr_res){
					console.log(svr_res);
					svr_res = $.parseJSON(svr_res);
					$("table#student-search-results tbody").empty();
					var html;
					$.each(svr_res, function(){
						
						html += "<tr>";
						html += '<td class="tckbox">' + '<input name="td" type ="checkbox" value ='+ this.tbl_num + '>' + "</td>";
						html += "<td>"+this.region +"</td>";
						html += "<td>"+this.province +"</td>";
						html += "<td>"+this.cars +"</td>";
						html += "<td>"+this.last_name +"</td>";
						html += "<td>"+this.first_name +"</td>";
						html += "<td>"+this.middle_name +"</td>";
						html += "<td>"+this.date_of_birth +"</td>";
						html += "<td>"+this.modality +"</td>";
						html += "<td>"+this.client_type +"</td>";
						html += "<td>"+this.complete_address +"</td>";
						html += "<td>"+this.telephone_num +"</td>";
						html += "<td>"+this.gender +"</td>";
						html += "<td>"+this.educational_attainment +"</td>";
						html += "<td>"+this.training_completed +"</td>";
						html += "<td>"+this.institution_school +"</td>";
						html += "<td>"+this.company +"</td>";
						html += "<td>"+this.assessment_center +"</td>";
						html += "<td>"+this.comp_assessor +"</td>";
						html += "<td>"+this.acridatation_num +"</td>";
						html += "<td>"+this.sector +"</td>";
						html += "<td>"+this.type_of_certificate +"</td>";
						html += "<td>"+this.nc_title +"</td>";
						html += "<td>"+this.coc_title +"</td>";
						html += "<td>"+this.certificate_num +"</td>";
						html += "<td>"+this.assessment_results +"</td>";
						html += "<td>"+this.date_of_certification +"</td>";
						html += "<td>"+this.expiry_of_certificate +"</td>";
					});
					$("table#student-search-results tbody").html(html);
				}
			});
		}
	});
	
	var tableToExcel = (function() {
	var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
  	var a = document.createElement('a');
  	if (!table.nodeType) table = document.getElementById(table)
  	var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
  	a.href = uri + base64(format(template, ctx))
  	a.download = 'Student List'+'.xls';
  	a.click();
  }
})()

function create_table(svr_res){
	var html;
		html += "<thead>";
		html += "<tr>";
		html += '<th>Index</th>';
		html += "<th>Region</th>";
		html += "<th>Province</th>";
		html += "<th>Reference Number</th>";
		html += "<th>Last Name</th>";
		html += "<th>First Name</th>";
		html += "<th>M.I.</th>";
		html += "<th>Date of Birth</th>";
		html += "<th>Modality</th>";
		html += "<th>Client Type</th>";
		html += "<th>Complete Address</th>";
		html += "<th>Contact No.</th>";
		html += "<th>Sex</th>";
		html += '<th>Educational Attainment</th>';
		html += "<th>Training Completed</th>";
		html += "<th>Institution / School</th>";
		html += "<th>Company</th>";
		html += "<th>Assessment Center</th>";
		html += "<th>Competency Assessor's Name</th>";
		html += "<th>Assessor's Accreditation Number</th>";
		html += "<th>Sector</th>";
		html += "<th>Type of Certificate</th>";
		html += "<th>NC Title</th>",
		html += "<th>COC Title</th>";
		html += "<th>Certificate No.</th>";
		html += "<th>Assessment Results</th>";
		html += "<th>Date of Certification</th>";
		html += "<th>Expiration Date</th>";
		html += "</tr>";
		html += "</thead>";
		html += "<tbody>";
		
		$.each(svr_res, function(){
		
			html += "<tr>";
			html += '<td>' + this.tbl_num + "</td>";
			html += "<td>" + this.region  + "</td>";
			html += "<td>" + this.province + "</td>";
			html += "<td>" + this.cars + "</td>";
			html += "<td>" + this.last_name + "</td>";
			html += "<td>" + this.first_name + "</td>";
			html += "<td>" + this.middle_name + "</td>";
			html += "<td>" + this.date_of_birth + "</td>";
			html += "<td>" + this.modality + "</td>";
			html += "<td>" + this.client_type + "</td>";
			html += "<td>" + this.complete_address + "</td>";
			html += "<td>" + this.telephone_num + "</td>";
			html += '<td>' + this.gender + "</td>";
			html += "<td>" + this.educational_attainment + "</td>";
			html += "<td>" + this.training_completed + "</td>";
			html += "<td>" + this.institution_school + "</td>";
			html += "<td>" + this.company + "</td>";
			html += "<td>" + this.assessment_center + "</td>";
			html += "<td>" + this.comp_assessor + "</td>";
			html += "<td>" + this.acridatation_num + "</td>";
			html += "<td>" + this.sector + "</td>";
			html += "<td>" + this.type_of_certificate + "</td>";
			html += "<td>" + this.nc_title + "</td>";
			html += "<td>" + this.coc_title + "</td>";
			html += "<td>" + this.certificate_num + "</td>";
			html += "<td>" + this.assessment_results + "</td>";
			html += "<td>" + this.date_of_certification + "</td>";
			html += "<td>" + this.expiry_of_certificate + "</td>";
			html += "</tr>"; 
		
		});
		html += "<tbody>";
		$("#exceltbl").html(html);
}
</script>
