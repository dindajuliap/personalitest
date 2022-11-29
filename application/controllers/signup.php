<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class signup extends CI_Controller{
  	public function __construct(){
  		parent::__construct();
  		date_default_timezone_set('Asia/Jakarta');
      check_login();
  	}

  	public function index(){
  		$data['title'] = 'Sign Up';

      $this->form_validation->set_rules('user_fullname', 'Full name', 'required|trim|min_length[3]|max_length[200]');
      $this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email|is_unique[user_table.user_email]|max_length[200]');
      $this->form_validation->set_rules('user_username', 'Username', 'required|trim|is_unique[user_table.user_username]|max_length[200]|min_length[8]|alpha_numeric');
      $this->form_validation->set_rules('user_phone', 'Phone number', 'required|trim|numeric|min_length[11]|max_length[13]|is_unique[user_table.user_phone]|greater_than[0]', ['numeric' => 'Phone number is invalid.', 'greater_than' => 'Phone number is invalid.', 'min_length' => 'Phone number is invalid.', 'max_length' => 'Phone number is invalid.']);
      $this->form_validation->set_rules('user_password', 'Password', 'required|trim|min_length[8]|matches[password_confirmation]');
      $this->form_validation->set_rules('password_confirmation', 'Password confirmation', 'required|trim|matches[user_password]');

      if($this->form_validation->run() == FALSE){
    		$this->load->view('template/v_head', $data);
        $this->load->view('template/v_navbar');
        $this->load->view('v_signup');
        $this->load->view('template/v_foot');
      }
      else{
        $user_email    = strtolower($this->input->post('user_email'));
        $user_username = strtolower($this->input->post('user_username'));
        $user_fullname = ucwords(strtolower($this->input->post('user_fullname')));
        $user_phone    = $this->input->post('user_phone');
        $user_password = password_hash($this->input->post('user_password'), PASSWORD_DEFAULT);

        $this->db->limit(1);
        $this->db->order_by('user_id', 'DESC');
        $user = $this->db->get('user_table')->row_array();

        $this->db->limit(1);
        $this->db->order_by('token_id', 'DESC');
        $token = $this->db->get('token_table')->row_array();

        if($user){
          $user_id = $user['user_id'] + 1;
        }
        else{
          $user_id = 1;
        }

        if($token){
          $token_id = $token['token_id'] + 1;
        }
        else{
          $token_id = 1;
        }

        $user_data = [
          'user_id'       => $user_id,
          'user_fullname' => $user_fullname,
          'user_email'    => $user_email,
          'user_username' => $user_username,
          'user_phone'    => $user_phone,
          'user_password' => $user_password,
          'user_level'    => 'User',
          'user_photo'    => 'default.jpg',
          'user_status'   => 'Not verified yet'
        ];

        function randomString($length = 15){
          $str        = "";
          $characters = array_merge(range('0','9'), range('A', 'Z'), range('a', 'z'));
          $max        = count($characters) - 1;

          for($i = 0; $i < $length; $i++){
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
          }
          return $str;
        }

        $token = randomString();

        $token_data = [
          'token_id'   => $token_id,
          'user_email' => $user_email,
          'token'      => $token,
          'token_date' => date("Y-m-d H:i:s")
        ];

        $this->sendEmail($token, $user_email, $user_fullname);
        $this->db->insert('token_table', $token_data);
        $this->db->insert('user_table', $user_data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show" role="alert">Success! Check your email and verify.</div>');
        redirect('sign-in');
      }
    }

    private function sendEmail($token, $email, $fullname){
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
      $this->email->to($email);

      $this->email->subject('Account Verification');
      $this->email->message('
        Hey, '.$fullname.'!<br>
        Welcome to PersonaliTest.<br><br>
        You have entered this email as your account email address. If it is true, then verify
        your email by pressing the button below.<br><br>
        Warm Regards,<br>
        PersonaliTest<br><br><br>
        <a href="'.base_url('verify?email='.$email.'&token='.$token).'">
        <button style="background: #88619A; color: white; padding: 7px 20px; border-radius: 5px; border-color: #88619A">Verify Account</button>
        </a>
      ');

      $this->email->send();

      if($this->email->send()){
        return true;
      }
      else{
        return false;
      }
    }
  }
