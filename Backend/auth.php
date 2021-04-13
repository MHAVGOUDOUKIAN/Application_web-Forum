<?php

    session_start();

    function authenticate() /* si login/mdp valide => ID user dans $_SESSION et return true */
    {
        if(isset($_POST['login']) && isset($_POST['password'])) {
            require_once($_SERVER["DOCUMENT_ROOT"] . '/Forum/Backend/mysql/mysqlGetIdUser.php');

            if ($resultat > 0) {
                $_SESSION['Connected'] = true;
                $_SESSION['ID'] = $resultat['IdUser'];
                return true;
            }
        }
        return false;
    }

    function isAthenticated()
    {
        if(isset($_SESSION['Connected']) && isset($_SESSION['ID']) && !empty($_SESSION['Connected']) && !empty($_SESSION['ID'])) {
            if($_SESSION['Connected'] == true){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

?>