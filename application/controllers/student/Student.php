<?php
class Student extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start(); 
		}
	}

	function editStudent() {

	}

}

?>