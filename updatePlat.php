<?php
include('include/header.php');
 ?>

    <form id="form" method="post" action="traitementUpdate.php?id=<?php echo $_GET['id']; ?>">
      <fieldset>
        <legend>Vous avez choisi de modifier le plat n°: <?php echo $_GET['id']; ?> </legend>
         <label class="label" for="nom">Nouveau Nom du plat: </label>
         <input autofocus="autofocus" required="required" class="input" type="text" name="nom" size="50" maxlength="40" id="nom" /></br></br>

         <label class="label" for="prix">Nouveau Prix: </label>
         <input autofocus="autofocus" class="input" type="text" name="prix" size="50" maxlength="40" id="prix" /></br></br>

         <input type="submit" name="commit" value="Ajout" id="btn" /></br></br>
       </fieldset>
     </form>

     <?php
     include('include/footer.php');
      ?>
