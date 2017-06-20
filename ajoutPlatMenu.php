<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Completer le menu</h1>
    <p id="clair">Retour création de menu: <a class="link" href="creerMenu.php">ici</a></p>
    <p id="clair">Retour création de plat: <a class="link" href="creerPlat.php">ici</a></p>
    <?php
    // Connexion à la base de données
    include("config/connection.php");

    $reponse = $bdd->query('SELECT menu.id_plat AS id_plat_menu, menu.id AS id_menu, menu.nom AS nom_menu FROM  menu');
    echo '<form method="post" action="traitementAjout.php"><p>Cochez les plats à ajouter au menu: </p>';
     echo '<select name="menu">';

			while ($donnees = $reponse->fetch())
			{
         echo '<option value="' . $donnees['id_menu'] . '">'. $donnees['nom_menu'] .'</option>';

			}
       echo '</select>';

       $reponse2 = $bdd->query('SELECT plat.id AS id_plat, plat.nom AS nom_plat FROM plat');
       echo '<form method="post" action="traitementAjout.php"><p>Cochez les plats à ajouter au menu: </p>';

        while ($donnees2 = $reponse2->fetch())
        {

				echo'<input type="checkbox" name="checkbox" value="'.$donnees2['id_plat'].'" />'.$donnees2['nom_plat'].'
				<br />';

        }

			echo'<input type="submit" class="valider" name="valider" value="valider" />
		</form>';


    ?>


  </body>
</html>
