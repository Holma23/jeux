<?php
require_once "Monstre.php";
class Sort extends Carte
{
    private $coutMana;
    private $nbrePointsDegats;

    /**
     * Sort constructor.
     * @param $nbreMana
     * @param $nbrePointsDegats
     */
    public function __construct($coutMana, $nbrePointsDegats)
    {
        parent::__construct($coutMana, $nbrePointsDegats);
    }

    /**
     * @return mixed
     */
    public function getCoutMana()
    {
        return $this->coutMana;
    }

    /**
     * @param mixed $nbreMana
     */
    public function setCoutMana(int $coutMana)
    {
        $this->coutMana = $coutMana;
    }

    /**
     * @return mixed
     */
    public function getNbrePointsDegats()
    {
        return $this->nbrePointsDegats;
    }

    /**
     * @param mixed $nbrePointsDegats
     */
    public function setNbrePointsDegats($nbrePointsDegats)
    {
        $this->nbrePointsDegats = $nbrePointsDegats;
    }

    public function attaquer(Monstre $monstre){
        $resultat=($monstre->getNbrePointsVie() - parent::getNbrePointsDegats());
        ($resultat>0)?$monstre->setNbrePointsVie($resultat):$monstre->setNbrePointsVie(0);
    }

    public function __toString()
    {
        return " a: "."<br>"."cout de Mana: ".parent::getCoutMana()."<br>"." le nbre de points dégats: ".parent::getNbrePointsDegats()."<br>";
    }
}