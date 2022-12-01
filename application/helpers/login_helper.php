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
