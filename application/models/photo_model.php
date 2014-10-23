<?php
	class Photo_model extends CI_Model{
		function addphoto($data){
			$this->db->insert('photodb',$data);	
		}	
	}
?>
