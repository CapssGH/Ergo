<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<?php
//Wallpaper by http://darkrp.harmonyunity.eu/
//icons by http://www.flaticon.com/
//coded  by Guillaume.F



ini_set("display_errors",0);error_reporting(0);
$id = $_GET["steamid"];
$map = $_GET["mapname"];


$link = file_get_contents('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='. $steamapi .'&steamids=' . $id . '&format=json');

$myarray = json_decode($link, true);
$urlwebsite = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$linkurl = $urlwebsite . "?steamid=%s";
if (!isset($_GET["steamid"])) {
	echo "Sorry there is a problem with you steamID .";
    echo '<a href='.$linkurl.'>Link</a>';
}



?>
<?php
//panel laison
$get = file_get_contents("panel.xml");
$arr = simplexml_load_string($get);

$rule1x = $arr->rules->rule_1;
$rule2x = $arr->rules->rule_2;
$rule3x = $arr->rules->rule_3;
$rule4x = $arr->rules->rule_4;
$rule5x = $arr->rules->rule_5;
$rule6x = $arr->rules->rule_6;

$steamapi = $arr->steamapi;

$pic1 = $arr->picture->pic1;
$pic2 = $arr->picture->pic2;
$pic3 = $arr->picture->pic3;


$logomapx = $arr->logo->logomap;
$logogamemodx = $arr->logo->logogamemod;
$logoserver = $arr->logo->logoserver;

$songx = $arr->song;
 ?>

<script type="text/javascript">
function GameDetails( servername, serverurl, mapname, maxplayers, steamid, gamemode ) {
document.getElementById("Server").innerHTML = servername;
document.getElementById("Map").innerHTML = mapname;
document.getElementById("GameMode").innerHTML = gamemode;
}
function DownloadingFile( fileName ) {
document.getElementById("FileLoad").innerHTML = fileName;
}
function SetStatusChanged( status ) {
document.getElementById("FileStatus").innerHTML = status;
}
function SetFilesNeeded( needed ) {
	document.getElementById("reste").innerHTML = needed;
}
function SetFilesTotal( total ) {
	document.getElementById("total").innerHTML = total;
}



</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>

		   var images = ["<?php echo $pic1; ?>", "<?php echo $pic2; ?>", "<?php echo $pic3; ?>"];
        $(function () {
            var i = 0;
            $("#block").css("background-image", "url(assets/" + images[i] + ")");
            setInterval(function () {
                i++;
                if (i == images.length) {
                    i = 0;
                }
                $("#block").fadeOut("slow", function () {
                    $(this).css("background-image", "url(assets/" + images[i] + ")");
                    $(this).fadeIn("slow");
                });
            }, 8000);
        });


</script>


<div id="block"></div>

<div class="box_one">
	<p id="FileStatus">LOADING</p>



</div>

<div class="info_box"><img class="map" src="assets/<?php echo $logomapx;  ?>"><p id="Map">Map</p>
<img class="gamepad" src="assets/<?php echo $logogamemodx;  ?>"><p id="GameMode">GameMode</p>
<img class="server_img" src="assets/<?php echo $logoserver;  ?>"><p id="Server">Server name</p>

<img class="speaker" src="assets/speaker.png"><p class="music_text">
	<?php  echo $songx; ?></p>

</div>


<div class="info_box_2">
	<div class="rules">
		<p id="lo1">1</p><div class="r1"><div class="lr1"></div><p id="r1"><?php  echo $rule1x; ?></p></div>
		<p id="lo2">2</p><div class="r2"><div class="lr2"></div><p id="r2"><?php  echo $rule2x; ?></p></div>
		<p id="lo3">3</p><div class="r3"><div class="lr3"></div><p id="r3"><?php  echo $rule3x; ?></p></div>
		<p id="lo4">4</p><div class="r4"><div class="lr4"></div><p id="r4"><?php  echo $rule4x; ?></p></div>
		<p id="lo5">5</p><div class="r5"><div class="lr5"></div><p id="r5"><?php  echo $rule5x; ?></p></div>
		<p id="lo6">6</p><div class="r6"><div class="lr6"></div><p id="r6"><?php  echo $rule6x; ?></p></div>

	</div>
</div>

<div class="profil">
<img class="avatar" src="<?php print $myarray['response']['players'][0]['avatarmedium']; ?>" />
<p class="name"><?php print $myarray['response']['players'][0]['personaname']; ?></p>
</div>


<audio autoplay loop>
<source id="song" src= "assets/<?php echo $songx; ?>" type="audio/ogg">
</audio>


<?php
// choose
//$color1 or $color2 or $color3 or $customcolor
$customcolor ="blue";


$color = "background: rgba(164,179,87,1);
background: -moz-linear-gradient(left, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(164,179,87,1)), color-stop(100%, rgba(117,137,12,1)));
background: -webkit-linear-gradient(left, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 100%);
background: -o-linear-gradient(left, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 100%);
background: -ms-linear-gradient(left, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 100%);
background: linear-gradient(to right, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a4b357', endColorstr='#75890c', GradientType=1 )";





$color2 = "background: rgba(147,206,222,1);
background: -moz-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(147,206,222,1)), color-stop(41%, rgba(117,189,209,1)), color-stop(100%, rgba(73,165,191,1)));
background: -webkit-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: -o-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: -ms-linear-gradient(left, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
background: linear-gradient(to right, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#93cede', endColorstr='#49a5bf', GradientType=1 ) ";





$color3 ="background: rgba(255,175,75,1);
background: -moz-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,175,75,1)), color-stop(100%, rgba(255,146,10,1)));
background: -webkit-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
background: -o-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
background: -ms-linear-gradient(left, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
background: linear-gradient(to right, rgba(255,175,75,1) 0%, rgba(255,146,10,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffaf4b', endColorstr='#ff920a', GradientType=1 )";



$get = file_get_contents("panel.xml");
$arr = simplexml_load_string($get);

$colorcus = $arr->color;

	?>


?>
<style type="text/css">
	.box_one,.info_box,.info_box_2
	{
    background-color: 	<?php

  			echo $colorcus;

  		 ?>;

	}

</style>


</body>
</html>
