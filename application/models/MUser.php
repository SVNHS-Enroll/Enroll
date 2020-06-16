<?php
class MUser extends CI_Model {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function getUser($id) {
        $data = array();
        $options = array('user_ID' => $id);
        $q = $this->db->get_where('tbl_user', $options, 1);
        if ($q->num_rows() > 0) {
            $data = $q->row_array();
        }
        $q -> free_result();
        return $data;

    }

    function getAllUser() {
        $data = array();
        $q = $this->db->get('tbl_user');
        if ($q->num_row()>0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q -> free_result();
        return $data;
    }

    function getLastID() {
        $id = $this->db->insert_id();
        return $this->db->insert_id();
    }

    function addUser() {
        $data = array(
            'stud_ID' => $_SESSION['last_id'],
            'user_email' => $_POST['email'],
            'user_name' => $_POST['username'],
            'user_password' => $_POST['password']
        );

        $this->db->insert('tbl_user', $data);
    }

    function editUser($id) {
        $data = array(
            'stud_ID' => $_POST['stud_ID'],
            'user_name' => $_POST['user_name'],
            'user_password' => $_POST['user_password']
        );

        $this->db->where('stud_ID', $id);
        $this->db->update('tbl_user', $data);
    }

    function deleteUser($id) {
        $this->db->where('stud_ID', $id);
        $this->db->delete('tbl_user');
    }


}

?>