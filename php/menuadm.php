<?php
    SESSION_START();
    if(isset($_SESSION["usuario"])){
        $usuario = $_SESSION["usuario"];
        $acesso = $_SESSION["perfil"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/menu.css">
    <link rel="icon" href="../imagens/shoe.svg" />

    <title>Administrador</title>
</head>
<body>
    <header>
            <ul>
                <li><a href="../menu.php">Home</a></li>
                <li><a href="#" onclick="troca('1')" >Cadastrar</a></li>
                <li><a href="#" onclick="troca('2')" >Alterar</a></li>
                <li><a href="#" onclick="troca('3')" >Listar</a></li>
                <li><a href="#" onclick="troca('4')" >Excluir</a></li>
            </ul>
            <p class="perfil">Perfil: <?php echo $usuario ?> 
                <img src="../imagens/user.svg" alt="Usuário <?php echo $usuario ?>">
                <a href="fimsessao.php">Sair</a>
            </p>
    </header>
    

    
    
    <a href="fimsessao.php">Sair</a>
    <div class="box">
        <div class="form" id="1">
            <form action="../crud/insertdados.php" method="POST">
                <h2>Cadastrar Funcionário</h2>
                <input type="hidden" name="tabela" value="1">
                <input type="text" name="usuario" id="" placeholder="Digite seu usuario: " required>
                <input type="password" name="senha" id=""placeholder="Digite sua senha: " required>
                <input type="text" name="nomeusuario" id="" placeholder="Digite seu nome: " required>
                <select name="perfil" id="">
                        <option value="">Perfil de Acesso</option>
                        <option value="adm">ADM</option>
                        <option value="user">Usuário</option>
                        <option value="prod">Produtos</option>
                    </option>
                </select>
            Data de Nascimento:<input type="text" name="dt_nascimento" id="" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="DD/MM/AAAA " required>
                <input type="text" name="cpf" id="" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="Digite o número do seu CPF XXX.XXX.XX-XX: " required>
                <input type="text" name="salario" id="" placeholder="Digite o salário: " required>
                <input type="text" name="setor" id="" placeholder="Digite o setor: " required>
                <input type="text" name="cargo" id="" placeholder="Digite o cargo: " required>
                <input type="text" name="dt_admissão" id="" placeholder="Digite a data de admissão: " required>
                <input type="submit" value="Cadastrar Funcionário">
            </form>
        </div>



        <div class="form" id="2">
            <form action="../crud/buscardadosfunc.php" method="POST">
                <h2>Alterar dados de Funcionário</h2>
                <input type="text" name="buscaNome" id="" placeholder="Digite o nome do funcinário: ">
                <input type="submit" value="Buscar Cliente">                    
            </form>
        </div>

        <div class="form" id="3">
            <form action="../crud/listardados.php " method="POST">
                <h2>Funcionários Cadastrados</h2>
                    <input type="hidden" name="tabela" value="1">
                <input type="submit" value="Listar Clientes">
            </form>
        </div>
        
        <div class="form" id="3">
            <form action="../crud/buscardadosfunc.php " method="POST">
                <h2>Excluir Cadastro</h2>
                <input type="text" name="buscaNome" id="" placeholder="Digite o nome do funcionário: ">
                <input type="submit" value="Buscar Cliente">  
            </form>
        </div>

    </div>
    <a href="fimsessao.php">Sair</a>

    
    
    <script src="../scripts/script.js"></script>
</body>
</html>

<?php

    }
    else{
        echo "<script> 
            window.location.href = '../index.php'; 
        </script>";
    }
?>