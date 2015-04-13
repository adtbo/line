<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gambar extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function getAll()
	{
		$query = $this->db->get('Gambar');
		return $query->result(); 
	}

	public function setDataGambar($id_gambar, $data_gambar, $judul_gambar, $waktu_gambar, $deskripsi_gambar)
	{
		$data = array(
			'idgambar' => $id_gambar,
			'datagambar' => $data_gambar,
			'judulgambar' => $judul_gambar,
			'waktugambar' => $waktu_gambar,
			'deskripsigambar' => $deskripsi_gambar
			);
		$this->db->insert('Gambar', $data);
	}

	public function getDataGambar()
	{
		$query = $this->db->query('SELECT gambar.idgambar, gambar.datagambar, gambar.judulgambar, gambar.waktugambar, gambar.deskripsigambar FROM gambar');
		return $query->result();
	}
}