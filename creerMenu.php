<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Restaurant</title>
   <link href=""rel="stylesheet">

  </head>
  <body>
<div class="container">

<div class="form">
  <h1>Ajouter un nouveau menu</h1>
  <p id="clair">Afficher la liste des menu existants: <a class="link" href="menu.php">ici</a></p>
  <p id="clair">Ajouter des plats au menu: <a class="link" href="ajoutPlatMenu.php">ici</a></p>
  <form id="form" action="traitementMenu.php" method="post">
    <fieldset>

        <legend>Création de nouveau menu</legend>
    <label class="label" for="nom">Nom du menu: </label>
    <input autofocus="autofocus" required="required" class="input" type="text" name="nom" size="50" maxlength="40" id="nom" /></br>

    <label class="label" for="prix">Prix: </label>
    <input autofocus="autofocus" placeholder="euros"  class="input" type="text" name="prix" size="50" maxlength="40" id="prix" /></br>

    <!-- <label class="label" for="image">Photo du plat: </label>
    <input type="image" name="image" size="50" maxlength="40" id="image" class="input" /> -->

    <!-- <label for="image">Votre photo de plat :</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <input type="file" name="image" id="image" /></br> -->

  <input type="submit" name="commit" value="Ajout" id="btn" /></br>
   </fieldset>
  </form>
</div>
</div>

  </body>
</html>
