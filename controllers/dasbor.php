<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	public function index()
	{
 		$this->check();
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['judulLaman'] = "dasborhome";
        $this->load->model('event_model');
        $this->load->model('gambar_model');
        $this->load->model('video_model');
        $this->load->model('sponsor_model');
        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['mulai'] = $row->TglMulai;
            $tmp = explode("-", $data['kegiatan'][$i]['mulai']);
            $data['kegiatan'][$i]['mulai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
            $data['kegiatan'][$i]['selesai'] = $row->TglSelesai;
            $tmp = explode("-", $data['kegiatan'][$i]['selesai']);
            $data['kegiatan'][$i]['selesai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
            $data['kegiatan'][$i]['deskripsi'] = $row->DeskripsiEvent;
            $i++;
        }
        $data['bulan'] = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        );
        $data['numkegiatan'] = $i;
        $data['jumkegiatan'] = $this->event_model->countItem();
        $data['jumgambar'] = $this->gambar_model->countItem();
        $data['jumvideo'] = $this->video_model->countItem();
        $data['jumsponsor'] = $this->sponsor_model->countItem();
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasborhome');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}
	
	public function check()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}
		else
		{
			//If no session, redirect to login page
			redirect('login', 'refresh');
		}
	}

	public function dasar()
	{
		$this->check();
        $this->load->model('organisasi_model');
        $query = $this->organisasi_model->getAll(1);
        foreach ($query as $row)
        {
            $data['deskripsi'] = $row->Deskripsi;
            $data['kontak']['alamat'] = $row->Alamat;
            $data['kontak']['email'] = $row->Email;
            $data['kontak']['telp'] = $row->NoTlp;
            $data['kontak']['facebook'] = $row->Facebook;
            $data['kontak']['twitter'] = $row->Twitter;
            $data['kontak']['pinterest'] = $row->Pinterest;
            $data['kontak']['gplus'] = $row->Gplus;
            $data['kontak']['linkedin'] = $row->Linkedin;
            $data['kontak']['instagram'] = $row->Instagram;
        }
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
        $data['judulLaman'] = "dasbordasar";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasbordasar');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function galeri()
	{
		$this->check();
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
        $data['judulLaman'] = "dasborgaleri";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
		$this->load->view('dasbor/v_dasborgaleri');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}

	public function kegiatan()
	{
		$this->check();
        $this->load->model('event_model');
        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['mulai'] = $row->TglMulai;
            $tmp = explode("-", $data['kegiatan'][$i]['mulai']);
            $data['kegiatan'][$i]['mulai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
            $data['kegiatan'][$i]['selesai'] = $row->TglSelesai;
            $tmp = explode("-", $data['kegiatan'][$i]['selesai']);
            $data['kegiatan'][$i]['selesai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
            $i++;
        }
        $data['numkegiatan'] = $i;
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
        $data['judulLaman'] = "dasborkegiatan";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
        $this->load->view('dasbor/v_dasborkegiatan');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
	}
    
    public function ekegiatan()
    {
		$this->check();
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $id = $this->input->post('ptr');
        $this->load->model('event_model');
        $query = $this->event_model->select($id);
        $data['id'] = $query->IDEvent;
        $data['nama'] = $query->NamaEvent;
        $data['mulai'] = $query->TglMulai;
        $tmp = explode("-", $data['mulai']);
        $data['mulai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
        $data['selesai'] = $query->TglSelesai;
        $tmp = explode("-", $data['selesai']);
        $data['selesai'] = $tmp[2]."/".$tmp[1]."/".$tmp[0];
        $data['des'] = $query->DeskripsiEvent;
        $this->load->model('listgambar_model');
        $query = $this->listgambar_model->selectById($data['id']);
        $i=0;
        foreach ($query as $row)
        {
            $data['gambar'][$i]['id'] = $row->IDGambar;
            $data['gambar'][$i]['data'] = $row->DataGambar;   
            $data['gambar'][$i]['judul'] = $row->JudulGambar;
            $data['gambar'][$i]['waktu'] = $row->WaktuGambar;
            $data['gambar'][$i]['deskripsi'] = $row->DeskripsiGambar;
            $i++;
        }
        $data['gambarnum'] = $i;
        $data['judulLaman'] = "dasborkegiatan";
		$this->load->view('dasbor/v_dasborhead', $data);
		$this->load->view('dasbor/v_dasbornav');
        $this->load->view('dasbor/v_dasborekegiatan');
		$this->load->view('dasbor/v_dasborpadding');
		$this->load->view('dasbor/v_dasborfoot');
    }
    
    function updatedes()
    {
		$this->check();
        $des = $this->input->post('tentang');
        $this->load->model('organisasi_model');
        $this->organisasi_model->updateDeskripsi(1, $des);
        header("location: ".site_url('dasbor/dasar'));
    }
    
    function updatekon()
    {
		$this->check();
        $kontak['email'] = $this->input->post('email');
        $kontak['alamat'] = $this->input->post('alamat');
        $kontak['telp'] = $this->input->post('telepon');
        $kontak['facebook'] = $this->input->post('facebook');
        $kontak['twitter'] = $this->input->post('twitter');
        $kontak['pinterest'] = $this->input->post('pinterest');
        $kontak['gplus'] = $this->input->post('gplus');
        $kontak['linkedin'] = $this->input->post('linkedin');
        $kontak['instagram'] = $this->input->post('instagram');
        $this->load->model('organisasi_model');
        $this->organisasi_model->updateKontak(1, $kontak);
        header("location: ".site_url('dasbor/dasar'));
    }
    
    function updatekeg()
    {
		$this->check();
        $id = $this->input->post('id');
        $info['NamaEvent'] = $this->input->post('NamaKegiatan');
        $info['TglMulai'] = $this->input->post('TanggalMulai');  
        $tmp = explode("/", $info['TglMulai']);
        $info['TglMulai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['TglSelesai'] = $this->input->post('TanggalSelesai');  
        $tmp = explode("/", $info['TglSelesai']);
        $info['TglSelesai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['DeskripsiEvent'] = $this->input->post('deskripsi');
        $config = array(
				'upload_path' => './uploads',
				'allowed_types' => '*'
			);
		$this->load->library('upload', $config);
        $this->load->model('gambar_model');
        $this->load->model('listgambar_model');
		$this->upload->initialize($config);
        $files = $_FILES;
        $ct = count($_FILES['gambar']['name']);
        for ($i=0; $i<$ct; $i++)
        {
            $_FILES['gambar']['name']= $files['gambar']['name'][$i];
            $_FILES['gambar']['type']= $files['gambar']['type'][$i];
            $_FILES['gambar']['tmp_name']= $files['gambar']['tmp_name'][$i];
            $_FILES['gambar']['error']= $files['gambar']['error'][$i];
            $_FILES['gambar']['size']= $files['gambar']['size'][$i]; 
            if (!$this->upload->do_upload('gambar'))
            {
                echo $this->upload->display_errors();
            }
            $imgstring = file_get_contents($_FILES['gambar']['tmp_name']);
            $idgambar = $this->gambar_model->getID();
            $this->gambar_model->setDataGambar($idgambar, $imgstring, $_FILES['gambar']['name'], date('Y-m-d'), 'deskripsi');
            $this->listgambar_model->insert($id, $idgambar);
            unlink('./uploads/'.$_FILES['gambar']['name']);
        }
        $this->load->model('event_model');
        $this->event_model->update($id, $info);
        header("location: ".site_url('dasbor/kegiatan'));
    }
    
    function inskeg()
    {
		$this->check();
		$this->load->model('event_model');
		$info['IDEvent'] = $this->event_model->getID();
        $info['NamaEvent'] = $this->input->post('NamaKegiatan');
        $info['TglMulai'] = $this->input->post('TanggalMulai');
        $tmp = explode("/", $info['TglMulai']);
        $info['TglMulai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['TglSelesai'] = $this->input->post('TanggalSelesai');
        $tmp = explode("/", $info['TglSelesai']);
        $info['TglSelesai'] = $tmp[2]."-".$tmp[1]."-".$tmp[0];
        $info['DeskripsiEvent'] = $this->input->post('deskripsi'); 
        $this->event_model->masuk($info);
        header("location: ".site_url('dasbor/kegiatan'));
    }

    function insgam()
    {
		$this->check();
        $this->load->model('gambar_model');
        //$info['IDGambar'] = $this->gambar_model->getID();
        $config = array(
                'upload_path' => './uploads',
                'allowed_types' => '*'
            );
        $this->load->library('upload', $config);
        $this->load->model('gambar_model');
        $this->upload->initialize($config);
        $files = $_FILES;
        $ct = count($_FILES['DataGambar']['name']);
        for ($i=0; $i<$ct; $i++)
        {
            $_FILES['DataGambar']['name']= $files['DataGambar']['name'][$i];
            $_FILES['DataGambar']['type']= $files['DataGambar']['type'][$i];
            $_FILES['DataGambar']['tmp_name']= $files['DataGambar']['tmp_name'][$i];
            $_FILES['DataGambar']['error']= $files['DataGambar']['error'][$i];
            $_FILES['DataGambar']['size']= $files['DataGambar']['size'][$i]; 
            if (!$this->upload->do_upload('DataGambar'))
            {
                echo $this->upload->display_errors();
            }
            $imgstring = file_get_contents($_FILES['DataGambar']['tmp_name']);
            $idgambar = $this->gambar_model->getID();
            $this->gambar_model->setDataGambar($idgambar, $imgstring, $this->input->post('NamaGambar'), date('Y-m-d'), $this->input->post('DeskripsiGambar'));
            unlink('./uploads/'.$_FILES['DataGambar']['name']);
        }
        header("location: ".site_url('dasbor/galeri'));
    }

    function insvid()
    {
		$this->check();
        $this->load->model('video_model');
        $info['IDVideo'] = $this->video_model->getID();
        $info['Link'] = $this->input->post('Link');
        $info['JudulVideo'] = $this->input->post('JudulVideo');
        $info['WaktuVideo'] = date('Y-m-d');
        $this->video_model->masuk($info);
        header("location: ".site_url('dasbor/galeri'));
    }
	
	function logout()
	{
		$this->check();
		$this->session->unset_userdata('logged_in');
		redirect('dasbor', 'refresh');
	}
	
	function upload_main_video()
	{
		$config['upload_path'] = 'assets/videopage/videos/';
		$config['allowed_types'] = 'webm';

		$this->load->library('upload', $config);

		if ( ! $this->upload->upload_main_video())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('v_dasbordasar', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('v_upload_success', $data);
		}
	}
}