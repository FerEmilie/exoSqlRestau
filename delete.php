<?php
include("config/connection.php");
if (isset($_GET['id']) && !empty($_GET['id'])) {
 $id = $_GET['id'];
 $sql = "DELETE FROM plat WHERE id = :id";
 $q = array('id' => $id);
 $req = $bdd -> prepare($sql);
 $req -> execute($q);
 header('Location:plat.php');
}
?>
