<?php
class ManageSection extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start(); 
		} 
	}

	function index(){
		$data['title'] = 'Manage Section';
		$data['main'] = 'section_home';
		$data['section'] = $this->MSection->getAllSection();
		$this->load->vars($data);
		$this->load->view('');
	}

	function create(){
		if($this->input->post('section_name')){
			$this->MSection->addSection();
			redirect('', 'refresh');
		}
		$data['title'] = 'Create Section';
		$data['main'] = 'section_home';
		$data['section'] = $this->MSection->getAllSection();
		$data['strand'] = $this->MStrand->getAllStrands();
		$this->load->vars($data);
		$this->load->view('');
	}

	function edit(){
		if($this->input->post('section_name')){
			$this->MSection->editSection();
			redirect('', 'refresh');
		}
		$data['title'] = 'Edit Section';
		$data['main'] = 'section_home';
		$data['section'] = $this->MSection->getAllSection($id);
		$data['strand'] = $this->MStrand->getAllStrands();
		$this->load->vars($data);
		$this->load->view('');
	}

	function delete($id){
		$this->db->where('section_ID', $id);
		$this->db->delete('tbl_section');
		redirect('', 'refresh');
	}

}

?>