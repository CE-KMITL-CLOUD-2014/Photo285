<?

class Member extends CI_Controller {
	public function register(){
			$IDmember = $_POST["IDmember"];
			$name = $_POST["name"];
			$password = md5($_POST["password"]);
			$info = $_POST["info"];
			$data = array('IDmember'=>$IDmember,'name'=>$name,'password'=>$password,'info' =>$info);
			$this->load->model('member_model');	
			$this->member_model->register($data);
		}
}
?>