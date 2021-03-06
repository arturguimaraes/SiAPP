<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function __construct() {
		parent::__construct();	
	}
	
	public function index($page = 'home') {
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation'));
		$this->load->model(array('geo_position','occurrence','objects'));
		
		if(substr($_SERVER['PHP_SELF'], 1, -4) != 'index')
      		$page = substr($_SERVER['PHP_SELF'], 1, -4);
    
		if ($page == 'home')
			$data = $this->home($page);
		if ($page == 'confirm')
			$data = $this->confirm($page);
		if ($page == 'inform')
			$data = $this->inform($page);	
		if ($page == 'success')
			$data = $this->success($page);
		if ($page == 'mapping')
			$data = $this->mapping($page);
		if ($page == 'rules')
			$data = $this->rules($page);
		if ($page == 'map')
			$data = $this->map($page);
	}
	
	public function loadPage($page = 'home', $data, $templates = true) {
		//Template and Page load
		$root = 'pages/' . $page;
		if($templates)
			$this->load->view('templates/header', $data);
		$this->load->view($root, $data);
		if($templates)
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
		$data['pageTitle'] = ' - Reportar um Crime';
		$data['baseURL'] = base_url();
		
		if (isset($_POST['submit'])) {
			$attrs = "lat=" . $_POST['latitude'] . "&lng=" . $_POST['longitude'] . "&desc=" . urlencode($_POST['description']);
			redirect('/inform.php?' . $attrs, 'refresh');
		}
		
		$this->loadPage($page, $data);
	}
	
	public function inform($page) {
		if (count($_GET) == 0)
			redirect('', 'refresh');
		
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
							'label' => 'Objeto ' . $i,
							'rules' => 'required',
							'errors' => array('required' => '*%s é necessário.')
					);
			array_push($config, $rule);
		}
		
		$this->form_validation->set_rules($config);

		//var_dump($_POST);

		if ($this->form_validation->run() == FALSE)
			$this->loadPage('inform', $data);
		else {
			$insertedGeoPosition = $this->geo_position->create($_POST['latitude'], $_POST['longitude'], $_POST['description']);
			$insertedOccurrence = $this->occurrence->create($_POST['occurrence_type'], $_POST['date'], $_POST['sex'], $_POST['value'], $insertedGeoPosition);
			
			$insertedObjects = array();
			for($i = 1; $i <= $objNumber; $i++) {
				$insertedObject = $this->objects->create($_POST['object' . $i], $insertedOccurrence);
				array_push($insertedObjects, $insertedObject);
			}
			
			//$nearbyPlaces = $this->getNearbyPlaces($_POST['latitude'], $_POST['longitude']);

			//var_dump($_POST);
			//var_dump($nearbyPlaces);
			
			$this->loadPage('success', $data);
		}
	}
	
	public function success($page) {		
		$data['pageTitle'] = ' - Obrigado!';
		$data['baseURL'] = base_url();
		
		$this->loadPage($page, $data);
	}
	
	public function mapping($page) {
		$data['pageTitle'] = ' - Visualização das Ocorrências';
		$data['baseURL'] = base_url();
		
		$occurrence_types = array('Furto',
								  'Roubo',
								  'Sequestro',
								  'Arrombamento'); 
		
		$allOccurrences = $this->occurrence->getAll();
		
		$data['mapObjects'] = array();
		
		foreach($allOccurrences as $occurrence) {
			$geoLocation = $this->geo_position->getById($occurrence->geo_position);
			$mapObject = array('occurrence_type'	=> $occurrence_types[intval($occurrence->occurrence_type) - 1],
							   'latitude'			=> $geoLocation->latitude,
							   'longitude'			=> $geoLocation->longitude);
			array_push($data['mapObjects'], $mapObject);
		}
		
		$this->loadPage($page, $data);
	}
	
	public function rules($page) {		
		$data['pageTitle'] = ' - Visualização das Regras';
		$data['baseURL'] = base_url();
		$this->loadPage($page, $data);
	}
	
	public function map($page) {
		$data = array();
		$this->loadPage($page, $data, false);
	}
	
	public function getNearbyPlaces($latitude, $longitude) {
		 /*$data = array(
			'key'      	=> 'AIzaSyCbjgN0GWbj4OMywlxXGCUwyBx1RSpUk5w',
			'location'	=> $latitude . ',' . $longitude,
			'radius'    => '500',
			'rankby'	=> 'prominence'
		);
		
		//https://maps.googleapis.com/maps/api/place/nearbysearch/json?key=AIzaSyCbjgN0GWbj4OMywlxXGCUwyBx1RSpUk5w&location=-22.934498,-43.1897039&radius=500&rankby=prominence
		//https://maps.googleapis.com/maps/api/place/nearbysearch/xml?key=AIzaSyCbjgN0GWbj4OMywlxXGCUwyBx1RSpUk5w&location=-22.934498,-43.1897039&radius=500&rankby=prominence
			
		$url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json";
		 
		$headers = array (
			"key: 		{AIzaSyCbjgN0GWbj4OMywlxXGCUwyBx1RSpUk5w}",
			"location: 	{-22.934498,-43.1897039}",
			"radius: 	{500}",
			"rankby: 	{prominence}"		
		);	
		 
		$ch = curl_init(); 
		
		// set url
        curl_setopt($ch, CURLOPT_URL, $url);
 
        // set browser specific headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 
        // we don't want the page contents
        curl_setopt($ch, CURLOPT_NOBODY, 1);
 
        // we need the HTTP Header returned
        curl_setopt($ch, CURLOPT_HEADER, 1);
 
        // return the results instead of outputting it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
        $output = curl_exec($ch);
 
        curl_close($ch);
		
		return $output;*/
	}
	
}