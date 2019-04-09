<?php
require_once "Monstre.php";
require_once "DamageableInterface.php";
$monstre=new Monstre("kkk","uu",14);
echo $monstre;
require_once "Monstre.php";
require_once "Sort.php";
$monstre1=new Monstre(1,2,3);
$monstre2=new Monstre(10,11,12);
echo "Monstre1".$monstre1;
echo "Monstre2".$monstre2;
$monstre1->attaquer($monstre2);
echo "Monstre2".$monstre2;
//$monstre1->attaquer1($)


