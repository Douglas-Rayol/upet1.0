<?php
session_start();
unset($_SESSION['msg']);
require_once "../util/config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $endereco = $_POST["endereco"];
  $senha = $_POST["senha"];
  $email = $_POST["email"];
  $cpf = $_POST["cpf"];
  $cidade = $_POST["cidade"];
  $estado = $_POST["estado"];
  $cep = $_POST["cep"];
  $nacimento = $_POST["nascimento"];

  $sql = "INSERT INTO usuario (nome, telefone, endereco, senha, email, cpf, cidade, estado, cep, nacimento) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = mysqli_prepare($link, $sql);

  mysqli_stmt_bind_param($stmt, "ssssssssss", $nome, $telefone, $endereco, $senha, $email, $cpf, $cidade, $estado, $cep, $nacimento);

  if (mysqli_stmt_execute($stmt)){
    $_SESSION['msg'] = "<center>Cadastro com sucesso";
  } else {
    $_SESSION['msg'] = "<center>Erro no cadastro";
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upet</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../css/img/upet.ico">
  
</head>

<body>
  <div id="lista">
    <div class="div1">
      <img src="../css/img/Cat.png" id="gato">
    </div>

    <div class="div2">
      <h1 class="texto-cadastro">Cadastro</h1>
      <h2 class="texto-cadastro">Crie sua conta</h2>
      <form method="POST" action="create.php" class="formulario">
        <div class="form-row">
          <div class="nomecadastro">
            <input type="text" class="input-cadastro" name="nome" placeholder="Nome" required>
          </div>
          <br>

          <div class="col-md-4 mb-3">
            <input type="text" class="input-cadastro" name="cpf" placeholder="CPF" required>
          </div>
          <br>

          <div class="input-group input-group-sm mb-3">
            <input type="text" class="input-cadastro" name="telefone" placeholder="Telefone" required>
          </div>
          <br>

          <div class="col-md-4 mb-3">
            <input type="date" class="input-cadastro" name="nascimento" placeholder="Nascimento (DD/MM/AAAA)" required>
          </div>
          <br>

          <div class="input-group input-group-sm mb-3">
            <input type="text" class="input-cadastro" name="email" placeholder="Email" required>
          </div>
          <br>

          <div class="form-row">
            <div class="cidadecadastro">
              <input type="text" class="input-cadastro" name="cidade" placeholder="Cidade" required>
            </div>
            <br>

            <div class="col-md-3 mb-3">
              <input type="text" class="input-cadastro" name="estado" placeholder="Estado" required>
            </div>
            <br>

            <div class="col-md-3 mb-3">
              <input type="text" class="input-cadastro" name="cep" placeholder="CEP" required>
            </div>
            <br>
            <div>
              <input type="text" class="input-cadastro" name="endereco" placeholder="Endereço" required>
            </div>
            <br>
            <div class="col-md-3 mb-3">
              <input type="password" class="input-cadastro" name="senha" placeholder="Senha" required>
            </div>
            <br>
            <div>
              <input type="password" class="input-cadastro" name="confsenha" placeholder="Confirmar Senha" required>
            </div>
          </div>
          <br>
          <div class="input-cadastro" id="genero-cadastro"><strong>Gênero</strong>
            <input type="radio" name="sexo" value="M"> Masculino
            <input type="radio" name="sexo" value="F"> Feminino
            <input type="radio" name="sexo" value="O"> Outros
          </div><br>
          <?php
          if (isset($_SESSION['msg']) == true) {
            echo "<div class='input-cadastro'>";
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            echo "</div>";
          }
          ?>
          <p><button type="submit" class="botao-cadastro">Cadastrar</button></p>

          <p id="text-center">Já tem uma conta? <a href="../login/login.php">Login</a></p>  
      </form>
    </div>
  </div>
</body>