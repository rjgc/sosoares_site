<?php
class instaladores_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	public function get_instaladores(){
		$query = $this->db->query("select * from instaladores");

		$data = $query->result_array();
		return $data;
	}
	
}