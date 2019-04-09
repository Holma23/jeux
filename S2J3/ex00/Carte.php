<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 08/04/2019
 * Time: 22:49
 */

 class Carte
{
    private $coutMana;
    private $nbrePointsDegats;

    /**
     * Carte constructor.
     * @param $coutMana
     * @param $nbrePointsDegats
     */
    public function __construct($coutMana, $nbrePointsDegats)
    {
        $this->coutMana = $coutMana;
        $this->nbrePointsDegats = $nbrePointsDegats;
    }

    /**
     * @return mixed
     */
    public function getCoutMana()
    {
        return $this->coutMana;
    }

    /**
     * @param mixed $coutMana
     */
    public function setCoutMana($coutMana)
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
         $resultat=($monstre->getNbrePointsVie() - $this->nbrePointsDegats);
         ($resultat>0)?$monstre->setNbrePointsVie($resultat):$monstre->setNbrePointsVie(0);
     }



}