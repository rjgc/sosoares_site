<?php
class Company_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function get_obra($id){
        $query = $this->db->query("select * from obras where id_obra='$id'");

        $data = $query->row_array();
        return $data;
    }

    public function get_obras(){
        $query = $this->db->query("select * from obras o inner join (SELECT id_obra, MIN(id), url, priority FROM obras_gallery GROUP BY id_obra) og on o.id_obra=og.id_obra");

        $data = $query->result_array();
        return $data;
    }

    public function get_galeria_obra($id){
        $query = $this->db->query("select * from obras_gallery where id_obra='$id'");

        $data = $query->result_array();
        return $data;
    }

    public function get_galeria_obras(){
        $query = $this->db->query("select * from obras_gallery");

        $data = $query->result_array();
        return $data;
    }

    public function get_produtos_aluminio_obra($id){
        $query = $this->db->query("select pab.*, pa.foto_1 as url, pa.nome_pt as nome, pa.id_produto_aluminio as id from produtos_aluminio_obras pab inner join produtos_aluminio pa on pab.produto_aluminio_id=pa.id_produto_aluminio where obra_id='$id'");

        $data = $query->result_array();
        return $data;
    }

    public function get_produto_aluminio($id){
        $query = $this->db->query("select * from produtos_aluminio where id_produto_aluminio='$id'");

        $data = $query->result_array();
        return $data;
    }

    public function get_produtos_aluminio(){
        $query = $this->db->query("select * from produtos_aluminio ");

        $data = $query->result_array();
        return $data;
    }

}