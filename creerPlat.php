<?php
include('include/header.php');
 ?>

<div class="form">
  <h2>Ajouter un nouveau plat</h2>
  <p class="clair">Afficher la liste des plats existants: <a class="link" href="plat.php">ici</a></p>

  <form id="form" action="traitement.php" method="post">
    <fieldset>

        <legend>Création de nouveau plat</legend>
    <label class="label" for="nom">Nom du plat: </label>
    <input autofocus="autofocus" required="required" class="input" type="text" name="nom" size="50" maxlength="40" id="nom" /></br></br>

    <label class="label" for="prix">Prix: </label>
    <input autofocus="autofocus" placeholder="euros"  class="input" type="text" name="prix" size="50" maxlength="40" id="prix" /></br></br>

    <!-- <label class="label" for="image">Photo du plat: </label>
    <input type="image" name="image" size="50" maxlength="40" id="image" class="input" /> -->

    <label for="image">Votre photo de plat :</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="image" id="image" /></br></br>

  <input type="submit" name="commit" value="Ajout" id="btn" /></br></br>
   </fieldset>
  </form>
</div>
</div>
<?php
include('include/footer.php');
 ?>
