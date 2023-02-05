<?php

class PerbandinganModel extends CI_Model
{
    // public function cekIklim($lon, $bln)
    // {
    //     $this->db->where('Longitude', $lon);
    //     $this->db->where('Bulan', $bln);
    //     return $this->db->get('iklim')->row_array();
    // }

    public function cekKomoditi(float $hujan, float $suhu, float $kelembapan, float $tanah)
    {
        $this->db->where("HujanMin <= $hujan AND HujanMax >= $hujan");
        $this->db->where("KelembapanMin <= $kelembapan AND KelembapanMax >= $kelembapan");
        $this->db->where("SuhuMin <= $suhu AND SuhuMax >= $suhu");
        $this->db->where("TanahMin <= $tanah AND TanahMax >= $tanah");
        return $this->db->get('syarat')->result_array();
    }
}