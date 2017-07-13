<?php
session_start();
 if (!(isset($_SESSION['login']) && $_SESSION['password'])) {
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
}
include('include/header.php');
include('include/barrenav.php');
 if (isset($_SESSION['login']) && $_SESSION['password']) {
   echo '

<div id="centrer">
  <h1>Gestionnaire du restaurant</h1>
  <p>Que voulez vous faire ?</p>
  <p><a href="deconnection.php"> <button type="button" name="deco">Deconnexion</button> </a></p>
</div>

    <div class="index">
       <div id="nav1">
      <h2>Création de plat/menu</h2>
        <p class="clair">Créer un menu <a class="link" href="creerMenu.php">ici</a></p>
        <p class="clair">Créer un plat <a class="link" href="creerPlat.php">ici</a></p>
      </div>
      <div id="nav2">
      <h2>Liste des plats/menus</h2>
        <p class="clair">Liste des menus <a class="link" href="menu.php">ici</a></p>
        <p class="clair">Liste des plats <a class="link" href="plat.php">ici</a></p>
      </div>
    </div>'
;
      }
        else {
          echo 'accès denied';
        }

include('include/footer.php');
 ?>
