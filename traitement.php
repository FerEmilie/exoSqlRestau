<?php
session_start();
// Connexion à la base de données
include("config/connection.php");

// Insertion du message à l'aide d'une requête préparée
var_dump($_POST['type']);
$req = $bdd->prepare('INSERT INTO plat (nom_plat, id_type_plat, prix, image) VALUES(:nom, :type, :prix, :image)');
$req->execute(array('nom' => $_POST['nom'], 'type' => $_POST['type'], 'prix' => $_POST['prix'], 'image' => $_POST['image']));
// Redirection du visiteur vers la page du minichat
header('Location: creerPlat.php');


?>
