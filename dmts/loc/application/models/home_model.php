<?php 
	class Home_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		function check_db($user_name, $pword){
			
			$this->db->select();
			$this->db->from('tblusrcredentials');
			$this->db->where('user_name', $user_name);
			$this->db->where('user_pword', md5($pword));
			$this->db->limit(1);
			
			$query = $this->db->get();

			if($query->num_rows() === 1){
				return $query->result();
			}else{
				return FALSE;
			}
		}
		
		function get_notification(){
			$this->db->select();
			$this->db->from('tblnotification');
			$this->db->order_by("tbl_num", "desc");
			$this->db->limit(5);
			$query = $this->db->get();
			
			return $query->result();
		}
		
		function get_creqsum(){
			$this->db->select('cars,status');
			$this->db->from('tblcrequest');
			$this->db->order_by("date_requested", "desc");
			$this->db->limit(7);
			$query = $this->db->get();
			
			return $query->result();
		}
		
		function appnd_data($csvcontent){
			$row_number = $this->db->count_all('tblstudents');
			
			$this->db->insert_batch('tblstudents', $csvcontent);
			
			$row_count = $this->db->affected_rows();
			
			$this->db->order_by("tbl_num", "asc");
			$Sql = $this->db->get('tblstudents',$row_count,$row_number);
			$result = $Sql->result();
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has added '. $row_count . " new student.",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'Added '. $row_count . " new student.",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
			
			return $result;
			
		}
		
		function autocomplete(){
			$this->db->distinct();
			$this->db->select('educational_attainment');
			$query = $this->db->get('tblstudents')->result();
			
			$autocomplete['edu']=array();
			foreach($query as $row){
				array_push($autocomplete['edu'], $row->educational_attainment);
			}
			
			
			$this->db->distinct();
			$this->db->select('institution_school');
			$query = $this->db->get('tblstudents')->result();
			
			$autocomplete['institution']=array();
			foreach($query as $row){
				array_push($autocomplete['institution'], $row->institution_school);
			}
			
			$this->db->distinct();
			$this->db->select('assessment_center');
			$query = $this->db->get('tblstudents')->result();
			
			$autocomplete['assessment_center']=array();
			foreach($query as $row){
				array_push($autocomplete['assessment_center'], $row->assessment_center);
			}
			
			$this->db->distinct();
			$this->db->select('comp_assessor');
			$query = $this->db->get('tblstudents')->result();
			
			$autocomplete['comp_assessor']=array();
			foreach($query as $row){
				array_push($autocomplete['comp_assessor'], $row->comp_assessor);
			}
			
			$this->db->distinct();
			$this->db->select('nc_title');
			$query = $this->db->get('tblstudents')->result();
			
			$autocomplete['nc_title']=array();
			foreach($query as $row){
				array_push($autocomplete['nc_title'], $row->nc_title);
			}
			
			$this->db->distinct();
			$this->db->select('sector');
			$query = $this->db->get('tblstudents')->result();
			
			$autocomplete['sector']=array();
			foreach($query as $row){
				array_push($autocomplete['sector'], $row->sector);
			}
			
			return $autocomplete;
		}
		
		function search_student($query,$dte_param){
			
			if($dte_param['dte_param']){
				$this->db->select('tbl_num');
				$this->db->WHERE('date_of_certification >=', $dte_param['start']);
				$this->db->WHERE('date_of_certification <=', $dte_param['stop']);
				$this->db->like($query);
				$this->db->from('tblstudents');
				
				$qry = $this->db->get();
				print_r(json_encode($qry->result()));
			}else{
				$this->db->select('tbl_num');
				$this->db->like($query);
				$this->db->from('tblstudents');
				
				$qry = $this->db->get();
				print_r(json_encode($qry->result()));
			}
			
		}
		
		function studnt_info($row_id){
			$this->db->where_in('tbl_num', $row_id);
			$this->db->from('tblstudents');
			
			$query = $this->db->get();
			
			return $query->result();
		}
		
		function stsrch_cert($col_name, $srcword){
			$this->db->select("tbl_num");
			$this->db->like($col_name, $srcword);
			$this->db->from('tblstudents');
			
			$query = $this->db->get();
			
			print_r(json_encode($query->result()));
		}
		
		function udate_stinfo($query, $rowid){
			$this->db->where('tbl_num', $rowid);
			$this->db->update('tblstudents',$query);	
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has updated '.$query['first_name'] . " " . $query['last_name']." records",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'Updated '. $query['first_name'] . " records.",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
			
			
		}
		
		function delte_stu($list){
			
			$this->db->where_in('tbl_num', $list);
			$this->db->delete('tblstudents');
			
			$i = $this->db->affected_rows();
			print_r($i);
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has deleted '.$i." student records",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'Deleted '.$i." student records",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
		}
		
		function genExcdata($rows){
			$this->db->select();
			$this->db->where_in('tbl_num', $rows);
			$this->db->from('tblstudents');
			$quesry = $this->db->get();
		
			print_r(json_encode($quesry->result()));
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has exported data to excel',
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'exported data to excel',
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
		}
		
		function save_crequest($data, $ref_num){
			$this->db->insert('tblcrequest', $data); 
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has verified a new request with reference number of ' . $ref_num,
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'verified a new request with reference number of ' . $ref_num,
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
		}
		
		function get_vcrequest($status){
			$this->db->select();
			$this->db->where("status", $status);
			$this->db->from('tblcrequest');
			
			$query = $this->db->get();
			
			return $query->result();
		}
		
		function get_fcrequest($status){
			$this->db->select();
			$this->db->where("status", $status);
			$this->db->from('tblcrequest');
			
			$query = $this->db->get();
			
			return $query->result();
		}
		
		function get_ocrequest($status){
			$this->db->select();
			$this->db->where("status", $status);
			$this->db->from('tblcrequest');
			
			$query = $this->db->get();
			
			return $query->result();
		}
		
		function get_pcrequest($status){
			$this->db->select();
			$this->db->where("status", $status);
			$this->db->from('tblcrequest');
			
			$query = $this->db->get();
			
			return $query->result();
		}
		
		function nc_delete($ids){
			$this->db->where_in('tbl_num', $ids);
			$this->db->delete('tblcrequest'); 
			$i = $this->db->affected_rows();
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has deleted '.$i ." request",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'Deleted '.$i ." request",
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
		}
		
		function get_usrname($username){
			
			$this->db->select('user_name');
			$this->db->where('user_name', $username);
			$this->db->from('tblusrcredentials');
			$this->db->limit(1);
			
			$sql = $this->db->get();
			$rows = $sql->num_rows();
			
			if($rows > 0){
				foreach($sql->result() as $row){
					$sql = $row->user_name;
				}
				return $sql;
			}else{
				return $rows;
			}
			
		}
		
		function new_user($sql){
			$this->db->insert('tblusrcredentials', $sql);
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has created a new user',
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'Created a new user ' .$sql['username'],
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
		}
		
		function get_alluser(){
			$this->db->select();
			$this->db->from('tblusrcredentials');
			
			$result = $this->db->get();
			
			return $result->result();
		}
		
		function us_delete($rowId){
			$this->db->select('user_name');
			$this->db->where_in('tbl_num', $rowId);
			$this->db->from('tblusrcredentials'); 
			
			$user = $this->db->get();
			$session = $this->session->userdata('logged_in');
			
			foreach($user->result() as $rows){
				$user = $rows->user_name;
			}
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			'notification_msg' => 'has deleted '.$user,
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);
			
			$this->db->insert('tblnotification', $data);
			
			$this->db->where_in('tbl_num', $rowId);
			$this->db->delete('tblusrcredentials'); 
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'Deleted '.$user,
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
		}
		
		function us_edit($id){
			$this->db->select();
			$this->db->where_in('tbl_num', $id);
			$this->db->from('tblusrcredentials'); 
			
			$user = $this->db->get();
			
			return $user->result();
		}
		
		function valerk($data,$id){
			$this->db->where('tbl_num',$id);
			$this->db->update('tblusrcredentials', $data);
			
			$session = $this->session->userdata('logged_in');
			
			$data = array(
				'notification_ID' => strtoupper(random_string('alpha', 4))."-".random_string('numeric', '5'),
				'user_name' => $session['user_id'],
   			'name' =>   $session['firts_name'] . " " . $session['last_name'],
   			//'notification_msg' => 'has created a new user',
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);
			
			$this->db->select('user_name');
			$this->db->where_in('tbl_num', $id);
			$this->db->from('tblusrcredentials'); 
			
			$user = $this->db->get();
			$session = $this->session->userdata('logged_in');
			
			foreach($user->result() as $rows){
				$user = $rows->user_name;
			}
			$data['notification_msg'] = 'has updated '.$user. 'user data';
			$this->db->insert('tblnotification', $data);
			
			$data2 = array(
				'username' => $session['user_name'],
   			'body' => 'has updated '.$user. 'user data',
   			'time' =>date("H:i:s", time()),
   			'date' => date("Y-m-d")
			);

			$this->db->insert('tblworklog', $data2);
		}
		
		function get_logs($uname){
			$this->db->select();
			$this->db->where('username', $uname);
			$this->db->order_by('tbl_num', 'desc');
			$this->db->from('tblworklog');
			
			$sql = $this->db->get();
			
			return $sql->result();
		}
		
		function get_prdata($ids){
			$this->db->select('last_name, first_name, middle_name, nc_title, date_of_certification, expiry_of_certificate');
			$this->db->where_in('cars', $ids);
			$this->db->from('tblstudents');
			
			$sql = $this->db->get();
			
			return $sql->row();
			
			
		}
		
		function selective_src($key){
			$this->db->like('first_name', $key);
			$this->db->or_like('last_name', $key); 
			$this->db->from('tblstudents');
			
			$quesry = $this->db->get();
			
			print_r(json_encode($quesry->result()));
			
		}
	}
?>