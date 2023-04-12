<?php
require_once("../modele/verification.php");
require_once("../modele/connexion.php");
require_once("../modele/requete.php");

$identite = "";


if($_SESSION["admin"] == true){
    $identite = "Administrateur";
}else{
    $identite = $connexion -> execSQL($req_np,[ ":login" => $_SESSION["id"]]);
    $identite = $identite[0]["prenom"] . " " . $identite[0]["nom"];
}

// if(($connexion -> execSQL($req_nb_inf,[":login" => $_SESSION["id"]])) > 0){}

$var = $connexion -> execSQL($req_tout, [":login" => $_SESSION["id"]]);

require_once("../vue/page.view.php");
?>