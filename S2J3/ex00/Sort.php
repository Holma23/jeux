<?php
require_once "Monstre.php";
require_once "Carte.php";
class Sort extends Carte
{


    /**
     * Sort constructor.
     * @param $nbreMana
     * @param $nbrePointsDegats
     */
    public function __construct($coutMana, $nbrePointsDegats)
    {
        parent::__construct($coutMana, $nbrePointsDegats);
    }


   /* public function attaquer(Monstre $monstre){
        $resultat=($monstre->getNbrePointsVie() - parent::getNbrePointsDegats());
        ($resultat>0)?$monstre->setNbrePointsVie($resultat):$monstre->setNbrePointsVie(0);
    }*/

    public function __toString()
    {
        return " a: "."<br>"."cout de Mana: ".parent::getCoutMana()."<br>"." le nbre de points dégats: ".parent::getNbrePointsDegats()."<br>";
    }


}