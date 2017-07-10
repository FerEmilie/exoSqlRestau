<?php
include("config/connection.php");
if (isset($_GET['id']) && !empty($_GET['id'])) {
 $id = $_GET['id'];
 $req = $bdd->prepare('UPDATE menu SET nom=:nom, prix=:prix WHERE id=:id');
 $req->execute(array('id' => $id, 'nom' => $_POST['nom'], 'prix' => $_POST['prix']));
 header('Location:menu.php');

}
?>
