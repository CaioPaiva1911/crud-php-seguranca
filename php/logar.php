<?php

    function redirecionar($texto){
        echo "<script>window.location.href = '../". $texto .".php';</script>";
    }

    if(isset($_POST["login"]) && !empty($_POST['login']) && isset($_POST["senha"]) && !empty($_POST['senha'])){
        
        require '../crud/conexao2.php';
        require '../classes/Usuario.class.php';

        $u = new Usuario();

        $login = addslashes($_POST["login"]);
        $senha =  addslashes($_POST["senha"]);
        $perfil = isset($_POST["perfil"]) ? strtolower($_POST["perfil"]): "";


        if($u->login($login, $senha) == true){
            if(isset($_SESSION['usuario'])){
                if($perfil == "adm"){
                    redirecionar("menu");
                } 
                else if($perfil == "user"){
                    header("Location: menuuser.php");
                }
            } else{
                redirecionar("index"); 
            }

        }else{
            echo "<script>alert('Erro ao acessar')</script>";
            redirecionar("index"); 
        }

    } else{
        header("Location: ../index.php");
    }

?>