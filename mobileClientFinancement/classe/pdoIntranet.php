<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pdoIntranet
 *
 * @author jjannel
 */
class pdoIntranet {
        private static $serveur='pgsql:host=localhost';
      	private static $bdd='dbname=ConstructionNouvelles';   		
      	private static $user='postgres' ;    		
      	private static $mdp='ayvaz' ;	
		private static $monPdo;
		private static $monPdoIntranet=null;
                
        public function __construct(){
    	PdoIntranet::$monPdo = new PDO(PdoIntranet::$serveur.';'.PdoIntranet::$bdd, PdoIntranet::$user, PdoIntranet::$mdp); 
		PdoIntranet::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoIntranet::$monPdo = null;
	}
        
        	public  static function getPdoIntranet(){
		if(PdoIntranet::$monPdoIntranet==null){
			PdoIntranet::$monPdoIntranet= new PdoIntranet();
		}
		return PdoIntranet::$monPdoIntranet;  
	}
        
        public function getInfosComptable($login,$mdp){
		$req = "select id, \"nom\", \"login\",\"mdp\" from comptable where login = '".$login."' and mdp = '".$mdp."'";
		if($rs = pdoIntranet::$monPdo->query($req)){
                    $ligne = $rs->fetch();
                    return $ligne;
                }else{
                    return false;
                }
	}
}

?>
