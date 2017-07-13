<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

    <form id="form" method="post" action="traitementUpdate.php?id=<?php echo $_GET['id']; ?>">
      <fieldset>
        <legend>Vous avez choisi de modifier le plat n°: <?php echo $_GET['id']; ?> </legend>
         <label class="label" for="nom">Nouveau Nom du plat: </label>
         <input autofocus="autofocus" placeholder="Actuel -> <?php echo $_GET['nom']; ?>" required="required" class="input" type="text" name="nom" size="50" maxlength="40" id="nom" /></br></br>

         <label class="label" for="prix">Nouveau Prix: </label>
         <input autofocus="autofocus" placeholder="Actuel -> <?php echo $_GET['prix']; ?>" class="input" type="text" name="prix" size="50" maxlength="40" id="prix" /></br></br>

         <input type="submit" name="commit" value="Ajout" id="btn" /></br></br>
       </fieldset>
     </form>

     <?php
     include('include/footer.php');
      ?>
