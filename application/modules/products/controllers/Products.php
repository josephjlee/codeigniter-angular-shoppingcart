<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('app/products_model');
	}

	public function index() {
		// Retrieve an array with all products
		$data['products'] = $this->products_model->get();
		print_r($data['products']); 
	}

}
