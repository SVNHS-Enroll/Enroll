<?php
class ManageStrand extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		if(!isset($_SESSION)) {
			session_start(); 
		} 
	}

	function index(){
		$data['title'] = 'Manage Strand';
		$data['main'] = 'strand_home';
		$data['strand'] = $this->MStrand->getAllStrands();
		$this->load->vars($data);
		$this->load->view('');
	}

	function create(){
		if($this->input->post('strand_name')){
			$this->MStrand->addStrand();
			redirect('', 'refresh');
		}
		$data['title'] = 'Create Strand';
		$data['main'] = 'strand_create';
		$this->load->vars($data);
		$this->load->view('');
	}

	function edit($id = 0){
		if($this->input->post('strand_name')){
            $this->MStrand->editStrand();
            redirect('', 'refresh');
        }
        $data['title'] = 'Edit Actor';
		$data['main'] = 'actors_edit';
		$data['strand'] = $this->MStrand->getStrand($id);
		$this->load->vars($data);
		$this->load->view('');
	}

	function delete($id){
		$this->db->where('strand_ID', $id);
		$this->db->delete('tbl_strand');
		redirect('', 'refresh');
	}

}
?>