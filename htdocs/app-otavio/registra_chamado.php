<?php
    session_start();

    $titulo = str_replace("|", '-', $_POST['titulo']);
    $categora = str_replace("|", '-', $_POST['categoria']);
    $descricao = str_replace("|", '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '|' . $titulo . '|' . $categora . '|' . $descricao . PHP_EOL;
    
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>