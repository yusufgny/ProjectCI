<?php

class Model_menu extends CI_Model
{
    function ambil_data()
    {
        return $this->db->get('menu');
    }
   
    public function simpan_data($data)
  {
    $this->db->insert('menu', $data);
  }

  public function hapus_data($id_menu)
  {
    $this->db->where('id_menu', $id_menu);
    $this->db->delete('menu');
  }

  public function get_data_by_id($id_menu)
  {
    $this->db->where('id_menu', $id_menu);
    $query = $this->db->get('menu');
    return $query->row_array();
  }

  public function edit_data($id_menu, $nama_menu, $nama_url, $nama_icon)
  {
    $data = array(
      'nama_menu' => $nama_menu,
      'nama_url' => $nama_url,
      'nama_icon' => $nama_icon
    
    );

    $this->db->where('id_menu', $id_menu);
    $this->db->update('menu', $data);
  }

} 