<?php

class FormulaireDAO extends PGsqlDAO {
	

public function __construct(){
	parent::__construct();
}

public function create($_o) {
	//echo var_dump($_o);
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	try{
		$requete_create=$connexion->prepare("insert into \"infoPret\" values (:projet,:nom,:prenom,:adresse,:cp,:phone,:mail,:apport,:duree,:age,:ville)"); // on prépare notre requête
		$requete_create->execute(array('projet'=>$_o->_projet, 'nom'=>$_o->_nom,'prenom'=>$_o->_prenom,'adresse'=>$_o->_adresse,'cp'=>$_o->_cp,'phone'=>$_o->_phone, 'mail'=>$_o->_mail,'apport'=>$_o->_apport,'duree'=>$_o->_duree,'age'=>$_o->_age,'ville'=>$_o->_ville));
	}
	catch(Exception $e)
	{
		echo 'Erreur : '.$e->getMessage().'<br />';
		echo 'N° : '.$e->getCode();
	}
}

public function findAll() {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	$sql = "select * from \"infoPret\" order by id asc";
	$requete_findAll=$connexion->query($sql);
	$liste=array();
	while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
		$f = new formulaire($ligne->nom,$ligne->prenom,$ligne->mail,$ligne->telephone,$ligne->montantApport,$ligne->montantProjet,$ligne->dureeEmprunt,$ligne->age,$ligne->adresse,$ligne->cp,$ligne->ville);
		$liste[]=$f;
	}
	return $liste;
}
/*
public function findById($_id) {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	$sql = "select * from terrain Where id=".$_id;
	$requete_findById=$connexion->query($sql);
	$ligne=$requete_findById->fetch(PDO::FETCH_OBJ);
	$t = new terrain($ligne->id, $ligne->latitude, $ligne->longitude, $ligne->superficie, $ligne->plan, $ligne->prix,$ligne->id_secteur);
	
	return $t;
}*/

}
?>