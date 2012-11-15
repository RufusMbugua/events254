<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to SystemUser entity
 */
use application\models\Entities\entities_254\E_Clients;

class M_Clients extends MY_Model {
	var $isUser, $email, $userRights, $affiliation;

	function __construct() {
		parent::__construct();
		$this -> isUser = 'false';
		$this -> email = '';
		$this -> userRights = '';
		$this -> affiliation = '';
	}

	function getUser() {
		$s = microtime(true);
		/*mark the timestamp at the beginning of the transaction*/

		if ($this -> input -> post()) {//check if a post was made

			//Working with an object of the entity
			$user = $this -> em -> getRepository('models\Entities\entities_254\E_Clients') -> findOneBy(array('Client_Email' => $this -> input -> post('email'), 'Client_Password' => $this -> input -> post('password')));

			if ($user) {
				$this -> id = $user -> getClient_ID();
				$this -> email = $user -> getClient_Email();
				return $this -> isUser = 'true';
			}

			//test a device by user

		}//close the this->input->post
		$e = microtime(true);
		$this -> executionTime = round($e - $s, '4');
		//return $this -> isUser = 'true';
	}/*end of getUser()*/

	function addUser() {

	}

	function deactivateUser() {

	}

	function activateUser() {

	}

	function listUsers() {

	}

}//end of class M_SystemUser
