<?php
class Model_datalog extends CI_Model
{
    function ambil_data()
    {
      // return $this->db->get('login');
        $this->db->select('*');
        $this->db->from('login');
        $this->db->join('roles', 'roles.id_roles = login.id_roles', 'left');
  
        $query = $this->db->get();
        return $query;
    }

    public function simpan_data($data)
    {
      $this->db->insert('login', $data);
    }

    public function hapus_data($id_user)
  {
    $this->db->where('id_user', $id_user);
    $this->db->delete('login');
  }

  public function get_data_by_id($id_user)
  {
    $this->db->where('id_user', $id_user);
    $query = $this->db->get('login');
    return $query->row_array();
  }
  public function edit_data($id_user, $username, $password)
  {
    $data = array(
      'username' => $username,
      'password' => $password
    );

    $this->db->where('id_user', $id_user);
    $this->db->update('login', $data);
  }
  public function get_roles_from_database()
{
    $query = $this->db->get('roles'); 

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return false;
    }
}
}