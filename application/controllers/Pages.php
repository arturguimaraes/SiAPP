<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct() {
		parent::__construct();	
	}
	
	public function index($page = 'home') {
		if ($page == 'home')
			$data = $this->home($page);
		if ($page == 'confirm')
			$data = $this->confirm($page);
		if ($page == 'inform')
			$data = $this->inform($page);	
		if ($page == 'success')
			$data = $this->success($page);
	}
	
	public function loadPage($page = 'home', $data) {
		//Template and Page load
		$root = 'pages/' . $page;
		$this->load->view('templates/header', $data);
		$this->load->view($root, $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function home($page) {
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
		
		$this->loadPage($page, $data);
	}
	
	public function confirm($page) {
		$this->load->helper('url');
		
		$data['pageTitle'] = ' - Reportar um Crime';
		$data['baseURL'] = base_url();
		
		if (isset($_POST['submit'])) {
			$attrs = "lat=" . $_POST['latitude'] . "&lng=" . $_POST['longitude'] . "&desc=" . urlencode($_POST['description']);
			redirect('/inform?' . $attrs, 'refresh');
		}
		
		$this->loadPage($page, $data);
	}
	
	public function inform($page) {
		if (count($_GET) == 0) {
			$this->load->helper('url');
			redirect('', 'refresh');
		}
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error red-text italic margin-bottom-20">', '</div>');
		
		$data = $_GET;
		$data['pageTitle'] = ' - Informar Dados';
		$data['baseURL'] = base_url();
		$data['messages'] = array();
		
		//Form Validation
		$config = array(
				array(
						'field' => 'occurrence_type',
						'label' => 'Tipo de Ocorrência',
						'rules' => 'required',
						'errors' => array('required' => '*%s é necessário.')
				),
				array(
						'field' => 'date',
						'label' => 'Data / Hora',
						'rules' => 'required',
						'errors' => array('required' => '*%s é necessário.')
				)
		);
		
		$objNumber = !empty($_POST['obj_number']) ? intval($_POST['obj_number']) : 1;
		
		for($i = 1; $i <= $objNumber; $i++) {
			$rule = array(
							'field' => 'object' . $i,
							'label' => 'Descrição do Objeto ' . $i,
							'rules' => 'required',
							'errors' => array('required' => '*%s é necessário.')
					);
			array_push($config, $rule);
		}
		
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE)
			$this->loadPage('inform', $data);
		else
			$this->loadPage('success', $data);
	}
	
	public function success($page) {		
		$this->load->helper('url');
		
		$data['pageTitle'] = ' - Obrigado!';
		$data['baseURL'] = base_url();
		
		$this->loadPage($page, $data);
	}
}