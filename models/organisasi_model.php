<?php
	/**
	* 
	*/
	class Organisasi_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function insert($data)
		{
			$query = $this->db->query("Select IDOrganisasi from organisasi where IDOrganisasi='".$data['IDOrganisasi']."'");
			if ($query->num_rows() > 0) return false;
			else
			{
				return $this->db->insert('organisasi',$data);
			}
		}

		public function getAll($id){
		  $query = $this->db->get_where('organisasi',array('IDOrganisasi'=>$id));
		  return $query->result();
		}
        
        public function updateDeskripsi($id, $desk)
        {
            $sql = "UPDATE organisasi SET Deskripsi='".$desk."' WHERE IDOrganisasi=".$id;
            $query = $this->db->query($sql);
        }
        
        public function updateKontak($id, $kontak)
        {
            $sql = "UPDATE organisasi SET Email='".$kontak['email']."', Alamat='".$kontak['alamat']."', NoTlp='".$kontak['telp']."', Facebook='".$kontak['facebook']."', Twitter='".$kontak['twitter']."', Pinterest='".$kontak['pinterest']."', Gplus='".$kontak['gplus']."', Linkedin='".$kontak['linkedin']."', Instagram='".$kontak['instagram']."'  WHERE IDOrganisasi=".$id;
            $query = $this->db->query($sql);
        }

	}
?>