<?php

class Model_nilai extends CI_Model
{
  function ambil_data()
  {
    return $this->db->get('datanilai');
  }

  public function simpan_data($data)
  {
    $this->db->insert('datanilai', $data);
  }

  public function hapus_data($id_nilai)
  {
    $this->db->where('id_nilai', $id_nilai);
    $this->db->delete('datanilai');
  }

  public function get_data_by_id($id_nilai)
  {
    $this->db->where('id_nilai', $id_nilai);
    $query = $this->db->get('datanilai');
    return $query->row_array();
  }

  public function edit_data($id_nilai, $mapel, $mapel_nilai)
  {
    $data = array(
      'mapel' => $mapel,
      'mapel_nilai' => $mapel_nilai
    );
    $this->db->where('id_nilai', $id_nilai);
    $this->db->update('datanilai', $data);
  }

  public function hapus_by_id($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('akses');
  }
}
