<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

        $this->load->model('TabelModel');
	}
 
    public function index()
    {
        $data['komoditas'] = $this->TabelModel->hitung_data('syarat');
        $data['riwayat'] = $this->TabelModel->hitung_data('riwayat');
        $this->load->view('admin', $data);
    }

	public function syarat(){
        $data['tabel'] = $this->TabelModel->ambil_data()->result();
        $this->load->view('admin_syarat',$data);
	}

    public function tambah_syarat()
    {
        $ko = $this->input->post('Komoditas');
		$sm = $this->input->post('SuhuMin');
		$smx = $this->input->post('SuhuMax');
        $hm = $this->input->post('HujanMin');
        $hmx = $this->input->post('HujanMax');
        $km = $this->input->post('KelembapanMin');
        $kmx = $this->input->post('KelembapanMax');
        $tm = $this->input->post('TanahMin');
        $tmx = $this->input->post('TanahMax');
 
		$data = array(
			'Komoditas' => $ko,
			'HujanMin' => $hm,
			'HujanMax' => $hmx,
            'KelembapanMin' => $km,
            'KelembapanMax' => $kmx,
            'SuhuMin' => $sm,
            'SuhuMax' => $smx,
            'TanahMin' => $tm,
            'TanahMax' => $tmx
			);
		$this->TabelModel->input_data($data,'syarat');
		redirect('admin/syarat');
    }

    public function ambil_dataId($idSyarat)
    {
        $data = $this->TabelModel->ambil_dataId("ID = $idSyarat", 'syarat')->row_array();
        echo json_encode($data);
    }

    public function edit_syarat($idSyarat)
    {
        $ko = $this->input->post('Komoditas');
		$sm = $this->input->post('SuhuMin');
		$smx = $this->input->post('SuhuMax');
        $hm = $this->input->post('HujanMin');
        $hmx = $this->input->post('HujanMax');
        $km = $this->input->post('KelembapanMin');
        $kmx = $this->input->post('KelembapanMax');
        $tm = $this->input->post('TanahMin');
        $tmx = $this->input->post('TanahMax');
 
		$data = array(
			'Komoditas' => $ko,
			'HujanMin' => $hm,
			'HujanMax' => $hmx,
            'KelembapanMin' => $km,
            'KelembapanMax' => $kmx,
            'SuhuMin' => $sm,
            'SuhuMax' => $smx,
            'TanahMin' => $tm,
            'TanahMax' => $tmx
			);
		$this->TabelModel->edit_data($idSyarat, $data,'syarat');
		redirect('admin/syarat');
    }

    public function hapus($id){
		$where = array('id' => $id);
		$this->TabelModel->hapus_data($where,'syarat');
		redirect('admin/syarat');
	}

    public function riwayat()
    {
        $data['tabel'] = $this->TabelModel->ambil_dataRiwayat()->result();
        $this->load->view('admin_riwayat', $data);
    }

    public function profile ()
    {
        $this->load->view('admin_profile');
    }

}