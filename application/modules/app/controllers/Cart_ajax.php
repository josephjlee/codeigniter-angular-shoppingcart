<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->_response(true);
	}
	

	public function update() {
		$data = array(
			'rowid' => '1',
			'qty'   => 3
		);
		
		try {
			$this->cart->update($data);
			$this->_response(true);
		} catch (Exception $e) {
			$this->_response(false, $e);
		}
	}

	public function add() {
		$data = array(
			'id'      => '1',
			'qty'     => 1,
			'price'   => '19.56',
			'name'    => 'T-Shirt',
			'options' => array('Size' => 'L', 'Color' => 'Red')
		);
		try {
			$this->cart->insert($data);
			$this->_response(true);
		} catch (Exception $e) {
			$this->_response(false, $e);
		}
	}

	public function _response($status, $message = 'null') {
		$this->output->set_content_type('application/json')
		->set_output(
			json_encode(
				array(
					'status' => ($status === true) ? 'success' : 'failed',
					'message' => $message,
				)
			)
		);
	}

}

/* End of file Cart_ajax.php */
/* Location: ./application/modules/app/controllers/Cart_ajax.php */