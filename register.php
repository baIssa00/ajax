<?php
    $validationErrors = array();
    require_once("conn.php");
    $data = [];
    $login = $_POST['login'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
    $email = $_POST['email']; 
    
    if (isset($login)) {
        $filtredLogin = filter_var($login, FILTER_SANITIZE_STRING);

        if (strlen($filtredLogin) < 4) {
            echo "<h4>Erreur!!! Le login doit contenir au moins 4 caratères</h4>";
            exit();
        }
    }
    
    if (isset($pwd1) && isset($pwd2)) {

        if (empty($pwd1)) {
            echo "<h4>Erreur!!! Le mot ne doit pas etre vide</h4>";
            exit();
        }

        if (md5($pwd1) !== md5($pwd2)) {
            $validationErrors[] = "<h4>Erreur!!! les deux mot de passe ne sont pas identiques</h4>";
            exit();
        }
    }

    if (isset($email)) {
        $filtredEmail = filter_var($login, FILTER_SANITIZE_EMAIL);

        if ($filtredEmail != true) {
            $validationErrors[] = "<h4>Erreur!!! Email  non valid</h4>";
            exit();
        }
    }
?>