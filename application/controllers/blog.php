<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['view'] = 'blog';
		$data['title'] = 'Mi blog';

		$this->load->view('main', $data);
	}
}