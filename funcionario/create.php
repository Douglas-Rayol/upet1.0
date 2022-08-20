<?php
    require_once "../util/config.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO funcionario (nome, telefone, endereco) VALUES(?, ?, ?)";
        
        $stmt = mysqli_prepare($link, $sql);
        
        mysqli_stmt_bind_param($stmt, "sss", $nome, $telefone, $endereco);

        if(mysqli_stmt_execute($stmt)){
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
    <title>Cadastro de Funcionario</title>
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
      <h2 class="texto-cadastro">De&nbsp;Funcionario</h2>
      <form method="POST" action="create.php" class="formulario">
        <div class="form-row">
          <div class="nomecadastro">
            <input type="text" class="input-cadastro" name="nome" placeholder="Nome" required>
          </div>
          <br>
          <div class="input-group input-group-sm mb-3">
            <input type="text" class="input-cadastro" name="telefone" placeholder="Telefone" required>
          </div>
          <br>

          <div class="input-group input-group-sm mb-3">
            <input type="text" class="input-cadastro" name="email" placeholder="Email" required>
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
            </div><br>
          <?php
          if (isset($_SESSION['msg']) == true) {
            echo "<div class='input-cadastro'>";
            echo $_SESSION['msg'];
            echo "</div>";
          }
          ?>
          <p><button type="submit" class="botao-cadastro">Cadastrar</button></p>
    </form>
    <p><a href='index.php'>Voltar</a></p>
</body>
</html>