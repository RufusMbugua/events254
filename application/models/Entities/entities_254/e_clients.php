<?php
namespace models\Entities\entities_254;

/**
 * Encryption key adapted from @Joseph Wynn algorithm
 * @Entity
 * @Table(name="clients")
 * @author Annette Irungu
 */

class E_Clients {

	/**
	 * @Id
	 * @Column(name="Client_ID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $Client_ID;

	/**
	 * @Column(name="Client_Name",type="string", length=45, unique=true, nullable=false)
	 */
	private $Client_Name;

	/**
	 * @Column(name="Client_DOB",type="date", nullable=false)
	 */
	private $Client_DOB;

	/**
	 * @Column(name="Client_Gender",type="integer", length=2, nullable=false)
	 */
	private $Client_Gender;

	/**
	 * @Column(name="Client_Nationality",type="string", length=45, nullable=true)
	 */
	private $Client_Nationality;

	/**
	 * @Column(name="Client_Address",type="string", length=45, nullable=true)
	 */
	private $Client_Address;

	/**
	 * @Column(name="Client_Email",type="string", length=65, nullable=true)
	 */
	private $Client_Email;

	/**
	 * @Column(name="Client_Password",type="string", length=255, nullable=true)
	 */
	private $Client_Password;

	public function getClient_ID() {
		return $this -> Client_ID;
	}

	public function setClient_ID($Client_ID) { $this -> Client_ID = $Client_ID;
	}

	public function getClient_Name() {
		return $this -> Client_Name;
	}

	public function setClient_Name($Client_Name) { $this -> Client_Name = $Client_Name;
	}

	public function getClient_DOB() {
		return $this -> Client_DOB;
	}

	public function setClient_DOB($Client_DOB) { $this -> Client_DOB = $Client_DOB;
	}

	public function getClient_Gender() {
		return $this -> Client_Gender;
	}

	public function setClient_Gender($Client_Gender) { $this -> Client_Gender = $Client_Gender;
	}

	public function getClient_Nationality() {
		return $this -> Client_Nationality;
	}

	public function setClient_Nationality($Client_Nationality) { $this -> Client_Nationality = $Client_Nationality;
	}

	public function getClient_Address() {
		return $this -> Client_Address;
	}

	public function setClient_Address($Client_Address) { $this -> Client_Address = $Client_Address;
	}

	public function getClient_Email() {
		return $this -> Client_Email;
	}

	public function setClient_Email($Client_Email) { $this -> Client_Email = $Client_Email;
	}

	public function getClient_Password() {
		return $this -> Client_Password;
	}

	public function setClient_Password($Client_Password) { $this -> Client_Password = $Client_Password;
	}

}
