<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('gudang', 'gudang.id_barang = barang.id', 'left');
        $this->db->order_by('barang.id','ASC');

        $barang =  $this->db->get()->result_array();

        $data = [];
        foreach ($barang as $row) {
            $galeri = $this->db->get_where('galeri', array('id_barang' => $row['id']))->result_array();
            $row['galeri'] = $galeri;
            array_push($data, $row);
        }
        
        return $data;
    }

    public function GetAllData()
    {
        $this->db->select('*');
        $this->db->from('keranjang');
        $this->db->join('barang', 'keranjang.id_barang = barang.id', 'left');
        $this->db->join('gudang', 'keranjang.id_gudang = gudang.id', 'left');
        $this->db->order_by('barang.id','ASC');
        return $this->db->get()->result_array();
    }

    public function getId($id)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('gudang', 'gudang.id_barang = barang.id', 'left');
        $this->db->where('barang.id', $id);
        return $this->db->get()->row_array();
    }
}