<?php

// je récupère les valeurs des inputs
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$adresse = $_POST["adresse"];
// j'affiche les valeurs sous forme de tableau
$table = [$nom, $prenom, $email, $telephone, $adresse];
print_r($table);


$Err = "";

// boucle du tableau des inputs

for ($i = 0; $i <= 4; $i++) {
    if (!($table[$i])) {
        $Err = "Champs manquants";
        echo 'div class="alert"' . $Err . '</div>';
        break;
    }
}

function validatePhoneNumber($string)
{  //création fonction pour valider le tél
    $phoneNumberArr = str_split($string); //création tableau avec str pour séparer les chiffres
    if ($phoneNumberArr[0] != 0) {   //si le premier chiffre != 0 alors...
        return false;
    }
    foreach ($phoneNumberArr as $value) { //la foreach !! trop puissante mdr
        if (!is_numeric($value)) { // vérif que chaque caractère = numérique
            return false;
        }
    }
    if (strlen($string) != 10) { //vérif taille du numéro
        return false;
    }
    return true;
}

// condition des données des inputs

if (strlen($nom) < 3) {
    $Err = "Le prénom doit comporter 3 lettres au moins.";
    echo '<div class="alert">' . $Err . '</div>';
} elseif (!ctype_alpha($prenom)) {
    $Err = "Le prénom contient des caracteres non autorises";
    echo '<div class="alert">' . $Err . '</div>';
} elseif (!ctype_alpha($nom)) {
    $Err = "Le nom contient des caracteres non autorises";
    echo '<div class="alert">' . $Err . '</div>';
} elseif (validatePhoneNumber($telephone) === false) {
    $Err = "Le numero de telephone ne doit contenir que des chiffres";
    echo '<div class="alert">' . $Err . '</div>';
}
