<?php
    require_once "../util/config.php";

    $sql = "SELECT * FROM produtos";
    $result = mysqli_query($link, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Produto</title>
    <link rel="stylesheet" href="../css/clien-func.css">
    <link rel="shortcut icon" href="../css/img/upet.ico">
</head>
<body>
    <h2>Lista de Produto</h2>
    <p><a href="create.php">Incluir</a></p>
    <table border="1">
        <tr>
            <!--<td>Id</td>-->
            <td><center>Nome</center></td>
            <td><center>Valor</center></td>
            <td><center>Detalhe</center></td>
            <td><center>Criar</center></td>
            <td><center>Modifica</center></td>
            <td colspan="3"><center>Ações</center></td>
        </tr>
        <?php while($row = mysqli_fetch_array($result)){?>
        <tr>
            <!--<td><?php //echo($row['idcontato'])?></td>-->
            <td><?php echo($row['nome'])?></td>
            <td><?php echo($row['valor'])?></td>
            <td><?php echo($row['detalhe'])?></td>
            <td><?php echo($row['criar'])?></td>
            <td><?php echo($row['modifica'])?></td>
            <td><?php echo('<a href="read.php?id='.$row['idproduto'].'">Exibir</a>')?></td>
            <td><?php echo('<a href="update.php?id='.$row['idproduto'].'">Alterar</a>')?></td>
            <td><?php echo('<a href="delete.php?id='.$row['idproduto'].'">Excluir</a>')?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>