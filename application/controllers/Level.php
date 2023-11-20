<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Level extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_level');
        $this->load->database();
    }

    function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $data["hasil"] = $this->Model_level->ambil_data()->result();
        $this->load->view('level/index', $data);
    }

    function tambah()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'keterangan' => $this->input->post('keterangan')
        );

        $this->Model_level->simpan_data($data);

        redirect('level');
    }

    public function hapus()
    {
        $id = $this->input->post('id');
        // $this->load->model('Model_name');
        $this->Model_level->hapus_data($id);
        redirect('level');
    }

    public function get_data_by_id()
    {
        $id = $this->input->post('id');
        $data = $this->Model_level->get_data_by_id($id);
        echo json_encode($data);
    }

    public function edit_data()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $keterangan = $this->input->post('keterangan');

        $this->Model_level->edit_data($id, $nama, $keterangan);

        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        );

        echo json_encode($response);
    }
}