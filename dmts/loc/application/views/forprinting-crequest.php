<table id ="for_printing" class ="table table-bordered table-striped table-hover">
	<thead>
	    <tr>
	        <th><input type ="checkbox" id="tckbox" data-id="uncheck" /></th>
	        <th>Certificate Type</th>
	        <th>Reference #</th>
	        <th>Full Name</th>
	        <th>Qualification Title</th>
	        <th>Assessment Center</th>
	        <th>Date of Assessment</th>
	        <th>Date Certificate Requested</th>
	        <th>Days Left</th>
	    </tr>
	</thead>
	<tbody>
	    <?php 
	    	foreach($arcane2 as $row){
	    ?>		
	    	<tr id = '<?php echo $row->tbl_num ?>' >
	        <td class="tckbox"><input name="td" type ="checkbox" value = '<?php echo $row->tbl_num ?>'></td>
	        <?php 
	        	echo "<td>".$row->certf_type ."</td>";
						echo "<td>".$row->cars ."</td>";
						echo "<td>".$row->studnt_lname. ", " . $row->studnt_fname . " ".$row->studnt_mname ."</td>";
						echo "<td>".$row->cert_title ."</td>";
						echo "<td>". $row->acenter ."</td>";
						echo "<td>".date('m-d-y', strtotime($row->assessment_dte)) ."</td>";
						echo "<td>".date('m-d-y', strtotime($row->date_requested)) ."</td>";
					?>
	        <td>0</td>
	    	</tr> 
	    <?php	
	    	}
	    ?>
	</tbody>
</table>