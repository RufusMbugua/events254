<?php
class C_Authorize extends CI_Controller {
	var $data;
	var $count;
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	public function index() {
		$data['title'] = 'Welcome';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('index', $data);
	}//End of index file

	public function login() {
		$this -> load -> model('models_events254/m_clients');
		$this -> m_clients -> getUser();
		if ($this -> m_clients -> isUser == 'true') {

		
			/*create session data*/
			$newdata = array('email' => $this -> m_clients -> email, 'logged_in' => TRUE,'id' => $this ->m_clients->id);
			$this -> session -> set_userdata($newdata);

			redirect(base_url() . 'C_front/index', 'refresh');
	

		} else {
			#use an ajax request and not a whole refresh
			
			$data['message']="User Not Found";
			$data['messageType']="error";
			
			$this->load->view('login',$data);
		}
	}

}
