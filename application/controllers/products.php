<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['view'] = 'products';
		$data['title'] = 'Cat&aacute;logo de productos';

		$this->load->view('main', $data);
	}
}