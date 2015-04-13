<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller {
	public function index()
	{
		#ablil data video
        $this->load->model('video_model');
        $query = $this->video_model->getAll(0);
        foreach ($query as $row)
        {
            $data['video']['link'] = $row->Link;
            $data['video']['judul'] = $row->JudulVideo;
        }

        #ambil data oorgansasi
		$this->load->model('organisasi_model');
        $query = $this->organisasi_model->getAll(1);
        foreach ($query as $row)
        {
            $data['deskripsi_organisasi'] = $row->Deskripsi;
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

        #ambil data video
        $this->load->model('video_model');
        $query = $this->video_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['video'][$i]['id'] = $row->IDVideo;
            $data['video'][$i]['link'] = $row->Link;
            $data['video'][$i]['judul'] = $row->JudulVideo;
            $i++;
        }
        $data['videonum'] = $i;

        #ambil data gambar
        $this->load->model('gambar_model');
        $query = $this->gambar_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['gambar'][$i]['id'] = $row->IDGambar;
            $data['gambar'][$i]['data'] = $row->DataGambar;
            $data['gambar'][$i]['judul'] = $row->JudulGambar;
            $i++;
        }
        $data['gambarnum'] = $i;

        #ambil data event

        /*$this->load->model('event_model');
        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['deskripsi'] = $row->DeskripsiEvent;
            $i++;

            $this->load->model('listgambar_model');
            $query = $this->listgambar_model->selectById($data['id']);
            $j = 0;
            foreach ($query as $row)
            {
                $data['gambar'][$i]['id'] = $row->IDGambar;
                $data['gambar'][$i]['data'] = $row->DataGambar;
                $data['gambar'][$i]['judul'] = $row->JudulGambar;
                $j++;
            }
            $data['gambarnum'] = $j;     
        }
        $data['eventnum'] = $i;*/
        #ambil data event
        $this->load->model('event_model');
        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['mulai'] = $row->TglMulai;
            $data['kegiatan'][$i]['deskripsi'] = $row->DeskripsiEvent;
            $i++;
        }

        $data['eventnum'] = $i;
		
        $this->load->view('website/v_websitehead');
        $this->load->view('website/v_websitenav', $data);        
		$this->load->view('website/index');
        $this->load->view('website/v_websitefooter');
		$this->load->view('website/v_websitefoot');
	}

    public function event($id)
    {
        #ambil data oorgansasi
        $this->load->model('organisasi_model');
        $query = $this->organisasi_model->getAll(1);
        foreach ($query as $row)
        {
            $data['deskripsi_organisasi'] = $row->Deskripsi;
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


        #ambil data gambar
        $this->load->model('gambar_model');
        $query = $this->gambar_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['gambar'][$i]['id'] = $row->IDGambar;
            $data['gambar'][$i]['data'] = $row->DataGambar;
            $data['gambar'][$i]['judul'] = $row->JudulGambar;
            $i++;
        }

        #ambil data event
        $this->load->model('event_model');

        $event = $this->event_model->select($id);
        $data['id'] = $event->IDEvent;
        $data['nama'] = $event->NamaEvent;
        $data['deskripsi'] = $event->DeskripsiEvent;

        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['mulai'] = $row->TglMulai;
            $data['kegiatan'][$i]['deskripsi'] = $row->DeskripsiEvent;
            $i++;
        }

        $data['eventnum'] = $i;
        $this->load->view('website/v_websitehead');
        $this->load->view('website/v_websitenavdetail', $data);
        $this->load->view('website/portfolio_single');
        $this->load->view('website/v_websitefooter');
        $this->load->view('website/v_websitefoot');
    }
}