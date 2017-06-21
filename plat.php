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

	echo '<li>' . $donnees['nom'] . ' - ' . $donnees['prix'] . ' euros - <div><img style="width:80px;  height:80px; border:1px solid black; border-radius:10px; " src="assets/img/' . $donnees['image'] . '" alt="img" /></div>' . '<div id="supp"><a href="delete.php?id=' . $donnees['id'] . '"><< supprimer ce plat >></a></div>' . '<div id="supp"><a href="updatePlat.php?id=' . $donnees['id'] . '"><< modifier ce plat >></a></div>' . '</li>';
}
echo '</ul></div>';
$reponse->closeCursor();
?>
<?php
include('include/footer.php');
 ?>
