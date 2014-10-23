<?
class Member extends CI_Controller {
	public function register(){
			$IDmember = $_POST["IDmember"];
			$name = $_POST["name"];
			$pass = md5($_POST["pass"]);
			$info = $_POST["info"];
			$data = array('IDmember'=>$IDmember,'name'=>$name,'pass'=>$pass,'info' =>$info);
			$this->load->model('member_model');	
			$this->member_model->register($data);
		}
}
?>