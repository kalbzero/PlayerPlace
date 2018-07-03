<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "playerplace";

    //criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (!$conn) {
      die('Not connected : ' . mysqli_error());
    }

    if (!$dbname) {
      die ('Can\'t use db : ' . mysqli_error());
    }


?>