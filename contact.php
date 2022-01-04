<!-- // je recupere mes données// -->
<?php
$name = $_GET ['name'];
$prenom = $_GET ['prenom'];
$email = $_GET ['mail'];
$telephone = $_GET ["telephone"];
$adresse = $_GET ["adresse"];

// je crée un tableau//
$tableau = [$name,$prenom,$email,$telephone,$adresse];
print_r($tableau);
?>
