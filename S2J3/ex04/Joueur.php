<?php

require_once "Monstre.php";
require_once "Plateau.php";
require_once "Sort.php";

class Joueur
{
    private $pseudo;
    private $nbreMana ;
    private $nbrePointsVie ;
    private $monstresPlace = [];
    private $main=[];



    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
        $this->nbreMana= $nbreMana=10;
        $this->nbrePointsVie=$nbrePointsVie=30;
        $this->monstresPlace = $monstresPlace=[];
        $this->main=$main=[];
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
    public function piocher(){
        array_push($this->main,new Sort());
        return $this->main;
    }
    public function montrerMain(){
        $cartesMain=[];
        foreach($this->main as $cle=>$element){
            $num=$cle+1;
            array_push($cartesMain,"num Carte Sort: ".$num."<br>".$element);}

        echo (count($this->main))?"<br>"."Cartes Main:".count($cartesMain)."<br>".implode('',$cartesMain):" "."<br>";


    }
    public function jouer(Joueur $joueur1, int $placeCarte){
        $this->main[$placeCarte-1]->getCoutMana();
            $joueur1->getnbreMana-=$this->main[$placeCarte-1]->getCoutMana();




    }


    //si le tableau vide est le key n 'existe pas on le met av0
    // un test du nbre monstre s'il est null on n' affiche pas le tableau de monstre
    public function __toString()
    {
        $listeMonstre=[];
        $cartesMain=[];
        foreach($this->monstresPlace as $cle=>$element)
            array_push($listeMonstre,"num Monstre: ".(($cle)?$cle+1:0)."<br>".$element)  ;
        foreach($this->main as $cle=>$element)
            array_push($cartesMain,"num Carte Sort: ".$cle."<br>".$element);

        return "pseudo: " . $this->pseudo . "<br>" . "  nbre de Points de vie: " . $this->nbrePointsVie . "<br>" . "   nbre de mana: " . $this->nbreMana . "<br>"."nbre de monstre: ".count($this->monstresPlace).((count($this->monstresPlace))?"<br>"."<br>"."Tableau de monstre:"."<br>".implode('',$listeMonstre): " ".((count($this->main))?"<br>"."<br>"."Cartes Main:"."<br>".implode('',$cartesMain): " "))."<br>" ;

    }



}