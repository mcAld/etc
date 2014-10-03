var base_url = "http://localhost/dmts_loc/";
//var base_url = "http://192.168.30.24/dmts_loc/";

$(document).ready(function(){
	$(".Printing").css("color","orange");
	$(".Printing").html("<i class ='fa fa-print btn btn-sm'> </i> Printing");
	$(".Overdue").css("color","red");
	$(".Overdue").html("<i class ='fa fa-flag btn btn-sm'> </i> Overdue");
	$(".Verified").css("color","green");
	$(".Verified").html("<i class ='fa fa-check btn btn-sm'> </i> Verified");
	$("#vcontainer").load('show_vcrequest');
	$("#sign_btn").click(function(event){
		event.preventDefault();
		var usrnme_inp = $('#uname');
		var usrpwd_inp = $('#pword');
		var container = $('#err_msg_container');
		var err_msg = $("err_msg");
		setTimeout(function(){
			$.ajax({
				url:base_url + "index.php/home/auth",
				data:{
					username:usrnme_inp.val(),
					password:usrpwd_inp.val()
				},
				type: 'post',
				success: function(data){
					console.log(data);
					var svr_resp = $.parseJSON(data);
					if(svr_resp == "loggin"){
						window.location.replace(base_url);
					}else{
						container.html(svr_resp);
					}
				}
			});
		}, 200);
	});
	
	$("#qsearch").keypress(function(e){
		var keycode = (e.keyCode ? e.keyCode : e.which);
		if(keycode == '13'){
			e.preventDefault();
		}
		
	});
	
	$("#commnce_srch").click(function(event){
		
		var input_list = [
					$("#firstname").val(),
					$("#lastname").val(),
					$("#date_from").val(),
					$("#date_to").val(),
					$("#education").val(),
					$("#school").val(),
					$("#assessment_center").val(),
					$("#assessor").val(),
					$("#qual_title").val(),
					$("#ref_num").val(),
					$("#sector").val(),
					$("#assessment_date").val()
					];
		var id_lst = [];
		for(i = 0; i < input_list.length; i++){
			
			if(input_list[i].length > 0 ){
				$("#loading").show();
				$.ajax({
					url:base_url + "index.php/home/search",
					type: 'POST',
					data:{ querry_val:input_list },
					success: function(svr_res){
						
						svr_res = $.parseJSON(svr_res);
						if(svr_res.length > 0){
							$.each(svr_res, function(){
								id_lst.push(this.tbl_num);
							});
						
							
							$("#tbl_srchresult").load("test_load",{test:id_lst});
							$("#filter-option").collapse("toggle");
							$("#tbl_srchresult").css("visibility","visible");
						}else{
							alert("Please check your inputs in the filter. No student found");
							$("div#tbl_srchresult").empty();
							$("#tbl_srchresult").css("visibility","visible");
						}
						
					},
				
				}).error(function (xhr, ajaxOptions, thrownError) {
					alert(xhr.status);
					alert(xhr.responseText);
					alert(thrownError);
	    	});
				$("#loading").hide();
				
				
				return false;
			}
		}
		event.preventDefault();	
		$("#filter-option").stop(true, true);
	});
	
	$("#st_srch_crt").click(function(){
		var column = $("#tbl_selct option:selected").attr("data-id");
		var keyword = $("#keyword").val();
		
		var id_lst = [];
		if(keyword.length > 0 && column != "" ){
			$.ajax({
				url:base_url + "index.php/home/cert_stsrch",
				type: 'POST',
				data:{ 
					col_name: column, 
					key_word: keyword 
				},
				success: function(svr_res){
					svr_res = $.parseJSON(svr_res);
					
					if(svr_res.length > 0){
						$.each(svr_res, function(){
							id_lst.push(this.tbl_num);
						});
						
						$("#stsrch_res").load("load_stres_cert",{row_id:id_lst});
					}else{
						alert("Please check your inputs in the filter. No student found");
						$("div#tbl_srchresult tbody").empty();
					}
				},
			
			}).error(function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status);
				alert(xhr.responseText);
				alert(thrownError);
    	});
	  }
	});
	
	$("#verified_lst").click(function(event){
		event.preventDefault();
		$("#stsrch_res").empty();
		$("#vcontainer").load('show_vcrequest');
	});	
	$("#forprintng_lst").click(function(event){
		event.preventDefault();
		$("#stsrch_res").empty();
		$("#fcontainer").load('show_fcrequest');
	});	
	
	$("#overdue_lst").click(function(event){
		event.preventDefault();
		$("#stsrch_res").empty();
		$("#ocontainer").load('show_ocrequest');
	});	
	
	$("#printed_lst").click(function(event){
		event.preventDefault();
		$("#stsrch_res").empty();
		$("#pcontainer").load('show_pcrequest');
	});
	
	$(".nc_delete").click(function(event){
		event.preventDefault();
		var list1 = [];
		$( "input:checkbox[name=td]:checked" ).each(function(){
				list1.push($(this).val());
		});
		if(list1.length > 0){
			$.ajax({
				url: base_url + "index.php/home/nc_delete",
				type: "POST",
				data:{ delList: list1 },
				success: function(svr_res){
					$.each(list1, function(){
      			$("#" + this).css("background-color","#FF3700");
      			$("#" + this).fadeOut('2000', function(){
          		$("#" + this).remove();
        		});
					});
				}
			});
		}else{
			alert("No request selected!!!");	
		}
	});
	
	$(".nc_print").click(function(event){
		event.preventDefault();
		var list1 = [];
		$( "input:checkbox[name=td]:checked" ).each(function(){
				list1.push($(this).attr("data-id"));
		});
		
		$("#print-modal").load("print_cert",{test:list1});
		$("#print-modal").modal();
	});
	
	$("#new_userForm").submit(function(event){
		event.preventDefault();
		var form_data = $(this).serialize();
		console.log(form_data);
		var is_valid = validation();
		
		if(is_valid == true){
			setTimeout(function(){
				$.ajax({
					url: base_url + 'index.php/home/saveNew_user',
					data: form_data,
					type: 'post',
					success: function(data){
						console.log(data);
						alert("Done adding new user to the system");
						$("#new_userForm")[0].reset();
					}
				});
				
			}, 200);
		}
		
	});
	
	$(".delete_user").click(function(event){
		var row = $(this).attr("data-id");
		event.preventDefault();
		
		if(confirm("Are you sure to delete this user?")){
			$.ajax({
				url: base_url + "index.php/home/user_delete",
				type: "POST",
				data:{ delList: row },
				success: function(svr_res){
					$("#" + row).css("background-color","#FF3700");
    			$("#" + row).fadeOut('2000', function(){
        		$("#" + row).remove();
      		});
				}
			});
		}
	});
	
	$(".edit_user").click(function(event){
		event.preventDefault();
		var row = $(this).attr("data-id");
		
		$("#edit-user").load("edit_user",{test:row});
		$("#edit-user").modal();
		
	});
	
});
function validation(){
	var x = 0;
	var validation = [
			verify_usrName(),
			verify_fname(),
			verify_lname(),
			verify_pword(),
			verify_prev()
	];
	
	for(i = 0; i < validation.length; i++ ){
		if(validation[i] == false){
			x = 1;
		}
	}
	
	if(x == 0){
		return true;
		
	}else{
		return false;
	}
	
}
function verify_usrName(){
	var input = $('#username');
	var errMsg = $("#username_err");
	var is_valid;
	
	if(input.val().length > 0){	
		$.ajax({
			async: false,
			url: base_url + 'index.php/home/check_dbname',
			data: {username:input.val()},
			type: 'post',
			success: function(data){
				console.log(data);
				if(data == "true"){
					input.css('border', '1px solid #cccccc');
					errMsg.removeClass("errorMsgClass");
					errMsg.text("");
					is_valid = true;
				}else{
					var loc_left = input.position().left + 10;
					var loc_top = input.position().top + 29;
					
					input.css('border', '2px solid #C00000');
					errMsg.html(data);
					errMsg.css({top:loc_top, left:loc_left, position: 'absolute'});
					errMsg.addClass("errorMsgClass");
					is_valid = false;
				}
			}
		});
	}else{
		var data = "This feild is required";
		var loc_left = input.position().left + 10;
		var loc_top = input.position().top + 29;
		
		input.css('border', '2px solid #C00000');
		errMsg.html(data);
		errMsg.css({top:loc_top, left:loc_left, position: 'absolute'});
		errMsg.addClass("errorMsgClass");
		is_valid = false;
	}
}

function verify_fname(){
	var input = $('#fname');
	var errMsg = $("#fname_err");
	var is_valid;
	var data = "This feild is required";
	
	if(input.val().length != 0){
		input.css('border', '1px solid #cccccc');
		errMsg.removeClass("errorMsgClass");
		errMsg.text("");
		is_valid = true;
	}else{
		var loc_left = input.position().left + 10;
		var loc_top = input.position().top + 29;
		
		input.css('border', '2px solid #C00000');
		errMsg.html(data);
		errMsg.css({top:loc_top, left:loc_left, position: 'absolute'});
		errMsg.addClass("errorMsgClass");
		is_valid = false;
	}
}

function verify_lname(){
	var input = $('#lname');
	var errMsg = $("#lname_err");
	var is_valid;
	var data = "This field is required";
	
	if(input.val().length != 0){
		input.css('border', '1px solid #cccccc');
		errMsg.removeClass("errorMsgClass");
		errMsg.text("");
		is_valid = true;
	}else{
		var loc_left = input.position().left + 10;
		var loc_top = input.position().top + 29;
		
		input.css('border', '2px solid #C00000');
		errMsg.html(data);
		errMsg.css({top:loc_top, left:loc_left, position: 'absolute'});
		errMsg.addClass("errorMsgClass");
		is_valid = false;
	}
}

function verify_pword(){
	var input = $('#pword');
	var cword = $('#cword');
	var errMsg = $("#pword_err");
	var is_valid;
	var data = "This field is required";
	
	if(input.val().length != 0){
		input.css('border', '1px solid #cccccc');
		errMsg.removeClass("errorMsgClass");
		errMsg.text("");
		if(input.val() != cword.val()){
			var loc_left = input.position().left + 10;
			var loc_top = input.position().top + 29;
			
			input.css('border', '2px solid #C00000');
			cword.css('border', '2px solid #C00000');
			errMsg.html("Password did not match with Confirm Password");
			errMsg.css({top:loc_top, left:loc_left, position: 'absolute'});
			errMsg.addClass("errorMsgClass");
			is_valid = false;
		}
	}else{
		var loc_left = input.position().left + 10;
		var loc_top = input.position().top + 29;
		
		input.css('border', '2px solid #C00000');
		errMsg.html(data);
		errMsg.css({top:loc_top, left:loc_left, position: 'absolute'});
		errMsg.addClass("errorMsgClass");
		is_valid = false;
	}
}

function verify_prev(){
	var input = $('#prev');
	var test = $('#prev option:selected').text();
	var errMsg = $("#cert_typeErr");
	
	if(test == '-Enter privilege -'){
		var loc_left = input.position().left + 10;
		var loc_top = input.position().top + 29;
		
		input.css('border', '2px solid #C00000');
		errMsg.text("Please select a previlage type...");
		errMsg.css({top:loc_top, left:loc_left, position: 'absolute'});
		errMsg.addClass("errorMsgClass");
		return false;
	}else{
		input.css('border', '1px solid #cccccc');
		errMsg.removeClass("errorMsgClass");
		errMsg.text("");
		return true;
	}
}