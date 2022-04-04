<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $banco = "bdsapataria";
    //$conn = mysqli_connect($server, $user, $password, $banco);
    
    global $pdo;

    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=" . $server, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "ERRO: " . $e->getMessage();
        exit;
    }
?>