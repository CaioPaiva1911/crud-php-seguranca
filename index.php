<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/shoe.svg" type="image/x-icon">
    <title>Página de Acesso</title>
  </head>
  <body>
    <form action="php/validar.php" method="POST">
      <div class="container">
        <h3>Shoe Sneakers</h3>
        <img src="imagens/tenis.png" alt="Tênis de Mostragem">
        <select name="perfil" >
          <option value="adm">Administrador</option>
          <option value="user">Usuário Padrão</option>
        </select>
      
        Login: <input type="text" name="login"  placeholder="Digite seu nome">  
      
        Senha: <input type="text" name="senha"  placeholder="Digite sua senha">
      
        <input type="submit" value="Acessar">
      </div>
    </form>
  </body>
</html>