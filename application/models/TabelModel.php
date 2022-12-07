<?php

class TabelModel extends CI_Model
{
    function ambil_data(){
        return $this->db->get('syarat');
    }

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    function ambil_dataId($where,$table){		
        return $this->db->get_where($table,$where);
    }

    public function edit_data($id, $data, $table)
    {
        $this->db->where('ID',$id);
        $this->db->update($table,$data);
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function ambil_dataIklim(){
        return $this->db->get('iklim');
    }

    public function riwayat($data, $table)
    {
        $this->db->insert($table,$data);
    }
}
