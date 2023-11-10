<?php
class Model_level extends CI_Model
{
  function ambil_data()
  {
    return $this->db->get('datainput');
  }

  public function simpan_data($data)
  {
    $this->db->insert('datainput', $data);
  }

  public function hapus_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('datainput');
  }

  public function get_data_by_id($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('datainput');
    return $query->row_array();
  }

  public function edit_data($id, $nama, $keterangan)
  {
    $data = array(
      'nama' => $nama,
      'keterangan' => $keterangan
    );

    $this->db->where('id', $id);
    $this->db->update('datainput', $data);
  }
}
