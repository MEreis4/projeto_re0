<?php 
// Este código define o banco de dados e a conexão do usbserver
    $hostname = "localhost"; //nome do host
    $banco = "projetore0"; // nome do banco de dados do projeto
    $usuario = "root"; // nome do usuário -- "root" por padrão do usbserver
    $senha = "usbw"; // senha de acesso do usuário -- "usbw" por padrão do usbserver

    $mysqli = new mysqli($hostname,$usuario,$senha,$banco); // cria-se um objeto chamado mysqli, objeto este predefinido
    //para a conexão de banco de dados em php

    if($mysqli->connect_errno){ // Tratamento de erro
        die("Falha ao conectar (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }
?>