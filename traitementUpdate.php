 <?php
 include("config/connection.php");
 if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $req = $bdd->prepare('UPDATE plat SET nom=:nom, prix=:prix WHERE id=:id');
  $req->execute(array('id' => $id, 'nom' => $_POST['nom'], 'prix' => $_POST['prix']));
  header('Location:plat.php');

 }
 ?>
