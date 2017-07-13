<?php
session_start();
 if (isset($_SESSION['login']) && $_SESSION['password']) {
      session_start();
      $id = $_GET['id'];
      if ($id == 1) {
          header('Location: plat.php');
      }
      if ($id == 2) {
          header('Location: menu.php');
      }
      if ($id == 3) {
          header('Location: gestion.php');
      }

 }

include('include/header.php');
include('include/barrenav.php');

if (isset($_POST['login'])) {

include("config/connection.php");
$req = $bdd->prepare('SELECT password FROM users WHERE login = :login');
$req->execute(array('login' => $_POST['login']));
$result = $req->fetch(PDO::FETCH_ASSOC);
$hash = $result['password'];
$pass = $_REQUEST['password'];
if(password_verify($pass, $hash)){
echo 'mot de passe valide !';
header('Location: gestion.php');
}else{
echo 'mot de passe invalide';
}
}
?>

<div class="form">
  <h2>Accès à l'admin</h2>
  <form id="form" action="gestion.php" method="post">
    <fieldset>
        <legend>Se connecter</legend>
    <label class="label" for="login">Login</label>
    <input class="input" type="text" name="login" size="50" maxlength="40" /></br></br>

    <label class="label" for="password">Password</label>
    <input class="input" type="password" name="password" size="50" maxlength="40" /></br></br>

    <button id='btn'>Login</button>
    </fieldset>
    </form>
    </div>
<?php
include('include/footer.php');
 ?>
