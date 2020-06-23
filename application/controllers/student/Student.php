<?php
class Student extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start(); 
		}
		if ($_SESSION['user_ID'] < 1) {
            redirect('welcome/login', 'refresh');
        }
	}

	function editStudent() {

	}

}

?>