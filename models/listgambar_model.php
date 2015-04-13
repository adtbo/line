<?php
	/**
	* 
	*/
	class Listgambar_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
        
        function insert($idevent, $idgambar)
        {
            $data = array(
				'IDEvent' => $idevent,
				'IDGambar' => $idgambar
				);
			$this->db->insert('listgambar', $data);
            
        }
        
		function selectById($id){
		  $this->load->database();
		  $query = $this->db->query("Select gambar.IDGambar, DataGambar, JudulGambar, WaktuGambar, DeskripsiGambar from listgambar, gambar where gambar.IDGambar = listgambar.IDGambar and listgambar.IDEvent = '".$id."'");
		  return $query->result();
		}
		
		function selectByName($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaGambar, Gambar from listgambar, gambar where Gambar.IDGambar = Listgambar.IDGambar and Listgambar.IDEvent = '".$id."'");
		  return $query;
		}
        

	}
?>