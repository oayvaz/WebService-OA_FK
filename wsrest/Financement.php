<?php
/**
 * Created by JetBrains PhpStorm.
 * User: eric
 * Date: 03/01/13
 * Time: 13:37
 * To change this template use File | Settings | File Templates.
 */
class Financement
{

    private $apport;
    private $duree;
    private $age;
    private $montant;

    public function _construct(){

    }

    public function calculMensualiteCredit(){
        $montant = 0.0;
        $capitalEmprunte = $this->getMontant() - $this->getApport();
        $taux = 0.0;
        // on détermine le taux de base
        if ($this->getDuree() <= 10){
            $taux = 2.75;
        }else{
            if ($this->getDuree() <= 15){
                $taux = 2.95;
            }else{
                if ($this->getDuree() <= 20){
                    $taux = 3.10;
                }else{
                        $taux = 3.50;
                }
            }
        }
        // on pondère avec le % d'apport perso de l'emprunteur
        $pondeApport = 0.0;
        if (($this->getApport()/$this->getMontant()) > 0.3){
            $pondeApport = -0.2;
        }else{
            if (($this->getApport()/$this->getMontant()) < 0.05){
                $pondeApport = +0.4;
            }
        }
        $taux += $pondeApport;
        // on calcule la majoration d'âge de fin de prêt
        $majoAge = 0;
        if ($this->getAge()+$this->getDuree() > 60){
            $majoAge = 0.15;
        }
        $taux+= $majoAge;
        $taux = $taux/100;
        $numerateur = $capitalEmprunte * $taux/12;
        $denominateur = 1- 1/(pow((1+$taux/12),$this->getDuree()*12));
        $montant = $numerateur/$denominateur;
        //$montant = number_format($montant,2);
        return $montant;
    }

    public function calculMensualiteAssurance(){
        $montant = 0;
        $taux = 0;
        $mensu = $this->calculMensualiteCredit();
        if ($this->getAge() <= 30){
            $taux = 0.2;
        }else{
            if ($this->getAge()<=55){
                $taux = 0.35;
            }else{
                $taux = 0.5;
            }
        }
        $montant = $mensu*$taux /100;
        //$montant = number_format($montant,2);
        return $montant;
    }

    public function calculMensualiteGlobale(){
        $montant = 0;
        $montant = $this->calculMensualiteCredit()+$this->calculMensualiteAssurance();
        return $montant;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setApport($apport)
    {
        $this->apport = $apport;
    }

    public function getApport()
    {
        return $this->apport;
    }
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    public function getMontant()
    {
        return $this->montant;
    }
}
?>