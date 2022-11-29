<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class home extends CI_Controller{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
			check_not_login();
		}

		public function index(){
			$data['title'] = 'Home';

			if($this->session->userdata('signin_status') == TRUE){
				$data['user'] = $this->db->get_where('user_table', ['user_id' => $this->session->userdata('user_id')])->row_array();
			}

			$this->load->view('template/v_head', $data);
			$this->load->view('template/v_navbar', $data);
			$this->load->view('v_home');
			// $this->load->view('template/v_footer');
			$this->load->view('template/v_foot');
		}
	}
