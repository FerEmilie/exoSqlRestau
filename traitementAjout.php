<?php
	//----------------------- CONNEXION A LA BDD ------------------------
	  include("config/connection.php");

	if (isset($_POST['checkbox']))
	{
		$nvPlat = intval($_POST['checkbox']);
    var_dump($nvPlat);
    // $idMenu = intval($_POST['menu']);
    // var_dump($idMenu);
    $req = $bdd->prepare('UPDATE menu SET id_plat=:checkbox WHERE id=:menu');
    $req->execute(array('checkbox' => $nvPlat, 'menu' => $_POST['menu']));
    header('Location: ajoutPlatMenu.php');
	}
	else
	{
		echo 'pas de modifs';

	}
?>
