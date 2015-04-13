<?php
	/**
	* 
	*/
	class Listvideo_model extends CI_Model
	{

		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function selectById($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaVideo, Link from listVideo, video where Video.IDVideo = ListVideo.IDVideo and IDEvent = '".$id."'");
		  return $query;
		}
		
		function selectByName($id){
		  $this->load->database();
		  $query = $this->db->query("Select NamaVideo, Link from listVideo, video where Video.IDVideo = ListVideo.IDVideo and IDEvent = '".$id."'");
		  return $query;
		}

	}
?>