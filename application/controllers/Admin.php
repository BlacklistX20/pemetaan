<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

        $this->load->model('TabelModel');
	}
 
	function index(){
        $data['tabel'] = $this->TabelModel->ambil_data()->result();
        $this->load->view('admin',$data);
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
		redirect('admin/index');
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
		redirect('admin/index');
    }

    function hapus($id){
		$where = array('id' => $id);
		$this->TabelModel->hapus_data($where,'syarat');
		redirect('Admin/index');
	}

    public function riwayat ()
    {
        $this->load->view('admin_riwayat');
    }

    public function iklim ()
    {
        $data['tabel'] = $this->TabelModel->ambil_dataIklim()->result();
        $this->load->view('admin_iklim', $data);
    }
}