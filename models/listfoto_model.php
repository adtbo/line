<?php
	/**
	* 
	*/
	class Listfoto_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function selectById($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaFoto, Gambar from ListFoto, Foto where Foto.IDFoto = ListFoto.IDFoto and IDEvent = '".$id."'");
		  return $query;
		}
		
		function selectByName($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaFoto, Gambar from ListFoto, Foto where Foto.IDFoto = Listfoto.IDFoto and IDEvent = '".$id."'");
		  return $query;
		}

	}
?>