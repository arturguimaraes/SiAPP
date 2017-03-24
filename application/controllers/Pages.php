<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct() {
		parent::__construct();	
	}
	
	public function index($page = 'home') {
		if ($page == 'home')
			$data = $this->home();
		else if ($page == 'confirm')
			$data = $this->confirm();
		else if ($page == 'inform')
			$data = $this->inform();
			
		//Template and Page load
		$root = 'pages/' . $page;
		$this->load->view('templates/header', $data);
		$this->load->view($root, $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function home() {
		$data['pageTitle'] = ' - Um Sistema para Análise de Ocorrências de Crimes em Niterói';
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
		return $data;
	}
	
	public function confirm() {
		$data['pageTitle'] = ' - Reportar um Crime';
		$this->load->helper('url');
		$data['baseURL'] = base_url();
		return $data;
	}
	
	public function inform() {
		$data['pageTitle'] = ' - Informar Dados';
		$this->load->helper('url');
		$data['baseURL'] = base_url();
		return $data;
	}
}