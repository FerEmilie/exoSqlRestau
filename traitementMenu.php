<?php
session_start();
// Connexion à la base de données
include("config/connection.php");

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO menu (nom, prix) VALUES(:nom, :prix)');
$req->execute(array('nom' => $_POST['nom'], 'prix' => $_POST['prix']));
// Redirection du visiteur vers la page du minichat
header('Location: ajoutPlatMenu.php');


?>
