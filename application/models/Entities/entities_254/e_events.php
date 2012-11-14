<?php
namespace models\Entities\entities_254;

/**
 * Encryption key adapted from @Joseph Wynn algorithm
 * @Entity
 * @Table(name="events")
 * @author Annette Irungu
 */

class E_Events {

	/**
	 * @Id
	 * @Column(name="Event_ID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $Event_ID;

	/**
	 * @Column(name="Event_Name",type="string", length=100, unique=true, nullable=false)
	 */
	private $Event_Name;

	/**
	 * @Column(name="Date_Created",type="date", nullable=false)
	 */
	private $Date_Created;
	
		/**
	 * @Column(name="Event_Type",type="string", length=45, nullable=false)
	 */
	private $Event_Type;

	/**
	 * @Column(name="Created_By",type="integer", length=2, nullable=false)
	 */
	private $Created_By;

	
	public function getEvent_ID() {
		return $this -> Event_ID;
	}

	public function setEvent_ID($Event_ID) { $this -> Event_ID = $Event_ID;
	}

	public function getEvent_Name() {
		return $this -> Event_Name;
	}

	public function setEvent_Name($Event_Name) { $this -> Event_Name = $Event_Name;
	}

	public function getDate_Created() {
		return $this -> Date_Created;
	}

	public function setDate_Created($Date_Created) { $this -> Date_Created = $Date_Created;
	}
	
	public function getEvent_Type() {
		return $this -> Event_Type;
	}

	public function setEvent_Type($Event_Type) { $this -> Event_Type = $Event_Type;
	}

	public function getCreated_By() {
		return $this -> Created_By;
	}

	public function setCreated_By($Created_By) { $this -> Created_By = $Created_By;
	}


}
