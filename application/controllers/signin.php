<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class signin extends CI_Controller{
  	public function __construct(){
  		parent::__construct();
  		date_default_timezone_set('Asia/Jakarta');
      check_login();
  	}

  	public function index(){
  		$data['title'] = 'Sign In';

      $this->form_validation->set_rules('email_username', 'Email or username', 'required|trim');
      $this->form_validation->set_rules('user_password', 'Password', 'required|trim');

      if($this->form_validation->run() == FALSE){
    		$this->load->view('template/v_head', $data);
        $this->load->view('template/v_navbar');
        $this->load->view('v_signin');
        $this->load->view('template/v_foot');
      }
      else{
        $email_username = strtolower($this->input->post('email_username'));

        $this->db->where('user_email', $email_username);
        $this->db->or_where('user_username', $email_username);
        $user = $this->db->get('user_table')->row_array();

        if(!$user){
          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Email or username is not registered.</div>');
          redirect('signin');
        }
        else{
          if($user['user_status'] == "Active"){
            if(password_verify($this->input->post('user_password'), $user['user_password'])){
              $data = [
                'user_id'       => $user['user_id'],
                'signin_status' => TRUE
              ];
              $this->session->set_userdata($data);
              $this->session->set_flashdata('success','Welcome, '.$user['user_fullname'].'!');

              redirect('home');
            }
            else{
              $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Wrong password.</div>');
              redirect('signin');
            }
          }
          else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Check your email and verify account.</div>');
            redirect('signin');
          }
        }
      }
  	}
  }
