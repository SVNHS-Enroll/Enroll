<?php
class MStrand extends CI_Model {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function getStrand($id) {
        $data = array();
        $options = array('strand_ID' => $id);
        $q = $this->db->get_where('tbl_strands', $options, 1);
        if ($q->num_rows() > 0) {
            $data = $q->row_array();
        }
        $q -> free_result();
        return $data;
    }

    function getAllStrands() {
        $data = array();
        $q = $this->db->get('tbl_strands');
        if ($q->num_row()>0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q -> free_result();
        return $data;
    }

    function getAllStrand() {
        $q = $this->db->query('SELECT strand_name FROM tbl_strands');
        return $q->result();
    }

    function addStrand() {
        $data = array(
            'strand_name' => $_POST['strand_name']
        );

        $this->db->insert('tbl_strands', $data);
    }

    function editStrand($id) {
        $data = array(
            'strand_name' => $_POST['strand_name']
        );

        $this->db->where('strand_ID', $id);
        $this->db->update('tbl_strands', $data);
    }

    function deleteStrand($id) {
        $this->db->where('strand_ID', $id);
        $this->db->delete('tbl_strands');
    }
}

?>