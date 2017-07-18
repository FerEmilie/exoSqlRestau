<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

    <form id="form" method="post" action="traitementUpdateMenu.php?id=<?php echo $_GET['id']; ?>">
      <fieldset>
        <legend>Vous avez choisi de modifier le menu n°: <?php echo $_GET['id']; ?> </legend>
         <label class="label" for="nom">Nouveau Nom du menu: </label>
         <input autofocus="autofocus" required="required" class="input" type="text" name="nom" size="50" maxlength="40" id="nom" /></br></br>

         <label class="label" for="prix">Nouveau Prix: </label>
         <input autofocus="autofocus" class="input" type="text" name="prix" size="50" maxlength="40" id="prix" /></br></br>

         <?php
        //  var_dump($_GET['plat']);
         $plats = preg_split("/[-]+/", $_GET['plat']);

         include("config/connection.php");
         $reponse = $bdd->query('SELECT plat.id AS id_plat, nom_plat FROM plat');
         echo '<p>Selectionner les plats à ajouter au menu: </p>';
         echo'<div class="items">';
          while ($donnees = $reponse->fetch())
          {
            // var_dump($donnees['nom_plat']);
            // var_dump($check);
           if (in_array($donnees['nom_plat'], $plats)) {
            echo'<input id="item'.$donnees['id_plat'].'" type="checkbox" checked="checked" name="checkbox[]" value="'.$donnees['id_plat'].'" /><label for="item'.$donnees['id_plat'].'">'.$donnees['nom_plat'].'</label>';
           }
           else{
          echo'<input id="item'.$donnees['id_plat'].'" type="checkbox" name="checkbox[]" value="'.$donnees['id_plat'].'" /><label for="item'.$donnees['id_plat'].'">'.$donnees['nom_plat'].'</label>';
            }
          }
          echo '
               <h2 class="done" aria-hidden="true">Ajouté</h2>
               <h2 class="undone" aria-hidden="true">A choisir</h2></div>';
          $reponse->closeCursor();
          ?>

        </br></br><input type="submit" name="commit" value="Valider" class="valider" /></br></br>
         <p>*Les plats déjà existants dans le menu sont cochés, pour les supprimer du nouveau menu merci de les décocher</p>
       </fieldset>
     </form>

     <?php
     include('include/footer.php');
      ?>
