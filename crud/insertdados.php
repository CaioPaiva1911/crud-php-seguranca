<?php
    include_once 'conexao.php';


if(isset($_POST['tabela'])){

    $tabela = $_POST['tabela'];
    
    if($tabela == '1'){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $nomeusuario = $_POST['nomeusuario'];
        $perfil = $_POST['perfil'];
        $dt_nascimento = $_POST['dt_nascimento'];
        $cpf = $_POST['cpf'];
        $salario = $_POST['salario'];
        $setor = $_POST['setor'];
        $cargo = $_POST['cargo'];
        $dt_admissao = $_POST['dt_admissao'];

        $sql = "INSERT INTO  tbl_usuarios (usuario,senha,nomeusuario, perfil, dt_nascimento, cpf, salario, setor, cargo, dt_admissao) VALUES ('$usuario','$senha','$nomeusuario','$perfil','$dt_nascimento','$cpf', '$salario','$setor', '$cargo', '$dt_admissao');";
    }
    else if($tabela == '2'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $sexo = $_POST['sexo'];
        $cpf = $_POST['cpf'];
        $num_pe = $_POST['num_pe'];
        $dt_nasc = $_POST['dt_nasc'];
        $profissao = $_POST['profissao'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];

        $sql = "INSERT INTO  tbl_clientes (nome,email,endereco, sexo, cpf, num_pe, dt_nasc, profissao, uf, cidade) VALUES ('$nome','$email','$endereco','$sexo','$cpf','$num_pe', '$dt_nasc','$profissao', '$uf', '$cidade');";
    
    } else if($tabela == '3'){
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

        
        $sql = "INSERT INTO  tbl_produtos (nome,preco,marca, modelo, cor, dt_lancamento, qtd, unisex, descricao, tamanho, prateleira, imagem) VALUES ('$nome','$preco','$marca','$modelo','$cor','$dt_lancamento', '$qtd','$unisex', '$descricao', '$tamanho', '$prateleira', '$imagem');";
        
    }


    $query = mysqli_query($conn,$sql);
 
    echo "<script>
        alert('Dados cadastrados com sucesso!!!'); 
        window.location.href = '../php/menuuser.php'
        </script>';
    ";

} else{  
    echo "[ERRO] A Inclusão de dados não funcionou!!!";
}

?>