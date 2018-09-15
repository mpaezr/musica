<?php 

//conexio BDD
$servidor="localhost";	
$usuari="myforja";	
$pass="jusg13PD";
$db="forja";

$bd = new mysqli($servidor,$usuari,$pass,$db);
$bd->set_charset("utf8");

//llibre de funcions
require_once("funcions.php");
?>