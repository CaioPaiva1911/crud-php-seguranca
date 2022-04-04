<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="../estilos/listar.css">
    <link rel="icon" href="../imagens/shoe.svg" />
    <?php include_once 'conexao.php'; ?>

</head>
<body>
    
    <?php
        $nome = $_POST['buscaNome'];
        $consulta = "SELECT * FROM tbl_usuarios WHERE nomeusuario LIKE '%$nome%' ";
        $executar = mysqli_query($conn,$consulta);
        $resultado = mysqli_num_rows($executar);
        
        if($resultado != 0){
            echo "<script> alert('Funcionário Localizado com sucesso!'); </script>";
        }else{
            echo "<script>
            alert('Funcionário não localizado'); 
            window.location.href = '../php/menuadm.php'
            </script>";
        }
    ?>
        <h1>Funcionários Buscados</h1>
        <button class="btn"><a href="../php/menuadm.php">Voltar</a></button>
        <div class="tabela">
        <table>
        <tr>
            <th>Código</th>
            <th>Usuário</th>
            <th>Senha</th>
            <th>Nome Completo</th>
            <th>Perfil</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Salário</th>
            <th>Setor</th>
            <th>Cargo</th>
            <th>Data de Admissão</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
       
    <?php
        while($linha = mysqli_fetch_array($executar)){
      
    ?>
        <form action="alterardados.php" method="POST">
                
            <tr>
                <input type="hidden" name="tabela" value="1">
                <td><input type="text" name="id" value="<?php  echo $linha['id']?>" readonly></td>
                <td> <input type="text"  name="usuario" value="<?php  echo $linha['usuario']?>" ></td>
                <td> <input type="text"  name="senha" value="<?php  echo $linha['senha']?>" ></td>
                <td> <input type="text" name="nomeusuario" value="<?php  echo $linha['nomeusuario']?>"></td>
                <td> <input type="text" name="perfil" value="<?php  echo $linha['perfil']?>"></td>
                <td> <input type="text"  name="dt_nascimento" value="<?php  echo $linha['dt_nascimento']?>" ></td>
                <td> <input type="text" name="cpf" value="<?php  echo $linha['cpf']?>" ></td>
                <td> <input type="text" name="salario" value="<?php  echo $linha['salario']?>"></td>
                <td> <input type="text" name="setor" value="<?php  echo $linha['setor']?>" ></td>
                <td> <input type="text" name="cargo" value="<?php  echo $linha['cargo']?>"></td>
                <td> <input type="text" name="dt_admissao" value="<?php  echo $linha['dt_admissao']?>"></td>
                <td> <button type="submit" style="border: none;" >
                    <img src="../imagens/edit.svg" alt="Editar Funcionário" width="20px" height="20px" >
                    </button> 
                </td>
               <td> 
               <a href="excluirdados.php?id=<?php echo $linha['id']?>&tabela=1">
                    <img src="../imagens/trash.svg" alt="Lixeira" width="20px" height="20px" ></a> 
                </td>
            </tr>
        </form>

        </div>

    <?php } ?>

  
</body>
</html>

