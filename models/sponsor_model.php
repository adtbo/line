<?php
	/**
	* 
	*/
	class Sponsor_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

            
        public function countItem()
        {
            $query = $this->db->get('sponsor');
            return $query->num_rows();
        }
        
		public function find()
		{
			return $this->db->get('sponsor')->result();
		}

		public function getID()
		{
			$i = 0;
			$save = $this->db->query('select IDSponsor from sponsor where IDSponsor ="'.$i.'"');
			while($save->num_rows() == 1)
			{
				$i = $i + 1;
				$save = $this->db->query('select IDSponsor from sponsor where IDSponsor ="'.$i.'"');
			}
			return $i;
		}
		
		public function select($id)
		{
			$this->db->where('IDSponsor',$id);
			return $this->db->get('sponsor')->row();
		}

		public function masuk($data)
		{
			return $this->db->insert('sponsor',$data);
		}

		public function update($id, $data)
		{
			$this->db->where('IDSponsor',$id);
			return $this->db->update('sponsor',$data);
		}

		public function delete($id)
		{
			$this->db->where('IDSponsor',$id);
			return $this->db->delete('sponsor');
		}
	}
?>