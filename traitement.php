<?php
// Connexion à la base de données
include("config/connection.php");

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO plat (nom, prix, image) VALUES(:nom, :prix, :image)');
$req->execute(array('nom' => $_POST['nom'], 'prix' => $_POST['prix'], 'image' => $_POST['image']));
// Redirection du visiteur vers la page du minichat
header('Location: creerPlat.php');


?>
