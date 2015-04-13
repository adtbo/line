<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index($id)
    {
        echo $id;

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
        $query = $this->event_model->getAll();
        $i = 0;
        foreach ($query as $row)
        {
            $data['kegiatan'][$i]['id'] = $row->IDEvent;
            $data['kegiatan'][$i]['nama'] = $row->NamaEvent;
            $data['kegiatan'][$i]['deskripsi'] = $row->DeskripsiEvent;
            $i++;
        }

        $data['eventnum'] = $i;
        $this->load->view('website/v_websitenav');
        $this->load->view('website/v_websitehead', $data);
        $this->load->view('website/portfolio_single');
        $this->load->view('website/v_websitefooter');
        $this->load->view('website/v_websitefoot');
    }

    public function event($id)
    {
        echo $id;
    }
}