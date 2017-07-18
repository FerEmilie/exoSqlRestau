<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

<div class="form">
  <h2>Ajouter un nouveau plat</h2>
  <form id="form" action="traitement.php" method="post">
    <fieldset>

        <legend>Création de nouveau plat</legend>
          <label class="label" for="nom">Nom du plat: </label>
          <input autofocus="autofocus" required="required" class="input" type="text" name="nom" maxlength="40" id="nom" /></br></br>

          <?php
          include("config/connection.php");

          $reponse = $bdd->query('SELECT id, type_plat FROM  categorie');
           echo '<label class="label" for="type">Type du plat: </label>';
           echo '<select name="type">';

            while ($donnees = $reponse->fetch())
            {
               echo '<option value="' . $donnees['id'] . '">'. $donnees['type_plat'] .'</option>';

            }
             echo '</select></br></br>';
           ?>

            <label class="label" for="prix">Prix: </label>
            <input autofocus="autofocus" placeholder="euros"  class="input" type="text" name="prix" maxlength="40" id="prix" /></br></br>

            <label for="image">Votre photo de plat :</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input type="file" name="image" id="image" /></br></br>

      <input type="submit" name="commit" value="Valider" class="valider" /></br></br>
   </fieldset>
  </form>
</div>
</div>
<?php
include('include/footer.php');
 ?>
