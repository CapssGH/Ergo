<link rel="stylesheet" type="text/css" href="admin.css">
<?php
session_start();
if (empty($_SESSION['val_pass'])) {
	header('Location:login.php');
}

	// XML ( panel.xml)
$get = file_get_contents("panel.xml");
$arr = simplexml_load_string($get);

$rule1x = $arr->rules->rule_1;
$rule2x = $arr->rules->rule_2;
$rule3x = $arr->rules->rule_3;
$rule4x = $arr->rules->rule_4;
$rule5x = $arr->rules->rule_5;
$rule6x = $arr->rules->rule_6;

$steamapi = $arr->int->steamapi;

$pic1 = $arr->picture->pic1;
$pic2 = $arr->picture->pic2;
$pic3 = $arr->picture->pic3;

$logoMapx = $arr->logo->logomap;
$logogamemodx = $arr->logo->logogamemod;
$logoserver = $arr->logo->logoserver;

$songx = $arr->song;
	?>
	<div class="box-top">
	<h1>ERGO | PANEL</h1>

</div>



<div id="test"></div>
<form method="get" action="pr.php">
	<input type="text" name="rule1g" id="rule1g" value="<?php echo $rule1x; ?>">
	<input type="text" name="rule2g" id="rule2g" value="<?php echo $rule2x; ?>">
	<input type="text" name="rule3g" id="rule3g" value="<?php echo $rule3x; ?>">
	<input type="text" name="rule4g" id="rule4g" value="<?php echo $rule4x; ?>">
	<input type="text" name="rule5g" id="rule5g" value="<?php echo $rule5x; ?>">
	<input type="text" name="rule6g" id="rule6g" value="<?php echo $rule6x; ?>">
	<input type="submit" name="sub" value="Modify">
</form>
<form method="get" action="pr.php">
	<input type="text" name="steamapik" id="steamapik" placeholder="STEAMAPIKEY" value="<?php echo $steamapi;?>">

	<input type="submit" name="sub" value="Modify">


</form>
<form method="get" action="pr.php">
	<input type="text" name="pic1" id="pic1" value="<?php echo $pic1;?>">
	<input type="text" name="pic2" id="pic2" value="<?php echo $pic2;?>">
	<input type="text" name="pic3" id="pic3" value="<?php echo $pic3;?>">
	<input type="submit" name="sub" value="Modify">

</form>
<form method="get" action="pr.php">
	<input type="text" name="logomap" id="logomap" value="<?php echo $logoMapx?>">
	<input type="text" name="logogamemod" id="logogamemod" value="<?php echo $logogamemodx?>">
	<input type="text" name="logoserver" id="logoserver" value="<?php echo $logoserver?>">
	<input type="submit" name="sub" value="Modify">
</form>


<form method="get" action="pr.php">
	<input type="text" name="song" id="song" value="<?php echo $songx; ?>">
	<input type="submit" name="sub" value="Modify">
</form>


<a class="logout_a" href="logout.php">Logout</a>

