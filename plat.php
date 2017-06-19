<?php
// Connexion à la base de données
include("config/connection.php");
// Récupération des 10 derniers messages

$reponse = $bdd->query('SELECT * FROM plat ORDER BY ID DESC LIMIT 0, 10');


echo '<div class="plat"><h1>Liste des plats</h1><ul>';
while ($donnees = $reponse->fetch())
{

	echo '<li>' . $donnees['nom'] . ' - ' . $donnees['prix'] . ' euros</li>';
}
echo '</ul></div>';
$reponse->closeCursor();
?>
