<?php
class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start(); 
		}
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
			$this->MStudent->verifyStudent($u, $pw);
			if ($_SESSION['user_ID'] > 0) {
				redirect('student/sdashboard', 'refresh');
			}
		}
		$data['title'] = "Log In | SVNHS Enroll";
		$data['main'] = 'login';
		$this->load->vars($data);
		$this->load->view('template', $data);
	}

	function admin_login() {
		if ($this->input->post('username')) {
			$u = $this->input->post('username');
			$pw = $this->input->post('password');
			$this->MAdmin->verifyAdmin($u, $pw);
			if ($_SESSION['admin_ID'] > 0) {
				redirect('admin/dashboard', 'refresh');
			}
		}
		$data['title'] = "Admin Log In | SVNHS Enroll";
		$data['main'] = 'admin_login';
		$this->load->vars($data);
		$this->load->view('template', $data);
	}

	function register() {
		if ($this->input->post('fname')) {
			$this->MStudent->addStudent();
			redirect('welcome/sign_up', 'refresh');
		}else {
			$data['title'] = "Register | SVNHS Enroll";
			$data['main'] = 'signup';

			$this->load->vars($data);
			$this->load->view('template');
		}
		
	}

	function sign_up() {
		if ($this->input->post('username')) {
			$this->MUser->addUser();
			redirect('welcome/login', 'refresh');
		}else {
			$data['title'] = "Register | SVNHS Enroll";
			$data['main'] = 'signup2';

			$this->load->vars($data);
			$this->load->view('template');
		}
		
	}

	function about_us() {

	}

	function contact() {

	}


	
}
