<?php
	//----------------------- CONNEXION A LA BDD ------------------------
	  include("config/connection.php");

	if (isset($_POST['checkbox']))
	{
		$nvPlat = intval($_POST['checkbox']);
    var_dump($nvPlat);
    // $idMenu = intval($_POST['menu']);
    // var_dump($idMenu);
    $req = $bdd->prepare('UPDATE menu_plat SET id_plat=:checkbox, id_menu=:menu');
    $req->execute(array('checkbox' => $nvPlat, 'menu' => $_POST['menu']));
    header('Location: index.php');
	}
	else
	{
		echo 'pas de modifs';

	}
?>
