<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * Class Authentication
	 */
	class Authentication extends CI_Controller {
	
		public function __construct(){
	        parent:: __construct();
	        $this->load->model('authentication_model');
	    }

	    public function log() {
	    	$this->load->view('authentication/login');
	    }

	    public function login(){
	    	
	    }

	    public function reg(){

	    }

	    public function logout(){

	    }

	}

