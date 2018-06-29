<?php
session_start();
include_once('../conexao.php');

//Receber os dados do Update Place
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
$lat = filter_input(INPUT_POST, 'lat', FILTER_SANITIZE_STRING);
$lng = filter_input(INPUT_POST, 'lng', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
$hours = filter_input(INPUT_POST, 'hours', FILTER_SANITIZE_STRING);

//Atualizar no BD
$result_place = "UPDATE places SET name='$name', address='$address', lat='$lat', lng='$lng', type='$type', hours='$hours' WHERE id='$id'";
$resultado_place = mysqli_query($conn, $result_place);

//Verificar se aquela row foi atualizada
if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<span class='d-block';>Local Salvo com Sucesso!</span>";
    header("Location: editPlace.php?id=$id");
    
}else{
    $_SESSION['msg'] = "<span class='d-block';>Local Salvo com Sucesso!</span>";
    header("Location: map.php");
}
?>