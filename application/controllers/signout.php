<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class signout extends CI_Controller{
  	public function index(){
      $this->session->unset_userdata('user_id');
      $this->session->unset_userdata('user_fullname');
      $this->session->unset_userdata('user_email');
      $this->session->unset_userdata('user_username');
      $this->session->unset_userdata('user_password');
      $this->session->unset_userdata('user_phone');
      $this->session->unset_userdata('user_photo');
      $this->session->unset_userdata('user_level');
      $this->session->unset_userdata('user_status');
      $this->session->unset_userdata('signin_status');

      $this->session->set_flashdata('success', 'You were signed out!');
      redirect(base_url());
		}
  }
