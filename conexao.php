<?php
    $servidor = "us-cdbr-iron-east-04.cleardb.net";
    $usuario = "b39f29d17929c7";
    $senha = "9e9fe049";
    $dbname = "heroku_8d4677785da1509";

    //criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (!$conn) {
      die('Not connected : ' . mysqli_error());
    }

    if (!$dbname) {
      die ('Can\'t use db : ' . mysqli_error());
    }


?>
