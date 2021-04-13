<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/Forum/Backend/mysql/mysqlConnect.php');

// définition de la requête
$query = "SELECT * FROM users";

$data = array();

// Envoi et exécution de la requete à la base
$statement = $PDO->prepare( $query );
$exec = $statement->execute($data);

// récupération du résultat
$resultat = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
