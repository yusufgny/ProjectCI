<?php
class Model_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($username)
    {
       
        $query = $this->db->get_where('login', array('username' => $username));
        return $query->row_array();
    }
     // Contoh di dalam model (Model_login.php)


}
