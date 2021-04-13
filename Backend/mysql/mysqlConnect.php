<?php

require_once($_SERVER["DOCUMENT_ROOT"] . '/Forum/Backend/config.php');

// Création de l'instance de PDO et co à la BD

$dsn = "mysql:host=".$mysqlHost.";dbname=".$mysqlDatabase.";charset=".$charset;

// Les options
$opt = array (
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false );

$PDO = new PDO($dsn, $mysqlLogin, $mysqlPassword, $opt);

?>
