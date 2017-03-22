<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct() {
		parent::__construct();	
	}
	
	public function index($page = 'home') {
		if ($page == 'home') {
			//SEND E-MAIL FORM
			if (isset($_POST['submit'])) {
				$siappEmail = 'arturguimaraes92@hotmail.com';		
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$subject = "Contact from " . $name . "(" . $email . ")";
				$body = $name . "(" . $email . ") sent: <br><br>" . $message;
				
				$this->load->library('email');	
				$this->email->from($email, $name);
				$this->email->to($siappEmail);
				$this->email->subject($subject);
				$this->email->message($message);
				$this->email->send();
			}
		}
		else if ($page == 'inform') {
			$this->load->helper('url');
			$baseURL = base_url();
		}
		
		$root = 'pages/' . $page;
		$this->load->view('templates/header');
		$this->load->view($root);
		$this->load->view('templates/footer');
	}
	
}