<?php
include('include/header.php');
 ?>
<?php
// Connexion à la base de données
include("config/connection.php");
// Récupération des menus et des plats associés

$reponse = $bdd->query('SELECT menu.prix as prix_menu, nom, GROUP_CONCAT(nom_plat SEPARATOR " - ") AS concat_nom_plat FROM menu_plat
LEFT JOIN plat ON id_plat= plat.id
LEFT JOIN menu ON id_menu = menu.id
GROUP BY menu.id
');
echo '<div class="menu"><h2>Liste des menus et leur composition</h2><ul>';
while ($donnees = $reponse->fetch())
{

  echo '<li>' . $donnees['nom'] . ' : ' . $donnees['concat_nom_plat'] . ' - ' . $donnees['prix_menu'] . ' euros.</li>';

}

echo '</ul></div>';
$reponse->closeCursor();
?>
<?php
include('include/footer.php');
 ?>
