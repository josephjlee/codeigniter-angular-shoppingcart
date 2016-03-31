<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {
	
	private $db_name = 'products';
	 
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
	}

	// List all your items
	public function get( $offset = NULL )
	{
		if($offset !== NULL) {
			$this->db->limit($offset, 20);  // Produces: LIMIT 20, 10 (in MySQL.  Other databases have slightly different syntax)
		}
		$query = $this->db->get($this->db_name); // Select the table products
		return $query->result_array(); // Return the results in a array.
	}

	// count all
	public function count() {
		$query = $this->db->get($this->db_name); // Select the table products
		$count = $query->result_array(); // Return the results in a array.
		return (int) count($count);
	}

	public function getById($id) {
		if(!empty($id)) {
			$this->db->where('id', $id); // Select the table products
			$query = $this->db->get($this->db_name);
			return $query->result_array(); // Return the results in a array.
		}
		return false;
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}
