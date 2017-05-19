<?php
class Members extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model( 'Office_model' );
		$this->load->helper( 'url_helper' );
	}
	public function index() {
		$data ['members']	= $this->Office_model->get_members();
		$data ['title'] 	= 'Office Birthdays';
		$data ['heading'] 	= 'Office Birthdays';
		
		$this->load->view( 'templates/header', $data );
		$this->load->view( 'members/index', $data );
		$this->load->view( 'templates/footer' );
	}
	
	public function create() {
		$this->load->helper( 'form' );
		$this->load->library( 'form_validation' );
		
		$data ['title'] = 'Create a new member';
		
		$this->form_validation->set_rules( 'name',	'Name', 			'required' );
		$this->form_validation->set_rules( 'email',	'Email', 			'required' );
		$this->form_validation->set_rules( 'dob',	'Date of Birth',	'required' );
		$this->form_validation->set_rules( 'color',	'Favorite Color',	'required' );
		
		if ($this->form_validation->run() === FALSE) {
			$this->load->view( 'templates/header', $data );
			$this->load->view( 'members/create' );
			$this->load->view( 'templates/footer' );
		} else {
			$this->Office_model->insert_member();
			$this->load->view( 'templates/header', $data );
			$this->load->view( 'members/success' );
			$this->load->view( 'templates/footer' );
		}
	}
}

