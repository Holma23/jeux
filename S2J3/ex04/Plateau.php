<?php

require_once "Joueur.php";
class Plateau
{

   private static $nbMonstreParJoueur = 5 ;
   private $joueurA ;
   private $joueurB ;

    /**
     * Plateau constructor.
     * @param $joueurA
     * @param $joueurB
     */
    public function __construct(Joueur $joueurA, Joueur $joueurB)
    {
        $this->joueurA = $joueurA ;
        $this->joueurB = $joueurB ;
    }

    /**
     * @return mixed
     */
    public static function getNbMonstreParJoueur()
    {
        return self::$nbMonstreParJoueur;
    }

    /**
     * @param mixed $nbMonstreParJoueur
     */
    public static function setNbMonstreParJoueur($nbMonstreParJoueur)
    {
        self::$nbMonstreParJoueur = $nbMonstreParJoueur;
    }

    /**
     * @return mixed
     */
    public function getJoueurA()
    {
        return $this->joueurA;
    }

    /**
     * @param mixed $joueurA
     */
    public function setJoueurA($joueurA)
    {
        $this->joueurA = $joueurA;
    }

    /**
     * @return mixed
     */
    public function getJoueurB()
    {
        return $this->joueurB;
    }

    /**
     * @param mixed $joueurB
     */
    public function setJoueurB($joueurB)
    {
        $this->joueurB = $joueurB;
    }

    public function __toString()
    {
        return "plateau:"."<br>"."***JoueurA"."<br>".$this->joueurA."<br>"."***JoueurB"."<br>".$this->joueurB;
    }


}