<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/style.css">
    <title>Listar Dados</title>
    <?php include_once 'conexao.php'; ?>

</head>
<body>

    <div class="listar">
        <h1>Listagem de Dados</h1>
        <table class="tabela">
        <?php 
            $tabela = $_POST['tabela'];
            if($tabela == '1'){
        ?>

        <tr>
            <th>Código</th>
            <th>Usuário</th>
            <th>Nome Completo</th>
            <th>Perfil</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>Salário</th>
            <th>Setor</th>
            <th>Cargo</th>
            <th>Data de Admissão</th>

        </tr>
        <?php 
            $consulta = "SELECT * FROM tbl_usuarios ";
        }else if($tabela == '2'){ ?>

        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Endereço</th>
            <th>SEXO</th>
            <th>CPF</th>
            <th>Tamanho do Pé</th>
            <th>Data de Nascimento</th>
            <th>Profissão</th>
            <th>UF</th>
            <th>Cidade</th>

        </tr>    
        <?php 
         $consulta = "SELECT * FROM tbl_clientes ";
        } else if($tabela == '3'){ ?>

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

        </tr>
        <?php 
        $consulta = "SELECT * FROM tbl_produtos ";

        } else{} ?>

        <?php
           
            $executar = mysqli_query($conn,$consulta);

            while($linha = mysqli_fetch_array($executar)){
                if($tabela == '1'){
        ?>  
            <tr>
                <td> <?php  echo $linha['id']?> </td>
                <td> <?php  echo $linha['usuario']?> </td>
                <td> <?php  echo $linha['nomeusuario']?> </td>
                <td> <?php  echo $linha['perfil']?> </td>
                <td> <?php  echo $linha['dt_nascimento']?> </td>
                <td> <?php  echo $linha['cpf']?> </td>
                <td> <?php  echo $linha['salario']?> </td>
                <td> <?php  echo $linha['setor']?> </td>
                <td> <?php  echo $linha['setor']?> </td>
                <td> <?php  echo $linha['dt_admissao']?> </td>
            </tr>
                <?php } else if($tabela == '2'){ ?>
            
            <tr>
                <td> <?php  echo $linha['id']?> </td>
                <td> <?php  echo $linha['nome']?> </td>
                <td> <?php  echo $linha['email']?> </td>
                <td> <?php  echo $linha['endereco']?> </td>
                <td> <?php  echo $linha['sexo']?> </td>
                <td> <?php  echo $linha['cpf']?> </td>
                <td> <?php  echo $linha['num_pe']?> </td>
                <td> <?php  echo $linha['dt_nasc']?> </td>
                <td> <?php  echo $linha['profissao']?> </td>
                <td> <?php  echo $linha['uf']?> </td>
                <td> <?php  echo $linha['cidade']?> </td>
            </tr>

            <?php }else if($tabela == '3'){ ?>

                <tr>
                <td> <?php  echo $linha['codprod']?> </td>
                <td> <?php  echo $linha['nome']?> </td>
                <td> <?php  echo $linha['preco']?> </td>
                <td> <?php  echo $linha['marca']?> </td>
                <td> <?php  echo $linha['modelo']?> </td>
                <td> <?php  echo $linha['cor']?> </td>
                <td> <?php  echo $linha['dt_lancamento']?> </td>
                <td> <?php  echo $linha['qtd']?> </td>
                <td> <?php  echo $linha['unisex']?> </td>
                <td> <?php  echo $linha['descricao']?> </td>
                <td> <?php  echo $linha['tamanho']?> </td>
                <td> <?php  echo $linha['prateleira']?> </td>
                <td> <?php  echo $linha['imagem']?> </td>

            </tr>
            
            <?php } else{}  ?>

        <?php } ?>
     </table>
    
    <?php
         if($tabela == '1'){
            echo "<a class='button' href='../php/menuadm.php'>Voltar</a>";
        }else if($tabela == '2'){
            echo "<a class='button' href='../php/menuuser.php'>Voltar</a>";
        }else{
            echo "<a class='button' href='../php/menuprod.php'>Voltar</a>";
        }
    ?>
    
    </div>
</body>
</html>

       


        