<?php
class SDashboard extends CI_Controller {
    
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
        $data['title'] = "Student Dashboard | SVNHS Enroll";
        $data['main'] = 'student_home';
        $this->load->vars($data);
        $this->load->view('student_template');
    }

    function logout() {
        unset($_SESSION['user_ID']);
        unset($_SESSION['user_name']);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('welcome/login', 'refresh');
    }
}

?>