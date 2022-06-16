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
            echo " pronto pra outro";
        }else{
            echo " ta tudo errado";
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
</head>
<body>
    <h2>Cadastro de Funcionario</h2>
    <form method="post" action="create.php">
    <div class="nomecadastro">
            <input type="text" class="input-cadastro" name="nome" placeholder="Nome" required>
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
        <p><input type="submit" value="Salvar"></p>
    </form>
    <p><a href='index.php'>Voltar</a></p>
</body>
</html>