<?php
class C_Events extends CI_Controller {
	var $data;
	var $count;
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	public function add() {
		$this -> load -> model('models_events254/m_events');
		$this -> m_events -> addRecord();

		if ($this -> m_events -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data["messageType"] = "success";
			$data['message'] = '<p><b>' . $this -> m_events -> rowsInserted . '</b> record(s) submitted successfully';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('events', $data);

		} else {
			//notify user of error/failure
			echo('fail');
		}
	}

	public function register() {
		$data['title'] = 'Register';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('register-event', $data);
	}

}
