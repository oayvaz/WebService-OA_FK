<?php

//require_once("Financement.php");
/**
 * Created by JetBrains PhpStorm.
 * User: eric
 * Date: 04/01/13
 * Time: 11:28
 * To change this template use File | Settings | File Templates.
 */
class WsBanque
{
    /**
     * create method
     *
     * @param int $montantProjet montant du projet
     * @param string $nom nom du prospect
     * @param string $prenom prenom du prospect
     * @param string $adresse adresse du prospect
	 * @param string $cp code postal du prospect
     * @param string $telephone telephone du prospect
     * @param string $mail mail du prospect
     * @param int $montantApport montant de l'apport
	 * @param int $dureeEmprunt durée du prêt
     * @param int $age age du prospect
     * @param string $ville ville du prospect
	 * @param int $idCN id du pret chez CN
     */
    public function create($montantProjet, $nom, $prenom, $adresse,$cp, $telephone, $mail, $montantApport,$dureeEmprunt, $age,$ville,$idCN){
		// Infos sur la base MySql (à modifier)
		$host_mysql='localhost';
		$user_mysql='root';
		$pass_mysql='';
		$bd_mysql='cnbanque';
		$link=mysql_connect($host_mysql,$user_mysql,$pass_mysql);
		mysql_select_db($bd_mysql);

		// La requete
		$requete="insert into infoPret(montantProjet, nom, prenom, adresse, cp, telephone, mail, montantApport, dureeEmprunt, age, ville, idCN) values (".$montantProjet.",'".$nom."','".$prenom."', '".$adresse."','".$cp."', '".$telephone."', '".$mail."', ".$montantApport.",".$dureeEmprunt.", ".$age.",'".$ville."',".$idCN.")";
		//echo $requete;
		mysql_query($requete, $link);
		mysql_close();
    }

    /**
     * calculMensualiteAssurance method
     *
     * @param int $id id du pret
     * @return string statut du pret
     */
    public function statutPret($id){
	// Infos sur la base MySql (à modifier)
		$host_mysql='localhost';
		$user_mysql='user';
		$pass_mysql='';
		$bd_mysql='CNBanque';
		$link=mysql_connect($host_mysql,$user_mysql,$pass_mysql);
		mysql_select_db($bd_mysql);

		// La requete
		$requete="SELECT statut FROM infoPret WHERE idCN=".$id;
		$result=mysql_query($requete, $link);
		$lecture=mysql_fetch_row($result);
		mysql_free_result($result);
		mysql_close();

        return $lecture[0];
    }
}
/*
$client = new WsBanque();
$client->create(1000000,"PATATE","","","55000","121212121","",10000,10,10, "",1);*/