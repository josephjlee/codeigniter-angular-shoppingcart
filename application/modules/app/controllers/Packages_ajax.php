<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages_ajax extends CI_Controller {

	private $_model;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('packages_model');
	}

	public function index($offset = NULL)
	{
		$getPackages = $this->packages_model->get($offset);
		$getCountAll = $this->packages_model->count();
		$data['counts_all'] = $getCountAll;
		$data['packages'] = $getPackages;
		$this->_response($data);
	}

	public function get($id = null) {
		if(empty($id)) {
			$this->_response();
		} else {
			$getProducts = $this->packages_model->getById($id);
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