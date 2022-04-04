<?php
    SESSION_START();
    if(isset($_SESSION["usuario"])){
        $usuario = $_SESSION["usuario"];
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
    
    <p style="margin-top: 20px;">Clique na opção deseja </p>
        
    <div class="box">
        <div class="form1" id="1">
            <form action="../crud/insertdados.php" method="POST">
                    <h2>Cadastrar Cliente</h2>
                    <input type="hidden" name="tabela" value="2">
                    <input type="text" name="nome" id="" placeholder="Digite seu nome: " required>
                    <input type="email" name="email" id=""placeholder="Digite seu email: " required>
                    <input type="text" name="endereco" id="" placeholder="Digite seu endereço: " required>
                    <select name="sexo" id="">
                            <option value="">Selecione...</option>
                            <option value="M">Mulher</option>
                            <option value="H">Homem</option>
                        </option>
                    </select>
                    <input type="text" name="cpf" id="" placeholder="Digite seu CPF: " required>
                    <input type="number" name="num_pe" id="" placeholder="Digite o número do seu pé: " required>
                    <input type="text" name="dt_nasc" id="" placeholder="Digite sua data de nascimento: " required>
                    <input type="text" name="profissao" id="" placeholder="Digite a sua profissão: " required>
                    <input type="text" name="uf" id="" placeholder="Digite seu UF: " required>
                    <input type="text" name="cidade" id="" placeholder="Digite a sua cidade: " required>
                    <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="form2" id="2">
            <form action="../crud/buscardadosnome.php" method="POST">
                <h2>Alterar dados de Cliente</h2>
                <input type="hidden" name="tabela" value="2">
                <input type="text" name="buscaNome" id="" placeholder="Digite seu nome: ">
                <input type="submit" value="Buscar Cliente">                    
            </form>
        </div>

        <div class="form3" id="3">
            <form action="../crud/listardados.php " method="POST">
                <h2>Clientes Cadastrados</h2>                    
                <input type="hidden" name="tabela" value="2">
                <input type="submit" value="Listar Clientes">
            </form>
        </div>
        
        <div class="form4" id="4">
            <form action="../crud/buscardadosnome.php " method="POST">
                <h2>Excluir Cadastro</h2>
                <input type="hidden" name="tabela" value="2">
                <input type="text" name="buscaNome" id="" placeholder="Digite seu nome: ">
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