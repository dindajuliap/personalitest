<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class profile extends CI_Controller{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
			check_not_login();
		}

		public function index($username){
      $data['user']  = $this->db->get_where('user_table', ['user_username' => $username])->row_array();
			$data['title'] = $data['user']['user_fullname'];

			$this->load->view('template/v_head', $data);
			$this->load->view('template/v_navbar', $data);
			$this->load->view('v_profile');
			$this->load->view('template/v_foot');
		}
	}
