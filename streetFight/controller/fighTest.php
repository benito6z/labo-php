<?php
$personnage = new personnages();
$personnage->id = 11;
$ken = $personnage->getPersonnageById();



$personnage->id = 12;
$ryu = $personnage->getPersonnageById();


var_dump($ryu);
var_dump($ken);
