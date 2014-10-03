<?php 
	class About extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper(array('url'));
		}
		function index(){
			$this->load->view('about_view');
		}
	}
?>