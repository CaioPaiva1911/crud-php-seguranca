<?php
include_once '../crud/conexao.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    SESSION_START();
   
    $login = $_POST["login"];
    $senha = $_POST["senha"]; 
    $perfil = isset($_POST["perfil"]) ? strtolower($_POST["perfil"]): "";
  
    function redirecionar($texto){
        echo "<script>window.location.href = '../". $texto .".php';</script>";
    }

    $query = "SELECT usuario, senha, nomeusuario FROM tbl_usuarios WHERE usuario='$login' AND senha='$senha' "; 
   
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    $rows = mysqli_fetch_array($result);
    
    if($rows){
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
}
?>