<?php
require_once "Carte.php";

class Monstre extends Carte
{

    private $nbrePointsVie;

    /**
     * Monstre constructor.
     * @param $coutMana
     * @param $nbrePointsVie
     * @param $nbrePointsDegats
     */
    public function __construct($coutMana, $nbrePointsDegats, $nbrePointsVie)
    {
        parent::__construct($coutMana, $nbrePointsDegats);
        $this->nbrePointsVie= $nbrePointsVie;
    }

    /**
     * @return mixed
     */
    public function getNbrePointsVie()
    {
        return $this->nbrePointsVie;
    }

    /**
     * @param mixed $nbrePointsVie
     */
    public function setNbrePointsVie($nbrePointsVie)
    {
        $this->nbrePointsVie = $nbrePointsVie;
    }

    /**
     * @return mixed
     */

   /* public function attaquer(Monstre $monstre){
        $resultat=($monstre->getNbrePointsVie() - parent::getNbrePointsDegats());
        ($resultat>0)?$monstre->setNbrePointsVie($resultat):$monstre->setNbrePointsVie(0);
    }*/

    public function __toString()
    {
        return " a:"."<br>"."- coût en mana: ".parent::getCoutMana()."<br>"."- nombre de points de vie: ".$this->nbrePointsVie."<br>"."- nombre de points de dégâts: ".parent::getNbrePointsDegats()."<br>";
    }

}