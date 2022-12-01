<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class personality_test extends CI_Controller{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
			check_not_login();
		}

		public function index(){
      $data['title']         = 'Personality Test';
      $data['user']          = $this->db->get_where('user_table', ['user_id' => $this->session->userdata('user_id')])->row_array();
      $data['question_type'] = $this->db->get_where('question_type_table', ['question_type_status' => 'Available'])->result();

			$this->load->view('template/v_head', $data);
			$this->load->view('template/v_navbar', $data);
			$this->load->view('v_personality_test', $data);
			$this->load->view('template/v_footer');
			$this->load->view('template/v_foot');
		}

		public function test($question_type_id){
			$data['question_type'] = $this->db->get_where('question_type_table', ['question_type_id' => $question_type_id, 'question_type_status' => 'Available'])->row_array();
			$data['title']         = 'Personality Test - '.$data['question_type']['question_type'];
      $data['user']          = $this->db->get_where('user_table', ['user_id' => $this->session->userdata('user_id')])->row_array();
			$data['question'] 		 = $this->db->get_where('question_table', ['question_type_id' => $question_type_id, 'question_status' => 'Available'])->result();

			if($data['question_type']){
				$this->load->view('template/v_head', $data);
				$this->load->view('template/v_navbar', $data);
				$this->load->view('v_test', $data);
				$this->load->view('template/v_footer');
				$this->load->view('template/v_foot');
			}
			else{
				$this->session->set_flashdata('error','The page is invalid.');
        redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function process(){
			$question_type_id = $this->input->post('question_type_id');

			$check = $this->db->get_where('test_result_table', ['question_type_id' => $question_type_id, 'user_id' => $this->session->userdata('user_id'), 'test_result_status' => 'Available'])->row_array();

			if($check){
				$this->db->set('test_result_status', 'Not available');
				$this->db->where('test_result_id', $check['test_result_id']);
				$this->db->update('test_result_table');
			}

			$question = $this->db->get_where('question_table', ['question_type_id' => $question_type_id])->num_rows();

			$this->db->limit(1);
			$this->db->order_by('test_result_id', 'DESC');
			$test_result = $this->db->get('test_result_table')->row_array();

			if($test_result){
				$test_result_id = $test_result['test_result_id'] + 1;
			}
			else{
				$test_result_id = 1;
			}

			$data = [
				'test_result_id'   		 => $test_result_id,
				'user_id' 				 		 => $this->session->userdata('user_id'),
				'question_type_id' 		 => $question_type_id,
				'result_most_selected' => 'A',
				'test_result_date' 		 => date('Y-m-d H:i:s')
			];
			$this->db->insert('test_result_table', $data);

			$i = 0;
			while($i < $question){
				$i++;
				$question_id = $this->input->post('question_id'.$i);
				$answer_id 	 = $this->input->post('answer_id'.$i);

				if(!$answer_id){
					$this->db->where('test_result_id', $test_result_id);
					$this->db->delete('test_table');

					$this->db->where('test_result_id', $test_result_id);
					$this->db->delete('test_result_table');

					$this->session->set_flashdata('error', 'You have to answer all of the question.');
          redirect('personality-test/'.$question_type_id);
				}
				else{
					$this->db->limit(1);
	        $this->db->order_by('test_id', 'DESC');
	        $test = $this->db->get('test_table')->row_array();

	        if($test){
	          $test_id = $test['test_id'] + 1;
	        }
	        else{
	          $test_id = 1;
	        }

					$data = [
						'test_id'				 => $test_id,
						'test_result_id' => $test_result_id,
						'question_id'	 	 => $question_id,
						'answer_id'		   => $answer_id
					];
					$this->db->insert('test_table', $data);
				}
			}

			$type = $this->db->get_where('question_type_table', ['question_type_id' => $question_type_id])->row_array();

			$this->db->join('answer_table', 'answer_table.answer_id = test_table.answer_id');
			$A = $this->db->get_where('test_table', ['answer_choice' => 'A', 'test_result_id' => $test_result_id])->num_rows();

			$this->db->join('answer_table', 'answer_table.answer_id = test_table.answer_id');
			$B = $this->db->get_where('test_table', ['answer_choice' => 'B', 'test_result_id' => $test_result_id])->num_rows();

			$this->db->join('answer_table', 'answer_table.answer_id = test_table.answer_id');
			$C = $this->db->get_where('test_table', ['answer_choice' => 'C', 'test_result_id' => $test_result_id])->num_rows();

			$this->db->join('answer_table', 'answer_table.answer_id = test_table.answer_id');
			$D = $this->db->get_where('test_table', ['answer_choice' => 'D', 'test_result_id' => $test_result_id])->num_rows();

			if($type['question_type'] == 'Extroverted, Introverted, and Ambiverted'){
				if($A > $B){
					$max = 'A';
				}
				elseif($B > $A){
					$max = 'B';
				}
				else{
					$max = 'C';
				}
			}
			else{
				if(($A > $B) AND ($A > $C) AND ($A > $D)){
					$max = 'A';
				}
				elseif(($B > $A) AND ($B > $C) AND ($B > $D)){
					$max = 'B';
				}
				elseif(($C > $A) AND ($C > $B) AND ($C > $D)){
					$max = 'C';
				}
				elseif(($D > $A) AND ($D > $B) AND ($D > $C)){
					$max = 'D';
				}
				elseif(($A == $B) OR ($A == $C) OR ($A == $D)){
					$max = 'A';
				}
				elseif(($B == $C) OR ($B == $D)){
					$max = 'B';
				}
				elseif($C == $D){
					$max = 'C';
				}
			}

			$this->db->set('result_most_selected', $max);
			$this->db->where('test_result_id', $test_result_id);
			$this->db->update('test_result_table');

			$this->session->set_flashdata('success', 'See the result from the test you have taken.');
			redirect('personality-test/result/'.$test_result_id);
		}
	}
