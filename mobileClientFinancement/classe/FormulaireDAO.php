<?php

class FormulaireDAO extends PGsqlDAO {
	

public function __construct(){
	parent::__construct();
}

public function create($_o) {
	//echo var_dump($_o);
	//echo var_dump($this);
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
public function findId($_o) {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
		try {
		$sql = "select id from \"infoPret\" where nom='".$_o->_nom."' and prenom='".$_o->_prenom."' and telephone='".$_o->_phone."' and mail='".$_o->_mail."'";
		$requete_findId=$connexion->query($sql);
		$ls = Array();
		while($ligne = $requete_findId->fetch(PDO::FETCH_OBJ) ){
			$id=$ligne->id;
			$ls[]=$id;
		}
		} catch(Exception $e) {
		echo $e->getMessage();
		$ls[0]=-1;
		}
	//echo($requete_findId);
	//while ($ligne=$requete_findId->fetch(PDO::FETCH_ASSOC)){
	//$id = $requete_findId;
	//}
	return $ls[0];
}

public function findAll() {
	$connexion = new PDO('pgsql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe);
	$sql = "select * from \"infoPret\" order by id asc";
	$requete_findAll=$connexion->query($sql);
	$liste=array();
	while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
		$f = new formulaire($ligne->nom,$ligne->prenom,$ligne->mail,$ligne->telephone,$ligne->montantApport,$ligne->montantProjet,$ligne->dureeEmprunt,$ligne->age,$ligne->adresse,$ligne->cp,$ligne->ville,$ligne->id);
		$liste[]=$f;
	}
	return $liste;
}

}
?>