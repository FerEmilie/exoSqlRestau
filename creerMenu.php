<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

<div class="form">
  <h2>Ajouter un nouveau menu</h2>

  <form id="form" action="traitementMenu.php" method="post">
    <fieldset>
        <legend>Création de nouveau menu</legend>
          <label class="label" for="nom">Nom du menu: </label>
          <input autofocus="autofocus" required="required" class="input" type="text" name="nom" maxlength="40" id="nom" /></br></br>

          <label class="label" for="prix">Prix: </label>
          <input autofocus="autofocus" placeholder="euros"  class="input" type="text" name="prix" maxlength="40" id="prix" /></br></br>

          <input type="submit" name="commit" value="Valider" class="valider" /></br></br>
    </fieldset>
  </form>
</div>
</div>
<?php
include('include/footer.php');
 ?>
