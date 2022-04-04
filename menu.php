<?php
    SESSION_START();
    if(isset($_SESSION["usuario"])){
        $usuario = $_SESSION["usuario"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/shoe.svg" type="image/x-icon">
    <title>MENU</title>
</head>
<body>
   
    <div class="menu">
        <div class="item-menu" id="item1">
            <a href="php/menuadm.php">
            <img src="imagens/adm.png" alt="Administrador">
            <h3>Funcionário</h3>
            <h4>Privilégios</h4>
            <p>Nível Máximo de Acesso</p>
            </a>
        </div>

        <div class="item-menu" id="item2">
            <a href="php/menuuser.php">
            <img src="imagens/func.png" alt="Funcionário">
            <h3>Cliente</h3>
            <h4>Privilégios</h4>
            <p>Nível Intermediário de Acesso</p>
        </div></a>

        <div class="item-menu">
            <a href="php/menuprod.php" id="item3">
            <img src="imagens/boot.png" alt="Tênis de Life Style">
            <h3>Produto</h3>
            <h4>Privilégios</h4>
            <p>Nível Baixo de Acesso</p>
            </a>
        </div>
    </div>

</body>
</html>

<?php
    }
    else{echo "<script> window.location.href = 'index.php';</script>";}
?>