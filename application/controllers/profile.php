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

			$this->db->join('question_type_table', 'question_type_table.question_type_id = test_result_table.question_type_id');
			$this->db->join('result_table', 'result_table.most_selected = test_result_table.result_most_selected AND result_table.question_type_id = test_result_table.question_type_id');
			$this->db->join('result_description_table', 'result_description_table.result_description_id = result_table.result_description_id');
			$this->db->order_by('test_result_id', 'ASC');
			$data['result'] = $this->db->get_where('test_result_table', ['user_id' => $data['user']['user_id'], 'test_result_status' => 'Available'])->result();

			$this->db->where_not_in('profile_picture', $data['user']['user_photo']);
			$this->db->order_by('profile_picture_id', 'ASC');
			$data['profile_picture'] = $this->db->get('profile_picture_table')->result();

			$this->load->view('template/v_head', $data);
			$this->load->view('template/v_navbar', $data);
			$this->load->view('v_profile');
			$this->load->view('template/v_footer');
			$this->load->view('template/v_foot');
		}
	}
