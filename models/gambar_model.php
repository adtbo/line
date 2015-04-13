<?php
	/**
	* 
	*/
	class Gambar_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function getAll()
		{
			$query = $this->db->get('gambar');
			return $query->result(); 
		}
		
		public function getID()
		{
			$i = 0;
			$save = $this->db->query('select IDGambar from gambar where IDGambar ="'.$i.'"');
			while($save->num_rows() == 1)
			{
				$i = $i + 1;
				$save = $this->db->query('select IDGambar from gambar where IDGambar ="'.$i.'"');
			}
			return $i;
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
			$this->db->insert('gambar', $data);
		}

		public function getDataGambar()
		{
			$query = $this->db->query('SELECT gambar.idgambar, gambar.datagambar, gambar.judulgambar, gambar.waktugambar, gambar.deskripsigambar FROM gambar');
			return $query->result();
		}

        public function countItem()
        {
            $query = $this->db->get('gambar');
            return $query->num_rows();
        }
        
		public function select($id)
		{
			$this->db->where('IDGambar',$id);
			return $this->db->get('gambar')->row();
		}

		public function update($id, $data)
		{
			$this->db->where('IDGambar',$id);
			return $this->db->update('gambar',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDGambar',$id);
			return $this->db->delete('gambar');
		}
		public function masuk($data)
		{
			$query = $this->db->insert('gambar',$data);
			return $query;
		}
	}
?>