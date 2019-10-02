<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CeoDashboard_m extends CI_Model{
    public function login(){
        $tim = array(
            'email'=>$this->input->post('email_ceo'),
            'PASSWORD'=>$this->input->post('password_ceo')
        );
        $SQL = 'select *
                from tim_ceo 
                where email ="'.$tim['email'].'" and '.'PASSWORD ="'.$tim['PASSWORD'].'"';
        $query = $this->db->query($SQL);

        if ($query->num_rows() == 1) {
            return true;
        }else{
            return false;
        }
    }

    
    public function get_news(){
        $this->db->order_by('id','DESC');
        return $this->db->get('dashboard_ceo_news')->result();
    }
    
    public function getData(){
        $tim = array(
            'email'=>$this->input->post('email_ceo'),
            'PASSWORD'=>$this->input->post('password_ceo')
        );
        $SQL = 'select *
                from tim_ceo 
                where email ="'.$tim['email'].'" and '.'PASSWORD ="'.$tim['PASSWORD'].'"';
        $query = $this->db->query($SQL);
        if ($query->num_rows() > 0) {
            return $query->result();
        }else{
            return false;
        }

    }

    public function home_model($id){
        $SQL = "select (case
                when kc.Tim_id = '".$id."' and ac1.Tim_id = '".$id."' and ac2.Tim_id = '".$id."' 
                and dt.Status_pembayaran = '03' THEN 'true'
                else 'false'
                end) as 'cek_data'
                from ketua_ceo kc, anggota1_ceo ac1, anggota2_ceo ac2, detailpendaftaran_ceo dt
                where dt.Tim_id = '".$id."' and kc.Tim_id = '".$id."' and ac1.Tim_id = '".$id."' and ac2.Tim_id = '".$id."' ";
        $query1 = $this->db->query($SQL);
        $query1 = $query1->result(); 


        $SQL2 = "select * 
                from dashboard_ceo_news
                order by id DESC";
        $query2 = $this->db->query($SQL2);
        $query2 = $query2->result(); 

        $SQL3 = "select * 
        from jadwal_ceo";
        $query3 = $this->db->query($SQL3);
        $query3 = $query3->result(); 

        $cek = false;
        foreach($query1 as $post){
			$cek = $post->cek_data;
            }
            
        if ($cek == 'true') {
            $HomeData['cek'] = true;
            $HomeData['news'] = $query2;
            $HomeData['jadwal'] = $query3;
            return $HomeData;
        }
        else{
            $HomeData['cek'] = false;
            $HomeData['news'] = $query2;
            $HomeData['jadwal'] = $query3;
            return $HomeData;
        }
    }

    public function cek_data_anggota($id){
        $SQL_all = "select (case
                    when kc.Tim_id = '".$id."' and ac1.Tim_id = '".$id."' and ac2.Tim_id = '".$id."' 
                    THEN 'true'
                    else 'false'
                    end) as 'cek_data'
                    from ketua_ceo kc, anggota1_ceo ac1, anggota2_ceo ac2
                    where kc.Tim_id = '".$id."' and ac1.Tim_id = '".$id."' and ac2.Tim_id = '".$id."' ";
        $cek_data = $this->db->query($SQL_all);
        $cek_data = $cek_data->result();
        foreach($cek_data as $post){
			$cek_data = $post->cek_data;
            };
            
        if ($cek_data == 'true') {
            return true;
        }else{return false;}
        
    }

    public function get_ketua($id){
        $SQL = "select *
                from ketua_ceo
                where Tim_id = '".$id."' ";
        $data = $this->db->query($SQL);
        if ($data->num_rows() > 0 ) {
            return $data->result();
        }
        else{
            return false;
        }
    }

    public function get_anggota1($id){
        $SQL = "select *
                from anggota1_ceo
                where Tim_id = '".$id."' ";
        $data = $this->db->query($SQL);
        if ($data->num_rows() > 0 ) {
            return $data->result();
        }
        else{
            return false;
        }
    }

    public function get_anggota2($id){
        $SQL = "select *
                from anggota2_ceo
                where Tim_id = '".$id."' ";
        $data = $this->db->query($SQL);
        if ($data->num_rows() > 0 ) {
            return $data->result();
        }
        else{
            return false;
        }
    }

    public function updata_insert_ketua($id, $scan, $foto){        
        $data = array(
            'NISN'=>$this->input->post('nisn_ketua_ceo'),
            'Tim_id'=>$id,
            'Nama_ketua'=>$this->input->post('nama_ketua_ceo'),
            'Tempat_Lahir'=>$this->input->post('kota_ketua_ceo'),
            'tanggal_lahir'=>$this->input->post('tgl_ketua_ceo'),
            'Jenis_kelamin'=>$this->input->post('jk_ketua_ceo'),
            'Kelas'=>$this->input->post('kelas_ketua_ceo'),
            'KontakWaLine'=>$this->input->post('kontak_ketua_ceo'),
            'Alamat'=>$this->input->post('alamat_ketua_ceo'),
            'Pasfoto'=> $foto,
            'KartuPelajar'=> $scan
            
        );

        $get_ketua = $this->get_ketua($id);
        if ($get_ketua != false) {
            $this->db->where('Tim_id',$id);
            $this->db->update('ketua_ceo', $data);

        }else{
            $this->db->where('Tim_id',$id);
            $this->db->insert('ketua_ceo', $data);
        }
        
        if ($this->db->affected_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function updata_insert_anggota1($id, $scan, $foto){        
        $data = array(
            'NISN'=>$this->input->post('nisn_anggota1_ceo'),
            'Tim_id'=>$id,
            'Nama_anggota1'=>$this->input->post('nama_anggota1_ceo'),
            'Tempat_Lahir'=>$this->input->post('kota_anggota1_ceo'),
            'tanggal_lahir'=>$this->input->post('tgl_anggota1_ceo'),
            'Jenis_kelamin'=>$this->input->post('jk_anggota1_ceo'),
            'Kelas'=>$this->input->post('kelas_anggota1_ceo'),
            'KontakWaLine'=>$this->input->post('kontak_anggota1_ceo'),
            'Alamat'=>$this->input->post('alamat_anggota1_ceo'),
            'Pasfoto'=> $foto,
            'KartuPelajar'=> $scan
            
        );

        $get_anggota1 = $this->get_anggota1($id);
        if ($get_anggota1 != false) {
            $this->db->where('Tim_id',$id);
            $this->db->update('anggota1_ceo', $data);

        }else{
            $this->db->where('Tim_id',$id);
            $this->db->insert('anggota1_ceo', $data);
        }
        
        if ($this->db->affected_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function updata_insert_anggota2($id, $scan, $foto){        
        $data = array(
            'NISN'=>$this->input->post('nisn_anggota2_ceo'),
            'Tim_id'=>$id,
            'Nama_anggota2'=>$this->input->post('nama_anggota2_ceo'),
            'Tempat_Lahir'=>$this->input->post('kota_anggota2_ceo'),
            'tanggal_lahir'=>$this->input->post('tgl_anggota2_ceo'),
            'Jenis_kelamin'=>$this->input->post('jk_anggota2_ceo'),
            'Kelas'=>$this->input->post('kelas_anggota2_ceo'),
            'KontakWaLine'=>$this->input->post('kontak_anggota2_ceo'),
            'Alamat'=>$this->input->post('alamat_anggota2_ceo'),
            'Pasfoto'=> $foto,
            'KartuPelajar'=> $scan
            
        );

        $get_anggota2 = $this->get_anggota2($id);
        if ($get_anggota2 != false) {
            $this->db->where('Tim_id',$id);
            $this->db->update('anggota2_ceo', $data);

        }else{
            $this->db->where('Tim_id',$id);
            $this->db->insert('anggota2_ceo', $data);
        }
        
        if ($this->db->affected_rows() > 0){
            return true;
        }
        else{
            return false;
        }
    }

    // pembayaran
    public function cek_pembayaran($id){
        $SQL = "select *
                from detailpendaftaran_ceo
                where Tim_id = '".$id."' ";
        $data = $this->db->query($SQL);
        if ($data->num_rows() > 0 ) {
            return array(
                'data'=>$data->result(),
                'cek' =>true
            );
        }
    }

    public function upload_pembayaran($id, $file){
        $data = array(
            'bukti_pembayaran' => $file,
            'Status_pembayaran' => '02'
        );
        $this->db->where('Tim_id', $id);
        $this->db->update('detailpendaftaran_ceo', $data);

        if ($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }

    public function get_akun($id){
        $SQL = "select *
                from tim_ceo
                where Tim_id = '".$id."' ";
        $data = $this->db->query($SQL)->result();
        return $data;
    }

    public function resetPassword($id){
        $new_password = $this->input->post('new_pwd');
        $old_password = $this->input->post('old_pwd');
        $data = array(
            'PASSWORD' => $new_password
        );
        $this->db->where('Tim_id', $id);
        $this->db->where('PASSWORD', $old_password);
        $this->db->update('tim_ceo', $data);

        if ($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }

     public function hitung_nilai($id, $id_ujian, $kode_soal){
        $nilai = 0;
        $jawaban_user = $this->db->get_where('soal_dikerjakan', array('Tim_id'=>$id, 'id_ujian'=>$id_ujian, 'kode_soal'=>$kode_soal));
        if ($jawaban_user->num_rows() == 0){
            $nilai = 0;
            return $nilai;
        }else{
            $jawaban_user = $jawaban_user->result();
            $kunci_jawaban = $this->db->get_where('soal_ujian',array('id_ujian'=>$id_ujian, 'kode_soal'=>$kode_soal))->result();
            foreach($kunci_jawaban as $kunci){
                $kunci_arr[$kunci->no_soal] = array($kunci->kunci_jawaban,(int)$kunci->bobot);
            }
            foreach($jawaban_user as $j){
                if($kunci_arr[$j->no_soal][0] == $j->jawaban){
                    $nilai += $kunci_arr[$j->no_soal][1];
                }else{
                    $nilai -= 1;
                }
            }
        return $nilai;
        }
    }

    public function validate_date($now, $date_val){
        if ($date_val == $now){
            return "sekarang";
        }else{
            $date_val = explode("-", $date_val);
            $now = explode("-", $now);
            if ($date_val[2] > $now[2]){
                return "belum";
            }elseif($date_val[2] < $now[2]){
                return "sudah";
            }elseif($date_val[2] == $now[2]){
                if($date_val[1] > $now[1]){
                    return "belum";
                }elseif($date_val[1] < $now[1]){
                    return "sudah";
                }elseif($date_val[1] == $now[1]){
                    if($date_val[0] > $now[0]){
                        return "belum";
                    }elseif($date_val[0] < $now[0]){
                        return "sudah";
                    }elseif($date_val[0] == $now[0]){
                        return "sekarang";
                    }
                }
            }
        }
        
    }

    public function dashboardCBT($id){
        
        date_default_timezone_set("Asia/Bangkok");
        // for tryout
        $sql_TO ="select *
                FROM tryout, ujian_online, sesi
                WHERE tryout.id_ujian = ujian_online.id_ujian AND sesi.id_sesi = tryout.Sesi and tryout.Tim_id = '".$id."'";
        
        $this->db->where(array('Tim_id'=>$id));
        $tryout = $this->db->query($sql_TO);
        if($tryout->num_rows() == 0){
            //peserta tidak masuk dalam peserta to
            $data['tryout'] = 'belum_ada_test';
        }
        else{
            foreach($tryout->result() as $to){
                $tanggal_ujian = $to->tanggal_ujian;
                $jam_mulai = $to->jam_mulai;
                $jam_selesai = $to->jam_selesai;
                $dikerjakan = $to->dikerjakan;
                $nilai = $to->nilai;
                $kode_soal = $to->kode_soal;
                $data['kode_to'] = $kode_soal;
            }
            if($dikerjakan == 'no'){
            // datevalidate
            $date_now = date("d-m-Y");
            $validate_date = $this->validate_date($date_now, $tanggal_ujian);
            if ($date_now == $tanggal_ujian){    
                $time = date("H.i");
                if($time > $jam_mulai && $time < $jam_selesai){
                        //masuk tanggal dan waktu ujian
                        $data['tryout'] = 'belum_dikerjakan';
                }elseif($time < $jam_mulai){
                    //belum masuk jam ujian
                    $data['tryout'] = 'belum_ada_test';
                }elseif($time > $jam_selesai){
                    //jam lewat terdaftar ujian
                    $nilai = $this->hitung_nilai($id, '1', $kode_soal);
                    $this->db->where(array('Tim_id'=>$id));
                    $this->db->update('tryout',array('dikerjakan'=>'ya', 'nilai'=>$nilai));
                    $data['tryout'] = 'sudah_dikerjakan';
                    $data['nilai_to'] = $nilai;
                }
            }elseif($validate_date == "belum"){
                //belum masuk tanggal ujian
                $data['tryout'] = 'belum_ada_test';
            }elseif($validate_date == "sudah"){
                //tanggal lewat terdaftar ujian
                $nilai = $this->hitung_nilai($id, '1', $kode_soal);
                $this->db->where(array('Tim_id'=>$id));
                $this->db->update('tryout',array('dikerjakan'=>'ya', 'nilai'=>$nilai));
                $data['tryout'] = 'sudah_dikerjakan';
                $data['nilai_to'] = $nilai;
            }
            //validatedate
            }else{
                //to sudah dikerjakan
                $data['tryout'] = 'sudah_dikerjakan';
                $data['nilai_to'] = $nilai;
            }
        }
        // $data['jam_selesai'] = $jam_selesai;
        // $data['jam_mulai'] = $jam_mulai;
        $data['id_tim'] = $id;

        // for penyisihan
        $sql_TO ="select *
                FROM penyisihan, ujian_online, sesi
                WHERE penyisihan.id_ujian = ujian_online.id_ujian AND sesi.id_sesi = penyisihan.sesi and penyisihan.Tim_id = '".$id."'";
        
        $this->db->where(array('Tim_id'=>$id));
        $penyisihan = $this->db->query($sql_TO);
        if($penyisihan->num_rows() == 0){
            //peserta tidak masuk dalam peserta to
            $data['penyisihan'] = 'belum_ada_test';
        }
        else{
            foreach($penyisihan->result() as $to){
                $tanggal_ujian = $to->tanggal_ujian;
                $jam_mulai = $to->jam_mulai;
                $jam_selesai = $to->jam_selesai;
                $dikerjakan = $to->dikerjakan;
                $nilai = $to->nilai;
                $kode_soalpe = $to->kode_soal;
            }
            if($dikerjakan == 'no'){
            // datevalidate
            $date_now = date("d-m-Y");
            $validate_date = $this->validate_date($date_now, $tanggal_ujian);
            if ($date_now == $tanggal_ujian){    
                $time = date("H.i");
                if($time > $jam_mulai && $time < $jam_selesai){
                        //masuk tanggal dan waktu ujian
                        $data['penyisihan'] = 'belum_dikerjakan';
                }elseif($time < $jam_mulai){
                    //belum masuk jam ujian
                    $data['penyisihan'] = 'belum_ada_test';
                }elseif($time > $jam_selesai){
                    //jam lewat terdaftar ujian
                    $nilai = $this->hitung_nilai($id, '2', $kode_soalpe);
                    $this->db->where(array('Tim_id'=>$id));
                    $this->db->update('penyisihan',array('dikearjakan'=>'ya', 'nilai'=>$nilai));
                    $data['penyisihan'] = 'sudah_dikerjakan';
                    $data['nilai_pe'] = $nilai;
                }
            }elseif($validate_date == "belum"){
                //belum masuk tanggal ujian
                $data['penyisihan'] = 'belum_ada_test';
            }elseif($validate_date == "sudah"){
                //tanggal lewat terdaftar ujian
                $nilai = $this->hitung_nilai($id, '2', $kode_soalpe);
                $this->db->where(array('Tim_id'=>$id));
                $this->db->update('penyisihan',array('dikerjakan'=>'ya', 'nilai'=>$nilai));
                $data['penyisihan'] = 'sudah_dikerjakan';
                $data['nilai_pe'] = $nilai;
            }
            //validatedate
            }else{
                //to sudah dikerjakan
                $data['penyisihan'] = 'sudah_dikerjakan';
                $data['nilai_pe'] = $nilai;
            }
        }
        $data['Kode_PE'] = $kode_soalpe;
        return $data;
    }
}