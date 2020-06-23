<?php
class Application extends CI_Controller {

    public function __construct(){
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start(); 
		}

		if ($_SESSION['user_ID'] < 1) {
            redirect('welcome/login', 'refresh');
        }
	}

	function index() {
		if ($this->input->post('appli_LRN')) {
			$this->MApplication->addApplication();
			redirect('student/sdashboard', 'refresh');
		} else {
			$strands = $this->MStrand->getAllStrand();
			$data['strands'] = $strands;
			$data['title'] = "Application | SVNHS Enroll";
			$data['main'] = 'student_create_application';
			$this->load->vars($data);
			$this->load->view('student_template');
		}
	}

}
?>