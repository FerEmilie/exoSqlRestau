<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>
<?php
// Connexion à la base de données
include("config/connection.php");
// Récupération des menus et des plats associés
$reponse = $bdd->query('SELECT menu.id as idmenu, menu.prix as prix_menu, nom, GROUP_CONCAT(nom_plat SEPARATOR " - ") AS concat_nom_plat FROM menu_plat
LEFT JOIN plat ON id_plat= plat.id
LEFT JOIN menu ON id_menu = menu.id
GROUP BY menu.id
ORDER BY prix_menu
');
echo '<div class="menu"><h2>Liste des menus et leur composition</h2><ul>';
echo '~~~';
echo "</br></br>";

while ($donnees = $reponse->fetch())
{
  if (isset($donnees['nom']) && !empty($donnees['nom'])) {
  echo '<li>' . '<span>' . $donnees['nom'] . '</span>' . ' : ' . $donnees['concat_nom_plat'] . ' - ' . $donnees['prix_menu'] . ' euros. <div id="supp"><a href="deleteMenu.php?id=' . $donnees['idmenu'] . '"><< supprimer ce menu >></a></div><div id="supp"><a href="updateMenu.php?id=' . $donnees['idmenu'] . '"><< modifier ce menu >></a></div></li>';
  echo '~~~';
  echo "</br></br>";
}
}

echo '</ul></div>';
$reponse->closeCursor();
?>
<?php
include('include/footer.php');
 ?>
