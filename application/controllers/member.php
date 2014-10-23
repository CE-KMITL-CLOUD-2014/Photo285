<?

class Member extends CI_Controller {
	public function register(){
			$IDmember = $_POST["IDmember"];
			$name = $_POST["name"];
			$password = md5($_POST["password"]);
			$info = $_POST["info"];
			$data = array('ID'=>$ID,'name'=>$name,'pass'=>$pass,'info' =>$info);
			$this->load->model('member_model');	
			$this->member_model->register($data);
		}
}
?>