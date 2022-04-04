<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>
    <link rel="stylesheet" href="../estilos/listar.css">
    <link rel="icon" href="../imagens/shoe.svg" />
    <?php include_once 'conexao.php'; ?>

</head>
<body>
    
    <?php
        $nome = $_POST['buscaNome'];
        $consulta = "SELECT * FROM tbl_produtos WHERE nome LIKE '%$nome%' ";
        $executar = mysqli_query($conn, $consulta);
        $resultado = mysqli_num_rows($executar);
        
        if($resultado != 0){
            echo "<script> alert('Produto Localizado com sucesso!'); </script>";
        }else{
            // echo "<script>
            // alert('Produto não localizado'); 
            // window.location.href = '../php/menuprod.php'
            // </script>";
            echo $resultado;
        }
    ?>
        <h1>Produto Buscados</h1>
        <button class="btn"><a href="../php/menuprod.php">Voltar</a></button>
        <div class="tabela">
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th>Data de Lançamento</th>
                <th>Quantidade</th>
                <th>Unisex</th>
                <th>Descrição</th>
                <th>Tamanho</th>
                <th>Prateleira</th>
                <th>Imagem</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
       
    <?php
        while($linha = mysqli_fetch_array($executar)){
      
    ?>
        <form action="alterardados.php" method="POST">
                
            <tr>
                <input type="hidden" name="tabela" value="3">
                <td> <input type="text" name="codprod" value="<?php  echo $linha['codprod']?>" readonly></td>
                <td> <input type="text"  name="nome" value="<?php  echo $linha['nome']?>" ></td>
                <td> <input type="text" name="preco" value="<?php  echo $linha['preco']?>" ></td>
                <td> <input type="text" name="marca" value="<?php  echo $linha['marca']?>"></td>
                <td> <input type="text" name="modelo" value="<?php  echo $linha['modelo']?>"></td>
                <td> <input type="text"  name="cor" value="<?php  echo $linha['cor']?>" ></td>
                <td> <input type="text" name="dt_lancamento" value="<?php  echo $linha['dt_lancamento']?>" ></td>
                <td> <input type="text" name="qtd" value="<?php  echo $linha['qtd']?>"></td>
                <td> <input type="text" name="descricao" value="<?php  echo $linha['descricao']?>" ></td>
                <td> <input type="text" name="unisex" value="<?php  echo $linha['unisex']?>"></td>
                <td> <input type="text" name="tamanho" value="<?php  echo $linha['tamanho']?>"></td>
                <td> <input type="text" name="prateleira" value="<?php  echo $linha['prateleira']?>"></td>
                <td> <input type="text" name="imagem" value="<?php  echo $linha['imagem']?>"></td>
                <td> 
                <button type="submit" style="border: none;" >
                    <img src="../imagens/edit.svg" alt="Editar Cliente" width="20px" height="20px" >
                </button> 
                </td>
                <td> 
                    <a href="excluirdados.php?id=<?php echo $linha['codprod']?>&tabela=3">
                    <img src="../imagens/trash.svg" alt="Lixeira" width="20px" height="20px" ></a> 
                </td>
            </tr>
        </form>

        </div>

    <?php } ?>

  
</body>
</html>

