<?php
include "DamageableInterface.php";
include_once "Carte.php";
class Monstre extends Carte implements DamageableInterface
{


    private $nbrePointsVie;

    /**
     * Monstre constructor.
     * @param $coutMana
     * @param $nbrePointsVie
     * @param $nbrePointsDegats
     */
    public function __construct(int $coutMana, int $nbrePointsDegats, int $nbrePointsVie)
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

   /* public function attaquer(Monstre $monstre){
        $resultat=($monstre->getNbrePointsVie() - parent::getNbrePointsDegats());
        ($resultat>0)?$monstre->setNbrePointsVie($resultat):$monstre->setNbrePointsVie(0);
    }*/

    public function __toString()
    {
        return " a:"."<br>"."- coût en mana: ".parent::getCoutMana()."<br>"."- nombre de points de vie: ".$this->nbrePointsVie."<br>"."- nombre de points de dégâts: ".parent::getNbrePointsDegats()."<br>";
    }
    public function takeDamages(int $n)
    {
        $pointsVie=$this->nbrePointsVie=-$n;
        ($pointsVie>0)?$pointsVie:0;


    }
     public function attaquer1(Monstre $monstre){
        $resultat=($monstre->getNbrePointsVie() - parent::getNbrePointsDegats());
        ($resultat>0)?$monstre->setNbrePointsVie($resultat):$monstre->setNbrePointsVie(0);
    }
    public function attaquer (Monstre $monstre){

        $n=$monstre->getNbrePointsDegats();
        $this->takeDamages($n);

    }
    public function attaquer2(Monstre $monstre){
      $this->nbrePointsVie -= $monstre->getNbrePointsDegats();
    }

}