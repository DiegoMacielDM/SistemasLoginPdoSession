<?php
    session_start();

    $localhost = "localhost";
    $pass = "";
    $user = "root";
    $banco = "pdo";
    global $conexao;

    try {
        $conexao = new PDO("mysql:dbname=".$banco.";host=".$localhost, $user, $pass);
        
        
    } catch (PDOException $e) {
        echo "Erro ao se conectar ao banco de dados " . $e->getMessage();
    }

?>