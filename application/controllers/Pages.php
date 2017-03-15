<?php
class Pages extends CI_Controller {
	public function view ($page = 'home') {
		$root = 'pages/' . $page;
		$this->load->view($root);
	}	
}