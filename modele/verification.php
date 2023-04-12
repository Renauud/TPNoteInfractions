<?php
require_once("../modele/connexion.php");
session_start();
$mode="";
if($_SESSION["admin"] == true){
    $mode = "Gestion";
}
elseif(isset($_SESSION["id"])){
    $mode = "Consultation";
}
else{
    header("location: ../controleur/login.php");
}

?>