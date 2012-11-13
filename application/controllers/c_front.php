<?php

class C_Front extends CI_Controller {
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

	public function events() {
		$data['title'] = 'Events';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('events', $data);
	}//End of index file
	
		public function myprofile() {
		$data['title'] = 'MyProfile';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('myprofile', $data);
	}//End of index file
	
			public function login() {
		$data['title'] = 'Login';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('login', $data);
	}//End of index file

}
?>