<?php
    include_once 'conexao.php';
    
    
if(isset($_POST['tabela'])){
    $tabela = $_POST['tabela'];

    if($tabela == '1'){

        $id = $_POST['id'];
        $usuario = $_POST['usuario'];
        $senha  = md5($_POST['senha']);
        $nomeusuario = $_POST['nomeusuario'];
        $perfil = $_POST['perfil'];
        $dt_nascimento = $_POST['dt_nascimento'];
        $cpf = $_POST['cpf'];
        $salario = $_POST['salario'];
        $setor = $_POST['setor'];
        $cargo = $_POST['cargo'];
        $dt_admissao  = $_POST['dt_admissao'];

        
        $alterar = " UPDATE tbl_usuarios SET usuario = '$usuario', senha = '$senha', nomeusuario = '$nomeusuario', perfil = '$perfil',
        dt_nascimento = '$dt_nascimento', cpf = '$cpf', salario = '$salario', setor = '$setor', cargo = '$cargo', dt_admissao = '$dt_admissao' WHERE id = '$id'; ";


    }else if($tabela == '2'){
        $cod = $_POST['cxcod'];
        $nome = $_POST['cxnome'];
        $email  = $_POST['cxemail'];
        $endereco = $_POST['cxendereco'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $num_pe = $_POST['num_pe'];
        $dt_nasc = $_POST['dt_nasc'];
        $profissao = $_POST['profissao'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];


        $alterar = " UPDATE tbl_clientes SET nome = '$nome', email = '$email', endereco = '$endereco', sexo = '$sexo',
        cpf = '$cpf', num_pe = '$num_pe', dt_nasc = '$dt_nasc', profissao = '$profissao', uf = '$uf', cidade = '$cidade' WHERE id = '$cod'; ";

    } else if($tabela == '3'){
        $codprod = $_POST['codprod'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $cor = $_POST['cor'];
        $dt_lancamento = $_POST['dt_lancamento'];
        $qtd = $_POST['qtd'];
        $unisex = $_POST['unisex']; 
        $descricao = $_POST['descricao'];
        $tamanho = $_POST['tamanho'];
        $prateleira = $_POST['prateleira'];
        $imagem = $_POST['imagem'];


        $alterar = " UPDATE tbl_produtos SET nome = '$nome',preco = '$preco',marca = '$marca', modelo = '$modelo', cor = '$cor', dt_lancamento = '$dt_lancamento',
        qtd = '$qtd', unisex = '$unisex', descricao = '$descricao' , tamanho =  '$tamanho', prateleira = '$prateleira', imagem = '$imagem' WHERE codprod = '$codprod'; ";
        
    } else{}

}        
    $executar = mysqli_query($conn,$alterar);
    
    if($alterar){
        if($tabela == '1'){
            echo "<script>
                alert('Dados alterados com sucesso!!!'); 
                window.location.href = '../php/menuadm.php'
            </script>';";
        }else if($tabela == '2'){
            echo "<script>
                alert('Dados alterados com sucesso!!!'); 
                window.location.href = '../php/menuuser.php'
            </script>';";
        }else{
            echo "<script>
                alert('Dados alterados com sucesso!!!'); 
                window.location.href = '../php/menuprod.php'
            </script>';";
        }
    } else{

        if($tabela == '1'){
            echo "<script>
                alert('Não foi possivel alterar os dados!'); 
                window.location.href = '../php/menuadm.php'
            </script>';";
        }else if($tabela == '2'){
            echo "<script>
            alert('Não foi possivel alterar os dados!'); 
            window.location.href = '../php/menuuser.php'
            </script>';";
        }else{
            echo "<script>
            alert('Não foi possivel alterar os dados!'); 
            window.location.href = '../php/menuprod.php'
            </script>';";
        }
       
    }
?>