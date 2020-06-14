<?php
class MSection extends CI_Model {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function getSection($id) {
        $data = array();
        $options = array('section_ID' => $id);
        $q = $this->db->get_where('tbl_section', $options, 1);
        if ($q->num_rows() > 0) {
            $data = $q->row_array();
        }
        $q -> free_result();
        return $data;
    }

    function getAllSection() {
        $data = array();
        $q = $this->db->get('tbl_section');
        if ($q->num_row()>0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q -> free_result();
        return $data;
    }

    function addSection() {
        $data = array(
            'section_name' => $_POST['section_name'],
            'strand_ID' => $_POST['strand_ID']
        );

        $this->db->insert('tbl_section', $data);
    }

    function editSection($id) {
        $data = array(
            'section_name' => $_POST['section_name'],
            'strand_ID' => $_POST['strand_ID']
        );

        $this->db->where('section_ID', $id);
        $this->db->update('tbl_section', $data);
    }

    function deleteSection($id) {
        $this->db->where('section_ID', $id);
        $this->db->delete('tbl_section');
    }
}

?>