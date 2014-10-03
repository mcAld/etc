<?php 
	class Synch{

		function init_db_con($dbhost, $dbuser, $dbpasswd){

		}

		function get_connString($db){
			$connString = array();

			if($db == "u192884961_ptt"){
				$connString['dbname'] = $db;
				$connString['dbuser'] = "root";
				$connString['passwd'] = "";
				$connString['dbhost'] = "localhost";
			}

			return $connString;
		}

		function db_conn($sql_connString){
			$result = array();
			$con = mysqli_connect($sql_connString['dbhost'],$sql_connString['dbuser'],$sql_connString['passwd'],$sql_connString['dbname']);

			if (mysqli_connect_errno()) {
				$result['err_str'] = "Failed to connect to MySQL: " . mysqli_connect_error();
				$result['con'] = false;
				
			}else{
				$result['con'] = $con;
				$result['err_str'] = false;
			}

			return $result;
		}

		function get_tables($db){
			$sql_connString = $this->get_connString($db);
			$con_dbsvr = $this->db_conn($sql_connString);

			if ($con_dbsvr['err_str']) {
				print $con_dbsvr['err_str'];
				exit();
			}
		}
	}
?>