<?php
// Requête pour visualiser ses infractions

$req_tout =
"SELECT i.id_inf as 'inf', i.date_inf AS 'date', i.no_immat AS 'no_immat', i.no_permis as 'no_permis' , SUM(d.montant) AS 'total'
FROM comprend comp, delit d, infraction i
WHERE d.id_delit = comp.id_delit AND i.id_inf=comp.id_inf AND i.no_permis = :login
GROUP BY i.id_inf";


//req detail

$req_detail = // finir
"
SELECT d.id_delit as 'N°', d.nature as 'Nature', i.date_inf AS 'Date', i.no_permis as 'N° permis' ,d.montant AS 'Montant'
FROM comprend comp, delit d, infraction i
WHERE d.id_delit = comp.id_delit AND i.id_inf=comp.id_inf AND i.no_permis = :login AND i.id_inf = :post_inf
";

// Compte les infractions

$req_nb_inf =
"SELECT COUNT(*) AS 'nb_infractions'
FROM infraction
WHERE no_permis = :login";

//
$req_n°_inf ="
SELECT

";

// Requête connexion / voir si l'utilisateur existe

$req_con = 
'SELECT COUNT(*) AS "present"
FROM conducteur
WHERE BINARY no_permis = :login AND BINARY mdp = :mdp';


//Requête nom prénom conducteur
$req_np =
'SELECT nom, prenom
FROM conducteur
WHERE no_permis = :login';






//Requête longueur tableau lignes

$req_nb_lignes = "SELECT COUNT(id_inf) FROM infraction";

//Requête longueur tableau colonnes

$req_nb_colonnes =
"
SELECT count(*)
FROM information_schema.columns
WHERE table_name = 'infraction';
";

$req_curseur =
"

DECLARE curs1 CURSOR FOR
SELECT id_inf, date_inf, no_immat, no_permis
FROM infraction
"

?>