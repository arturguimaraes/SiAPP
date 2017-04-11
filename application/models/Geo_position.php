<?php
class Geo_position extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create($latitude, $longitude, $description) {
		$data = array(
			'latitude' 	=> doubleval($latitude),
			'longitude'	=> doubleval($longitude),
			'suburb'	=> $description
		);
			
		$result = $this->db->insert('geo_position', $data);				
		
		return $this->db->insert_id();
	}
	
}