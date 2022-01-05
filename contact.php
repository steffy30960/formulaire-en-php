<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>formulaire en php</title>
</head>
<body>
    <h1>Formulaire de contact</h1>
    <form action="http://localhost:3000/contact.php" method="POST">
            
        <input type="text" name = "name" placeholder="Entrer votre Nom">
        <input type="text" name = "prenom" placeholder="Entrer votre Prénom">
        <input type="email" name = "mail" placeholder="Entrer votre Email">
        <input type="tel" name = "telephone" placeholder="Entrer votre Téléphone">
        <input type="text" name = "adresse" placeholder="Entrer votre Adresse">
        <input class="submit" type="submit" value = "Envoyer">
        <input class = "reset" type="reset" value="Annuler">
    </form>
</body>
</html>
  
  
  <!-- // je recupere mes données// -->
<?php
$name = $_POST ['name'];
$prenom = $_POST ['prenom'];
$email = $_POST ['mail'];
$telephone = $_POST ["telephone"];
$adresse = $_POST ["adresse"];

// je crée un tableau dans lequel je rentre mes données//
$tableau = [$name,$prenom,$email,$telephone,$adresse];
print_r($tableau); // j'affiche mon tableau//

//lorsqu on retire l attribut name de imput aucune valeur n est ajouter dans mon tableau//
// lorsque j ouvre mon fichier php j obtiens un tableau vide //
?>
<?php

if(empty($name) + empty($prenom) + empty($email) || empty($telephone) || empty($adresse)){
echo "champs manquants";
}

?>

