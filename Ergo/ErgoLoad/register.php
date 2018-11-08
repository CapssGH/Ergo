<link rel="stylesheet" type="text/css" href="admin.css">
<?php
session_start();
ini_set("display_errors",0);error_reporting(0);
//XML
$get = file_get_contents("panel.xml");
$arr = simplexml_load_string($get);

$usernamex = $arr->account->user;
$passwordx = $arr->account->password;
//END XML


?>
	<div class="box-top">
	<h1>ERGO | CHANGE PASSWORD</h1>
</div>
<div class="box_info_reg">
<form method="post" action="register.php">
	<input type="text" name="uservalid" placeholder="Identifiant">
	<input type="password" name="passvalid" placeholder="Mot de passe">
	<input type="submit" name="sub">
</form>
</div>
<em>Connectez-vous pour changer votre mot de passe !</em>
<br>
<a class="retour_panel" href="admin.php">Panel</a>
<?php
if ($usernamex == sha1($_POST['uservalid']) AND $passwordx == sha1($_POST['passvalid']) )  {

?>

<div class="box_info_reg_2">
<form method="post" action="register.php">
	<input type="text" name="usersec" id="usersec" placeholder="Nouvel Identifiant">
	<input type="password" name="passsec" id="passsec" placeholder="Nouveau mot de passe">
	<input type="submit" name="sub">
</form>
</div>

<?php

ini_set("display_errors",0);error_reporting(0);
//XML
$xml = simplexml_load_file('panel.xml');
$fgc = file_get_contents('panel.xml');
$arr = simplexml_load_string($fgc);


$xml->account->password = htmlentities(sha1($_POST['passsec']));
$xml->account->user = htmlentities(sha1($_POST['usersec']));

$xml->asXML('panel.xml');
}
//END XML

?>