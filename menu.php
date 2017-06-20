<?php
// Connexion à la base de données
include("config/connection.php");
// Récupération des 10 derniers messages

$reponse = $bdd->query('SELECT plat.nom as nom_plat, menu.nom as nom_menu, menu.prix as prix_menu  FROM menu, plat WHERE plat.id=menu.id_plat ');


echo '<div class="plat"><h1>Liste des menus</h1><ul>';
while ($donnees = $reponse->fetch())
{

	echo '<li>' . $donnees['nom_menu'] . ' - ' . $donnees['prix_menu'] . ' euros - composition: ' . $donnees['nom_plat'] . '</li>';
}
echo '</ul></div>';
$reponse->closeCursor();
?>
