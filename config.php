<?php

    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'base';


    $conexao = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //   echo"erro";
    // }
    // else {
    //     echo"Conexão sucesso";
    // }
?>