<?php

// je récupère les valeurs des inputs
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$email = $_GET["email"];
$telephone = $_GET["telephone"];
$adresse = $_GET["adresse"];

// j'affiche les valeurs sous forme de tableau
$table = [$nom,$prenom,$email,$telephone,$adresse];
print_r($table);

// si j'enlève l'attribut name de l'input name celui ci ne s'affiche plus

//j'ajouter le code nécessaire pour éviter les erreurs obtenues.

?>