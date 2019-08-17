<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ec_m extends CI_Model{
    public function get_news(){
        $news = $this->db->query('select *
                                 from ec_news
                                 order by id DESC');
        if ($news->num_rows() > 0){
            return $news->result();
        }else{
            return false;
        }
    }

    public function insert_tim(){
        $data['Tim_id']= 'null';
        $this->db->insert('tim_ec', $data);
        $query = $this->db->query("SELECT Tim_id FROM tim_ec ORDER BY Tim_id DESC LIMIT 1");
        $id = $query->result();
        foreach ($id as $i){
            $tim_id = $i->Tim_id;
        }
        return $tim_id;
    }

    public function delete_tim($id){
        $data['Tim_id']= $id;
        $this->db->delete('detailpendaftaran_ec', $data);
    }

    public function submmit_ec($id, $foto_ketua, $scan_ketua, $foto_a1, $scan_a1, $foto_a2, $scan_a2){

        // data institusi
        $data_institusi['Nama_Institusi'] = $this->input->post('nama_institusi');
        $data_institusi['Telp_Institusi'] = $this->input->post('telp_institusi');
        $data_institusi['email_Institusi'] = $this->input->post('email_institusi');
        $data_institusi['alamat_Institusi'] = $this->input->post('alamat_institusi');
        $data_institusi['id_after_regist'] = $id.$this->input->post('subtema');


        // data dosbing
        $data_dosen['Tim_id'] = $id;
        $data_dosen['nip'] = $this->input->post('nip_dosen');
        $data_dosen['Nama_dosen'] = $this->input->post('nama_dosen');
        $data_dosen['Kontak_wa_line'] = $this->input->post('kontak_dosen');
        $data_dosen['email_dosen'] = $this->input->post('email_dosen');

        // data ketua
        $data_ketua['Tim_id'] = $id;
        $data_ketua['Nama_ketua'] = $this->input->post('nama_ketua');
        $data_ketua['NIM_ketua'] = $this->input->post('nim_ketua');
        $data_ketua['Jurusan_ketua'] = $this->input->post('jurusan_ketua');
        $data_ketua['pendidikan'] = $this->input->post('pendidikan_ketua');
        $data_ketua['Kontak_wa_line'] = $this->input->post('kontak_ketua');
        $data_ketua['Email'] = $this->input->post('email_ketua');
        $data_ketua['Pas_Foto'] = $foto_ketua;
        $data_ketua['KTM_SK'] = $scan_ketua;

        //data a1
        $data_anggota1['Tim_id'] = $id;
        $data_anggota1['Nama_anggota1'] = $this->input->post('nama_anggota1');
        $data_anggota1['NIM_anggota1'] = $this->input->post('nim_anggota1');
        $data_anggota1['Jurusan_anggota1'] = $this->input->post('jurusan_anggota1');
        $data_anggota1['pendidikan'] = $this->input->post('pendidikan_anggota1');
        $data_anggota1['Kontak_wa_line'] = $this->input->post('kontak_anggota1');
        $data_anggota1['Email'] = $this->input->post('email_anggota1');
        $data_anggota1['Pas_Foto'] = $foto_a1;
        $data_anggota1['KTM_SK'] = $scan_a1;

        // data a2
        $data_anggota2['Tim_id'] = $id;
        $data_anggota2['Nama_anggota2'] = $this->input->post('nama_anggota2');
        $data_anggota2['NIM_anggota2'] = $this->input->post('nim_anggota2');
        $data_anggota2['Jurusan_anggota2'] = $this->input->post('jurusan_anggota2');
        $data_anggota2['pendidikan'] = $this->input->post('pendidikan_anggota2');
        $data_anggota2['Kontak_wa_line'] = $this->input->post('kontak_anggota2');
        $data_anggota2['Email'] = $this->input->post('email_anggota2');
                                    
        $data_anggota2['Pas_Foto'] = $foto_a2;
        $data_anggota2['KTM_SK'] = $scan_a2;

        // data abstraksi
        $data_abstraksi['Tim_id'] = $id;
        $data_abstraksi['Judul_Karya'] = $this->input->post('judul_abstraksi');
        $data_abstraksi['subtema'] = $this->input->post('subtema');

        $this->db->where('Tim_id',$id);
        $this->db->update('tim_ec',$data_institusi);
        $this->db->insert('dosen_pembimbing_ec', $data_dosen);
        $this->db->insert('ketua_tim_ec', $data_ketua);
        $this->db->insert('anggota1_tim_ec', $data_anggota1);
        
        if ($this->input->post('cek_ac2') == 'true'){
        $this->db->insert('anggota2_tim_ec', $data_anggota2);
        }
        $this->db->insert('karya_ec', $data_abstraksi);
        
        $query = $this->db->query(" select id_after_regist 
                                    FROM tim_ec 
                                    where Tim_id ='".$id."' ");
        $query = $query->result();
        foreach($query as $id){
            $query = $id->id_after_regist;
        }
        return $query;
    }
}
