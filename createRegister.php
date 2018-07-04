<?php
session_start();
ob_start();
include_once('conexao.php');

//Receber os dados do Create Place
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//Salvar os dados no BD
$result_player = "INSERT INTO players (fullname, gender, birthDay, email, password, Street, number,neighborhood, city, state, zip, verifyAccount)
                VALUES
                ('".$dados ['fullname']."',
                '".$dados ['gender']."',
                '".$dados ['birthDay']."',
                '".$dados ['email']."',
                '".$dados ['password']."',
                '".$dados ['Street']."',
                '".$dados ['number']."',
                '".$dados ['neighborhood']."',
                '".$dados ['city']."',
                '".$dados ['state']."',
                '".$dados ['zip']."',
                0)";

$concatenado_player = mysqli_query($conn, $result_player);
if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<span style= 'color: green';>Local Salvo com Sucesso!</span>";
    header("Location: view/login.php");
    
}else{
    $_SESSION['msg'] = "<span style= 'color: red';>Erro: Local Nao Foi Salvo!</span>";
    header("Location: view/login.php");
    
}

?>