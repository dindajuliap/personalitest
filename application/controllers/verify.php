<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class verify extends CI_Controller{
  	public function __construct(){
  		parent::__construct();
  		date_default_timezone_set('Asia/Jakarta');
  	}

  	public function index(){
      $user_email = $this->input->get('email');
      $token      = $this->input->get('token');
      $user       = $this->db->get_where('user_table', ['user_email' => $user_email])->row_array();

      if($user){
        $user_token = $this->db->get_where('token_table', ['user_email' => $user_email, 'token' => $token])->row_array();

        if($user_token){
          if(date('Y-m-d H:i:s') >= date('Y-m-d H:i:s', strtotime('+1 day', strtotime($user_token['token_date'])))){
            $this->db->delete('user_table', ['user_email' => $user_email]);
            $this->db->delete('token_table', ['user_email' => $user_email]);

            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Expired token! Please re-sign up.</div>');
            redirect('sign-in');
          }
          else{
            $this->db->set('user_status', 'Active');
            $this->db->where('user_email', $user_email);
            $this->db->update('user_table');
            $this->db->delete('token_table', ['user_email' => $user_email]);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">Account was verified!</div>');
            redirect('sign-in');
          }
        }
        else{
          $this->db->delete('user_table', ['user_email' => $user_email]);
          $this->db->delete('token_table', ['user_email' => $user_email]);

          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Wrong token! Please re-sign up.</div>');
          redirect('sign-in');
        }
      }
      else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Email is not registered.</div>');
        redirect('sign-in');
      }
    }
  }
