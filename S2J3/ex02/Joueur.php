<?php

require_once "Monstre.php";
require_once "Plateau.php";

class Joueur
{
    private $pseudo;
    private $nbreMana=10 ;
    private $nbrePointsVie=30 ;
    private $monstresPlace = [];



    public function __construct($pseudo,$nbreMana,$nbrePointsVie, array $monstresPlace = null)
    {
        $this->pseudo = $pseudo;
        $this->nbreMana= $nbreMana=10;
        $this->$nbrePointsVie=$nbrePointsVie=30;
        $this->monstresPlace = $monstresPlace=[];
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getNbreMana()
    {
        return $this->nbreMana;
    }

    /**
     * @param mixed $nbreMana
     */
    public function setNbreMana($nbreMana)
    {
        $this->nbreMana = $nbreMana;
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
     * @return array
     */
    public function getMonstresPlace()
    {
        return $this->monstresPlace;
    }



    /**
     * @param array $monstresPlace
     */
    public function setMonstresPlace( $monstresPlace)
    {
        $this->monstresPlace = $monstresPlace ;
    }



    public function placerMonstre(Monstre $monstre)
    {//Plateau::getNbMonstreParJoueur()
       // if( self:: getNbMonstreParJoueur<5) {
           if (count($this->monstresPlace) < Plateau::getNbMonstreParJoueur() ) {

            //self::setNbMonstreParJoueur(self::$nbMonstreParJoueur++);
            array_push($this->monstresPlace, $monstre);
            return $this->monstresPlace;}

        }

    //si le tableau vide est le key n 'existe pas on le met av0
    // un test du nbre monstre s'il est null on n' affiche pas le tableau de monstre
    public function __toString()
    {
        $listeMonstre=[];
        foreach($this->monstresPlace as $key=>$element)

            array_push($listeMonstre,"num Monstre: ".(($key)?$key:0)."<br>".$element)  ;
        return "pseudo: " . $this->pseudo . "<br>" . "  nbre de Points de vie: " . $this->nbrePointsVie . "<br>" . "   nbre de mana: " . $this->nbreMana . "<br>"."nbre de monstre: ".count($this->monstresPlace).((count($this->monstresPlace))?"<br>"."<br>"."Tableau de monstre:"."<br>".implode('',$listeMonstre): " ") ;

    }


}