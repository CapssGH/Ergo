<link rel="stylesheet" type="text/css" href="admin.css">
<?php
session_start();
//Error 
ini_set("display_errors",0);error_reporting(0);

//XML
$get = file_get_contents("panel.xml");
$arr = simplexml_load_string($get);

$usernamex = $arr->account->user;
$passwordx = $arr->account->password;
//END XML

//SESSION ['user'] and ['mdp']
$_SESSION['user'] = sha1($_POST['uservalid']);
$_SESSION['mdp'] = sha1($_POST['passvalid']);
?>
	<div class="box-top">
	<h1>ERGO | CONNECT</h1>
</div>
<div class="box_info_con">
<form method="post" action="login.php">
	<input type="text" name="uservalid" placeholder="Identifiant">
	<input type="password" name="passvalid" placeholder="Mots de passe">
	<input type="submit" name="sub2" id="sub2" value="Connexion">

	
</form>
</div>
<a class="reg_a" href="register.php">Changer Mot de passe</a>
<br><em>Connectez-vous pour acceder au panel !</em>
<?php

if ($usernamex == $_SESSION['user'] AND $passwordx == $_SESSION['mdp'] )  {
	$_SESSION['val_pass'] = '1';
	header('Location:admin.php');
}

?>