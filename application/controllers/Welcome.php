<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
        //session_start();
    }

	function index() {
		$data['title'] = "Welcome | SVNHS Enroll";
		$this->load->vars($data);
		$this->load->view('template');
	}

	function application() {

	}

	function enroll() {

	}

	function user() {

	}

	function admin() {

	}

	function about_us() {

	}

	function contact() {

	}

	
}
