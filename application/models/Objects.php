<?php
class Objects extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create($name_object, $idOccurrence) {		
		$data = array(
			'name_object'	=> $name_object
		);
			
		$result = $this->db->insert('objects', $data);				
		$insertedId = $this->db->insert_id(); 
		
		$insertedOccurrenceObjectsId = $this->create_occurrence_objects($insertedId, $idOccurrence);
		
		return $insertedId;
	}
	
	public function create_occurrence_objects($idObjects, $idOccurrence) {
		$data = array(
			'idObjects'		=> $idObjects,
			'idOccurrence'	=> $idOccurrence
		);
			
		$result = $this->db->insert('occurrence_objects', $data);				
		
		return $this->db->insert_id();
	}
	
}