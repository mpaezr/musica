<?php 

//conexio BDD
$servidor="SERVER";	
$usuari="USER";	
$pass="PASS";
$db="BD";

$bd = new mysqli($servidor,$usuari,$pass,$db);
$bd->set_charset("utf8");

//llibre de funcions
require_once("funcions.php");
?>
