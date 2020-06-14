<?php
class MAdmin extends CI_Model {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function getAdmin($id) {
        $data = array();
        $options = array('admin_ID' => $id);
        $q = $this->db->get_where('tbl_admin', $options, 1);
        if ($q->num_rows() > 0) {
            $data = $q->row_array();
        }
        $q -> free_result();
        return $data;
    }

    function getAllAdmin() {
        $data = array();
        $q = $this->db->get('tbl_admin');
        if ($q->num_row()>0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q -> free_result();
        return $data;
    }

    function addAdmin() {
        $data = array(
            'admin_name' => $_POST['admin_name'],
            'admin_username' => $_POST['admin_username'],
            'admin_password' => $_POST['admin_password']
        );

        $this->db->insert('tbl_admin', $data);
    }

    function editAdmin() {
        $data = array(
            'admin_name' => $_POST['admin_name'],
            'admin_username' => $_POST['admin_username'],
            'admin_password' => $_POST['admin_password']
        );

        $this->db->where('admin_ID', $id);
        $this->db->update('tbl_admin', $data);
    }

    function deleteAdmin($id) {
        $this->db->where('admin_ID', $id);
        $this->db->delete('tbl_admin');
    }
}

?>