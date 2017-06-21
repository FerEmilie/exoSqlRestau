<?php
include('include/header.php');
 ?>
<?php
// Connexion à la base de données
include("config/connection.php");
// Récupération des 10 derniers messages

$reponse = $bdd->query('SELECT plat.nom as nom_plat, menu.nom as nom_menu, menu.prix as prix_menu  FROM menu, plat WHERE plat.id=menu.id_plat ');


echo '<div class="menu"><h2>Liste des menus</h2><ul>';
while ($donnees = $reponse->fetch())
{

	echo '<li>' . $donnees['nom_menu'] . ' - ' . $donnees['prix_menu'] . ' euros - Plat : ' . $donnees['nom_plat'] . '</li>';
}
echo '</ul></div>';
$reponse->closeCursor();
?>
<?php
include('include/footer.php');
 ?>
