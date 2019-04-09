<?php
require_once "joueur.php";
require_once "Monstre.php";
require_once "Plateau.php";
require_once "Sort.php";
require_once "DamageableInterface.php";


//echo Plateau::getNbMonstreParJoueur();echo "<br>";
$monstre1=new Monstre(3,5,7);
//echo $monstre1;
$monstre2=new Monstre(0,1,10);
$monstre3=new Monstre(2,15,7);
$monstre4=new Monstre(13,5,17);

$monstre5=new Monstre(43,5,67);
$monstre6=new Monstre(3,65,7);

$joueur1=new Joueur("joueur1",5,1,[]);
$joueur2=new Joueur("joueur2",8,10,[]);
$joueur3=new Joueur("joueur3",8,3,[]);


//echo $joueur1."<hr>";
//echo $joueur2."<hr>";
$joueur1->placerMonstre($monstre2);
echo "<hr>";
//print_r($joueur1);
//echo $joueur1;
$joueur1->placerMonstre($monstre3);
//echo Plateau::getNbMonstreParJoueur();
echo "<hr>";
$joueur1->placerMonstre($monstre5);
$joueur1->placerMonstre($monstre1);
$joueur1->placerMonstre($monstre5);
$joueur1->placerMonstre($monstre6);
//print_r($joueur1->placerMonstre());
//echo $joueur1."<hr>";

//print_r($tab5);
//var_dump($joueur1);
echo "<hr>";
print_r($joueur1->getMonstresPlace());
echo $joueur1."<hr>";

echo "<hr>";
echo "<hr>";
echo $joueur2;
$sort1=new sort(5,2);
$sort1->attaquer($monstre1);
echo "<hr>";
echo "<hr>";
//echo $monstre1->getNbrePointsVie();

$plateau =new Plateau($joueur1,$joueur2);
echo $plateau."<hr>";


