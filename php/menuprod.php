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

    <title>Produtos</title>
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
                <h2>Cadastrar Produto</h2>
                <input type="hidden" name="tabela" value="3">
                <input type="text" name="nome" id="" placeholder="Digite seu nome: " required>
                <input type="number" name="preco" id=""placeholder="Digite o preço do produto: " required>
                <input type="text" name="marca" id="" placeholder="Digite a marca do produto" required>
                <input type="text" name="modelo" id="" placeholder="Digite o modelo: " required>
                <select name="cor" id="">
                    <option value="Preto">Preto</option>
                    <option value="Branco">Branco</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Azul">Outros</option>
                </select>
                <input type="text" name="dt_lancamento" id="" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="Digite a data de Lançamento: XX/XX/XXXX " required>
                <input type="number" name="qtd" id="" placeholder="Digite a quantidade em estoque: " required>
                <label for="unisex">Modelo Unisex ?<input type="checkbox" name="unisex" id="" value="S"></label>
                <input type="text" name="descricao" id="" placeholder="Digite a descrição do produto: " required>
                <input type="number" name="tamanho" id="" placeholder="Digite o tamanho do modelo: " required>
                <input type="prateleira" name="prateleira" id="" placeholder="Digite a prateleira: " required>
                <input type="hidden" name="imagem" value="1">
                <input type="submit" value="Cadastrar">
            </form>
        </div>


        <div class="form" id="2">
            <form action="../crud/buscardadosprod.php" method="POST">
                <h2>Alterar dados de Produto</h2>
                <input type="text" name="buscaNome" id="" placeholder="Digite o nome do produto: ">
                <input type="submit" value="Buscar Cliente">                    
            </form>
        </div>

        <div class="form" id="3">
            <form action="../crud/listardados.php " method="POST">
                <h2>Produtos Cadastrados</h2>
                <input type="hidden" name="tabela" value="3">
                <input type="submit" value="Listar Clientes">
            </form>
        </div>
        
        <div class="form" id="4">
            <form action="../crud/buscardadosprod.php " method="POST">
                <h2>Excluir Produto</h2>
                <input type="hidden" name="tabela" value="3"> 
                <input type="text" name="buscaNome" id="" placeholder="Digite o nome do produto: ">
                <input type="submit" value="Excluir Produto">  
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