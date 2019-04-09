<?php
/**
 * Created by PhpStorm.
 * User: mater
 * Date: 08/04/2019
 * Time: 22:49
 */

abstract class Carte
{

    private $coutMana ;
    private $nbrePointsDegats;

    /**
     * Carte constructor.
     * @param $coutMana
     * @param $nbrePointsDegats
     */
    public function __construct( )
    {
        $this->coutMana = $coutMana= rand(0,10)+1 ;
        $this->nbrePointsDegats = $nbrePointsDegats=rand(0,30);
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
    abstract public function attaquer(Monstre $monstre);
}