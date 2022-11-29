<?php
	function check_not_login(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('user_id');

		if(!$user_session){
			$ci->session->set_flashdata('error','Please sign in first.');
			redirect(base_url());
		}
	}

	function check_login(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('user_id');

		if($user_session){
			redirect('home');
		}
	}

	function check_not_admin(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('user_level');

		if($user_session != 'Admin'){
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function check_admin(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('user_level');

		if($user_session == 'Admin'){
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function check_not_user(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('user_level');

		if($user_session != 'User'){
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	function check_user(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('user_level');

		if($user_session == 'User'){
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
