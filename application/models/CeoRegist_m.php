<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CeoRegist_m extends CI_Model{

    public function register(){
        $tim = array(
            // tim
            'Nama_Tim '=>$this->input->post('nama_tim_ceo'),
            'sekolah'=>$this->input->post('sekolah_ceo'),
            'Kota'=>$this->input->post('kota_ceo'),
            'alamat'=>$this->input->post('kota_ceo'),
            'email'=>$this->input->post('email_ceo'),
            'PASSWORD'=>$this->input->post('password_ceo')
        );
        $this->db->insert('tim_ceo', $tim);
        if ($this->db->affected_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function cekEmail(){
        $email = array(
            'email'=>$this->input->post('email_ceo')
        );
        $query = $this->db->get_where('tim_ceo', $email);
        if ($query->num_rows() >0) {
            return false;
        }else{
            return true;
        }

    }
}