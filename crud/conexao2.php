<?php

    session_start();

    $server = "localhost";
    $user = "root";
    $password = "";
    $banco = "bdsapataria";
    
    global $pdo;

    try{
        //Orientação a Objetos com PDO
        $pdo = new PDO("mysql:dbname=".$banco."; host=" . $server, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "ERRO: " . $e->getMessage();
        exit;
    }
?>