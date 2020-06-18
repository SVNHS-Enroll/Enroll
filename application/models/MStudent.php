<?php

class MStudent extends CI_Model {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function verifyStudent($u, $pw) {
        $this->db->select('user_ID, stud_ID, user_name');
        $this->db->where('user_name', $u);
        $this->db->where('user_password', $pw);
        $this->db->limit(1);
        $q = $this->db->get('tbl_user');
        if ($q->num_rows() > 0) {
            $row = $q->row_array();
            $_SESSION['user_ID'] = $row['user_ID'];
            $_SESSION['user_name'] = $row['user_name'];
        }else {
            $this->session->set_flashdata('error', 'Sorry, username or password is incorrect!');
        }
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
            'stud_firstname' => $_POST['fname'],
            'stud_middlename' => $_POST['mname'],
            'stud_lastname' => $_POST['lname'],
            'stud_birthdate' => $_POST['bday'],
            'stud_gender' => $_POST['sex'],
            'stud_address' => $_POST['haddress'],
            'stud_parentname' => $_POST['parent'],
            'stud_parentocc' => $_POST['occupation'],
            'stud_contactnum' => $_POST['phone'],
            'stud_lastschool' => $_POST['school'],
            'stud_schooladd' => $_POST['schoAdd'],
        );

        $this->db->insert('tbl_students', $data);
        $_SESSION['last_id'] = $this->db->insert_id();
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