<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class setting extends CI_Controller{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
			check_not_login();
		}

		public function password(){
			$data['title'] = 'Change Password';
			$data['user']  = $this->db->get_where('user_table', ['user_id' => $this->session->userdata('user_id')])->row_array();

			$this->form_validation->set_rules('password1', 'Old password', 'required|trim');
			$this->form_validation->set_rules('password2', 'New password', 'required|trim');
      $this->form_validation->set_rules('password3', 'New password', 'required|trim|matches[password2]|min_length[8]', ['required' => 'Please confirm your new password.', 'matches' => 'New password does not match.']);

			if($this->form_validation->run() == FALSE){
				$this->load->view('template/v_head', $data);
				$this->load->view('template/v_navbar', $data);
				$this->load->view('v_change_password');
				$this->load->view('template/v_foot');
			}
			else{
				$password1 = $this->input->post('password1');
				$password2 = $this->input->post('password2');
				$password3 = $this->input->post('password3');

				if(password_verify($password1, $data['user']['user_password'])){
          if(password_verify($password2, $data['user']['user_password'])){
            $this->session->set_flashdata('error','New password same as before.');
  					redirect('change-password');
          }
          else{
            $this->db->where('user_id', $data['user']['user_id']);
            $this->db->set('user_password', password_hash($password2, PASSWORD_DEFAULT));
            $this->db->update('user_table');

            $this->session->set_flashdata('success','Password is successfully changed.');
            redirect('profile/'.$data['user']['user_username']);
          }
				}
				else{
					$this->session->set_flashdata('error','Wrong old password.');
					redirect('change-password');
				}
			}
		}

		public function bio(){
			$user_bio = $this->input->post('user_bio');
      $user     = $this->db->get_where('user_table', ['user_id' => $this->session->userdata('user_id')])->row_array();

      $this->db->set('user_bio', $user_bio);
      $this->db->where('user_id', $user['user_id']);
      $this->db->update('user_table');

      $this->session->set_flashdata('success', 'Your new bio has been successfully created.');
      redirect('profile/'.$user['user_username']);
		}

		public function profile_picture(){
      $profile_picture = $this->input->post('profile_picture');
      $user            = $this->db->get_where('user_table', ['user_id' => $this->session->userdata('user_id')])->row_array();

      $this->db->set('user_photo', $profile_picture);
      $this->db->where('user_id', $user['user_id']);
      $this->db->update('user_table');

      $this->session->set_flashdata('success', 'Your new profile picture has been successfully applied.');
      redirect('profile/'.$user['user_username']);
		}
	}
