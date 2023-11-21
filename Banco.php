<?php
    $hostname = "localhost";
    $bancodedados = "esclarece";
    $usuario = "root";
    $senha  = "08022001Jeongin*";

    $mysql = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

    if($mysql->connect_errno){
        echo "falha ao conectar: (" .$mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }
    else{
        echo "Conectado ao banco de dados";
    }

?> 
  