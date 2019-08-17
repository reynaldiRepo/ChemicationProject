<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hsfc_m extends CI_Model{
    public function get_news(){
        $news = $this->db->query('select *
                                 from hsfc_news
                                 order by id ASC');
        if ($news->num_rows() > 0){
            return $news->result();
        }else{
            return false;
        }
    }
}