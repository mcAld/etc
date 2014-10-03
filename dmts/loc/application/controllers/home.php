<?php 
	class Home extends CI_Controller{
		
		function __construct(){
			parent::__construct();
			$this->load->helper(array('html','url','form'));
			$this->load->library(array('session'));
			$this->load->model('home_model');
			$this->load->database();
		}
		
		function index(){
			$session = $this->session->userdata('logged_in');
			
			if($session['login']){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				
				$this->load->view('dashboard_view', $data);
			}else{
				$this->load->view('login_view');
			}
		}
		
		function auth(){
			$inp_uname = $_POST['username'];
			$inp_pword = $_POST['password'];
			
			$db_result = $this->home_model->check_db($inp_uname,$inp_pword);
			
			if($db_result){
				$response = "loggin";
				foreach($db_result as $row){	
					
					$session_data = array(
								'user_id' => $row->user_ID,
								'user_name' => $row->user_name,
								'firts_name' => $row->first_name,
								'last_name' => $row->last_name,
								'usertype' => $row->user_type,
								'position' => $row->position,
								'login' => true
					);
					print(json_encode($response));
				}
				$this->session->set_userdata('logged_in', $session_data);
				
			}else{
				$err_msg = "Wrong Username or Password. <br> Please try again";
				$response = json_encode($err_msg);
				print($response);	
			}
		}
		
		function logoff(){
			$this->session->unset_userdata('logged_in');
			redirect('home', refreash);
		}
		
		function notification(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				
				$data['notification'] = $this->home_model->get_notification(); 
				$data['creq_sum'] = $this->home_model->get_creqsum();
				
				$this->load->view('notification_view', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function worklog(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				
				$data['logs'] = $this->home_model->get_logs($session['user_name']);
				$this->load->view('work-log_view', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function student_search(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				$data['autocomplete'] = $this->home_model->autocomplete();
				
				$this->load->view('student-search_view', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function search(){
			$query_list = $_POST['querry_val'];
			$query2 = array();
			$query = array();
			$tbl_column = array('first_name','last_name','start','stop','educational_attainment','institution_school','assessment_center','comp_assessor','nc_title','cars','sector','date_of_certification');
			
			$x = 0;
			for($i = 0; $i < count($query_list); $i++){
				if(strlen($query_list[$i]) > 0){
					
					if($tbl_column[$i] == "start" || $tbl_column[$i] == "stop"){
						$x++;
						$query2[$tbl_column[$i]] = $query_list[$i];
						if($x == 2){
							$query2['dte_param'] = true;
						}
					}else{
						$query[$tbl_column[$i]] = $query_list[$i];
					}
				}
			}
			
			if($x != 2){
				$query2['start'] = false;
				$query2['stop'] = false;
				$query2['dte_param']= false;
			}
			
			$this->home_model->search_student($query, $query2);
		}
		
		function test_load(){
			$key = $_POST['test'];
			
			for($i=0; $i < count($key); $i++){
				$key[$i] = intval($key[$i]);	
			}
			
			$data['srch_reslt'] = $this->home_model->studnt_info($key);
			
			$this->load->view('test',$data);
		}
		
		function edit_studnt(){
			$key = $_POST['test'];
			
			for($i=0; $i < count($key); $i++){
				$key[$i] = intval($key[$i]);	
			}
			
			$data['srch_reslt'] = $this->home_model->studnt_info($key);
			
			$this->load->view('edit-studata',$data);
		}
		
		function import_students(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				$data['new_stdata'] = false;
				$data['is_success'] = false;
				
				$this->load->view('import-students', $data);
			}else{
				$this->load->view('login_view');
			}
		}
		
		function do_upload(){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'csv';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload()){
			
			}else{
			
				$csvfile = $_FILES['userfile']['tmp_name'];;
			
			
				if(!file_exists($csvfile)) {
					echo "File not found. Make sure you specified the correct path.\n";
					exit;
				}
			
				$file = fopen($csvfile,"r");
			
				if(!$file) {
				echo "Error opening data file.\n";
				exit;
				}
			
				$size = filesize($csvfile);
			
				if(!$size) {
					echo "File is empty.\n";
					exit;
				}
				$sqldata;
				$i = 0;
				while (($csvcontent = fgetcsv($file, 1000, ",")) !== FALSE){
         $sqldata[$i] = array(
         		'tbl_num' => '',
         		'region' => $csvcontent[0],
         		'province' => $csvcontent[1],
         		'cars' => $csvcontent[2],
         		'last_name' => $csvcontent[3],
         		'first_name' => $csvcontent[4],
         		'middle_name' => $csvcontent[5],
         		'date_of_birth' => date('Y-m-d', strtotime($csvcontent[6])),
         		'modality' => $csvcontent[7],
         		'client_type' => $csvcontent[8],
         		'complete_address' => $csvcontent[9],
         		'telephone_num' => $csvcontent[10],
         		'passport_num' =>  $csvcontent[11],
         		'gender' => $csvcontent[12],
         		'educational_attainment' => $csvcontent[13],
         		'training_completed' => $csvcontent[14],
         		'institution_school' => $csvcontent[15],
         		'company' => $csvcontent[16],
         		'assessment_center' => $csvcontent[17],
         		'sector' => $csvcontent[18],
						'comp_assessor' => $csvcontent[19],
						'acridatation_num' => $csvcontent[20],
         		'type_of_certificate' => $csvcontent[21],
         		'nc_title' => $csvcontent[22],
         		'coc_title' => $csvcontent[23],
         		'assessment_results' => $csvcontent[24],
         		'certificate_num' => $csvcontent[25],
         		'date_of_certification' => date('Y-m-d', strtotime($csvcontent[26])),
         		'expiry_of_certificate' => date('Y-m-d', strtotime($csvcontent[27]))
         );
         $i++;
     		}
			
				fclose($file);
			
				$preview = $this->home_model->appnd_data($sqldata);
			
				$this->test($preview);
			}
		}
		
		function test($upld_data){
			$session = $this->session->userdata('logged_in');
			
			$data['user_id'] = $session['user_id'];
			$data['name'] = $session['firts_name'] . " " . $session['last_name'];
			$data['rights'] = $session['usertype'];
			$data['position'] = $session['position'];
			$data['new_stdata'] = $upld_data;
			
			$this->load->view('import-students-success', $data);
		}
		
		function save_nwstnfo(){
			$loca = explode(",",$_POST['reg_prov']);
			$name = explode(" ",$_POST['fullname']);
			$rowid = $_POST['row_id'];
			$sqldata = array(
         		'region' => $loca[0],
         		'province' => $loca[1],
         		'cars' => $_POST['ref_num'],
         		'last_name' => $name[0],
         		'first_name' => $name[1],
         		'middle_name' => $name[2],
         		'date_of_birth' => date('Y-m-d', strtotime($_POST['bday'])),
         		'modality' => $_POST['modality'],
         		'client_type' => $_POST['client_type'],
         		'complete_address' => $_POST['address'],
         		'telephone_num' => $_POST['contact_num'],
         		'gender' => $_POST['gender'],
         		'educational_attainment' => $_POST['education'],
         		'training_completed' => $_POST['training'],
         		'institution_school' => $_POST['institution'],
         		'company' => $_POST['company'],
         		'assessment_center' => $_POST['acenter'],
         		'sector' => $_POST['sector'],
						'comp_assessor' => $_POST['assessor'],
						'acridatation_num' => $_POST['accrid'],
         		'type_of_certificate' => $_POST['type_cert'],
         		'nc_title' => $_POST['title'],
         		'coc_title' => $_POST['coc_title'],
         		'assessment_results' => $_POST['aresult'],
         		'certificate_num' => $_POST['cert_num'],
         		'date_of_certification' => date('Y-m-d', strtotime($_POST['cert_date'])),
         		'expiry_of_certificate' => date('Y-m-d', strtotime($_POST['expir-data']))
         );
         
         
         $this->home_model->udate_stinfo($sqldata, intval($rowid));
		}
		
		function selective_src(){
			$key = $_POST['key'];
			
			$this->home_model->selective_src($key);
		}
		
		function certificate_request(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				
				$this->load->view('certificate-request', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function delete(){
			$list = $_REQUEST['delList'];
			
			$row_id = array();
			
			for($i=0; $i < count($list); $i++){
				$row_id[$i] = intval($list[$i]);
			}
			
			$this->home_model->delte_stu($row_id);
		}
		
		function exceldata(){
			$list = $_POST['list'];
			$row_id = array();
			
			for($i=0; $i < count($list); $i++){
				$row_id[$i] = intval($list[$i]);
			}
			$this->home_model->genExcdata($row_id);
			//print_r(json_encode($list));
		}
		
		function cert_stsrch(){
			$srch_val = $_POST['key_word'];
			$column_name = $_POST['col_name'];
			
			$this->home_model->stsrch_cert($column_name, $srch_val);
		}
		
		function load_stres_cert(){
			$key = $_POST['row_id'];
			
			for($i=0; $i < count($key); $i++){
				$key[$i] = intval($key[$i]);	
			}
			
			$data['srch_reslt'] = $this->home_model->studnt_info($key);
			
			$this->load->view('stsrch-certview',$data);
			
		}
		
		function verify_req(){
			$key = $_POST['test'];
			
			for($i=0; $i < count($key); $i++){
				$key[$i] = intval($key[$i]);	
			}
			
			$data['srch_reslt'] = $this->home_model->studnt_info($key);
			
			$this->load->view('certificate-request-form', $data);
		}
		
		function new_req(){
			$day = date('w', strtotime($_POST['date_req']));
			$id = $_POST['cars'];
			if($day == '1'){
				$date = strtotime($_POST['date_req']);
				$cdate = date(strtotime('+4 day', $date) );
			}else if($day == '0'){
				$date = strtotime($_POST['date_req']);
				$cdate = date(strtotime('+5 day', $date) );
			}else if($day == '6'){
				$date = strtotime($_POST['date_req']);
				$cdate = date(strtotime('+6 day', $date) );
			}else{
				$date = strtotime($_POST['date_req']);
				$cdate = date(strtotime('+7 day', $date) );
			}
			
			
			
			$query = array(
				'tbl_num' => '',
				'certf_type' => $_POST['cert_type'],
				'cars' => $id,
				'studnt_fname' => $_POST['fname'],
				'studnt_mname' => $_POST['mname'],
				'studnt_lname' => $_POST['lname'],
				'cert_title' => $_POST['title'],
				'acenter' => $_POST['acenter'],
				'assessment_dte' => date('Y-m-d', strtotime($_POST['dte_asst'])),
				'date_requested' => date('Y-m-d', strtotime($_POST['date_req'])),
				'claim_date' => date('Y-m-d', $cdate),
				'status' => "Verified"
			);
			
			//print_r($query);
			$this->home_model->save_crequest($query, $id);
		}
		
		function show_vcrequest(){
			$data['arcane'] = $this->home_model->get_vcrequest("Verified");
			
			$this->load->view('verified-crequest', $data);
			
		}
		
		function show_fcrequest(){
			$data['arcane2'] = $this->home_model->get_fcrequest("Printing");
			$this->load->view('forprinting-crequest', $data);
			
		}
		
		function show_ocrequest(){
			$data['arcane3'] = $this->home_model->get_ocrequest("Overdue");
			$this->load->view('overdue-crequest', $data);
			
		}
		
		function show_pcrequest(){
			$data['arcane4'] = $this->home_model->get_pcrequest("Printed");
			$this->load->view('printed-crequest', $data);
			
		}
		
		function nc_delete(){
			$list = $_POST['delList'];
			$row_id = array();
			
			for($i=0; $i < count($list); $i++){
				$row_id[$i] = intval($list[$i]);
			}
			$this->home_model->nc_delete($row_id);
		}
		
		function print_cert(){
			$list = $_POST['test'];
			$data['certinfo'] = $this->home_model->get_prdata($list);
			
			$this->load->view('certificate_preview', $data);
		}
		
		function expired_certificate(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('expired-certificates', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function view_institutions(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('view-institutions', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function edit_institution(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('edit-institution', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function new_institution(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('new-institution', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function view_ac(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('view-ac', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function new_ac(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('new-ac', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function view_assessors(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('view-assessors', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function new_assessor(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('new-assessor', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function view_qualification(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('view-qualification', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function new_qualification(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('new-qualification', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function new_competency(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				
				$this->load->view('new-competency', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function view_users(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				
				$data['userlist'] = $this->home_model->get_alluser();
				
				$this->load->view('view-users', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function user_delete(){
			$list = $_POST['delList'];
			$this->home_model->us_delete(intval($list));
		}
		
		function edit_user(){
			$key = $_POST['test'];
			
			$data['iulo'] = $this->home_model->us_edit(intval($key));
			
			$this->load->view('edit-user',$data);
		}
		
		function saveEdit_user(){
			$row = $_POST['rowID'];
			$dta = array(
				'user_name' => $_POST['username'],
				'user_pword' => md5($_POST['pword']),
				'first_name' => $_POST['fname'],
				'last_name' => $_POST['lname'],
				'position' => $_POST['position'],
				'user_type' => $_POST['privilage'],
				'user_ID' => $_POST['empId'],
				'contact_num' => $_POST['contact_num'],
				'address' => $_POST['address'],
				'email_add' => $_POST['email']
			);
			
			//print_r($dta);
			
			$this->home_model->valerk($dta, $row);
		}
		
		function new_user(){
			$session = $this->session->userdata('logged_in');
			if($session){
				$data['user_id'] = $session['user_id'];
				$data['name'] = $session['firts_name'] . " " . $session['last_name'];
				$data['rights'] = $session['usertype'];
				$data['position'] = $session['position'];
				
				$this->load->view('new-user', $data);	
			}else{
				$this->load->view('login_view');
			}
		}
		
		function show_stdetails(){
			$key = $_POST['test'];
			
			for($i=0; $i < count($key); $i++){
				$key[$i] = intval($key[$i]);	
			}
			
			$data['srch_reslt'] = $this->home_model->studnt_info($key);
			
			$this->load->view('stu_shwdata',$data);
		}
		
		function check_dbname(){
			$inputname = $_POST['username'];
			$inputname = trim($inputname);
			
			$is_exist = $this->home_model->get_usrname($inputname);
			
			if($is_exist == '0'){
				print("true");
			}else{
				print("Someone is already using ".$is_exist." as username." );
			}
		}
		
		function saveNew_user(){
			$dta = array(
				'tbl_num' => "",
				'user_name' => $_POST['username'],
				'user_pword' => md5($_POST['pword']),
				'first_name' => $_POST['fname'],
				'last_name' => $_POST['lname'],
				'position' => $_POST['position'],
				'user_type' => $_POST['privilage'],
				'user_ID' => $_POST['empId'],
				'contact_num' => $_POST['contact_num'],
				'address' => $_POST['address'],
				'email_add' => $_POST['email']
			);
			
			//print_r($dta);
			
			$this->home_model->new_user($dta);
		}
		
	}
?>