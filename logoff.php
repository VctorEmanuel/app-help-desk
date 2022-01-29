<?php

    session_start();
    //remove indices do array de sessao
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';
    // unset($_SESSION['autenticado']);
    // echo '<pre>';
    //     print_r($_SESSION);
    // echo '</pre>';

    //destroi a variavel de sessao
    session_destroy();
    header('Location: index.php');

?>