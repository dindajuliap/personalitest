<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class setting extends CI_Controller{
		public function __construct(){
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
			check_not_login();
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
