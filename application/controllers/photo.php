

<?php

class Photo extends CI_Controller {
	public function addphoto(){
		echo "5555";
		$IDphoto = $_POST["IDphoto"];
		$nameAlbum = $_POST["nameAlbum"];
		$photo[] = $_POST["file_upload[]"];
		$data = array('IDphoto'=>$IDphoto,'nameAlbum'=>$nameAlbum,'photo[]'=>$file_upload[]);
		$this->load->model('photo_model');	
		$this->photo_model->addphoto($data);
		//$timeupload = date("Y-m-d H:i:s");*/
		//var_dump($photo);
		
	}

}
?>
