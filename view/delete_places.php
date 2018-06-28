<?php
session_start();
include_once('../conexao.php');

//Receber os dados do Create Place
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//Deletando o id no BD
if(!empty($id)){
    $result_places = "DELETE INTO places WHERE id='$id'";
    $concatenado_places = mysqli_query($conn, $result_places);
    if(mysqli_insert_id($conn)){
        $_SESSION['msg'] = "<span style= 'color: green';>Local Salvo com Sucesso!</span>";
        header("Location: map.php");

    }else{
        $_SESSION['msg'] = "<span style= 'color: red';>Erro: Local Nao Foi Salvo!</span>";
        header("Location: perfilPlace.php");
    
    }
}else{
    $_SESSION['msg'] = "<span style= 'color: red';>Erro: Nada de Exaltações!!!</span>";
    header("Location: index.php");
}

?>