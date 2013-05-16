<?php

require_once("Financement.php");
/**
 * Created by JetBrains PhpStorm.
 * User: eric
 * Date: 04/01/13
 * Time: 11:28
 * To change this template use File | Settings | File Templates.
 */
class Simulateur
{
    /**
     * calculMensualite method
     *
     * @param int $age âge de l'emprunteur
     * @param int $duree durée du prêt
     * @param int $montantApport montant de l'apport personnel
     * @param int $montantInvestissement montant du projet
     * @return float mensualité calculée
     */
    public function calculMensualite($age, $duree, $montantApport, $montantInvestissement){
        $f = new Financement();
        $f->setAge($age);
        $f->setApport($montantApport);
        $f->setDuree($duree);
        $f->setMontant($montantInvestissement);
        $montant = $f->calculMensualiteCredit();
        return $montant;
    }

    /**
     * calculMensualiteAssurance method
     *
     * @param int $age âge de l'emprunteur
     * @param int $duree durée du prêt
     * @param int $montantApport montant de l'apport personnel
     * @param int $montantInvestissement montant du projet
     * @return float mensualité calculée
     */
    public function calculMensualiteAssurance($age, $duree, $montantApport, $montantInvestissement){
        $f = new Financement();
        $f->setAge($age);
        $f->setApport($montantApport);
        $f->setDuree($duree);
        $f->setMontant($montantInvestissement);
        $montant = $f->calculMensualiteAssurance();
        return $montant;
    }

    /**
     * calculMensualiteGlobale method
     *
     * @param int $age âge de l'emprunteur
     * @param int $duree durée du prêt
     * @param int $montantApport montant de l'apport personnel
     * @param int $montantInvestissement montant du projet
     * @return float mensualité calculée
     */
    public function calculMensualiteGlobale($age, $duree, $montantApport, $montantInvestissement){
        $f = new Financement();
        $f->setAge($age);
        $f->setApport($montantApport);
        $f->setDuree($duree);
        $f->setMontant($montantInvestissement);
        $montant = $f->calculMensualiteGlobale();
        return $montant;
    }
}
