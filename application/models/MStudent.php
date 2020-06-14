<?php

class MStudent extends CI_Model {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function getStudentID($id) {
        $data = array();
        $options = array('stud_ID' => $id);
        $q = $this->db->get_where('tbl_students', $options, 1);
        if ($q->num_rows() > 0) {
            $data = $q->row_array();
        }
        $q -> free_result();
        return $data;
    } 

    function getAllStudents() {
        $data = array();
        $q = $this->db->get('tbl_students');
        if ($q->num_row()>0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q -> free_result();
        return $data;
    }

    function addStudent() {
        $data = array(
            'stud_firstname' => $_POST['firstname'],
            'stud_middlename' => $_POST['middlename'],
            'stud_lastname' => $_POST['lastname'],
            'stud_gender' => $_POST['gender'],
            'stud_age' => $_POST['age'],
            'stud_birthdate' => $_POST['birthdate'],
            'stud_address' => $_POST['address'],
            'stud_contactnum' => $_POST['contact'],
            'stud_email' => $_POST['email']
        );

        $this->db->insert('tbl_students', $data);
    }

    function editStudent() {
        $data = array(
            'stud_firstname' => $_POST['firstname'],
            'stud_middlename' => $_POST['middlename'],
            'stud_lastname' => $_POST['lastname'],
            'stud_gender' => $_POST['gender'],
            'stud_age' => $_POST['age'],
            'stud_birthdate' => $_POST['birthdate'],
            'stud_address' => $_POST['address'],
            'stud_contactnum' => $_POST['contact'],
            'stud_email' => $_POST['email']
        );

        $this->db->where('stud_ID', $id);
        $this->db->update('tbl_students', $data);
    }

    function deleteStudent() {
        $this->db->where('stud_ID', $id);
        $this->db->where('tbl_students');
    }

}

?>