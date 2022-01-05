<?php

// je récupère les valeurs des inputs
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$adresse = $_POST["adresse"];

// j'affiche les valeurs sous forme de tableau

$table = [$nom, $prenom, $email, $telephone, $adresse];


if (empty($nom) + empty($prenom) + empty($email) + empty($telephone) + empty($adresse)) {
    print_r('champs manquants');
} else {
    print_r($table);
}


// si j'enlève l'attribut name de l'input name celui ci ne s'affiche plus

//J'ajouter la condition suivante : S’il existe au moins un champ non rempli dans le formulaire, le tableau ne sera pas affiché et le message « Champs manquants » est affiché.

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulaire en PhP</title>
</head>

<body>
    <h1>Formulaire de contact</h1>

    <form action="http://localhost:3000/contact.php" method="POST">
        <input type="text" name="nom" placeholder="Entrer votre nom" minlength="3">
        <input type="text" name="prenom" placeholder="Entrer votre prenom" minlength="3">
        <input type="email" name="email" placeholder="Entrer votre email">
        <input type="tel" name="telephone" placeholder="Entrer votre numéro de téléphone" maxlength="10" minlength="10">
        <input type="text" name="adresse" placeholder="Entrer votre adresse">

        <input class="btn-validate" type="submit" value="Envoyer">
        <input class="btn-reset" type="reset" value="Annuler">
    </form>
</body>

</html>