<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/Forum/Backend/mysql/mysqlConnect.php');

// définition de la requête
$query = "SELECT * FROM users WHERE Login = ? AND Password = ?";

$data = array($_POST['login'], $_POST['password']);

// Envoi et exécution de la requete à la base
$statement = $PDO->prepare( $query );
$exec = $statement->execute($data);

// récupération du résultat
$resultat = $statement->fetch(PDO::FETCH_ASSOC);

?>
