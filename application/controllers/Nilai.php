<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_nilai');
        $this->load->database();
    }

    function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $data["hasil"] = $this->Model_nilai->ambil_data()->result();
        $this->load->view('nilai/index', $data);
    }

    function tambah()
    {
        $data = array(
            'mapel' => $this->input->post('mapel'),
            'mapel_nilai' => $this->input->post('mapel_nilai')
        );
        $this->Model_nilai->simpan_data($data);
        redirect('nilai');
    }

    public function hapus()
    {
        $id_nilai = $this->input->post('id');
        // $this->load->model('Model_name');
        $this->Model_nilai->hapus_data($id_nilai);
        redirect('nilai');
    }

    public function get_data_by_id()
    {
        $id_nilai = $this->input->post('id');
        $data = $this->Model_nilai->get_data_by_id($id_nilai);
        echo json_encode($data);
    }

    public function edit_data()
    {
        $id_nilai = $this->input->post('id');
        $mapel = $this->input->post('mapel');
        $mapel_nilai = $this->input->post('mapel_nilai');

        $this->Model_nilai->edit_data($id_nilai, $mapel, $mapel_nilai);

        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil diubah'
        );

        echo json_encode($response);
    }
}
