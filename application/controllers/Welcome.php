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

	function login() {
		$data['title'] = "Log In | SVNHS Enroll";
		$data['main'] = 'login';

		$this->load->vars($data);
		$this->load->view('template');
	}

	function sign_up() {
		$data['title'] = "Register | SVNHS Enroll";
		$data['main'] = 'signup';

		$this->load->vars($data);
		$this->load->view('template');
	}

	function verify() {
		if ($this->input->post('username')) {
			$u = $this->input->post('username');
			$pw = $this->input->post('password');
			$this->MAdmin->verifyUser($u, $pw);
			if ($_SESSION['user_id'] > 0) {
				redirect('student/dashboard', 'refresh');
			}
		}
		$data['main'] = 'login';
		$data['title'] = 'Log In | SVNHS Enroll';
	}

	function about_us() {

	}

	function contact() {

	}


	
}
