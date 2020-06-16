<?php
class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		session_start();
	}

	function index() {
		$data['title'] = "Welcome | SVNHS Enroll";
		$data['main'] = 'home';

		$this->load->vars($data);
		$this->load->view('template');
	}

	function login() {
		if ($this->input->post('username')) {
			$u = $this->input->post('username');
			$pw = $this->input->post('password');
			$this->MAdmin->verifyAdmin($u, $pw);
			if ($_SESSION['admin_ID'] > 0) {
				redirect('admin/dashboard', 'refresh');
			}
		}
		$data['title'] = "Log In | SVNHS Enroll";
		$data['main'] = 'login';
		$this->load->vars($data);
		$this->load->view('template', $data);
	}

	function sign_up() {
		$data['title'] = "Register | SVNHS Enroll";
		$data['main'] = 'signup';

		$this->load->vars($data);
		$this->load->view('template');
	}

	function about_us() {

	}

	function contact() {

	}


	
}
