<?php

// Requête pour visualiser ses infractions

$req1 = 
"SELECT d.montant AS montant, d.nature AS nature, i.date_inf AS date infraction, i.no_immat AS no_immat
FROM comprend comp, conducteur c, delit d, infraction i
WHERE d.id_delit=comp.id_delit AND i.id_inf=comp.id_inf AND c.no_permis=i.no_permis 
AND i.no_permis= :login";
// Requête connexion / voir si l'utilisateur existe

$req_con = 
'SELECT COUNT(*) AS "present"
FROM conducteur
WHERE no_permis = :login AND mdp = :mdp';


//Requête nom prénom conducteur
$req_np =
'SELECT nom, prenom
FROM conducteur c 
WHERE c.no_permis = :login'

// Requête infraction conducteur


?>