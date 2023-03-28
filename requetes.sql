--Requête pour visualiser ses infractions

SELECT c.nom AS "nom", c.prenom AS "prenom", d.montant AS "montant", d.nature AS "nature", i.date_inf AS "date_inf", i.no_immat AS "no_immat" 
FROM comprend comp, conducteur c, delit d, infraction i
WHERE d.id_delit=comp.id_delit AND i.id_inf=comp.id_inf AND c.no_permis=i.no_permis AND i.no_permis=$identifiant["login"] -- <- sûrement à refaire pour la variable

--Requête somme infraction



--Requête connexion / voir si l'utilisateur existe

SELECT COUNT(*) 
FROM conducteur
WHERE no_permis=$identifiant["login"] AND mdp=$identifiant["password"] --renvoie 1 si existe et 0 si non
AND 

--