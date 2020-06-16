<?php
class Admins extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start(); 
		} 
	}

	
}

?>