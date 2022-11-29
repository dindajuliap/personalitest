<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class forgot_password extends CI_Controller{
  	public function __construct(){
  		parent::__construct();
  		date_default_timezone_set('Asia/Jakarta');
      check_login();
  	}

    public function index(){
      $user_email = $this->input->post('user_email');
      $user       = $this->db->get_where('user_table', ['user_email' => $user_email])->row_array();

      if($user){
        if($user['user_status'] == 'Active'){
          function randomString($length = 8){
            $str        = "";
            $characters = array_merge(range('0','9'), range('A', 'Z'), range('a', 'z'));
            $max        = count($characters) - 1;

            for($i = 0; $i < $length; $i++){
              $rand = mt_rand(0, $max);
              $str .= $characters[$rand];
            }
            return $str;
          }

          $password      = randomString();
          $user_password = password_hash($password, PASSWORD_DEFAULT);

          $config = [
            'mailtype'	 => 'html',
            'charset'	   => 'utf-8',
            'protocol'	 => 'smtp',
            'smtp_host'	 => 'smtp.googlemail.com',
            'smtp_user'	 => 'cactydeen@gmail.com',
            'smtp_pass'	 => 'ahlmjugioeopcdii',
            'smtp_crypto'=> 'tls',
            'smtp_port'	 => 587,
            'crlf'		   => "\r\n",
            'newline'	   => "\r\n"
          ];

          $this->load->library('email', $config);
          $this->email->initialize($config);

          $this->email->from('cactydeen@gmail.com', 'PersonaliTest');
          $this->email->to($user_email);

          $this->email->subject('New Password');
          $this->email->message('
            Hey, '.$user['user_fullname'].'!<br><br>
            In response to your report, here is the new password for your account : <b>'.$password.'</b>.<br>
            If you want to sign in, please use the new password we have sent to you. Thank you.<br><br>
            Warm Regards,<br>
            PersonaliTest
          ');

          $this->email->send();

          $this->db->set('user_password', $user_password);
          $this->db->where('user_email', $user_email);
          $this->db->update('user_table');

          $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show text-sm" role="alert">Check your email for the new password.</div>');
          redirect('sign-in');
        }
        elseif($user['user_status'] == "Non-active"){
          $this->session->set_flashdata('error', 'Account was deleted.');
          redirect('sign-in');
        }
        else{
          $this->session->set_flashdata('error', 'Check your email and verify account.');
          redirect('sign-in');
        }
      }
      else{
        $this->session->set_flashdata('error', 'Email is not registered.');
        redirect('sign-in');
      }
    }
  }
