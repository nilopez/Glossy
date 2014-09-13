<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		$data['view'] = 'contact';
		$data['title'] = 'Contacto';

		$this->load->view('main', $data);
	}
}