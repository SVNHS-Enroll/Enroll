<?php
class Dashboard extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
        session_start();
        if ($_SESSION['admin_id'] < 1) {
            redirect('welcome/verify', 'refresh');
        }
    }
    
    function index() {
        $data['title'] = "Admin Dashboard | SVNHS Enroll";
        $data['main'] = 'admin_home';
        $this->load->vars($data);
        $this->load->view('admin_template');
    }

    function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        $this->session->set_flashdata('error', "You've been logged out!");
        redirect('welcome/verify', 'refresh');
    }
}

?>