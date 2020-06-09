<?php

class MEnrolled extends CI_Models {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function getEnrollID($id) {
        $data = array();
        $options = array('enroll_ID' => $id);
        $q = $this->db->get_where('tbl_enrolled', $options, 1);
        if ($q->num_rows() > 0) {
            $data = $q->row_array();
        }
        $q -> free_result();
        return $data;
    }

    function getAllEnrolled() {
        $data = array();
        $q = $this->db->get('tbl_enrolled');
        if ($q->num_row()>0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q -> free_result();
        return $data;
    }

    function addEnroll() {
        $data = array(
            'appli_ID' => $_POST['appli_ID'],
            'section_ID' => $_POST['section_ID'],
            'enroll_date' => $_POST['enroll_date'],
            'admin_ID' => $_POST['admin_ID']
        );

        $this->db->insert('tbl_enrolled', $data);
    }

    function editEnroll($id) {
        $data = array(
            'appli_ID' => $_POST['appli_ID'],
            'section_ID' => $_POST['section_ID'],
            'enroll_date' => $_POST['enroll_date'],
            'admin_ID' => $_POST['admin_ID']
        );

        $this->db->where('enroll_ID', $id);
        $this->db->update('tbl_enrolled', $data);

    }

    function deleteEnroll($id) {
        $this->db->where('enroll_ID', $id);
        $this->db->delete('tbl_enrolled');
    }
}

?>