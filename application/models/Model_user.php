<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function get_all_data($keyword = null)
    {
        $this->db->select(['barang.id as id', 'barang.*', 'gudang.harga as harga']);
        $this->db->from('barang');
        $this->db->like('nama_barang', $keyword, 'both');
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

	public function search_data($keyword)
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where(['nama_barang' => $keyword]);
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

    public function getId($id)
    {   
        $this->db->select(['barang.id as id', 'barang.*', 'gudang.harga as harga']);
        $this->db->from('barang');
        $this->db->join('gudang', 'gudang.id_barang = barang.id', 'left');
        $this->db->where('barang.id', $id);
        return $this->db->get()->row();
    }
}
