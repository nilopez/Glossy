<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['view'] = 'home';
		$data['title'] = 'P&aacute;gina de inicio';

		$query = $this->db->query('SELECT * FROM product');

		$result = $query->result_array();

		// var_dump($result);

		var_dump($result[0]['name']);
		var_dump($result[0]['description']);

		$this->load->view('main', $data);
	}
}