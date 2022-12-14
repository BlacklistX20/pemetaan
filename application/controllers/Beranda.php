<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index()
    {
        $this->load->view('beranda');
    }

    public function cek()
    {
        $tgl = date('Y-m-d H:i:s');
        $lat = $this->input->post('lat');
        $lon = $this->input->post('lon');
        $hujan = $this->input->post('hujan');
        $suhu = $this->input->post('suhu');
        $kelembapan = $this->input->post('kelembapan');
        $tanah = $this->input->post('tanah');

        $data = array(
            'Tanggal' => $tgl,
            'Latitude' => $lat,
            'Longitude' => $lon,
            'Hujan' => $hujan,
            'Kelembapan' => $kelembapan,
            'Suhu' => $suhu,
            'Tanah' => $tanah
        );
        $this->load->model('TabelModel');
        // $this->TabelModel->riwayat($data, 'riwayat');
        $this->load->model('PerbandinganModel');
        $data = $this->PerbandinganModel->cekKomoditi($hujan, $suhu, $kelembapan, $tanah);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }


}