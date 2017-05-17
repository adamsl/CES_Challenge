<?php
class Office_model extends CI_Model {
	
	/*
	 * constructor
	 */
	public function __construct() {
		$this->load->database ();
	}
	
	/*
	 * get all members from the database
	 */
	public function get_members() {
		$query = $this->db->get ( 'members' );
		return $query->result_array ();
	}
	
	/*
	 * insert new member into db
	 */
	public function insert_member() {
		
		$data = array (
				'name'	=> $this->input->post( 'name'	),
				'email'	=> $this->input->post( 'email'	),
				'dob' 	=> $this->input->post( 'dob' 	),
				'color'	=> $this->input->post( 'color'	)
		);
		
		return $this->db->insert( 'members', $data );
	}
}



