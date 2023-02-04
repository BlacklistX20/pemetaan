<?php

class TabelModel extends CI_Model
{
    public function hitung_data($table)
    {
        return $this->db->count_all_results($table);
    }

    public function ambil_data(){
        return $this->db->get('syarat');
    }

    public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    public function ambil_dataId($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function edit_data($id, $data, $table)
    {
        $this->db->where('ID',$id);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_dataRiwayat(){
        return $this->db->get('riwayat');
    }

    public function riwayat($data, $table)
    {
        $this->db->insert($table,$data);
    }

    public function ambil_dataUser()
    {
        return $this->db->get('user');
    }

    public function jumlah_syarat()
    {
        return $this->db->table('syarat')->countAll();
    }
}
