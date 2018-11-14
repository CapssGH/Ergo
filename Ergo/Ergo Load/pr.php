
<?php
session_start();
echo $_SESSION['user'];
$xml = simplexml_load_file('panel.xml');
$fgc = file_get_contents('panel.xml');
$arr = simplexml_load_string($fgc);

print_r($xml);


if (isset($_GET['rule1g']) AND isset($_GET['rule2g']) AND isset($_GET['rule3g']) AND isset($_GET['rule4g'])
AND isset($_GET['rule5g']) AND isset($_GET['rule6g']) ) {


$xml->rules->rule_1 = htmlentities($_GET['rule1g']);
$xml->rules->rule_2 = htmlentities($_GET['rule2g']);
$xml->rules->rule_3 = htmlentities($_GET['rule3g']);
$xml->rules->rule_4 = htmlentities($_GET['rule4g']);
$xml->rules->rule_5 = htmlentities($_GET['rule5g']);
$xml->rules->rule_6 = htmlentities($_GET['rule6g']);



}

if (isset($_GET['steamapik'])) {

	$xml->steamapi->int = htmlentities($_GET['steamapik']);

}

if (isset($_GET['pic1'])) {

	$xml->picture->pic1 = htmlentities($_GET['pic1']);
	$xml->picture->pic2 = htmlentities($_GET['pic2']);
	$xml->picture->pic3 = htmlentities($_GET['pic3']);
}
if (isset($_GET['logoserver'])) {
	$xml->logo->logomap = htmlentities($_GET['logomap']);
	$xml->logo->logoserver = htmlentities($_GET['logoserver']);
	$xml->logo->logogamemod = htmlentities($_GET['logogamemod']);
}
if (isset($_GET['song'])) {
	$xml->song = htmlentities($_GET['song']);
}
if (isset($_GET['color'])) {
	$xml->color = htmlentities($_GET['color']);
}


$xml->asXML('panel.xml');


header('Location:admin.php');

?>
