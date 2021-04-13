<?php

    require_once($_SERVER["DOCUMENT_ROOT"] . '/Forum/Backend/mysql/mysqlGetIdUser.php');
    require_once($_SERVER["DOCUMENT_ROOT"] . '/Forum/Backend/helper.php');

    if($resultat > 0) {
        sendMessage("");
    }
    else {
        sendError("login/password est invalide");
    }

?>
