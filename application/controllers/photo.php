<pre>  
<?php  
print_r($_POST);  
echo "<br>";  
echo "<br>";  
print_r($_FILES);  
?>  
</pre>  


<?

class Photo extends CI_Controller {
	public function addphoto(){
		$IDphoto = $_POST["IDphoto"];
		$nameAlbum = $_POST["nameAlbum"];
		$photo[] = $_POST["file_upload[]"];
		$data = array('IDphoto'=>$IDphoto,'nameAlbum'=>$nameAlbum,'photo[]'=>$file_upload[]);
		$this->load->model('photo_model');	
		$this->photo_model->addphoto($data);
		$timeupload = date("Y-m-d H:i:s");
		var_dump($photo);
		echo '5555';
	}

}
?>
