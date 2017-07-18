<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

    <h2>Completer le menu</h2>
      <p class="clair">Retour création de menu: <a class="link" href="creerMenu.php">ici</a></p>
      <p class="clair">Retour création de plat: <a class="link" href="creerPlat.php">ici</a></p>
<?php
  // Connexion à la base de données
  include("config/connection.php");
  $idmenu = $_GET['id'];
  echo '<form id="form" method="post" action="traitementAjout.php?id='.$idmenu.'">';
  echo '<fieldset><legend>Veuillez complèter le menu n° ' . $_GET['id'] . '</legend><br/>';
  echo '<p>Cochez les plats à ajouter au menu: </p>';
     $reponse = $bdd->query('SELECT plat.id AS id_plat, nom_plat FROM plat ORDER BY id_type_plat');
       echo'<div class="items">';
        while ($donnees = $reponse->fetch())
       {
			   echo'<input id="item'.$donnees['id_plat'].'" type="checkbox" name="checkbox[]" value="'.$donnees['id_plat'].'" /><label for="item'.$donnees['id_plat'].'">'.$donnees['nom_plat'].'</label>';
      }

      echo '<h2 class="done" aria-hidden="true">Ajouté</h2><h2 class="undone" aria-hidden="true">A choisir</h2></div>';
		 echo '<br/><br/><input type="submit" class="valider" name="valider" value="Valider" /></fieldset></form>';

  $reponse->closeCursor();
  ?>
  <?php
  include('include/footer.php');
   ?>
