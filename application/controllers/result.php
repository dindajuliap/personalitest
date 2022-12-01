<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class result extends CI_Controller{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
			check_not_login();
		}

		public function index($test_result_id){
			$data['title']       = 'Personality Test - Result';
      $data['test_result'] = $this->db->get_where('test_result_table', ['test_result_id' => $test_result_id, 'test_result_status' => 'Available'])->row_array();
      $data['user']        = $this->db->get_where('user_table', ['user_id' => $this->session->userdata('user_id')])->row_array();

      $this->db->join('result_description_table', 'result_description_table.result_description_id = result_table.result_description_id');
      $this->db->where('question_type_id', $data['test_result']['question_type_id']);
      $this->db->where('most_selected', $data['test_result']['result_most_selected']);
      $data['result'] = $this->db->get('result_table')->row_array();

			if($data['test_result']){
				$this->load->view('template/v_head', $data);
				$this->load->view('template/v_navbar', $data);
				$this->load->view('v_test_result', $data);
				$this->load->view('template/v_footer');
				$this->load->view('template/v_foot');
			}
			else{
				$this->session->set_flashdata('error','The page is invalid.');
        redirect($_SERVER['HTTP_REFERER']);
			}
		}
  }
