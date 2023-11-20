<?php

class Model_siswa extends CI_Model
{
    function ambil_data()
    {
        return $this->db->get('siswa');
    }
   
    public function simpan_data($data)
  {
    $this->db->insert('siswa', $data);
  }

  public function hapus_data($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $this->db->delete('siswa');
  }

  public function get_data_by_id($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $query = $this->db->get('siswa');
    return $query->row_array();
  }

  public function edit_data($id_siswa, $nama_siswa, $ttl, $jenkel, $tingkatan, $alamat, $agama, $umur)
  {
    $data = array(
      'nama_siswa' => $nama_siswa,
      'ttl' => $ttl,
      'jenkel' => $jenkel,
      'tingkatan' => $tingkatan,
      'alamat' => $alamat,
      'agama' => $agama,
      'umur' => $umur
    );

    $this->db->where('id_siswa', $id_siswa);
    $this->db->update('siswa', $data);
  }

} 