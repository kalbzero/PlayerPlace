<?php
session_start();
ob_start();
include_once('../conexao.php');

//Receber os dados do Create Place
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Salvar os dados no BD
$result_places = "INSERT INTO places (name, address, lat, lng, type, hours)
                VALUES
                ('".$dados ['name']."','".$dados ['address']."','".$dados ['lat']."','".$dados ['lng']."','".$dados ['type']."','".$dados ['hours']."')";

$concatenado_places = mysqli_query($conn, $result_places);
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<span style= 'color: green';>Local Salvo com Sucesso!</span>";
    header("Location: map.php");
    
}else{
    $_SESSION['msg'] = "<span style= 'color: red';>Erro: Local Nao Foi Salvo!</span>";
    header("Location: createPlace.php");
    
}

?>