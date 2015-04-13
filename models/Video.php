<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getAll()
	{
		$query = $this->db->get('Video');
		return $query->result(); 
	}

	public function setDataVideo($id_video, $link, $judul_video, $waktu_video, $deskripsi_video)
	{
		$data = array(
			'idvideo' => $id_video,
			'link' => $link,
			'judulvideo' => $judul_video,
			'waktuvideo' => $waktu_video,
			'deskripsivideo' => $deskripsi_video
			);
		$this->db->insert('Video', $data);
	}

	public function getDataVideo()
	{
		$query = $this->db->query('SELECT video.idvideo, video.link, video.judulvideo, video.waktuvideo, video.deskripsivideo FROM video');
		return $query->result();
	}
}