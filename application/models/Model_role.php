<?php
class Model_role extends CI_Model
{
  function ambil_data()
  {
    return $this->db->get('roles');
  }

  public function simpan_data($data)
  {
    $this->db->insert('roles', $data);
  }

  public function hapus_data($id_roles)
  {
    $this->db->where('id_roles', $id_roles);
    $this->db->delete('roles');
  }

  public function get_data_by_id($id_roles)
  {
    $this->db->select('*');
    $this->db->from('roles');
    $this->db->where('roles.id_roles', $id_roles);
    $query_roles = $this->db->get();
    $result_roles = $query_roles->result_array();

    if (empty($result_roles)) {
      echo "Tidak ada kecocokan untuk ID Roles tertentu di tabel roles.";
    }

    $this->db->select('*');
    $this->db->from('akses');
    $this->db->where('akses.id_roles', $id_roles);
    $query_akses = $this->db->get();
    $result_akses = $query_akses->result_array();

    $combined_results = array(
      'roles_data' => $result_roles,
      'akses_data' => $result_akses
    );

    return $combined_results;
  }



  public function edit_data($id_roles, $nama_roles)
  {
    $data = array(
      'nama_roles' => $nama_roles

    );

    $this->db->where('id_roles', $id_roles);
    $this->db->update('roles', $data);
  }
  public function get_menu_from_database()
  {
    $query = $this->db->get('menu');
    return $query;
  }

  public function akses($id_akses, $akses)
  {

    $data = array(
      'id_roles' => $id_akses,
      'id_menu' => $akses
    );

    return $this->db->insert('akses', $data);
  }

  public function hapus_by_id($id_akses)
  {
    $this->db->where('id_roles', $id_akses);
    return $this->db->delete('akses');
  }
}
