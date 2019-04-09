<?php
require_once "Monstre.php";
require_once "Sort.php";
$monstre1=new Monstre(1,2,3);
$monstre2=new Monstre(10,11,12);
echo "Monstre1".$monstre1;
echo "Monstre2".$monstre2;
$monstre1->attaquer($monstre2);
echo "Monstre2".$monstre2;

$sortA=new Sort(5,17);
$sortA->attaquer($monstre2);
echo "le sortA ".$sortA;
echo "monstre2".$monstre2;

