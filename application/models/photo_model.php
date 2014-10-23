<?php
	class Photo_model extends CI_Model{
		function addphoto($file){
			$this->db->insert('photo',$data);	
		}	
	}
?>