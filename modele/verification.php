<?php
require_once("../modele/connexion.php");
session_start();

if($_SESSION["admin"] == true){
    $mode = "admin";
}
elseif(isset($_SESSION["id"])){
    $mode = "conducteur";
}
else{
    header("location: ../controleur/login.php");
}

?>