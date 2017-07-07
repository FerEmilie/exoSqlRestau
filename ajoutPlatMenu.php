<?php
include('include/header.php');
 ?>
    <h2>Completer le menu</h2>
    <p class="clair">Retour création de menu: <a class="link" href="creerMenu.php">ici</a></p>
    <p class="clair">Retour création de plat: <a class="link" href="creerPlat.php">ici</a></p>
    <?php
    // Connexion à la base de données
    include("config/connection.php");

    $reponse = $bdd->query('SELECT menu.id AS id_menu, menu.nom AS nom_menu FROM  menu');
    echo '<form id="form" method="post" action="traitementAjout.php">';
    echo '<fieldset><legend>Selectionner un menu à modifier</legend><br/>';
     echo '<select name="menu">';

			while ($donnees = $reponse->fetch())
			{
         echo '<option value="' . $donnees['id_menu'] . '">'. $donnees['nom_menu'] .'</option>';

			}
       echo '</select>';

       $reponse2 = $bdd->query('SELECT plat.id AS id_plat, nom_plat FROM plat');
       echo '<form method="post" action="traitementAjout.php"><p>Cochez les plats à ajouter au menu: </p>';

        while ($donnees2 = $reponse2->fetch())
        {

				echo'<input type="checkbox" name="checkbox[]" value="'.$donnees2['id_plat'].'" />'.$donnees2['nom_plat'];

        }

			echo '<br/><br/><input type="submit" class="valider" name="valider" value="valider" />
		</fieldset></form>';


    ?>
    <?php
    include('include/footer.php');
     ?>
