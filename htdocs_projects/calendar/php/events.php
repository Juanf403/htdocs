<?php
// liste des événements
 $json = array();
 // requête qui récupère les événements
 $requete = "SELECT * FROM evenement ORDER BY id";

 // connexion à la base de données
 try {
 $bdd = new PDO('mysql:host=localhost;dbname=calendar', 'root', '');
 } catch(Exception $e) {
 exit('imposible conectrse a la bd');
 }
 // exécution de la requête
 $resultat = $bdd->query($requete) or die(print_r($bdd->errorInfo()));

 // envoi du résultat au success
 echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

?>
