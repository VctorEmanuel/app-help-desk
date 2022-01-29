<?php

    session_start();

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // $titulo = str_replace('#', '-', $_POST['titulo']);
    // $categoria = str_replace('#', '-', $_POST['categoria']);
    // $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = implode('#', $_POST);
    $texto = $_SESSION['id'] .'#'. $texto . PHP_EOL; //php_eol quebra linha

    // $texto = $titulo .'#'. $categoria .'#'. $descricao;
    echo $texto;

    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a'); // a - abre pra escrita

    fwrite($arquivo, $texto); //recebe o arquivo onde sera escrito e o que será escrito

    fclose($arquivo); //fecha o arquivo

    header('Location: abrir_chamado.php');

?>