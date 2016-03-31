<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index($offset = NULL)
	{
		$getProducts = $this->products_model->get($offset);
		$getCountAll = $this->products_model->count();
		$data = array(
			'counts_all' => $getCountAll,
			'products' => $getProducts
		);
		$this->_response($data);
	}

	public function get($id = NULL) {
		if(empty($id)) {
			$this->_response();
		} else {
			$getProducts = $this->products_model->getById($id);
			$this->_response($getProducts);
		}
	}

	public function _response($message = NULL) {
		if(!is_null($message) && is_array($message)) {
			$status = array(
				'status' => 'success',
			);
			$json = array_merge($status, $message);
		} else {
			$json = array(
				'status' => 'error'
			);
		}
 			$this->output->set_content_type('application/json')
			->set_output(
				json_encode(
					$json
				)
			);
	}

}

/* End of file Cores.php */
/* Location: ./application/modules/cores/controllers/Cores.php */