<?php
    if(isset($_POST["login"]) && !empty($_POST['login']) && isset($_POST["senha"]) && !empty($_POST['senha'])){
        
        include_once '../crud/conexao.php';
        
        $login = addslashes($_POST["login"]);
        $senha =  addslashes($_POST["senha"]);
    } else{
        header("Location: ../index.php");
    }

     
    $perfil = isset($_POST["perfil"]) ? strtolower($_POST["perfil"]): "";
  
    function redirecionar($texto){
        echo "<script>window.location.href = '../". $texto .".php';</script>";
    }
   

    $query = $pdo->query("SELECT usuario, senha, nomeusuario FROM tbl_usuarios WHERE usuario='$login' AND senha='$senha'"); 

    $query->execute();
    
    if($query->rowCount() >= 1){
        SESSION_START();
        if($perfil == "adm"){
            $_SESSION["usuario"] = $rows['nomeusuario'];
            redirecionar("menu");
        } 
        else if($perfil == "user"){
            $_SESSION["usuario"] = $rows['nomeusuario'];
            echo "<script>window.location.href = 'menuuser.php';</script>";
        } else {}
    }else{
        echo "<br>login: " . $login . " senha: " . $senha . " e perfil " . $perfil;
        echo "<script>alert('Erro ao acessar')</script>";
        redirecionar("index"); 
        echo "<br>" . mysqli_error($conn);
    }
?>