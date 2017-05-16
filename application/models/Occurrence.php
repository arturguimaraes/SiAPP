<?php
class Occurrence extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create($occurrence_type, $date, $sex, $value, $idGeo_position) {
		$time = substr($date, 11);
		$date = substr($date, 0, 10);
		
		$data = array(
			'occurrence_type'	=> $occurrence_type,
			'date' 				=> $date,
			'sex'				=> $sex,
			'value'				=> $value,
			'time' 				=> $time,
			'geo_position' 		=> $idGeo_position
		);
			
		$result = $this->db->insert('occurrence', $data);				
		
		return $this->db->insert_id();
	}
	
}