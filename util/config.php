<?php
    $DB_SERVER = 'localhost';
    $DB_USER = 'root';
    $DB_PASSWORD = '';
    $DB_NAME = 'pi_upet';
    $Port = 3306;

    $link = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME, $Port);

    if ($link === false){
        die("ERRO: não foi possivel realizar a conexao com o BD");
    }
?>