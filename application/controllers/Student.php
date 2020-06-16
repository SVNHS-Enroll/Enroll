<?php
class Student extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		session_start();
	}

	function createStudent() {
		if ($this->input->post('firstname')) {
			$this->MStudent->addStudent();
		}
	}

	function editStudent() {

	}

	function deleteStudent() {

	}
}

?>