<?php
require_once("control/queryFunctions.php");
require_once("control/class.Player.php");
require_once("control/class.Server.php");
$pageTitle = 'CSGORankMe';
$weaponsArray = array("m4a1_silencer","m4a1","ak47","awp","knife","usp_silencer","hkp2000","elite","p250","fiveseven","cz75a","deagle","glock","tec9","famas","aug","galilar","sg556","hegrenade","flashbang","smokegrenade","inferno","revolver","nova","xm1014","mag7","sawedoff","bizon","mac10","mp9","mp7","ump45","p90","scar20","ssg08","g3sg1","m249","negev","decoy","taser");
$webTitle = 'CSGORankMe';
$serverType = '';
$table = 'sql_players';
$dbh = new PDO("mysql:host=localhost;dbname=db", 'root', '');
$webURL = '';
$sbURL = '';

$sql_details = array(
			'user' => 'root',
			'pass' => '',
			'db' => 'db',
			'host' => 'localhost'
);
?>