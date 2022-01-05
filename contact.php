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
        <input type="mail" name = "mail" placeholder="Entrer votre Email">
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
function validatePhoneNumber($string) // creation fonction pour valider le tel
{
    $phoneNumberArray =str_split($string); // creation d'un tableau avec str_splice pour separer les chiffres//
    if ($phoneNumberArray[0] !=0) {// si le premier chiffre different (!=) de 0 alors
        return false;
    }
    foreach($phoneNumberArray as $value){ // 
        if( !is_numeric($value)){// verif que chaque caractere = numerique
        return false;
    }
    }
    if (strlen($string) != 10){ // verif taille du numero
        return false;
    }
    return true;
}
?>
<?php

if(empty($name) || empty($prenom) || empty($email) || empty($telephone) || empty($adresse)){
echo "champs manquants";
}else{
    print_r($tableau);
}
?>
<?php
// le nom  doit contenir au moins 3 caracteres et pas de chiffre//
if(strlen($_POST['name']) <=3) // strlen =taille de la chaine raccourcie de string lenght//
{ echo "Votre nom doit posséder au moins 3 caractères.";
}
elseif(!ctype_alpha($name))
{ 
echo "Votre nom ne peut pas contenir de chiffres."; }
?>
<?php
// le prenom  doit contenir au moins 3 caracteres et pas de chiffre//
if(strlen($_POST['prenom']) <=3) { 
    echo "Votre prenom doit posséder au moins 3 caractères.";
}
elseif(!ctype_alpha($prenom))
{
    echo "votre nom contient des caracteres non autorises";
}

?>
<?php
//L'email doit être valide (forme: username@exemple.com)//
$email = "username@exemple.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)=== false) {
echo "L'adresse email est invalide elle doit etre sous forme username@exemple.com.";
}
?>


<?php
//-Le numéro de téléphone doit être valide (exemple: 0600000000)//
if (validatePhoneNumber($telephone) === false){
    echo "Le numero de téléphone ne doit contenir que des chiffres";
    }

    ?> 
    <?php 
    //Afficher les données sous forme de tableau //
    