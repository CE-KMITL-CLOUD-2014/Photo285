<?

class Member extends CI_Controller {
	public function register(){
			$ID = $_POST["ID"];
			$name = $_POST["name"];
			$pass = md5($_POST["pass"]);
			$info = $_POST["info"];
			$photo = $_POST["photo"];
			$data = array('ID'=>$ID,'name'=>$name,'pass'=>$pass,'info' =>$info,'photo'=>$photo);
			$this->load->model('member_model');	
			$this->member_model->register($data);
		}
}
?>