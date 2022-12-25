<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

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

    // Fungsi ambil lat dari opendata
    public function getLat()
    {
        $locations = $this->input->get('locations');
        $ch = curl_init();

        // set url 
        curl_setopt($ch, CURLOPT_URL, "https://api.opentopodata.org/v1/test-dataset?locations=$locations");

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string 
        $output = curl_exec($ch);

        // tutup curl 
        curl_close($ch);

        // menampilkan hasil curl
        header('Content-Type: application/json');
        echo $output;
    }
}
