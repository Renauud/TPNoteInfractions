<?php
    require_once("../modele/connexion.php");
    session_start();
    $identifiant["login"] = $identifiant["motDePasse"] = "";

    $message = "";

    $identifiant["login"] = isset($_POST["login"])?$_POST["login"]:null;
    $identifiant["motDePasse"] = isset($_POST["motDePasse"])?$_POST["motDePasse"]:null;

    if (isset($_POST["connexion"])){
        $login = $identifiant["login"];
        $mdp = $identifiant["motDePasse"];
        $_SESSION["admin"] = false;
        $tableau = $connexion -> execSQL($req_con,[":login" => $login, ":mdp" => $mdp]);
    
        if ($tableau[0]["present"] > 0){
            $_SESSION["id"] = $identifiant["login"];
            header("location: ./page.php");
        }elseif($connexion -> estAdmin($login, $mdp)){
            $_SESSION["admin"] = true;
            header("location: ./page.php");
        }
        else{
            $message = "Identifiants incorrects, réessayez.";
        }
    }
    
    require_once("../vue/login.view.php");
?>