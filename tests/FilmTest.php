<?php
require_once '../src/Film.php';
require_once '../src/Acteur.php';

// Instancier la classe Film
$film1 = new Film("Ducobu","bidule",
    DateTime::createFromFormat("d/m/Y","12/03/2017"));

echo $film1->getTitre();
echo PHP_EOL;
echo $film1->getAnciennete();
$film1->ajouterActeur(new Acteur("jean","dupond"));
$film1->ajouterActeur(new Acteur("pierre","durand"));
$film1->ajouterActeur(new Acteur("anne","martin"));
echo PHP_EOL;
//print_r($film1->getActeurs());
// Afficher le nom des acteurs
foreach ($film1->getActeurs() as $acteur) {
    echo $acteur->getPrenom();
    echo PHP_EOL;
}