<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_siswa');
        $this->load->database();
    }
    function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $data["hasil"] = $this->Model_siswa->ambil_data()->result();
        $this->load->view('siswa/index', $data);
    }
    function tambah()
    {
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'ttl' => $this->input->post('ttl'),
            'jenkel' => $this->input->post('jenkel'),
            'tingkatan' => $this->input->post('tingkatan'),
            'alamat' => $this->input->post('alamat'),
            'agama' => $this->input->post('agama'),
            'umur' => $this->input->post('umur')
        );

        $this->Model_siswa->simpan_data($data);

        redirect('siswa');
    }
    public function hapus()
    {
        $id_siswa = $this->input->post('id');
        // $this->load->model('Model_name');
        $this->Model_siswa->hapus_data($id_siswa);
        redirect('siswa');
    }
    public function get_data_by_id()
    {
        $id_siswa = $this->input->post('id');
        $data = $this->Model_siswa->get_data_by_id($id_siswa);
        echo json_encode($data);
    }
    public function edit_data()
    {
        $id_siswa = $this->input->post('id');
        $nama_siswa = $this->input->post('nama_siswa');
        $ttl = $this->input->post('ttl');
        $jenkel = $this->input->post('jenkel');
        $tingkatan = $this->input->post('tingkatan');
        $alamat = $this->input->post('alamat');
        $agama =$this->input->post('agama');
        $umur=$this->input->post('umur');

        $this->Model_siswa->edit_data($id_siswa,$nama_siswa,$ttl,$jenkel,$tingkatan,$alamat,$agama,$umur);

        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        );
        echo json_encode($response);
    }
}