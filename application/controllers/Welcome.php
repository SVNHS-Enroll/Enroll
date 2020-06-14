<?php
class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}

	function index() {
		$data['title'] = "Welcome | SVNHS Enroll";
		$data['main'] = 'home';

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
