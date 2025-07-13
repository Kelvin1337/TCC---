<?php

    if(isset($_POST['RA']) && !empty($_POST['RA']) && isset($_POST['password']) && !empty($_POST['password'])) 
    {

    require 'config.php';
    require 'Usuário.class.php';

    $RA = addslashes($_POST['RA']);
    $password = addslashes($_POST['password']);

    $u = new Usuário();

    if ($u->login($RA, $password)) {
        // Login bem-sucedido
        header('Location: painel.php');
        exit;
    } else {
        //Falha no login
        header('Location: index.php?erro=1');
        exit;
    }

    }else{

        header('Location: index.php');
        exit;
    }

?>