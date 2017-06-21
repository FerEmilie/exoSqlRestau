<?php
include("config/connection.php");
if (isset($_GET['id_menu']) && !empty($_GET['id_menu'])) {
 $id = $_GET['id_menu'];
 $sql = "DELETE FROM menu WHERE id = :id_menu";
 $q = array('id' => $id);
 $req = $bdd -> prepare($sql);
 $req -> execute($q);
 header('Location:menu.php');
}
?>
