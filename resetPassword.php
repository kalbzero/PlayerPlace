<?php
session_start();
include_once('conexao.php');
$emailSend = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$result_player = "SELECT email FROM players WHERE email='$emailSend'";
$resultado_player = mysqli_query($conn, $result_player);
$row_place = mysqli_fetch_assoc($resultado_place);

if(isset($_POST['ok'])){
    //Gerar nova senha
    $newPassword  = substr(md5(time()),0,8);
    $newPasswordCrypt = md5(md5($newPassword));
    $email = mysqli_real_escape_string($conn,$emailSend);
    
}

?>