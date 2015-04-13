<?php
	/**
	* 
	*/
	class Video_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		
		public function getID()
		{
			$i = 0;
			$save = $this->db->query('select IDVideo from video where IDVideo ="'.$i.'"');
			while($save->num_rows() == 1)
			{
				$i = $i + 1;
				$save = $this->db->query('select IDVideo from video where IDVideo ="'.$i.'"');
			}
			return $i;
		}
		
		/*public function setDataVideo($id_video, $link, $judul_video, $waktu_video)
		{
			$data = array(
				'idvideo' => $id_video,
				'link' => $link,
				'judulvideo' => $judul_video,
				'waktuvideo' => $waktu_video
				);
			$this->db->insert('video', $data);
		}

		
		public function getAll()
		{
			$query = $this->db->get('video');
			return $query->result(); 
		}
		

		public function getDataVideo()
		{
			$query = $this->db->query('SELECT video.idvideo, video.link, video.judulvideo, video.waktuvideo, FROM video');
			return $query->result();
		}

		public function select($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->get('video')->row();
		}
		
		public function insertVideoProfile($link)
		{
			$this->db->set('judulVideo', 'Profil EarthHour');
			$this->db->set('waktuVideo', 'NOW()', false);
			$this->db->set('linkVideo', $link);
			$this->db->insert('video');
		}
		public function update($id, $data)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->update('video',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->delete('video');
		}
		public function masuk($data)
		{
			$query = $this->db->insert('video',$data);
			return $query;
		}*/

		public function getAll()
		{
			$query = $this->db->get('video');
			return $query->result(); 
		}
		
        public function countItem()
        {
            $query = $this->db->get('video');
            return $query->num_rows();
        }
        
		public function find()
		{
			$query = $this->db->get('video');
			return $query->result(); 
		}

		public function select($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->get('video')->row();
		}

		public function masuk($data)
		{
			$query = $this->db->insert('video',$data);
			return $query;
		}

		public function update($id, $data)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->update('video',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDVideo',$id);
			return $this->db->delete('video');
		}
	}
?>