<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>
    <link rel="stylesheet" href="../estilos/listar.css">
    <link rel="icon" href="../imagens/shoe.svg" />

</head>
<body>
    
    <?php
        require '../crud/conexao2.php';
        require '../classes/Cliente.class.php';

        $busca = new Cliente();

        $nome = addslashes($_POST['buscaNome']);

        if($busca->buscarCliente($nome) != null){
            $linha = $busca->buscarCliente($nome);
            echo "<script> alert('Cliente Localizado com sucesso!'); </script>";
            //echo print_r($linha);
        } else{
            echo "<script>
            alert('Cliente não localizado'); 
            window.location.href = '../php/menuuser.php'
            </script>";
        }
    ?>
        <h1>Clientes Buscados</h1>
        <button class="btn"><a href="../php/menuuser.php">Voltar</a></button>
        <div class="tabela">
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Endereço</th>
                <th>Sexo</th>
                <th>CPF</th>
                <th>Número do Pé</th>
                <th>Data de Nascimento</th>
                <th>Profissão</th>
                <th>UF</th>
                <th>Cidade</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
       
    <?php
        foreach($linha as $row ){
      
    ?>
        <form action="alterardados.php" method="POST">
                
            <tr>
                <input type="hidden" name="tabela" value="2">
                <td><input type="text" name="cxcod" value="<?php  echo $row['id']?>" readonly></td>
                <td> <input type="text"  name="cxnome" value="<?php  echo $row['nome']?>" ></td>
                <td> <input type="text" name="cxemail" value="<?php  echo $row['email']?>" ></td>
                <td> <input type="text" name="cxendereco" value="<?php  echo $row['endereco']?>"></td>
                <td> <input type="text" name="sexo" value="<?php  echo $row['sexo']?>"></td>
                <td> <input type="text"  name="cpf" value="<?php  echo $row['cpf']?>" ></td>
                <td> <input type="text" name="num_pe" value="<?php  echo $row['num_pe']?>" ></td>
                <td> <input type="text" name="dt_nasc" value="<?php  echo $row['dt_nasc']?>"></td>
                <td> <input type="text" name="profissao" value="<?php  echo $row['profissao']?>" ></td>
                <td> <input type="text" name="uf" value="<?php  echo $row['uf']?>"></td>
                <td> <input type="text" name="cidade" value="<?php  echo $row['cidade']?>"></td>
                <td> <button type="submit" style="border: none;" >
                    <img src="../imagens/edit.svg" alt="Editar Cliente" width="20px" height="20px" >
                    </button> 
                </td>
               <td> 
                    <a href="excluirdados.php?id=<?php echo $row['id']?>&tabela=2">
                    <img src="../imagens/trash.svg" alt="Lixeira" width="20px" height="20px" ></a> 
                </td>
            </tr>
        </form>

        </div>

    <?php } $tabela = '2';?>

  
</body>
</html>

