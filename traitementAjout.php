<?php
	//----------------------- CONNEXION A LA BDD ------------------------
	  include("config/connection.php");

	if (isset($_POST['checkbox']))
	{
		$nvPlat = intval($_POST['checkbox']);
    var_dump($nvPlat);
    $nvMenu = intval($_POST['menu']);
    var_dump($nvMenu);

    $req = $bdd->prepare('INSERT INTO menu_plat(id_menu, id_plat) VALUES(:menu, :checkbox)');
    $req->execute(array(
    	'menu' => $nvMenu,
    	'checkbox' => $nvPlat
    	));

    header('Location: menu.php');
	}
	else
	{
		echo 'pas de modifs';

	}
?>
