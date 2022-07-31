<?php
    session_start();
    unset($_SESSION['msg']);
    require_once "../util/config.php";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $email, $senha);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result) > 0){
            header('location: ../vitrine/index.php');
            $_SESSION['email'] = $row['email'];
            $_SESSION['senha'] = $row['senha'];
        }else{
            $_SESSION['msg'] = "<center>Usuario ou senha inválido";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../css/upet.ico">
</head>
<body>
    <form method="POST">
    <div id="login">
        <h1 class="texto-login">Login</h1>
        <h2 class="texto-login">Acesse sua conta</h2>
        <input type="text" name="email" placeholder="Nome do usuário" class="input-login">
        <br><br>
        <input type="password" name="senha" placeholder="Senha" class="input-login">
        <br><br>
        <button type="submit" id="botao-login">Entrar</button><br><br>
        <?php
          if (isset($_SESSION['msg']) == true) {
            echo "<div class='input-login'>";
            echo $_SESSION['msg'];
            echo "</div>";
          }
          ?>
        <br>
        <p class="texto-login">Não tem uma conta? <br><br><a href="../cliente/create.php">Cadastre-se</a></p>
    </div>
    <img src="../css/Dog.png" id="cachorro">
    </form>
</body>
</html>