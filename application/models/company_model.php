<?php
class Company_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    /*public function record_count() {
        return $this->db->count_all("case_studies");
    }

    public function fetch_cases($limit, $start) {
        $this->db->limit($limit, $start);
        //$query = $this->db->get("case_studies");
        $query = $this->db->query("SELECT cs. * , csg.url
                                    FROM case_studies cs
                                    LEFT JOIN case_studies_gallery csg ON cs.id = csg.id_case
                                    AND (
                                    csg.priority IS NULL
                                    OR csg.priority =1
                                    )
                                    GROUP BY id order by cs.id desc");
        

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }


   public function uniqueCase($idCase) {
        $id = split('-', $idCase);
        $id = $id[0];
        $query = $this->db->query("select * from case_studies where id='$id'");

        $data = $query->result_array();
        return $data;
   }*/
    
       
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
        $query = $this->db->query("select * from produtos_aluminio_obras pab inner join produtos_aluminio pa on pab.produto_aluminio_id=pa.id_produto_aluminio where obra_id='$id'");

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

/*
   public function gest_page($pageID) {
        $query = $this->db->query("select * from gest_page where id='$pageID'");

        $data = $query->result_array();
        return $data;
   }

   //Get Relative Data
     public function get_case_study_relative_data($product = FALSE,$type = FALSE)
    {
    
        
        if ($type) {
            switch ($type) {
                case 'product_related_arquitectural':
                    $query = $this->db->query(
                        "SELECT p. *, c.name_pt, 
                                c.name_en, c.name_al, c.name_fr, c.category_id
                        FROM product p, product_related_case_studies prcs, cat_arquitect c
                        WHERE prcs.product_id = p.product_id
                        AND prcs.case_studies = $product AND p.cat_arquitect_id = c.category_id"
                    );
                    break;
                    
                 case 'product_related_industrial':
                    $query = $this->db->query(
                        "SELECT p. *, c.name_pt, 
                                c.name_en, c.name_al, c.name_fr, c.category_id
                        FROM product p, product_related_case_studies prcs, cat_industrial c
                        WHERE prcs.product_id = p.product_id
                        AND prcs.case_studies = $product AND p.cat_industrial_id = c.category_id"
                    );
                    break;
                
                default:
                    return false;
                    break;
            }
            return $query->result_array();  
        }else{
            return false;
        }               
        
    }

    public function save_email_newsletter($email,$nome){
        $email = mysql_real_escape_string(strip_tags($_POST["email"]));// contra ataques mysql injection e xss
        $query = $this->db->query("select * from newsletter where email like '$email' ");
        if (count($query->result_array())>0)
            return "err_exists";
        else{
                
                if ($this->db->insert('newsletter', array('email' => $email,'nome' => $nome)))
                    return "success";
                else
                    return "err_exists";
            }
    }*/
}