<?php
class Dashboard extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
        if(!isset($_SESSION)) {
			session_start(); 
		} 
        if ($_SESSION['admin_ID'] < 1) {
            redirect('welcome/login', 'refresh');
        }
    }
    
    function index() {
        $data['title'] = "Admin Dashboard | SVNHS Enroll";
        $data['main'] = 'admin_home';
        $this->load->vars($data);
        $this->load->view('admin_template');
    }

    function logout() {
        unset($_SESSION['admin_ID']);
        unset($_SESSION['admin_username']);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('welcome/login', 'refresh');
    }
}

?>