<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class authentication_model extends CI_Model {
	public function __construct() {
		parent:: __construct();
		$this->load->helper('form');
	}

	public function login($data){

	}

	public function logout(){

	}

	public function register($data){

	}
}

