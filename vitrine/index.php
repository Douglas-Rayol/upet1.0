<?php
    include_once "../util/config.php";
    $sql = "SELECT nome, detalhe, valor FROM produtos ORDER BY nome";
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <title>uPet</title>
    <link rel="shortcut icon" href="../css/img/upet.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/vitri.css">
    
</head>
<body>
    <!-- Nav -->
    <div id="container-nav">
        <div id="nav-left">
            <a href="#" class="link-left"><img src="../css/img/upet_logo.png" style="width:6%;"/></a>
            <a href="#" class="link-left">Alimentos</a>
            <a href="#" class="link-left">Roupas</a>
            <a href="#" class="link-left">Brinquedos</a>
            <a href="#" class="link-left">Acessórios</a>
            <a href="#" class="link-left">Farmácia e Higiene</a>
            <a href="#" class="link-left">Sobre</a>
        </div>
        <div id="nav-right">
            <a href="../login/login.php" class="link-right">Entrar</a>
            <a href="../cliente/create.php" class="link-right">Cadastrar</a>
            <a href="#" class="link-right"><img src="../css/img/upet-carrinho.png" style="width:10%;"/></a>
        </div>
    </div>
    <!-- Fim Nav -->

    <!-- Carrossel de Slides -->
    <div class="slider">
        <div class="slides">
            <!-- Radio Buttons -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <!-- Slide images -->
            <div class="slide first">
                <img src="../css/img/Image1.jpeg" alt="Imagem 1" />
            </div>
            <div class="slide">
                <img src="../css/img/Image2.jpeg" alt="Imagem 2" />
            </div>
            <div class="slide">
                <img src="../css/img/Image3.jpeg" alt="Imagem 3" />
            </div>
            <div class="slide">
                <img src="../css/img/Image4.jpeg" alt="Imagem 4" />
            </div>

            <!--Navigation auto-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>

        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>     
        </div>
    </div>
    <!-- Fim do Carrossel de Slides -->

    <div class="container-produtos">
        <div class="container-texto">
            <div>Alimentos<a id="mais" href="#">Ver mais</a></div>
        </div>
        <div id="alimento">
        </tr>
        <?php while($row = mysqli_fetch_array($result)){?>
        <tr>
        <tr>
        <td><?php echo($row['nome'])?></td>
            <td><?php echo($row['detalhe'])?></td>
            <td><?php echo($row['valor'])?></td>
        </tr>
        <?php } ?>
        </div>
    </div>
    <div class="container-produtos">
        <div class="container-texto">
            <div>Roupas<a id="mais" href="#">Ver mais</a></div>
        </div>
        <div id="roupa">
        </tr>
        <?php while($row = mysqli_fetch_array($result)){?>
        <tr>
        <tr>
        <td><?php echo($row['nome'])?></td>
            <td><?php echo($row['detalhe'])?></td>
            <td><?php echo($row['valor'])?></td>
        </tr>
        <?php } ?>
        </div>
    </div>
<!--<script src="const.js"></script>-->
</body>
</html>