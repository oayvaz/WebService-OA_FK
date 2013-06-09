<?php

class Formulaire {
	// Variables
	public $_nom;
	public $_prenom;
	public $_mail;
	public $_phone;
	public $_apport;
	public $_projet;
	public $_duree;
	public $_age;
	public $_adresse;
	public $_cp;
	public $_ville;
	public $_id;

	// Constructeurs
	function __construct() {
		$num=func_num_args();
 
		switch($num)
		{
			case 11:
				$this->_nom = func_get_arg(0);
				$this->_prenom = func_get_arg(1);
				$this->_mail = func_get_arg(2);
				$this->_phone = func_get_arg(3);;
				$this->_apport = func_get_arg(4);
				$this->_projet = func_get_arg(5);
				$this->_duree = func_get_arg(6);
				$this->_age = func_get_arg(7);
				$this->_adresse = func_get_arg(8);
				$this->_cp = func_get_arg(9);
				$this->_ville = func_get_arg(10);
			break;
			case 12:
				$this->_nom = func_get_arg(0);
				$this->_prenom = func_get_arg(1);
				$this->_mail = func_get_arg(2);
				$this->_phone = func_get_arg(3);;
				$this->_apport = func_get_arg(4);
				$this->_projet = func_get_arg(5);
				$this->_duree = func_get_arg(6);
				$this->_age = func_get_arg(7);
				$this->_adresse = func_get_arg(8);
				$this->_cp = func_get_arg(9);
				$this->_ville = func_get_arg(10);
				$this->_id = func_get_arg(11);
			break;
			default:
			break;
		}
	}

	// Accesseur
	public function getNom() {
		return $this->_nom;
	}
	public function getPrenom() {
		return $this->_prenom;
	}
	public function getMail() {
		return $this->_mail;
	}
	public function getPhone() {
		return $this->_phone;
	}

	public function getApport() {
		return $this->_apport;
	}
	
	public function getProjet() {
		return $this->_projet;
	}
	
	public function getDuree() {
		return $this->_duree;
	}
	public function getAge() {
		return $this->_age;
	}
	public function getAdresse() {
		return $this->_adresse;
	}

	public function getCp() {
		return $this->_cp;
	}
	
	public function getVille() {
		return $this->_ville;
	}
	
	public function getId() {
		return $this->_id;
	}

	// Modificateur
	public function setNom($_unNom) {
		$this->_nom = $_unNom;
	}
	public function setPrenom($_unPrenom) {
		$this->_prenom = $_unPrenom;
	}
	public function setMail($_unMail) {
		$this->_mail = $_unMail;
	}
	public function setPhone($_unPhone) {
		$this->_phone = $_unPhone;
	}
	
	public function setApport($_unApport) {
		$this->_apport = $_unApport;
	}

	public function setProjet($_unProjet) {
		$this->_projet = $_unProjet;
	}
	public function setDuree($_uneDuree) {
		$this->_duree = $_uneDuree;
	}
	public function setAge($_unAge) {
		$this->_age = $_unAge;
	}
	public function setAdresse($_uneAdresse) {
		$this->_adresse = $_uneAdresse;
	}
	
	public function setCp($_unCp) {
		$this->_cp = $_unCp;
	}

	public function setVille($_uneVille) {
		$this->_ville = $_uneVille;
	}
	public function setId($_unId) {
		$this->_id = $_unId;
	}
	
	public function toString() {
		return array(
				1  => $this->getNom(),
				2 => $this->getPrenom(),
				3 => $this->getMail(),
				4 => $this->getPhone(),
				5 => $this->getApport(),
				6 => $this->getProjet(),
				7 => $this->getDuree(),
				8 => $this->getAge(),
				9 => $this->getAdresse(),
				10 => $this->getCp(),
				11 => $this->getVille(),
				12 => $this->getId()
		);
	}


}

?>
