<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('CeoRegist_m', 'CR');
		$this->load->model('CeoDashboard_m', 'CD');
		$this->load->model('Ec_m', 'EC');
		$this->load->model('Hsfc_m', 'HF');
		$this->load->library('session');
		$this->load->helper(array('form', 'url')); 
	}


	//====================================================================

	//load hompage
	public function index()
	{
        $this->load->view("home.php");
	}

	//load CEO homepage
	public function ceo()
	{
        $this->load->view("ceo.php");
	}



	//====================================================================



	//====================================================================
	// register controller
	public function CeoRegist()
	{
	$data=array(
		// tim
		'Nama_Tim'=>$this->input->post('nama_tim_ceo'),
		'sekolah'=>$this->input->post('sekolah_ceo'),
		'Kota'=>$this->input->post('kota_ceo'),
		'alamat'=>$this->input->post('alamat_ceo'),
		'email'=>$this->input->post('email_ceo'),
		'PASSWORD'=>$this->input->post('password_ceo')
		    );
	$data['email_msg'] = '';
        $this->load->view("ceo_regist.php", $data);
	}
	//====================================================================
	


	//====================================================================
	// submit register controller
	public function ceo_submit()
	{
	$cekEmail = $this->CR->cekEmail();
		if ($cekEmail) {
			$result = $this->CR->register();
			if ($result == true){
			$data=array(
				// tim
				'email'=>$this->input->post('email_ceo'),
				'PASSWORD'=>$this->input->post('password_ceo')
					);
			$data['succsesLogin_msg'] = 'Registrasi Berhasil Silahkan Login dibawah';
			$data['email_msg'] = '';
			$this->load->view("ceo_login.php", $data);
			}
		}else{	
			$data=array(
				// tim
				'Nama_Tim'=>$this->input->post('nama_tim_ceo'),
				'sekolah'=>$this->input->post('sekolah_ceo'),
				'Kota'=>$this->input->post('kota_ceo'),
				'alamat'=>$this->input->post('alamat_ceo'),
				'email'=>$this->input->post('email_ceo'),
				'PASSWORD'=>$this->input->post('password_ceo')
			);
			$data['email_msg'] = 'Email Sudah digunakan';
			$this->load->view("ceo_regist.php", $data);
		}
	}
	//====================================================================

	
	//====================================================================	
	// login CEO controller
	public function CeoLogin()
	{
	$data=array(
		// tim
		'email'=>$this->input->post('email_ceo'),
		'PASSWORD'=>$this->input->post('password_ceo')
			);
	
	$data['succsesLogin_msg'] = '';
	$data['email_msg'] = '';
    $this->load->view("ceo_login.php", $data);
	}
	//====================================================================


	//====================================================================
	// submit login
	public function CeoLogin_submit()
	{
	$cekLogin = $this->CD->login();
		// cek email or password while login
		if (!$cekLogin) {
				$data=array(
					// tim
					'email'=>$this->input->post('email_ceo'),
					'PASSWORD'=>$this->input->post('password_ceo')
						);
				$data['succsesLogin_msg'] = '';
				$data['email_msg'] = 'Email atau password salah';
				$this->load->view("ceo_login.php", $data);
			}
		// if login true
		else{
				// get user data
				$data['posts'] = $this->CD->getData();
					foreach($data['posts'] as $post){
					$userdata['id']=$post->Tim_id;
					}
				
				// set sesseion data
				$this->session->set_userdata($userdata);
				
				// send data with session to dashboard
				$data_cek = $this->CD->home_model($this->session->userdata('id'));
				// cek user data
					if ($data_cek['cek']) {
						$dataMSG['jadwal'] = $data_cek['jadwal'];
						$dataMSG['konfirmasi'] = 'Pendaftaran Dikonfirmasi';
						$dataMSG['warning'] = 'kosong';
						$dataMSG['posts'] = $data_cek['news'];
					}else{
						$dataMSG['jadwal'] = $data_cek['jadwal'];
						$dataMSG['konfirmasi'] = 'kosong';
						$dataMSG['warning'] = '<b>PENDAFTARAN BELUM TERVALIDASI</b>
						<br>silahkan lengkapi "Data Ketua & anggota" dan Upload Bukti Pembayaran 
						<br><i>bila sudah melengkapi data dan sudah mengupload bukti pembayaran. 
						silahkan tunggu pantia melakukan validasi atau hubingi panitia</i>';
						$dataMSG['posts'] = $data_cek['news'];
					}
				//load dashboard view
				$this->load->view('DashboardCEO/dashboard', $dataMSG);
			}
	}
	//====================================================================


	//====================================================================
	// load Dashboard
	public function DashboardCEO(){
	    if($this->session->userdata('id')!== null){
		$data_cek = $this->CD->home_model($this->session->userdata('id'));

				if ($data_cek['cek']) {
					$dataMSG['jadwal'] = $data_cek['jadwal'];
					$dataMSG['konfirmasi'] = 'Pendaftaran Dikonfirmasi';
					$dataMSG['warning'] = 'kosong';
					$dataMSG['posts'] = $data_cek['news'];
				}

				else{
					$dataMSG['jadwal'] = $data_cek['jadwal'];
					$dataMSG['konfirmasi'] = 'kosong';
					$dataMSG['warning'] = '<b>PENDAFTARAN BELUM TERVALIDASI</b>
					<br>silahkan lengkapi "Data Ketua & anggota" dan Upload Bukti Pembayaran 
					<br><i>bila sudah melengkapi data dan sudah mengupload bukti pembayaran. 
					silahkan tunggu pantia melakukan validasi atau hubingi panitia</i>';
					$dataMSG['posts'] = $data_cek['news'];
				}
				
				$this->load->view('DashboardCEO/dashboard', $dataMSG);
	    }else{
	        redirect('Home/CeoLogin');
	    }
	}
	//====================================================================


	public function Logout(){
		$this->session->sess_destroy();
		redirect('Home/ceo');
	}

	//====================================================================
	// ketua_ceo
	public function KetuaCEO(){
	    if($this->session->userdata('id')!== null){
		$get_data = $this->CD->cek_data_anggota($this->session->userdata('id'));
		if ($get_data) {
			$data['error_msg'] ='kosong';
			$data['success_msg']='Data Lengkap';
			$data_ketua = $this->CD->get_ketua($this->session->userdata('id'));
			$data['data_ketua'] = $data_ketua;
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/ketua_rekap', $data);
		}else{
			$data['error_msg'] ='Data Belum Lengkap, silahkan isikan data ketua, anggota 1 dan anggota 2';
			$data['success_msg']='Kosong';
			$data_ketua = $this->CD->get_ketua($this->session->userdata('id'));
			if ($data_ketua != false) {
				$data['data_ketua'] = $data_ketua;
				$this->load->view('DashboardCEO/data_header');
				$this->load->view('DashboardCEO/ketua_rekap', $data);
			}else{
				$this->load->view('DashboardCEO/data_header');
				$this->load->view('DashboardCEO/ketua_save', $data);
			}
		}
	    }else{
	        redirect('Home/CeoLogin');
	    }
	}
	



	public function Update_KetuaCEO(){
	     if($this->session->userdata('id')!== null){
		$data_ketua = $this->CD->get_ketua($this->session->userdata('id'));
		if ($data_ketua != false) {
			$data['error_msg'] ='Update data ketua dibawah';
			$data['success_msg']='Kosong';
			$data['data_ketua'] = $data_ketua;
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/ketua_save', $data);
		}else{
			$data['error_msg'] ='Data Belum Lengkap, silahkan isikan data ketua, anggota 1 dan anggota 2';
			$data['success_msg']='Kosong';
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/ketua_save', $data);
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function uploadFotoKetuaCEO(){
	     if($this->session->userdata('id')!== null){
		$config['upload_path']   = './uploaded/CEO/PasFoto'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite'] = true;
		$config['file_name'] = $this->session->userdata('id').'Ketua_CEO'.uniqid();
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		if (!$this->upload->do_upload('foto_ketua_ceo')) {
            $error = $this->upload->display_errors(); 
            return false;  	
        }else {
			$array = explode('.', $_FILES['foto_ketua_ceo']['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function uploadScanKetuaCEO(){
	     if($this->session->userdata('id')!== null){
		$config['upload_path']   = './uploaded/CEO/Scan'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['file_name'] = $this->session->userdata('id').'Ketua_CEO'.uniqid();
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		if ( !$this->upload->do_upload('scan_ketua_ceo')) {
            $error = $this->upload->display_errors(); 
            return false;	
        }else {
			$array = explode('.', $_FILES['scan_ketua_ceo']['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function submit_data_ketuaCEO(){
	     if($this->session->userdata('id')!== null){
		$foto = $this->uploadFotoKetuaCEO();
		$scan = $this->uploadScanKetuaCEO();
		if ($foto == false && $scan == false) {
			echo "error";
		}else{
			$cek = $this->CD->updata_insert_ketua($this->session->userdata('id'),$scan,$foto);
			if ($cek) {
				redirect('Home/KetuaCEO');
			}else{
				redirect('Home/KetuaCEO');
			}

		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
		
	}
	//====================================================================
	
	//====================================================================
	// anggota 1 coe	
	public function anggota1CEO(){
        
         if($this->session->userdata('id')!== null){
		$get_data = $this->CD->cek_data_anggota($this->session->userdata('id'));
		if ($get_data) {
			$data['error_msg'] ='kosong';
			$data['success_msg']='Data Lengkap';
			$data_anggota1 = $this->CD->get_anggota1($this->session->userdata('id'));
			$data['data_anggota1'] = $data_anggota1;
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/anggota1_rekap', $data);
		}else{
			$data['error_msg'] ='Data Belum Lengkap, silahkan isikan data ketua, anggota 1 dan anggota 2';
			$data['success_msg']='Kosong';
			$data_anggota1 = $this->CD->get_anggota1($this->session->userdata('id'));
			if ($data_anggota1 != false) {
				$data['data_anggota1'] = $data_anggota1;
				$this->load->view('DashboardCEO/data_header');
				$this->load->view('DashboardCEO/anggota1_rekap', $data);
			}else{
				$this->load->view('DashboardCEO/data_header');
				$this->load->view('DashboardCEO/anggota1_save', $data);
			}
		}
         }else{
	        redirect('Home/CeoLogin');
	    }
	}



	public function Update_anggota1CEO(){
	     if($this->session->userdata('id')!== null){
		$data_anggota1 = $this->CD->get_anggota1($this->session->userdata('id'));
		if ($data_anggota1 != false) {
			$data['error_msg'] ='Update data anggota 1 dibawah';
			$data['success_msg']='Kosong';
			$data['data_anggota1'] = $data_anggota1;
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/anggota1_save', $data);
		}else{
			$data['error_msg'] ='Data Belum Lengkap, silahkan isikan data ketua, anggota 1 dan anggota 2';
			$data['success_msg']='Kosong';
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/anggota1_save', $data);
			$this->load->view('DashboardCEO/anggota1_save', $data);
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function uploadFotoAnggota1Ceo(){
	     if($this->session->userdata('id')!== null){
		$config['upload_path']   = './uploaded/CEO/PasFoto'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite'] = true;
		$config['file_name'] = $this->session->userdata('id').'anggota1_CEO'.uniqid();
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		if (!$this->upload->do_upload('foto_anggota1_ceo')) {
            $error = $this->upload->display_errors(); 
            return false;  	
        }else {
			$array = explode('.', $_FILES['foto_anggota1_ceo']['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function uploadScanAnggota1Ceo(){
	     if($this->session->userdata('id')!== null){
		$config['upload_path']   = './uploaded/CEO/Scan'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['file_name'] = $this->session->userdata('id').'anggota1_CEO'.uniqid();
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		if ( !$this->upload->do_upload('scan_anggota1_ceo')) {
            $error = $this->upload->display_errors(); 
            return false;	
        }else {
			$array = explode('.', $_FILES['scan_anggota1_ceo']['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function submit_data_anggota1CEO(){
	     if($this->session->userdata('id')!== null){
		$foto = $this->uploadFotoAnggota1Ceo();
		$scan = $this->uploadScanAnggota1Ceo();
		if ($foto == false && $scan == false) {
			echo "error";
		}else{
			$cek = $this->CD->updata_insert_anggota1($this->session->userdata('id'),$scan,$foto);
			if ($cek) {
				redirect('Home/anggota1CEO');
			}else{
				redirect('Home/anggota1CEO');
			}

		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
		
	}


	//====================================================================
	// anggota 2 coe	
	public function anggota2CEO(){
         if($this->session->userdata('id')!== null){
		$get_data = $this->CD->cek_data_anggota($this->session->userdata('id'));
		if ($get_data) {
			$data['error_msg'] ='kosong';
			$data['success_msg']='Data Lengkap';
			$data_anggota2 = $this->CD->get_anggota2($this->session->userdata('id'));
			$data['data_anggota2'] = $data_anggota2;
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/anggota2_rekap', $data);
		}else{
			$data['error_msg'] ='Data Belum Lengkap, silahkan isikan data ketua, anggota 1 dan anggota 2';
			$data['success_msg']='Kosong';
			$data_anggota2 = $this->CD->get_anggota2($this->session->userdata('id'));
			if ($data_anggota2 != false) {
				$data['data_anggota2'] = $data_anggota2;
				$this->load->view('DashboardCEO/data_header');
				$this->load->view('DashboardCEO/anggota2_rekap', $data);
			}else{
				$this->load->view('DashboardCEO/data_header');
				$this->load->view('DashboardCEO/anggota2_save', $data);
			}
		}
         }else{
	        redirect('Home/CeoLogin');
	    }
	}



	public function Update_anggota2CEO(){
	     if($this->session->userdata('id')!== null){
		$data_anggota2 = $this->CD->get_anggota2($this->session->userdata('id'));
		if ($data_anggota2 != false) {
			$data['error_msg'] ='Update data anggota 1 dibawah';
			$data['success_msg']='Kosong';
			$data['data_anggota2'] = $data_anggota2;
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/anggota2_save', $data);
		}else{
			$data['error_msg'] ='Data Belum Lengkap, silahkan isikan data ketua, anggota 1 dan anggota 2';
			$data['success_msg']='Kosong';
			$this->load->view('DashboardCEO/data_header');
			$this->load->view('DashboardCEO/anggota2_save', $data);
			$this->load->view('DashboardCEO/anggota2_save', $data);
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function uploadFotoAnggota2Ceo(){
	     if($this->session->userdata('id')!== null){
		$config['upload_path']   = './uploaded/CEO/PasFoto'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['overwrite'] = true;
		$config['file_name'] = $this->session->userdata('id').'anggota2_CEO'.uniqid();
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		if (!$this->upload->do_upload('foto_anggota2_ceo')) {
            $error = $this->upload->display_errors(); 
            return false;  	
        }else {
			$array = explode('.', $_FILES['foto_anggota2_ceo']['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function uploadScanAnggota2Ceo(){
	     if($this->session->userdata('id')!== null){
		$config['upload_path']   = './uploaded/CEO/Scan'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['file_name'] = $this->session->userdata('id').'anggota2_CEO'.uniqid();
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		if ( !$this->upload->do_upload('scan_anggota2_ceo')) {
            $error = $this->upload->display_errors(); 
            return false;	
        }else {
			$array = explode('.', $_FILES['scan_anggota2_ceo']['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	public function submit_data_anggota2CEO(){
	     if($this->session->userdata('id')!== null){
		$foto = $this->uploadFotoAnggota2Ceo();
		$scan = $this->uploadScanAnggota2Ceo();
		if ($foto == false && $scan == false) {
			echo "error";
		}else{
			$cek = $this->CD->updata_insert_anggota2($this->session->userdata('id'),$scan,$foto);
			if ($cek) {
				redirect('Home/anggota2CEO');
			}else{
				redirect('Home/anggota2CEO');
			}

		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
		
	}

	//====================================================================
	// upload pembayaran
	
	public function PembayaranCEO(){
         if($this->session->userdata('id')!== null){
		$cek_status = $this->CD->cek_pembayaran($this->session->userdata('id'));
		if ($cek_status['cek']) {
			$data['detail']= $cek_status['data'];
			$this->load->view('DashboardCEO/upload_pembayaran', $data);
		}else{
			echo "error 404";
		}
         }else{
	        redirect('Home/CeoLogin');
	    }
	}
		


	public function submit_pembayaranCEO() {
	     if($this->session->userdata('id')!== null){
		$config['upload_path']   = './uploaded/CEO/Pembayaran/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; 
		$config['file_name'] = $this->session->userdata('id').'bukti_CEO'.uniqid();
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 

		if ( !$this->upload->do_upload('bukti_pembayaran_ceo')) {
            $error = $this->upload->display_errors(); 
            return false;	
        }else {
			$array = explode('.', $_FILES['bukti_pembayaran_ceo']['name']);
			$extension = end($array);  
			$file = $config['file_name'].'.'.$extension;
			
			$submit_pembayaran = $this->CD->upload_pembayaran($this->session->userdata('id'), $file);
			redirect('Home/PembayaranCEO');
		}
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	//====================================================================
	// InformasiAkun
	public function InformasiAkun(){
	     if($this->session->userdata('id')!== null){
		$data_akun = $this->CD->get_akun($this->session->userdata('id'));
		
		$data['data_akun'] = $data_akun;
		$this->load->view('DashboardCEO/Informasi_akun', $data);
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}
	

	public function resetPassword(){
	     if($this->session->userdata('id')!== null){
		$reset = $this->CD->resetPassword($this->session->userdata('id'));
		if ($reset) {
			$data['success_msg']='Password Berhasil diupdate';
		}else{
			$data['error_msg']='Password Lama salah atau Passwod Baru tidak boleh sama dengan Password Lama';
		}
		$data_akun = $this->CD->get_akun($this->session->userdata('id'));
		$data['data_akun'] = $data_akun;
		$this->load->view('DashboardCEO/Informasi_akun', $data);
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	//CBT dashboard
	public function Dashboard_CBT(){
	     if($this->session->userdata('id')!== null){
		$data = $this->CD->dashboardCBT($this->session->userdata('id'));
		$this->load->view('DashboardCEO/dashboard_cbt', $data);
	     }else{
	        redirect('Home/CeoLogin');
	    }
	}

	//load HomePage EC

	public function ec(){
		$cek_news = $this->EC->get_news();
		if ($cek_news != false){
			$data['post'] = $cek_news;
			$this->load->view('ec.php', $data);
		}else{
			$this->load->view('ec.php');
		}
	}

	public function ec_regist(){
		$this->load->view('ec_regist');
	}



	public function upload_foto_ec($id, $ketua_anggota, $form_name){
		$config['upload_path']   = './uploaded/EC/Foto'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc'; 
		$config['max_size'] = 250;
		$config['file_name'] = $id.$ketua_anggota;
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if ( !$this->upload->do_upload($form_name)) { 
            return false;	
        }else {
			$array = explode('.', $_FILES[$form_name]['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	}

	public function upload_scan_ec($id, $ketua_anggota, $form_name){
		$config['upload_path']   = './uploaded/EC/Scan'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc'; 
		$config['max_size'] = 250;
		$config['file_name'] = $id.$ketua_anggota;
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if ( !$this->upload->do_upload($form_name)) { 
            return false;	
        }else {
			$array = explode('.', $_FILES[$form_name]['name']);
			$extension = end($array);  
            return $config['file_name'].'.'.$extension;
		}
	}
	
	public function submit_ec_regist(){
		$Tim_id = $this->EC->insert_tim();
		//upload all file
		$foto_ketua = $this->upload_foto_ec($Tim_id, 'ketua', 'foto_ketua');
		$scan_ketua = $this->upload_scan_ec($Tim_id, 'ketua', 'scan_ketua');
		$foto_anggota1 = $this->upload_foto_ec($Tim_id, 'anggota1', 'foto_anggota1');
		$scan_anggota1 = $this->upload_scan_ec($Tim_id, 'anggota1', 'scan_anggota1');
		$foto_anggota2 = $this->upload_foto_ec($Tim_id, 'anggota2', 'foto_anggota2');
		$scan_anggota2 = $this->upload_scan_ec($Tim_id, 'anggota2', 'scan_anggota2');
		//===================================================================//

		if ($foto_ketua != false && $scan_ketua != false && $foto_anggota1 != false && $scan_anggota1 != false){
			$submit = $this->EC->submmit_ec($Tim_id, $foto_ketua,$scan_ketua,$foto_anggota1,$scan_anggota1,$foto_anggota2,$scan_anggota2);
			$data = $submit;
			redirect('Home/ec_success/'.$data);
		}else {
			
			$this->EC->delete_tim($Tim_id);
			$data['warning'] = 'Ukuran Setiap File Yang Diupload Tidak Boleh Melebihi 1 MB';
			$this->load->view('ec_regist', $data);
		}
	}
	
	public function ec_success($id){
	    $data['id']= $id;
	    $this->load->view('ec_success' ,$data);
	}

	public function hsfc(){
		$cek_news = $this->HF->get_news();
		if ($cek_news != false) {
			$data['news'] = $cek_news;
			$this->load->view('hsfc', $data);
		}else{
			$this->load->view('hsfc');
		}
	}
}