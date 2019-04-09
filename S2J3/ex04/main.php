<?php
require_once "Monstre.php";
require_once "Joueur.php";
$mon1=new Monstre(5,5,5);
$joueur1=new Joueur("joueur1",0 );
echo $mon1;
echo $joueur1;
print_r($joueur1->piocher());
print_r($joueur1->piocher());
echo $joueur1;
echo "<hr>";
$joueur1->montrerMain();