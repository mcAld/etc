<div class="modal-dialog" style ="width:815px;">
	
	<div id="bondpaper" class="modal-body" style ="padding: 0px!important;">

		<div id="mainDiv">
			
			<div id="ncTitle"><?php echo $certinfo->nc_title ?></div>
			<div id="candidName"><?php echo $certinfo->first_name. " ".$certinfo->middle_name. " " .$certinfo->last_name   ?></div>
			<table id="trainingReg">
				<tr>
					<th>Unit Code</th>
					<th>Unit Title</th>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Participating in workplace communication</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Working in a team environment</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Practicing career professionalism</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Practicing occupational health and safety procedures</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Preparing construction materials and tools</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Observing procedures, specifications and manuals of instructions</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Interpret technical drawings and plans</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Performing mensuration and calculation</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Maintaining tools and equipment</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Prepare electrical power and hydraulic tools</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Perform roughing-in activities for communication and distribution</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Install wiring devices for floor and ground fault current interrupting outlets</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Install electrical protection system for lighting and grounding</td>
				</tr>
				<tr>
					<td>HC500311101</td>
					<td>Install electrical lighting systems on auxiliary outlets and lighting fixtures</td>
				</tr>
			</table>
		</div>
		<div id="certificateNo">??????????????</div>
		<div id="issuedDate"><?php echo date('M d, Y', strtotime($certinfo->date_of_certification)) ?></div>
		<div id="validUntil"><?php echo date('M d, Y', strtotime($certinfo->date_of_certification)) ?></div>
		<div id="directorGen">SEC. EMMANUEL JOEL J. VILLANUEVA</div>
	</div>
	
	
	
</div>
<div class="modal-footer" style ="background:rgba(236, 215, 215, 0);margin-top:0px;border:none;">
<button id = "print" type="button" class="btn btn-primary" style ="border-radius:2px;">Print Now</button>
<button type="button" class="btn btn-default" style ="border-radius:2px;"data-dismiss="modal">Close</button>
</div>
<script>
	$("#print").click(function(e){
		e.preventDefault();
		var printContents = document.getElementById("bondpaper").innerHTML;
		alert();
		var originalContents = document.body.innerHTML;
		document.body.innerHTML = printContents;
		window.print();
		
		document.body.innerHTML = originalContents;
	});
	
	
</script>