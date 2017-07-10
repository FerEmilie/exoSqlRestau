 <?php
 include('include/header.php');
 include('include/barrenav.php');
  ?>
 <?php
 // Connexion à la base de données
 include("config/connection.php");
 // Récupération des 10 derniers messages

echo '<div class="plat">';
 $reponse = $bdd->query('SELECT * FROM plat
WHERE id_type_plat= 1
ORDER BY prix');
 echo '<div class="entree"><h3>Liste des entrées</h3><ul>';
 while ($donnees = $reponse->fetch())
 {
 	echo '<li>' . $donnees['nom_plat'] . ' ~ ' . $donnees['prix'] . ' euros ~ <div><img style="width:80px;  height:80px; border:1px solid black; border-radius:10px; " src="assets/img/' . $donnees['image'] . '" alt="img" /></div>' . '<div id="supp"><a href="delete.php?id=' . $donnees['id'] . '"><< supprimer ce plat >></a></div>' . '<div id="supp"><a href="updatePlat.php?id=' . $donnees['id'] . '"><< modifier ce plat >></a></div>' . '</li>';
 }
 echo '</ul></div>';

 $reponse = $bdd->query('SELECT * FROM plat
WHERE id_type_plat= 2
ORDER BY prix');
 echo '<div class="plats"><h3>Liste des plats</h3><ul>';
 while ($donnees = $reponse->fetch())
 {
 	echo '<li>' . $donnees['nom_plat'] . ' ~ ' . $donnees['prix'] . ' euros ~ <div><img style="width:80px;  height:80px; border:1px solid black; border-radius:10px; " src="assets/img/' . $donnees['image'] . '" alt="img" /></div>' . '<div id="supp"><a href="delete.php?id=' . $donnees['id'] . '"><< supprimer ce plat >></a></div>' . '<div id="supp"><a href="updatePlat.php?id=' . $donnees['id'] . '"><< modifier ce plat >></a></div>' . '</li>';
 }
 echo '</ul></div>';

 $reponse = $bdd->query('SELECT * FROM plat
WHERE id_type_plat= 3
ORDER BY prix');
 echo '<div class="dessert"><h3>Liste des dessert</h3><ul>';
 while ($donnees = $reponse->fetch())
 {
 	echo '<li>' . $donnees['nom_plat'] . ' ~ ' . $donnees['prix'] . ' euros ~ <div><img style="width:80px;  height:80px; border:1px solid black; border-radius:10px; " src="assets/img/' . $donnees['image'] . '" alt="img" /></div>' . '<div id="supp"><a href="delete.php?id=' . $donnees['id'] . '"><< supprimer ce plat >></a></div>' . '<div id="supp"><a href="updatePlat.php?id=' . $donnees['id'] . '"><< modifier ce plat >></a></div>' . '</li>';
 }
 echo '</ul></div></div>';
 $reponse->closeCursor();
 ?>
 <?php
 include('include/footer.php');
  ?>
