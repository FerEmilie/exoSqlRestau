<?php
include('include/header.php');
 ?>
<?php
// Connexion à la base de données
include("config/connection.php");
// Récupération des 10 derniers messages

$reponse = $bdd->query('SELECT * FROM plat');


echo '<div class="plat"><h2>Liste des plats</h2><ul>';
while ($donnees = $reponse->fetch())
{

	echo '<li>' . $donnees['nom'] . ' - ' . $donnees['prix'] . ' euros - <img style="width:50px;  height:50px;" src="assets/img/' . $donnees['image'] . '" alt="img" />' . '<div id="supp"><a href="deletePlat.php?id=' . $donnees['id'] . '"><< supprimer ce plat >></a></div>' . '</li>';
}
echo '</ul></div>';
$reponse->closeCursor();
?>
<?php
include('include/footer.php');
 ?>
