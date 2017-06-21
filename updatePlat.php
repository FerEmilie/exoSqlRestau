<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form id="form" method="post" action="traitementUpdate.php?id=<?php echo $_GET['id']; ?>">
      <fieldset>
        <legend>Plat à modifier: </legend>
         <label class="label" for="nom">Nom du plat: </label>
         <input autofocus="autofocus" required="required" class="input" type="text" name="nom" size="50" maxlength="40" id="nom" /></br>

         <label class="label" for="prix">Prix: </label>
         <input autofocus="autofocus" class="input" type="text" name="prix" size="50" maxlength="40" id="prix" /></br>

         <input type="submit" name="commit" value="Ajout" id="btn" /></br>
       </fieldset>
     </form>

</body>
</html>
