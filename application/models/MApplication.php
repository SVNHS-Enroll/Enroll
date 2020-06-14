<?php
class MApplication extends CI_Model {

    public function __construct(){
		parent::__construct();
        //session_start();
    }

    function getApplicationID($id) {
        $data = array();
        $options = array('appli_ID' => $id);
        $q = $this->db->get_where('tbl_application',$options,1);
        if ($q->num_rows() > 0){
            $data = $q->row_array();
        }
        $q->free_result();
        return $data;
    }

    function getAllApplication() {
        $data = array();
        $q = $this->db->get('tbl_application');
        if ($q-> num_rows() > 0){
            foreach ($q->result_array() as $row){
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }

    function addApplication() {
        $data=array(
            'stud_ID' => $_POST['stud_ID'],
            'appli_LRN' => $_POST['appli_LRN'],
            'appli_yearlevel' => $_POST['appli_yearlevel'],
            'appli_strand' => $_POST['appli_strand'],
            'appli_status' => $_POST['appli_status']
        );
        $this->db->insert('tbl_application', $data);
    }

    function editApplication($id) {
        $data=array(
            'stud_ID' => $_POST['stud_ID'],
            'appli_LRN' => $_POST['appli_LRN'],
            'appli_yearlevel' => $_POST['appli_yearlevel'],
            'appli_strand' => $_POST['appli_strand'],
            'appli_status' => $_POST['appli_status']
        );
        $this->db->where('appli_ID', $id);
        $this->db->update('tbl_application', $data);
    }

    function deleteApplication($id) {
        $this->db->where('appli_ID', $id);
        $this->db->delete('tbl_application'); 
    }
}

?>