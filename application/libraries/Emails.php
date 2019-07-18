<?php

class Emails {
	var $config;

	public function __construct(){
		$CI = & get_instance();
		$CI->load->library("email");
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.ipage.com';
		$config['smtp_port'] = 25;
		$config['charset'] = 'utf-8';
		$config['mailtype'] = 'html';
		$config['smtp_user'] = 'fmattaperdomo@gmail.com';
		$config['smtp_pass'] = 'PepeLePew7';
		$CI->email->initialize($config);
	}

	public function recover_account($link,$email){
		$CI = & get_instance();
		$subject = 'Recuperación de cuenta';
		$data['link'] = $link;
		$html = $CI->load->view('email/recover_account',$data,TRUE);
		$this->send_email($email,$subject,$html);
	}

	private function send_email($email,$subject,$html){
		$CI = & get_instance();
		$CI->email->from('fmattaperdomo@gmail.com','Francisco');
		$CI->email->to($email);
		$CI->email->subject($subject);
		$CI->email->message($html);
		$CI->email->send();
		// echo $CI->email->print_debugger();
	}
}
