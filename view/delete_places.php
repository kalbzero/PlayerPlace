<?php
session_start();
include_once('../conexao.php');

//Receber os dados do Update Place
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_place = "DELETE FROM places WHERE id='$id'";
$resultado_place = mysqli_query($conn, $result_place);

if(!empty($id)){
    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "<span class='d-block';>Local Deletado com Sucesso!</span>";
        header("Location: map.php");

    }else{
        $_SESSION['msg'] = "<span class='d-block';>Erro!!!</span>";
        header("Location: perfil.php");
    } 
}else{
    $_SESSION['msg'] = "<span class='d-block';>Nada de Exaltacoes!!!</span>";
    header("Location: index.php");
}

?>