<?php 
header('Content-type: Application/json');

$retour = array();
$retour["patchnotes"] = "- Release v0.1 !
- Ajout du serveur";
$retour["lien"] = "localhost/downloadapi/index.php";
 
echo json_encode($retour);
